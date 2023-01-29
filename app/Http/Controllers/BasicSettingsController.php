<?php

namespace App\Http\Controllers;

use App\Models\BasicSettings;
use App\Http\Controllers\Controller;
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
        $basicSettings->update([
            '' => ''
        ]);
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
