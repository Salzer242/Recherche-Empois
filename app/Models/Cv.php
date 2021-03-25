<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $table =  'cvs';

    protected $fillable = ['nom', 'prenom', 'adresse', 'email', 'telephone', 'specialite', 'niveauEtude', 'description', 'users_id'];

    public $timestamps=false; 
}
