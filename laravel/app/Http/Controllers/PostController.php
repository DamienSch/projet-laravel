<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Picture;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contents = file_get_contents('../resources/img/defaultImage.jpg');
        Storage::disk('local')->put('defaultImage.jpg', $contents);
        $posts = DB::table('posts')->leftjoin('pictures', 'posts.picture_id', '=', 'pictures.id')->select(['posts.*','pictures.link','pictures.name'])->orderBy('posts.id', 'desc')->paginate(6);
        return view('posts.index')->with('posts',$posts);
    }

    public function category($genre){
        $posts = DB::table('posts')->leftJoin('pictures', 'posts.picture_id', '=', 'pictures.id')->select(['posts.*','pictures.link','pictures.name'])->where('category_id', $genre)->orderBy('posts.id', 'desc')->paginate(6);
        return view('posts.index')->with('posts',$posts);
    }

    public function soldes($soldes){
        $posts = DB::table('posts')->leftJoin('pictures', 'posts.picture_id', '=', 'pictures.id')->select(['posts.*','pictures.link','pictures.name'])->where('soldes', $soldes)->orderBy('posts.id', 'desc')->paginate(6);
        return view('posts.index')->with('posts',$posts);
    }

    /*public function publish()
    {
        $products = Product::where('published', true)->paginate($this->paginate);
        return view('front.product-list', ['products' => $products]);
    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        $picture = Picture::find($post->picture_id);
        //$post = DB::table('posts')->join('pictures', 'posts.picture_id', '=', 'pictures.id')->select(['posts.*','pictures.link','pictures.name'])->where('posts.id', '=',$id);
        $sizes = explode(',', $post->sizes);
        return view('posts.show', ['post' => $post, 'sizes' => $sizes, 'picture' => $picture]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
