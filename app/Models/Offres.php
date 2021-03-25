<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offres extends Model
{
    use HasFactory;

    protected $table =  'Offres';

    protected $fillable = [ 'descriptionEmplois', 'datePublication', 'dateLimite', 'adresse', 'entreprise', 'contrat'];

    public $timestamps=false;
}
