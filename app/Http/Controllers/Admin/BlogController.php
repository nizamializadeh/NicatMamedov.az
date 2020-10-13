<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Blog::all();
        $settings = $this->getSettingsForTable();
        return view('backend.blog.index',compact('projects','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.blog.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog =new Blog();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $blog->image = $name;
        }
        $blog->header = $request->header;
        $blog->description = $request->description;
        $blog->count = 0;
        $blog->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit blog';
        return view('backend.blog.edit',compact('blog','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $blog->image = $name;
        }
        $blog->header = $request->header;
        $blog->description = $request->description;
        $blog->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Blog',
            'flashSessionKey' => 'Blog',
            'flashSessionValue' => 'Blog created',
            'backButton' => [
                'text' => "Back",
                'url' => route('blog.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'blog',
            'table' => 'blog',
            'createButton' => [
                'text' => "Create blog ",
                'url' => route('blog.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ],
                [
                    'label' => 'Header',
                ],
                [
                    'label' => 'Description',
                ],

            ],
        ];
    }
}
