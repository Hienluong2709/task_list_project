<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Thêm 'title', 'description', 'long_description', 'completed' vào mảng fillable
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'completed',
    ];
}
