<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        $settings = $this->getSettingsForTable();
        return view('backend.service.index',compact('services','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.service.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Service $service)
    {
        $service->create($request->all());
        $request->session()->flash(str_slug('Create Service','-'),'Service created');
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
    public function edit(Service $service)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit service';
        return view('backend.service.edit',compact('service','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        $request->session()->flash(str_slug('Edit service','-'),'service edited');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Service $service)
    {
        $service->delete();
        $request->session()->flash(str_slug('service','-'),'service Deleted');
        return back();

    }
    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create service',
            'flashSessionKey' => 'service',
            'flashSessionValue' => 'service created',
            'backButton' => [
                'text' => "Back",
                'url' => route('service.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'service',
            'table' => 'service',
            'createButton' => [
                'text' => "Create service ",
                'url' => route('service.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'Icon',
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
