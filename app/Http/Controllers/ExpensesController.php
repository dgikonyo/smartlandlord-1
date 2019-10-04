<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Expenses;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.expenses');
    }
    public function submitExpenses(Request $exp){
        $validator=Validator::make($exp->all(),[
            "landtaxes"=>"nulllable|landtaxes"
        ]);
        if ($validator->fails()){
            return redirect('/payments')->withErrors($validator)
                    ->withInput();
        }else{
            if(Payments::create([
                'landtaxes'=> $pay->get('landtaxes'),
                'maintenance'=>$pay->get('maintenance'),
                'salaries'=>$pay->get('salaries'),
                'entryDate'=>$pay->get('entryDate'),
                'amount'=>$pay->get('amount')
                
            ])){
                return redirect('/expenses')->with('SUCCESS','OK');
            }else{
                return redirect('/expenses')->with('FAILED','OK');
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
        //
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
