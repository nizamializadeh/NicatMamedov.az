<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use App\Portimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Portfolio::all();
        $settings = $this->getSettingsForTable();
        return view('backend.portfolio.index',compact('projects','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $settings = $this->getSettingsForForm();
        return view('backend.portfolio.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider =new Portfolio();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $slider->image = $name;
            $slider->header = $request->header;
            $slider->description = $request->description;
            $slider->save();

        }
        $files = $request->file('img');
        if ($request->hasFile('img')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new Portimage();
                $image->port_id = $slider->id;
                $image->image = $namex;
                $image->save();
            }
        }


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
    public function edit(Portfolio  $portfolio)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit portfolio';
        return view('backend.portfolio.edit',compact('portfolio','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Portfolio $portfolio)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $portfolio->image = $name;
        }
        $portfolio->header = $request->header;
        $portfolio->description = $request->description;
        $portfolio->update();
        return back();

    }


    public function sliderimga(Portimage $image)
    {
        $image->delete();
        return back();
    }
    public function slideruploada(Request $request)
    {
        $files = $request->file('img');
        if ($request->hasFile('img')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new Portimage();
                $image->port_id = $request->port_id;
                $image->image = $namex;
                $image->save();
            }
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {

        $portfolio->delete();
        return back();
    }


    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create portfolio',
            'flashSessionKey' => 'portfolio',
            'flashSessionValue' => 'portfolio created',
            'backButton' => [
                'text' => "Back",
                'url' => route('portfolio.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'portfolio',
            'table' => 'portfolio',
            'createButton' => [
                'text' => "Create portfolio ",
                'url' => route('portfolio.create')
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
