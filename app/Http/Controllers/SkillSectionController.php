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
        $skills = SkillSection::get();
        return view('layouts.backend.sections.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.sections.skill.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SkillSection::create($request->except('_token'));
        return redirect()->back()->with('success', "Successfully create skill.");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillSection  $skillSection
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillSection $skillSection)
    {
        return view('layouts.backend.sections.skill.edit', compact('skillSection'));
    }
    public function update(Request $request, SkillSection $skillSection)
    {
        $skillSection->update($request->except('_token'));
        return redirect()->back()->with('success', "Successfully update skill");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillSection  $skillSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillSection $skillSection)
    {
        $skillSection->delete();
        return redirect()->back()->with('success', "Successfully delete skill");
    }
}
