<?php

namespace App\Http\Controllers\Front;

use App\Models\Academics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acads = \DB::select('select * from academics');
        return response()->json(['data'=>$acads,'count'=>count($acads)]);
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
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function show(Academics $academics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function edit(Academics $academics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Academics $academics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academics  $academics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academics $academics)
    {
        //
    }
}
