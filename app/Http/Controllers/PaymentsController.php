<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.payments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPayments(Request $pay){
        $validator=Validator::make($pay->all(),[
            "deposit"=>"nulllable|deposit",
            "damages"=>"nulllable|damages",
            "penalty"=>"nulllable|penalty",
            "amount"=>"nulllable|amount",
            "invoiceNumber"=>"required|invoiceNumber"
        ]);
        if ($validator->fails()){
            return redirect('/payments')->withErrors($validator)
                    ->withInput();
        }else{
            if(Payments::create([
                'invoiceNumber'=> $pay->get('invoiceNumber'),
                'deposit'=>$pay->get('deposit'),
                'damages'=>$pay->get('damages'),
                'penalty'=>$pay->get('penalty'),
                'monthlyrent'=>$pay->get('rent'),
                'paymentDate'=>$pay->get('paydate'),
                'amountPaid'=>$pay->get('amount'),
                'apartmentId'=>$pay->get('buildingid'),
                'tenantId'=>$pay->get('tenantid')

            ])){
                return redirect('/payments')->with('SUCCESS','OK');
            }else{
                return redirect('/payments')->with('FAILED','OK');
            }
        }
    }
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
