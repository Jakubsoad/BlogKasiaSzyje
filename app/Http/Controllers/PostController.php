<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private $categoryIcon = ['idea' => 'md-bulb', 'sewing' => 'ios-cut', 'upholstery' => 'ios-hammer'];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->random(3)->unique();
        $last = Post::orderBy('id', 'desc')->first();

        return view('welcome', [
            'posts' => $posts,
            'last' => $last,
            'category' => $this->categoryIcon
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if (isset($request->sort) || isset($request->category)) {
            return $this->sort($request);
        }
        else
            $posts = DB::table('posts')->paginate(5);

        return view('post.blog', [
            'posts' => $posts,
            'category' => $this->categoryIcon
        ]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    //TODO: wyswietlac rownoczesnie posortowane i posegregowane, unikajac calego mnostwa ifow:)
    //TODO: ogarnac paginacje
    public function sort(Request $request)
    {
        if($request->sort == 'orderBy')
            $posts = DB::table('posts')->orderBy('id');
        else
            $posts = DB::table('posts')->orderByDesc('id');

        if (($request->category=='sewing')||($request->category=='upholstery')||($request->category=='idea'))  {
            $posts = $posts->where('category', $request->category)->paginate(5);
            $actualCategory = $request->category;
        }
        else
            $posts = $posts->paginate(5);

        $actualSort = $request->sort;

        return view('post.blog', [
            'posts' => $posts,
            'category' => $this->categoryIcon,
            'actualCategory' => $actualCategory,
            'actualSort' => $actualSort
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function article($id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::all()->where('category', $post->category)->random(3)->unique();

        return view('post.article', [
            'post' => $post,
            'posts' => $posts,
            'category' => $this->categoryIcon
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
