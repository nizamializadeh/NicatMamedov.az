<?php

namespace App\Http\Controllers\Admin;

use App\Abouttwo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouttwos = Abouttwo::all();
        $settings = $this->getSettingsForTable();
        return view('backend.team.index',compact('abouttwos','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $settings = $this->getSettingsForForm();
        return view('backend.team.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abouttwo =new Abouttwo();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $abouttwo->image = $name;
        }
        $abouttwo->name = $request->name;
        $abouttwo->specialty = $request->specialty;
        $abouttwo->fb = $request->fb;
        $abouttwo->inst = $request->inst;
        $abouttwo->save();
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
    public function edit(Abouttwo  $team)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit team';
        return view('backend.team.edit',compact('team','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Abouttwo  $team)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $team->image = $name;
        }
        $team->name = $request->name;
        $team->specialty = $request->specialty;
        $team->fb = $request->fb;
        $team->inst = $request->inst;
        $team->update();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abouttwo  $team)
    {

        $team->delete();
        return back();
    }


    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create team',
            'flashSessionKey' => 'team',
            'flashSessionValue' => 'team created',
            'backButton' => [
                'text' => "Back",
                'url' => route('team.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'team',
            'table' => 'team',
            'createButton' => [
                'text' => "Create team ",
                'url' => route('team.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ],
                [
                    'label' => 'Name',
                ],
                [
                    'label' => 'Specialty',
                ],
                [
                    'label' => 'Facebook',
                ],
                [
                    'label' => 'Instagram',
                ],
            ],
        ];
    }
}
