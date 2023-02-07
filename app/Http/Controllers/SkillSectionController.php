<?php

namespace App\Http\Controllers;

use App\Models\SkillSection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
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
     * @param  \App\Models\SkillSection  $skillSection
     * @return \Illuminate\Http\Response
     */
    public function show(SkillSection $skillSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillSection  $skillSection
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillSection $skillSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillSection  $skillSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillSection $skillSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillSection  $skillSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillSection $skillSection)
    {
        //
    }
}
