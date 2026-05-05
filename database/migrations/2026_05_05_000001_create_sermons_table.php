<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('speaker');
            $table->string('category')->index();
            $table->text('excerpt')->nullable();
            $table->longText('body')->nullable();
            $table->string('duration')->nullable();
            $table->timestamp('published_at')->nullable()->index();
            $table->string('video_url')->nullable();
            $table->string('audio_url')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sermons');
    }
};
