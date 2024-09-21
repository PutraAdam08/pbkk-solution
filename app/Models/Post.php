<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

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
            'author' => fake()->name(),
            'body' => fake()->text()
        ];
    }
}
