<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // PHP - creating dusupay_hash for the form data
        // Hashing algorithm = sha1
        // Copy your security mackey from your merchant page
        $mackey = 'FT249T1PLQO1RN9C477DIBDDJQT8LO67O8A37ASS7NS4G8GKFM333FGMBF13A695EI7KS6J5SI8EPO4AH7CKLSD3ED5OJES336N1BC59TDNO8Q5O3HEOFQQSA2MSGL1IQOI77NF6681E5688';
        $stringData = $dusupay_merchantId 
                    . $dusupay_amount 
                    . $dusupay_currency 
                    . $dusupay_itemId 
                    . $dusupay_itemName 
                    . $dusupay_transactionReference;

        $dusupay_hash = hash_hmac('sha1',$stringData, $mackey);
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
