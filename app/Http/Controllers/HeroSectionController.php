<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Http\Controllers\Controller;
use App\Http\Helpers\UploadFile;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroSection = HeroSection::first();
        return view('layouts.backend.sections.hero', compact('heroSection'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeroSection  $heroSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeroSection $heroSection)
    {

        $request->validate([
            'image' => 'nullable|mimes:jpeg,jpg,png,gif,svg',
        ]);

        $image = $heroSection->image;
        if ($request->image) {
            $imagePath = 'images/heroImage/';
            $image = UploadFile::update($imagePath, $request->image, $image);
        }

        $heroSection->update($request->except('_token', 'image', 'designation') + [
            'image' => $image,
            'designation' => $request->designation
        ]);
        return back()->with('success', 'Successfully update hero section informations.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroSection  $heroSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeroSection $heroSection)
    {
        //
    }
}
