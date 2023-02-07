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
                    <h6 class="m-0 font-weight-bold text-primary">Hero Section</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.hero_section.update', $heroSection->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="thumb-preview">
                            @if (!empty($heroSection->image))
                                <img src="{{ asset('images/heroImage/' . $heroSection->image) }}" alt="logo"
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
                            <label for="exampleInputEmail1"> Heading</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="heading" value="{{ $heroSection->heading }}" placeholder="Enter About">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Skill Headings</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="top_desc" value="{{ $heroSection->top_desc }}" placeholder="Enter Skill">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail12">Designation</label>
                            <input type="text" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp"
                                name="designation" value="{{ $heroSection->designation }}" placeholder="Enter Service">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail13">Btn text </label>
                            <input type="text" class="form-control" id="exampleInputEmail13" aria-describedby="emailHelp"
                                name="btn_text" value="{{ $heroSection->btn_text }}"
                                placeholder="Enter Service sort description">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail15">Btn url </label>
                            <input type="text" class="form-control" id="exampleInputEmail15" aria-describedby="emailHelp"
                                name="btn_url" value="{{ $heroSection->btn_url }}"
                                placeholder="Enter Protfolio Short Description">
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


        </div>

    </div>
@endsection
