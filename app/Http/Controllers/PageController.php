<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\ContactRequest;
use App\Videos;
use App\News;
use App\About;
use App\SousOnglet;
use App\Artist;
use App\Contact;

class PageController extends Controller
{
    //
    protected $news,$videos,$aboutDetails,$ongletDetails=[],$artist;

    public function __construct() {
        $this->news = News::select()->get();
        $this->newsOrderBy=News::select()->orderBy('id','desc')->limit(10)->get();
        $this->_newsOrderBy=News::select()->orderBy('id','desc')->limit(3)->get();
        $this->newsLimit=News::select()->limit(10)->get();
        $this->videos=Videos::select()->orderBy('id','desc')->limit(8)->get();
        $this->_videos=Videos::select()->orderBy('id','desc')->limit(3)->get();
        $this->artist = Artist::select()->orderBy('id','desc')->limit(1)->first();
        // $this->aboutDetails = About::select()->get();
        // $this->ongletDetails = SousOnglet::select()->union($this->aboutDetails);

        // $this->aboutDetails = About::find(2)->sousOnglet;
        $this->aboutDetails = About::select()->get();
        foreach ($this->aboutDetails as $value) {
            $this->ongletDetails[$value->id] = About::find($value->id)->sousOnglet;
        }
    }

    public function acceuil() {
        // dd($this->ongletDetails[1]);
    	return view('acceuil')->withNews($this->newsOrderBy)
                						  ->withVideos($this->videos)
                              ->withAboutdetails($this->aboutDetails)
                              ->withOngletdetails($this->ongletDetails)
                              ->withArtist($this->artist);                          
    }

    public function aboutUs() {
        return view('about-us')->withAboutdetails($this->aboutDetails)
                              ->withOngletdetails($this->ongletDetails);
    }

    public function aboutUsGetDetails($onglet,$sousOnglet) {
        $_onglet = About::select()->where('id',$onglet)->get();
        $_sousOnglet = SousOnglet::select()->where('id',$sousOnglet)->get();
        return view('about-us-details')->withAboutdetails($this->aboutDetails)
                                      ->withOngletdetails($this->ongletDetails)
                                      ->withOnglet($_onglet[0])
                                      ->withSousonglet($_sousOnglet[0])
                                      ->withVideos($this->_videos)
                                      ->withNews($this->_newsOrderBy);
    }

    public function findSearch(SearchRequest $request) {

      $search = $request->input('q');
      
      if($search !== "") {  
        $newsResult = News::select()->where('titre','like','%'.$search.'%')->get();
        $videosResult = Videos::select()->where('titre','like','%'.$search.'%')->get();
      }

      return response()->json(['news'=>$newsResult,'videos'=>$videosResult]);
    }

    public function sendContact(ContactRequest $request) {
      $contact = new Contact ;
      $contact->nom_complet = $request->input('nom');
      $contact->email = $request->input('email');
      $contact->telephone = $request->input('phone');
      $contact->message = $request->input('message');
      $contact->save();
      $to = $contact->email;

      Mail::send('mail',['name','Accuse de reception'],function ($message) use ($to) {
        $message->to($to)->subject('Accuse de reception')->replyTo('contact@djiguiprod.com');
      });
    //   Mail::send('mail', ['name' => 'test'], function($message){
    //     $message->to('almamy@smartechguinee.com')->subject('Message de test')->replyTo('contact@djiguiprod.com','DjiguiProduction'); 
    // });
      $msg = 'Message envoyé avec success!';
      return response()->json($msg);
    }


}
