<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ministry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ministries';

    protected $guarded = [];

    protected $appends = ['url'];

    public function getUrlAttribute(): string
    {
        return route('ministries.show', $this->slug);
    }
}
