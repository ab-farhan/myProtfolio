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
     * @param  \App\Models\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceSection $serviceSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceSection $serviceSection)
    {
        //
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
        //
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
