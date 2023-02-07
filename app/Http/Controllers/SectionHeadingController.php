<?php

namespace App\Http\Controllers;

use App\Models\SectionHeading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionHeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectionHeading = SectionHeading::first();
        return view('layouts.backend.sections.headings', compact('sectionHeading'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionHeading  $sectionHeading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionHeading $sectionHeading)
    {
        $sectionHeading->update($request->except('_token'));
        return back()->with('success', 'Successfully update sections heading.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionHeading  $sectionHeading
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionHeading $sectionHeading)
    {
        //
    }
}
