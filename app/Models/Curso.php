<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'Curso';
    protected $fillable = ['titulo', 'descricao', 'link'];
    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
    ];
}
