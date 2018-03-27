<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\articles;
use App\Http\Requests\CreateArticleRequest;
use Session;

class ArticlesController extends Controller
{
    public function indexx()
    {
        $article=articles::all();
        $c= $article->last();
        // dd($c);
        return view('index',[
            'body' => $c->body,
            'title' => $c->title,
        ]);
    }

    public function index()
    {   
        // return \Auth::user(); // this works
    	//$art= articles::latest('published_at')->published()->get();
        $art= articles::orderBy('id','desc')->paginate(6);
    	

    	return view('articles.index',compact('art'));
       // return view('about');
        //return $art;
    }

    public function show($id)
    {
    		//return $id;
    	 $article = articles::findOrFail($id);
         // dd($article->id);
    	 //dd($article);
    	// return $article->name;
    	 return view('articles.show',compact('article'));
    }


    public function create()
    {
        // if(\Auth::guest())
        //     {
        //         return redirect('/articles');
        //     }                        // this also works


        return view('articles.create');
 
            }
    public function edit($id)
    {
        $article = articles::findOrFail($id);

        return view('articles.edit',compact('article'));

    }

    public function update($id, Request $request)
    {
        $article = articles::findOrFail($id);

        $article->update($request->all());
        flash('Your message has been updated')->important();
        // session()->flash('flash_message','Your article has been created');
        // session()->flash('flash_message_important', true);
        //Session::flash('flash_message','Your article has been updated!');
        // articles:: update($request->all());
        // 
        return redirect('articles');
        //             ->with([
        //          'flash_message'=>'Your article has been updated!',
        //         'flash_message_important',true ]);


    }

    public function store(Request $request)
    {                           
        articles:: create($request->all());

        //Session::flash('flash_message','Your article has been created!');

        return redirect('articles');

    }  

}