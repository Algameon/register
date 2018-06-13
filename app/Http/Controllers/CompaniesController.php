<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()// /Company
    {
        $Companies = Company::all();
        return view('companies.index')->with('companies',$Companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title' => 'required',
           'status' =>  'required'
        ]);
        $company = new Company;
        $company->title = $request->input('title');
        $company->status = $request->input('status');
        $company->address = $request->input('address');
        $company->notes = $request->input('notes');
        $company->save();

        return redirect('/company')->with('Success', 'Company created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show')->with('company',$company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        if ($request->input('status')!=null)
           // $company->status = $request->input('status');
        if ($request->input('address')!=null)
            $company->address = $request->input('address');
        if ($request->input('notes')!=null){}

        $company->notes = $request->input('notes');
        $company->save();

        //return redirect('/company/')->with('Success', 'Post uppdated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
