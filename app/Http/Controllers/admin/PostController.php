<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    private $post; 
    public function __construct(Post $post){
        $this->post = $post;
    }

    public function index(){
        $posts = $this->post::with('user','category')->paginate(10);
        return view('admin.posts.all', compact('posts'));
    }

    public function edit($id){
        $post = $this->post::findOrFail($id); 
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id){
        $request['approved'] = $request->has('approved');
        $this->post->findOrFail($id)->Update($request->all());
        return back()->with('success',trans('alerts.success'));
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return back()->with('success',trans('alerts.success'));
    }
}
