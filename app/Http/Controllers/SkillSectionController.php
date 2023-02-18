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
        $skillSection = SkillSection::first();
        return view('layouts.backend.sections.skill', compact('skillSection'));
    }


    public function update(Request $request, SkillSection $skillSection)
    {
        $skillSection->update($request->except('_token'));
        return redirect()->back()->with('success', "Successfully update skill section.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillSection  $skillSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillSection $skillSection)
    {
    }
}
