<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;
use App\SousOnglet;

class EventController extends Controller
{
    //
    protected $news,$videos,$aboutDetails,$ongletDetails=[];

    public function __construct() {
    	// $this->news = News::select()->get();
     //    $this->newsOrderBy=News::select()->orderBy('id','desc')->limit(10)->get();
     //    $this->newsLimit=News::select()->limit(10)->get();
     //    $this->videos=Videos::select()->orderBy('id','desc')->limit(5)->get();
        // $this->aboutDetails = About::select()->get();
        // $this->ongletDetails = SousOnglet::select()->union($this->aboutDetails);

        // $this->aboutDetails = About::find(2)->sousOnglet;
        $this->aboutDetails = About::select()->get();
        foreach ($this->aboutDetails as $value) {
            $this->ongletDetails[$value->id] = About::find($value->id)->sousOnglet;
        }
        

    }

    public function home() {
    	return view('events.home-event')
                              ->withAboutdetails($this->aboutDetails)
                              ->withOngletdetails($this->ongletDetails);
    }
}
