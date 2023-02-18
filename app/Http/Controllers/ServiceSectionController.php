<?php

namespace App\Http\Controllers;

use App\Models\ServiceSection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service  = ServiceSection::first();
        return view('layouts.backend.sections.service', compact('service'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceSection $serviceSection)
    {
        $serviceSection->update($request->except('_token'));
        return back()->with('success', 'Successfully update service section.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceSection $serviceSection)
    {
        //
    }
}
