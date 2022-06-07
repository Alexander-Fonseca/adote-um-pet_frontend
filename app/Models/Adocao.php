<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Adocao extends Model
{
    use HasFactory;

    protected $table = 'adocoes';

    protected $fillable = ['email', 'valor', 'pet_id'];

    /* Define a relação da adoção com o Pet
    @return BelongsTo
    */
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
