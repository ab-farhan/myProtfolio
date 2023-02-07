@extends('layouts.backend.master')
@section('css')
    <style>
        label {
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sections Headings</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.section_heading.update', $sectionHeading->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">About Headings</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="about" value="{{ $sectionHeading->about }}" placeholder="Enter About">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Skill Headings</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="skill" value="{{ $sectionHeading->skill }}" placeholder="Enter Skill">
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Skill Sub Headings</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div> --}}

                        <div class="form-group">
                            <label for="exampleInputEmail12">Service Headings</label>
                            <input type="text" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp"
                                name="services" value="{{ $sectionHeading->services }}" placeholder="Enter Service">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail13">Service Short Description </label>
                            <input type="text" class="form-control" id="exampleInputEmail13" aria-describedby="emailHelp"
                                name="services_sort_des" value="{{ $sectionHeading->service_sort_des }}"
                                placeholder="Enter Service sort description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail14">Protfolio Headings</label>
                            <input type="text" class="form-control" id="exampleInputEmail14" aria-describedby="emailHelp"
                                name="protfolio" value="{{ $sectionHeading->protfolio }}" placeholder="Enter Protfolio">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail15">Protfolio Short Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail15" aria-describedby="emailHelp"
                                name="protfolio_sort_des" value="{{ $sectionHeading->protfolio_sort_des }}"
                                placeholder="Enter Protfolio Short Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail16">Contact Headings</label>
                            <input type="text" class="form-control" id="exampleInputEmail16" aria-describedby="emailHelp"
                                name="contact" value="{{ $sectionHeading->contact }}" placeholder="Enter Contact">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail17">Contact Short Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail17" aria-describedby="emailHelp"
                                name="contact_sort_des" value="{{ $sectionHeading->contact_sort_des }}"
                                placeholder="Enter Contact Short Description">
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


        </div>

    </div>
@endsection
