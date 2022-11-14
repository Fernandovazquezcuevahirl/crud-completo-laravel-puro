<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePutRequest;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->where('estado','1');
        return view("post.index",compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::get();
        $categories = Category::pluck('id','title');
        $post = new Post();
        // esto es para solo pasar algunos datos de los arrays

        // dd($categories[0]->title);
        return view('post/create',compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        
        // dd($request);
        // dd(request("title"));
        // echo(request("title"));
        // echo $request->input('title');
        // dd($request->all());
        // $data = array_merge($request->all(),['image' => '']); esto es para mezclar
        // el resultado con otros 
        
        // para validar aqui y no en la seccion request por medio de php artisan make:request
        // se usa lo siquiente
        // $validated = $request->validate(reglas) abajo em vez de request se usa validated
        // $validated = Validator::make($request->all(),StorePostRequest::MyRules());
        // dd($validated->fails());
        // dd($validated->errors());
        // dd($request->validated('title  '));
    //    para generar un slug apartir de un titulo
        // $data = $request->validated();
        // $data['slug']= Str::slug($data['title']);
        // dd($request->validated() );
        Post::create($request->validated() );
        return to_route("post.index")->with('status', "Post Creado");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Category::get();  
        return view('post/show',compact('categories', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title');  
        return view('post/edit',compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePutRequest $request, Post $post)
    {
        // dd($request->validated());
        $data = $request->validated();
        if ( isset($data["image"])){
            $data["image"] = $filename = time().".".$data["image"]->extension();
            $request->image->move(public_path("image/otro"), $filename);
        }
        $post->update($data);
        // $request->session()->flash('status', "Actualizado");
        return to_route("post.index")->with('status', "Post Actualizado");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // metodo normal para eliminar
        // $post->delete();
        // return to_route("post.index")->with('status', "Post Eliminado");
        $post->estado = 0;
        $post->save();
        return to_route("post.index")->with('status', "Post Eliminado");        
    }
}
