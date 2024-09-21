<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author',
        'body'
    ];

    public function definition():array{
        return[
            'title' => fake()->sentence(),
            'slug' => str::slug(fake()->sentence()),
            'author_id' => User::factory(),
            'body' => fake()->text()
        ];
    }

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
