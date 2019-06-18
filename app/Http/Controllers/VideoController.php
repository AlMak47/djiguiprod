<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideosRequest;
use App\Videos;
use App\About;
use App\SousOnglet;

class VideoController extends Controller
{
    //
    protected $news,$videos,$aboutDetails,$ongletDetails=[];

    public function __construct() {
        $this->videos=Videos::select()->orderBy('id','desc')->paginate(4);

        $this->aboutDetails = About::select()->get();
        foreach ($this->aboutDetails as $value) {
            $this->ongletDetails[$value->id] = About::find($value->id)->sousOnglet;
        }
    }

    public function detailsVideos($id){
        $details=Videos::select()->where('id',$id)->get()[0];
        return view('videos_detail')->withDetails($details)
                                    ->withAboutdetails($this->aboutDetails)
                                    ->withOngletdetails($this->ongletDetails);
    }


    public function home() {

        return view('videos')->withVideos($this->videos)
                             ->withAboutdetails($this->aboutDetails)
                              ->withOngletdetails($this->ongletDetails);
    }

    public function getForm() {
		return  view('admin.addvideos');    	
    }

    public function postForm(VideosRequest $request) {

    	// dd($request);
    	$videos=new Videos;
    	$videos->titre=$request->input('titre');
    	$videos->liens=$request->input('liens');
    	$videos->description=$request->input('description');

    	$image=$request->file('image');

        // dd($news);
        if($image->isValid()) {
        	$chemin=config('image.path');
        	$extension=$image->getClientOriginalExtension();
        	do {
        		$nom=str_random(10).'.'.$extension;
        	} while(file_exists($chemin.'/'.$nom));

        	$videos->image=$nom;

        	if($image->move($chemin,$nom)) {
        	//image telecharger
        	$videos->save();
        	return redirect('admin/videos/getform');
        }

        }

        return redirect('admin/videos/getform')->with('error','Erreur d\'envoi de l\'image ');
    }
}
