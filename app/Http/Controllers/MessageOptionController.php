<?php

namespace App\Http\Controllers;

use App\Models\MessageOption;
use Illuminate\Http\Request;

class MessageOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('admin.message_option');
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
     * @param  \App\Models\MessageOption  $messageOption
     * @return \Illuminate\Http\Response
     */
    public function show(MessageOption $messageOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MessageOption  $messageOption
     * @return \Illuminate\Http\Response
     */
    public function edit(MessageOption $messageOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MessageOption  $messageOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MessageOption $messageOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessageOption  $messageOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessageOption $messageOption)
    {
        //
    }
}
