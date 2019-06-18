<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousOnglet extends Model
{
    //
	protected    $table='sous_onglet';

	public function about() {
		return $this->hasOne('App\About');
	}
}
