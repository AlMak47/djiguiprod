<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\News;
use App\Videos;
use App\About;
use App\SousOnglet;


class NewsController extends Controller
{
    //
    protected $news,$videos,$aboutDetails,$ongletDetails=[];

    public function __construct() {
    	$this->news = News::select()->get();
        $this->newsOrderBy =News::select()->orderBy('id','desc')->get();
        $this->newsLimit =News::select()->limit(10)->get();

        $this->aboutDetails = About::select()->get();
        foreach ($this->aboutDetails as $value) {
            $this->ongletDetails[$value->id] = About::find($value->id)->sousOnglet;
        }
    }

    public function detailsNews($id) {
        $getNews=News::select()->where('id',$id)->get()[0];
        $recentsNews=News::select()->orderBy('id','desc')->limit(3)->get();
        $recentsVideos=Videos::select()->orderBy('id','desc')->limit(3)->get();
        return view('news_detail')->withDetails($getNews)
                                    ->withRecents($recentsNews)
                                    ->withMedias($recentsVideos)
                                    ->withAboutdetails($this->aboutDetails)
                                    ->withOngletdetails($this->ongletDetails);
    }

    public function listNews() {
    	// $news = News::select()->get();
    	return view('admin.listnews')->withNews($this->newsOrderBy);
    }
    public function getForm() {
    	return view('admin.addnews');
    }

    public function postForm(NewsRequest $request) {
    	// dd($request);

    	// $image = $request->file('image');
        $news= new News;
        $news->titre=$request->input('titre');
        $news->contenu=$request->input('contenu');
        $news->type=$request->input('type');
        $image=$request->file('image');

        // dd($news);
        if($image->isValid()) {
        	$chemin=config('image.path');
        	$extension=$image->getClientOriginalExtension();
        	do {
        		$nom=str_random(10).'.'.$extension;
        	} while(file_exists($chemin.'/'.$nom));

        }
        $news->image=$nom;
        // dd($news);
        if($image->move($chemin,$nom)) {
        	//image telecharger
        	$news->save();
        	return redirect('admin/news/list');
        }

    	return redirect('admin/news/addpost')->with('error','Erreur d\'envoi de l\'image ');


    }

    public function home() {
    	return view('acceuil')->withNews($this->newsLimit)
                            ->withAboutdetails($this->aboutDetails)
                            ->withOngletdetails($this->ongletDetails);
    }

    public function confirmDelete($id) {

        return view('admin.confirmDelete')->withId($id);
    }

    public function deleteNews($id,Request $request) {
        $id=(int)$id;
        News::where('id',$id)->delete();
        $response = array(
          'status' => 'success',
          'msg' => $request->message,
      );
      return response()->json($response); 
    }
    // page d'acceuil NEWS 
    public function newsHome() {
        return view('news')->withNews($this->newsOrderBy)
                            ->withAboutdetails($this->aboutDetails)
                            ->withOngletdetails($this->ongletDetails);
    }
}
