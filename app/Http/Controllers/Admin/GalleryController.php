<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = DB::table('galleries')
            ->join('categories', ['categories.id' => 'galleries.cate_id'])
            ->select('galleries.id','galleries.image','categories.name')
            ->get();
        $settings = $this->getSettingsForTable();
        return view('backend.gallery.index',compact('galleries','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $settings = $this->getSettingsForForm();
        return view('backend.gallery.create',compact('settings','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery =new gallery();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $gallery->image = $name;
        }
        $gallery->cate_id = $request->cate_id;
        $gallery->save();


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
    public function edit(gallery $gallery)
    {
        $setting = $this->getSettingsForForm();
        $categories =Category::all();
        $setting['title'] = 'Edit blog';
        return view('backend.gallery.edit',compact('categories','gallery','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $gallery->image = $name;
        }
        $gallery->cate_id = $request->cate_id;
        $gallery->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        $gallery->delete();
        return back();


    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create gallery',
            'flashSessionKey' => 'gallery',
            'flashSessionValue' => 'gallery created',
            'backButton' => [
                'text' => "Back",
                'url' => route('gallery.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'gallery',
            'table' => 'gallery',
            'createButton' => [
                'text' => "Create gallery ",
                'url' => route('gallery.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ],
                [
                    'label' => 'Category',
                ]
            ],
        ];
    }
}
