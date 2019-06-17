<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class patient extends Model
{


    protected $fillable = [
        'nom_complet','tel','cin','birthday','adress','organisme','dateconsultation','datecontrole'
    ];

}
