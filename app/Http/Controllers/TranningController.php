<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Training;
use Auth;
use App\User;

class TranningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            $tranning = Training::all();
        } else {
            $tranning = Training::where('company_id',Auth::user()->company_id)->get();
        }

		return view('tranning.index')->with('trannings', $tranning);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->hasRole('admin')){
            $managers = User::whereHas('roles', function($q) {
                    $q->where('role_id', 2);
                })->get();

            $companies = Company::all();
        } else {
            $managers = User::where('company_id', Auth::user()->company_id)
                ->whereHas('roles', function($q) {
                    $q->where('role_id', 2);
                })->get();

            $companies = Company::where('id',Auth::user()->company_id)->get();
        }

        return view('tranning.create')
            ->with('managers',$managers)
            ->with('companies',$companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
