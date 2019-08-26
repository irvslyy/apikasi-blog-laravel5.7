<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Support\Str;
use Storage;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $blog = Blog::where('id',$post)->orderBy('id', 'DESC');
        // return view('blog.show', ['blog' => $blog, 'post'=>$post]);
        $blogs = Blog::paginate(15);
        return view('blog.index', ['blogs' => $blogs]);
    }
    public function adminred()
    {
        $admins = Admin::all();
        return view('blog.index', ['admins' => $admins]);
    }
     public function crud()
    {
        $blogs = Blog::paginate(15);
        return view('admin', ['blogs' => $blogs]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $blogs = DB::table('blogs')->where('title', 'like', '%' .$search. '%');
         return view('blog.index', ['blogs' => $blogs]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;

        $path = Storage::putFile('public', $request->file('files'));
        $url = Storage::url($path);

        $blog->image = $url;
        $blog->title = $request->title;
        $blog->content = $request->content;

        $blog->save();

        return redirect()->route('blogs_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $blog = Blog::find($id);
       return view('blog.edit', ['blog' => $blog]);
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
        $blog = Blog::find($id);

        $blog->title = $request->title;
        $blog->content = $request->content;

        $blog->update();

        return redirect()->route('blog_path', ['blog' => $blog]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blogs_path');
    }

}
