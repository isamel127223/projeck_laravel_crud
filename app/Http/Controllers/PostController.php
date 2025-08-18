<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ดึงข้อมูลทั้งหมดจากฐานข้อมูล
        //ใช้คำสั่ง Post::all() เพื่อดึงข้อมูลทั้งหมด
         //และส่งข้อมูลไปยัง view ชื่อ index
       $posts = Post::all();
       return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //เพิ่มข้อมูลเข้าในฐานข้อมูล 
    public function store(Request $request)
    {
        $request->validate ([
            'title' =>'required',
            'content' => 'required'
        ]);
        //บันทึกข้อมูลลงฐานข้อมูล
        //ใช้คำสั่ง Post::create() เพื่อบันทึกข้อมูล
        Post::create($request->only(['title' , 'content']));
         
        //redirect ไปยังหน้า index พร้อมกับข้อความ success
        return redirect()->route('index')->with('success', 'Post created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
       return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Post $post)
    {
           $request->validate ([
            'title' =>'required',
            'content' => 'required'
        ]);
        
        $post->update($request->only(['title' , 'content']));
         
        return redirect()->route('index')->with('success', 'Post updeted!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)

    {
       $post->delete();
       return redirect()->route('index')->with('success', 'Post deleted!');
    }
}
