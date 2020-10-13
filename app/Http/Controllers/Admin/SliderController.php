<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $settings = $this->getSettingsForTable();
        return view('backend.slider.index',compact('sliders','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.slider.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider =new Slider();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $slider->image = $name;
        }
        $slider->save();
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
    public function edit(Slider  $slider)
    {
        $projects =Project::all();
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit slider';
        return view('backend.slider.edit',compact('slider','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $slider)
    {

        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $slider->image = $name;
        }
        $slider->update();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back();
    }



    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Slider',
            'flashSessionKey' => 'slider',
            'flashSessionValue' => 'Slider created',
            'backButton' => [
                'text' => "Back",
                'url' => route('slider.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Sliders',
            'table' => 'sliders',
            'createButton' => [
                'text' => "Create Slider ",
                'url' => route('slider.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ],
            ],
        ];
    }
}
