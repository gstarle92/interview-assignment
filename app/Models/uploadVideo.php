<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class uploadVideo extends Model
{
    use HasFactory;

    protected $table = 'upload_videos';
    protected $fillable = [
        'user_id',
        'processed',
        'path'
    ];

    public function scopeNotProcessed(Builder $query)
    {
        return $this->where('processed', '=', false);
    }
}
