# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

Covenant Rise Ministries marketing site — a Laravel 12 (PHP 8.2+) brochure-style web app. No public auth, no public DB-backed features yet; pages render hard-coded content arrays through Blade templates.

## Commands

- `composer dev` — runs `php artisan serve`, queue listener, `pail` log tailing, and `npm run dev` concurrently. This is the standard local dev entry point.
- `composer test` — clears config then runs `php artisan test` (PHPUnit). Tests use SQLite `:memory:` (configured in `phpunit.xml`); no `.env` setup required for tests.
- `php artisan test --filter=TestName` — run a single test.
- `npm run dev` / `npm run build` — Vite dev server / production build for `resources/css/app.css` + `resources/js/app.js`.
- `vendor/bin/pint` — Laravel Pint formatter (configured via `laravel/pint` dev dep).
- `composer setup` — first-time setup: install, copy `.env`, key:generate, migrate, npm install, npm build.

## Architecture

### Routing & content model

All routes live in `routes/web.php`. The pattern is unusual and worth understanding before editing:

- A local closure `$pageData(...)` produces a uniform associative array (eyebrow, headline, body, highlights, sections, actions, etc.) that the shared `resources/views/page.blade.php` template knows how to render.
- A `$staticPages` array maps URIs (`/about`, `/media`, `/visit`, `/ministries`, `/events`, `/give`, `/online-church`, `/prayer`, `/contact`) to `pageData(...)` payloads, then a foreach registers each as `Route::view($uri, 'page', $data)`.
- Dynamic slug routes (`/sermons/{slug}`, `/events/{slug}`, `/ministries/{slug}`) build a `pageData` payload at request time and render the same `page` view.
- `/` is the only route with a real controller (`HomeController@index`), which assembles several arrays (hero slides, service times, sermons, events, testimonies, ticker) and passes them to `resources/views/home.blade.php`.
- `/services`, `/leadership`, `/sermons`, `/blogs`, `/gallery` are `Route::redirect` shortcuts to anchor sections on `/about` or `/media`.
- `POST /prayer` and `POST /contact` currently just `back()->with('status', ...)` — no persistence yet. Forms display the flash via `session('status')` in `page.blade.php`.

When adding a new static page, prefer extending `$staticPages` over creating a new controller/view. When adding new content shapes that don't fit `eyebrow/headline/body/highlights/sections`, extend `$pageData`'s signature *and* `page.blade.php` together.

### Views

- `resources/views/layouts/app.blade.php` is the single layout. Includes mobile nav, navbar, footer partials, and yields `content`.
- `resources/views/page.blade.php` is the generic page renderer used by every static page and slug page.
- `resources/views/home.blade.php` plus `resources/views/home/*.blade.php` partials are home-specific.
- `resources/views/partials/{navbar,mobile-nav,footer,ticker}.blade.php` are shared chrome.

### Frontend assets — important quirk

The site is **not currently using Vite at runtime**. `layouts/app.blade.php` references `{{ asset('css/app.css') }}` and `{{ asset('js/app.js') }}` directly:

- `public/css/app.css` (~2300 lines) and `public/js/app.js` are **hand-authored static files**, not Vite build output.
- `resources/css/app.css` and `resources/js/app.js` exist with the Tailwind v4 + Vite scaffold but are not wired into the layout.
- Vite (`composer dev` includes `npm run dev`) runs but its output is unused by the rendered pages.

When editing styles or client JS, edit the files in `public/`. If migrating to Vite-built assets, the layout needs `@vite([...])` directives and the `public/` files should be retired.

### Configuration

- `config/church.php` centralises church contact info (name, tagline, phone, email, whatsapp, socials), all overridable via `CHURCH_*` env vars. Reference via `config('church.email')` etc. — `routes/web.php` already does this for the contact page.
- `composer.json` requires `filament/filament` (admin panel) but no Filament resources exist yet; the package is installed but unused.

### Models & DB

- Only `App\Models\User` exists. Migrations are the default Laravel scaffolding (`users`, `cache`, `jobs` tables) — no domain tables yet.
- Tests run against in-memory SQLite; local dev defaults to whatever `.env` specifies.
