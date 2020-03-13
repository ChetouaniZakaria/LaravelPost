<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PosstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(\App\Post::all());
        return view('posts.index',[
            'posts'=> Post::all()
        ]
    );
    }

    

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd(\App\Post::find($id));
        return view('posts.show', ['post' => Post::find($id)]);
    }


    public function create(){
        return view('posts.create');
    }

    public function store(StorePost $request){

        $data = $request->only(['title','content','slug']);
        $data['active'] = true;
        $post = Post::create($data);

        $request->session()->flash('status', 'Le post est créer avec succées');
        // return redirect('/posts');
        return redirect()->route('posts.show', ['post'=>$post->id]);
        // dd($request->all());
        // $title = $request->input('title');
        // $content = $request->input('content');
        // dd($title, 'The Content is ', $content);
        // $request->validate([
           
        // ]);

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->Content = $request->input('content');

        // $post->slug = $request->input('slug');
        // $post->active= false;


        // $post->save();
      
      
    }

    public function edit($id){
    $post = Post::findOrFail($id);
    return view('posts.edit',['post' => $post]);
    }


    public function update(StorePost $request,$id){
       
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->Content = $request->input('content');
        $post->slug = $request->input('slug');
        $post->active= false;

        $post->save();
        $request->session()->flash('status', 'Le post est Modifier avec succées');
        return redirect()->route('posts.index');
    }
    
    public function destroy(Request $request,$id){
        Post::destroy($id);
        $request->session()->flash('status', 'Le post est Supprimer avec succées');
        return redirect()->route('posts.index');
    }
}
