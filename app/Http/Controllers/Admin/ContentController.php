<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getSlug(Request $request)
    {
        $title = $request->input('title', '');
        $title = str_slug($title, '-');
        return response()->json($title);
    }

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
        $content = new \App\Content;
        return $this->show($content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new \App\Content;
        return $this->storeRedirect($request, $content);
    }

    public function storeRedirect($request, $content)
    {
        $content->title = $request->input('title');
        $content->slug = $request->input('slug');
        $content->type = $request->input('type');
        $content->body = $request->input('body');        
        $content->status = $request->input('status');        
        $content->shortDesc = $request->input('shortDesc');        
        $content->save();
        return redirect(route('contents.show', $content));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Content $content)
    {
        return view('admin/content', [
            'content' => $content,
            'formAction' => $content ? route('contents.update', $content) : route('contents.store'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Content $content)
    {
        return $this->storeRedirect($request, $content);
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
