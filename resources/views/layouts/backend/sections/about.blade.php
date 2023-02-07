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
                    <h6 class="m-0 font-weight-bold text-primary">About Section</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.about_section.update', $aboutSection->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="thumb-preview">
                            @if (!empty($aboutSection->image))
                                <img src="{{ asset('images/about/' . $aboutSection->image) }}" alt="logo"
                                    class="uploaded-img">
                            @else
                                <img src="{{ asset('backend/img/noimage.jpg') }}" alt="..." class="uploaded-img">
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file"
                                    class="custom-file-input img-input @error('image') is-invalid @enderror "
                                    id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose Hero Image</label>
                            </div>

                            @error('image')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="name" value="{{ $aboutSection->name }}" placeholder="Enter About">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">additional_information</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="additional_information" value="{{ $aboutSection->additional_information }}"
                                placeholder="Enter Skill">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail12">CV</label>
                            <input type="file" class="form-control @error('cv') is-invalid @enderror"
                                id="exampleInputEmail12" aria-describedby="emailHelp" name="cv"
                                value="{{ $aboutSection->cv }}" placeholder="Enter Service">
                            @error('cv')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


        </div>

    </div>
@endsection
