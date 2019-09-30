<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Tenants;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.registerTenants');
    }

    public function addTenants(Request $rq){
      $validator = Validator::make($rq->all(),[
          "email"=>"required|email",
          "fname"=>"required|min:4"
      ]);
      if($validator->fails()){
        return redirect('/registerTenants')
                        ->withErrors($validator)
                        ->withInput();
      }else{
          if(Tenants::create([
            'firstName'=> $rq->get('fname'),
            'lastName'=>$rq->get('lname'),
            'email'=>$rq->get('email'),
            'placeOfWork'=>$rq->get('placeofwork'),
            'idNumber'=>$rq->get('idnumber'),
            'occupants'=>$rq->get('occupants'),
            'gender'=>$rq->get('gender'),
            'buildingId'=>$rq->get('buildingid')

        ])){
            return redirect('/registerTenants')->with('SUCCESS','OK');
        }else{
            return redirect('/registerTenants')->with('FAILED','FAILED!');
        }
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
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
