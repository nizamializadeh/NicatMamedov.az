<?php

namespace App\Http\Controllers\Admin;

use App\Aboutone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutones = Aboutone::all();
        $settings = $this->getSettingsForTable();
        return view('backend.about.index',compact('aboutones','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $settings = $this->getSettingsForForm();
        return view('backend.about.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutone =new Aboutone();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $aboutone->image = $name;
        }
        $aboutone->header = $request->header;
        $aboutone->description = $request->description;
        $aboutone->save();
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
    public function edit(Aboutone  $about)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit about';
        return view('backend.about.edit',compact('about','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Aboutone  $about)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $about->image = $name;
        }
        $about->header = $request->header;
        $about->description = $request->description;
        $about->update();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutone  $about)
    {

        $about->delete();
        return back();
    }


    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create about',
            'flashSessionKey' => 'about',
            'flashSessionValue' => 'about created',
            'backButton' => [
                'text' => "Back",
                'url' => route('about.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'about',
            'table' => 'about',
            'createButton' => [
                'text' => "Create about ",
                'url' => route('about.create')
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
