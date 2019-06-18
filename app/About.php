<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $table='about';

    public function sousOnglet() {
		return $this->hasMany('App\SousOnglet','onglet');
	}
}
