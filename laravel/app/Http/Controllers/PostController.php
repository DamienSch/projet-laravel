<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function __construct() {
        $this->middleware('auth', ['except' => ['index','show','category','soldes']]);
    }

    public function index()
    {
        $contents = file_get_contents('../resources/img/defaultImage.jpg');
        Storage::disk('local')->put('defaultImage.jpg', $contents);
        $posts = DB::table('posts')->where('visibility', '>=', 1)->leftjoin('pictures', 'posts.picture_id', '=', 'pictures.id')->select(['posts.*','pictures.link','pictures.name'])->orderBy('posts.id', 'desc')->paginate(6);
        return view('posts.index')->with('posts',$posts);
    }

    public function category($genre){
        $posts = DB::table('posts')->where('visibility', '>=', 1)->leftJoin('pictures', 'posts.picture_id', '=', 'pictures.id')->select(['posts.*','pictures.link','pictures.name'])->where('category_id', $genre)->orderBy('posts.id', 'desc')->paginate(6);
        return view('posts.index')->with('posts',$posts);
    }

    public function soldes($soldes){
        $posts = DB::table('posts')->where('visibility', '>=', 1)->leftJoin('pictures', 'posts.picture_id', '=', 'pictures.id')->select(['posts.*','pictures.link','pictures.name'])->where('soldes', $soldes)->orderBy('posts.id', 'desc')->paginate(6);
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
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            /*'category_id' => 'required',*/
            'price' => 'required',
            'size' => 'required',
            /*'link' => 'required',*/
        ]);
        $post = new Posts;
        /*$pictures = Picture::find($id);*/
        /*$category = Category::find($id);*/
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->sizes = $request->input('size');
        /*$pictures->link = $request->input('link');*/
        $post->category_id = $request->input('category_id');
        $post->keyProduct = $request->input('keyProduct');
        $post->visibility = $request->input('visibility');
        $post->soldes = $request->input('soldes');
        $post->save();
        return redirect('/home')->with('success', 'Votre produit à été créer');
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
        $post = Posts::find($id);
        $picture = Picture::find($post->picture_id);
        $sizes = explode(',', $post->sizes);
        return view('posts.edit', ['post' => $post, 'sizes' => $sizes, 'picture' => $picture]);
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

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            /*'category_id' => 'required',*/
            'price' => 'required',
            'size' => 'required',
            /*'link' => 'required',*/
        ]);
        $post = Posts::find($id);
        /*$pictures = Picture::find($id);*/
        /*$category = Category::find($id);*/
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->sizes = $request->input('size');
        /*$pictures->link = $request->input('link');*/
        $post->category_id = $request->input('category_id');
        $post->keyProduct = $request->input('keyProduct');
        $post->visibility = $request->input('visibility');
        $post->soldes = $request->input('soldes');
        $post->save();
        return redirect('/home')->with('success', 'Votre produit à été modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect('/home')->with('success', 'Votre produit à bien été supprimé');

    }
}
