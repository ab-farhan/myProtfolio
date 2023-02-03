<?php

namespace App\Http\Controllers;

use App\Models\BasicSettings;
use App\Http\Controllers\Controller;
use App\Http\Helpers\UploadFile;
use Illuminate\Http\Request;

class BasicSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basicsettings = BasicSettings::first();
        return view('layouts.backend.basicsettings', compact('basicsettings'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BasicSettings  $basicSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicSettings $basicSettings)
    {
        // dd($request->all());
        $logo= $basicSettings->logo;
        $favicon = $basicSettings->favicon;
        // dd($basicSettings->logo,$basicSettings->favicon);
        if($request->logo){
            $logoPath= 'images/logo/';
            $logo = UploadFile::update($logoPath, $request->logo,$logo);
        }
       if($request->favicon){
        $faviconPath= 'images/favicon/';
        $favicon = UploadFile::update($faviconPath, $request->favicon,$favicon);
       }
        
        $basicSettings->update($request->except('favicon','logo')+[
            'logo'=>$logo,
            'favicon'=>$favicon,
        ]);
        session()->flash('success',"Successfully update basic settings information.");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BasicSettings  $basicSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicSettings $basicSettings)
    {
        //
    }
}
