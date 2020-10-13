<?php

namespace App\Http\Controllers\Admin;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        $settings = $this->getSettingsForTable();
        return view('backend.type.index',compact('types','settings'));
    }


    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.type.create',compact('settings'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Type $type)
    {
        $type->create($request->all());
        $request->session()->flash(str_slug('Create type','-'),'type created');
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
    public function edit(Type $type)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit type';

        return view('backend.type.edit',compact('type','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Type $type)
    {
        $type->update($request->all());
        $request->session()->flash(str_slug('Edit type','-'),'type edited');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Type $type)
    {
        $type->delete();
        $request->session()->flash(str_slug('type','-'),'type deleted');
        return back();
    }
    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create type',
            'flashSessionKey' => 'type',
            'flashSessionValue' => 'type created',
            'backButton' => [
                'text' => "Back",
                'url' => route('type.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'type',
            'table' => 'type',
            'createButton' => [
                'text' => "Create type ",
                'url' => route('type.create')
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
