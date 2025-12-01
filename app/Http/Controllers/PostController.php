<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class PostController extends Controller
{
    public function post(){
        return view('post');
    }
    public function filestore(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'=>'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png'
        ]);
        //upload image
        $imageName = null;
        if(isset($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);
        }
        //add new posts
        $post = new post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();
        
        return redirect()->route('home')->with('success','Post Created Successfully!');
    }
    public function editpost($id){
        $post = Post::FindOrFail($id);
        return view('edit',['mypost'=>$post]);
    }
    public function updatepost($id, Request $request){
        $validated = $request->validate([
            'name'=>'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png'
        ]);
        //update posts
        $post = Post::FindOrFail($id);
        $post->name = $request->name;
        $post->description = $request->description;
        //update image
        if(isset($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);
            $post->image = $imageName;
        }
        

        

        $post->save();
        return redirect()->route('home')->with('success','Post created Successfully!');;
    }
    public function deletepost($id){
        $post = Post::findOrFail($id);

        // Delete image from public/images folder
        if ($post->image && file_exists(public_path('images/' . $post->image))) {
            unlink(public_path('images/' . $post->image));
        }

        // Delete database row
        $post->delete();

        return redirect()->route('home')->with('success','Post deleted Successfully!');
    }

}
