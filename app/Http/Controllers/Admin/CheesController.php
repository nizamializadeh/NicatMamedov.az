<?php

namespace App\Http\Controllers\Admin;

use App\Chees;
use App\Chesshistory;
use App\Chessimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cheeses = Chees::all();
        $settings = $this->getSettingsForTable();
        return view('backend.chees.index',compact('cheeses','settings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.chees.create',compact('settings'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Chees $chees)
    {

        $chees->header = $request->header;
        $chees->description = $request->description;
        $chees->nav = $request->nav;
        $chees->save();
        $files = $request->file('image');
        if ($request->hasFile('image')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new Chessimage();
                $image->chess_id = $chees->id;
                $image->image = $namex;
                $image->save();
            }
        }
        $request->session()->flash(str_slug('Create history','-'),'history created');
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
    public function edit($id)
    {
        $chees=Chees::findorfail($id);
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit history';
        return view('backend.chees.edit',compact('chees','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $chees=Chees::findorfail($id);
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $chees->image = $name;
        }
        $chees->nav = $request->nav;
        $chees->header = $request->header;
        $chees->description = $request->description;
        $chees->update();
        $request->session()->flash(str_slug('Edit history','-'),'history edited');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $chees=Chees::findorfail($id);
        $chees->delete();
        $request->session()->flash(str_slug('history','-'),' history');
        return back();
    }




    public function sliderimg(Chessimage $image)
    {
        $image->delete();
        return back();
    }
    public function sliderupload(Request $request)
    {
        $files = $request->file('image');
        if ($request->hasFile('image')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new Chessimage();
                $image->chess_id = $request->chess_id;
                $image->image = $namex;
                $image->save();
            }
        }
        return back();

    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create history',
            'flashSessionKey' => 'history',
            'flashSessionValue' => 'history created',
            'backButton' => [
                'text' => "Back",
                'url' => route('chees.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'history',
            'table' => 'history',
            'createButton' => [
                'text' => "Create history ",
                'url' => route('chees.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'Nav',
                ],
                [
                    'label' => 'Header',
                ],
                [
                    'label' => 'Description',
                ]
            ],
        ];
    }
}
