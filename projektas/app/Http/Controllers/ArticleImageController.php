<?php

namespace App\Http\Controllers;

use App\Models\ArticleImage;
use App\Http\Requests\StoreArticleImageRequest;
use App\Http\Requests\UpdateArticleImageRequest;
use Illuminate\Http\Request;

class ArticleImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article_image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articleImage = new articleImage;

        $articleImage->alt = $request->img_alt;
        $articleImage->width = $request->img_width;
        $articleImage->height = $request->img_height;
        $articleImage->class = $request->img_height;
        
        $imgName = 'articleimg'.time().'.'.$request->img_src->extension();

        $request->img_src->move(public_path('uploads'), $imgName);
        $articleImage->src = $imgName;

        $articleImage->save();

        return 0;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleImage $articleImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleImage $articleImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleImageRequest  $request
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleImageRequest $request, ArticleImage $articleImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleImage  $articleImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleImage $articleImage)
    {
        //
    }
}
