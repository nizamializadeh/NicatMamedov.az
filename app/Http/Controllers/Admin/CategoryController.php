<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $settings = $this->getSettingsForTable();
        return view('backend.category.index',compact('categories','settings'));
    }


    public function create()
    {
    $settings = $this->getSettingsForForm();
    return view('backend.category.create',compact('settings'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Category $category)
    {
        $category->create($request->all());
        $request->session()->flash(str_slug('Create category','-'),'category created');
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
    public function edit(Category $category)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit category';
        return view('backend.category.edit',compact('category','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        $category->update($request->all());
        $request->session()->flash(str_slug('Edit category','-'),'category edited');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Category $category)
    {
        $category->delete();
        $request->session()->flash(str_slug('category','-'),'category deleted');
        return back();
    }
    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create category',
            'flashSessionKey' => 'category',
            'flashSessionValue' => 'category created',
            'backButton' => [
                'text' => "Back",
                'url' => route('category.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'category',
            'table' => 'category',
            'createButton' => [
                'text' => "Create category ",
                'url' => route('category.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'Name',
                ],
            ],
        ];
    }
}
