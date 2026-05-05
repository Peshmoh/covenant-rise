<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['url', 'month', 'day', 'time'];

    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'is_featured' => 'boolean',
        ];
    }

    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->where('starts_at', '>=', now())->orderBy('starts_at');
    }

    public function scopePast(Builder $query): Builder
    {
        return $query->where('starts_at', '<', now())->orderByDesc('starts_at');
    }

    public function getUrlAttribute(): string
    {
        return route('events.show', $this->slug);
    }

    public function getMonthAttribute(): string
    {
        return strtoupper($this->starts_at->format('M'));
    }

    public function getDayAttribute(): string
    {
        return $this->starts_at->format('d');
    }

    public function getTimeAttribute(): string
    {
        return $this->time_label ?? $this->starts_at->format('g:i A');
    }
}
