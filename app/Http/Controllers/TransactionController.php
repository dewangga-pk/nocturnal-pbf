<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $transactions = Transaction::with(['itemsSelecteds.item','user'])
            ->orderBy('created_at','DESC')
            ->get();
        return view('admin.orders')->with(['transactions' => $transactions]);
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $transaction = Transaction::with(['itemsSelecteds.item','user'])->where('id',$id)->get()->first();
        return view('admin.invoice')->with(["transaction" => $transaction]);
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

    public function process($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 2;
        $transaction->save();
        toastSuccess("Update Success");
        return redirect()->back();
    }

    public function decline($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 5;
        $transaction->save();
        toastSuccess("Update Success");
        return redirect()->back();
    }

    public function otw(Request $request,$id)
    {
        $validation = Validator::make($request->all(),[
            "shipping_code" => ["required","numeric"]
        ]);

        if ($validation->fails()){
            toastError($validation->errors()->first());
            return redirect()->back();
        }

        $transaction = Transaction::findOrFail($id);
        $transaction->order_note = $request->get("shipping_code");
        $transaction->status = 3;
        $transaction->save();
        toastSuccess("Update Success");
        return redirect()->back();
    }
}
