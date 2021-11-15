<?php

namespace App\Http\Controllers;

use App\Models\coaching;
use Illuminate\Http\Request;

class CoachingController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function show(coaching $coaching)
    {
        $data_coaching=coaching::where('NPK_coachee','=',$coaching)->first();
        //($data_coaching);
        return view('detail',compact('data_coaching'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function edit(coaching $coaching)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coaching $coaching)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function destroy(coaching $coaching)
    {
        //
    }
}
