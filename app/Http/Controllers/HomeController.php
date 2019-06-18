<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\SousOngletRequest;
use App\Http\Requests\ArtistRequest;
use App\Http\Requests\ArtistEditRequest;
use App\SousOnglet;
use App\About;
use App\Artist;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function aboutUsSettings() {
        $onglet = About::select()->get();
        $sousOnglet = SousOnglet::select()->get();
        return view('admin.about-us-settings')->withOnglet($onglet)
                                                ->withSonglet($sousOnglet);
    }

    public function aboutUsOngletAdd() {
        return view('admin.add-onglet');
    }

    public function postOnglet(AboutRequest $request) {
        $about = new About;
        $about->onglet = $request->input('onglet');
        $about->save();
        return redirect('/admin/about-us-settings/');
    }

    public function aboutUsSousOngletAdd() {
        $onglet = About::select()->get();
        return view('admin.add-sous-onglet')->withOnglet($onglet);
    }

    public function postSousOngletAdd(SousOngletRequest $request) {
        $sousOnglet = new SousOnglet;
        $sousOnglet->nom = $request->input('nom');
        $sousOnglet->description = $request->input('description');
        $sousOnglet->onglet = $request->input('onglet');
        // dd($sousOnglet);
        $sousOnglet->save();
        return redirect('/admin/about-us-settings/');
    }

    public function artistGetForm() {
        return view('admin.add-artist');
    } 

    public function addArtist(ArtistRequest $request) {
        $data = new Artist;
        $data->pseudo = $request->input('pseudo');
        $data->biographie = $request->input('biographie');
        $data->facebook= $request->input('facebook');
        // traitement de l'image
        $image=$request->file('photo');

        // dd($news);
        if($image->isValid()) {
            $chemin=config('image.path');
            $extension=$image->getClientOriginalExtension();
            do {
                $nom=str_random(10).'.'.$extension;
            } while(file_exists($chemin.'/'.$nom));

        }
        $data->photo=$nom;
        // dd($news);
        if($image->move($chemin,$nom)) {
            //image telecharger
            $data->save();
            return redirect('admin/');
        }

    }

    public function listArtist() {
        $list = Artist::select()->get();
        return view('admin.list-artist')->withArtist($list);
    }

    public function editArtist($id) {
        $artist = Artist::select()->where('id',$id)->first();
        return view('admin.edit-artist')->withArtist($artist);
    }

    public function postEdit(ArtistEditRequest $request) {
        if(!$request->file('photo')) {
            // la photo n'a pas ete modifie
            $artist = Artist::find(1);
            $artist->pseudo = $request->input('pseudo');
            $artist->facebook=$request->input('facebook');
            $artist->biographie = $request->input('biographie');
            $artist->save();
        } else {
            // la photo a ete modifie
            dd($request);
        }
        return redirect("admin/artist/edit/".$request->input('id'))->with('success','les Modifications sont prises en compte ');
    }
}
