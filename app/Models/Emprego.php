<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprego extends Model
{
    use HasFactory;

    protected $table = 'Emprego';
    protected $fillable = ['titulo', 'descricao', 'link'];
    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
    ];
}
