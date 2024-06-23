<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desemprego extends Model
{
    use HasFactory;

    protected $table = 'Desemprego';
    protected $fillable = ['firstname', 'lastname', 'phone', 'birthdate', 'address', 'city', 'state', 'region', 'cep', 'education', 'familyincome', 'course'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
