<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Http\Controllers\Controller;
use App\Http\Helpers\UploadFile;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutSection = AboutSection::first();
        return view('layouts.backend.sections.about', compact('aboutSection'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutSection $aboutSection)
    {
        // dd($request->all());
        $request->validate([
            'image' => 'nullable|mimes:jpeg,jpg,png,gif,svg',
            'cv' => 'nullable|mimes:pdf'
        ]);

        $image = $aboutSection->image;
        $cv = $aboutSection->cv;

        if ($request->image) {
            $imagePath = 'images/about/';
            $image = UploadFile::update($imagePath, $request->image, $image);
        }

        if ($request->cv) {
            $cvPath = 'images/cv/';
            $image = UploadFile::update($cvPath, $request->cv, $cv);
        }

        $aboutSection->update($request->except('_token', 'image', 'cv') + [
            'image' => $image,
            'cv' => $cv
        ]);

        return back()->with('success', 'Successfully update abouts information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutSection $aboutSection)
    {
        //
    }
}
