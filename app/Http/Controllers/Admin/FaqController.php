<?php

namespace App\Http\Controllers\Admin;

use App\faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Type;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = DB::table('faqs')
            ->join('types', ['types.id' => 'faqs.cate_id'])
            ->select('faqs.id','faqs.header','faqs.description','types.name')
            ->get();
        $settings = $this->getSettingsForTable();
        return view('backend.faq.index',compact('galleries','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Type::all();
        $settings = $this->getSettingsForForm();
        return view('backend.faq.create',compact('settings','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,faq $faq)
    {
        $faq->create($request->all());
        $request->session()->flash(str_slug('Create faq','-'),'faq created');
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
    public function edit(faq $faq)
    {
        $setting = $this->getSettingsForForm();
        $categories =Type::all();
        $setting['title'] = 'Edit Type';
        return view('backend.faq.edit',compact('categories','faq','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq)
    {
        $faq->update($request->all());
        $request->session()->flash(str_slug('Edit faq','-'),'Faq edited');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,faq $faq)
    {
        $faq->delete();
        $request->session()->flash(str_slug('Faqs','-'),'Faq Deleted');
        return back();

    }
    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create faq',
            'flashSessionKey' => 'faq',
            'flashSessionValue' => 'faq created',
            'backButton' => [
                'text' => "Back",
                'url' => route('faq.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'faq',
            'table' => 'faq',
            'createButton' => [
                'text' => "Create faq ",
                'url' => route('faq.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'Header',
                ],
                [
                    'label' => 'Description',
                ]
                ,
                [
                    'label' => 'Category',
                ]
            ],
        ];
    }
}
