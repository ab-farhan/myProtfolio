@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Update Basic Information</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.update.basicsettings', $basicsettings->id) }}" method="POST">


                        <div class="thumb-preview">
                            @if (!empty($basicsettings->favicon))
                                <img src="{{ asset('assets/img/' . $basicsettings->favicon) }}" alt="logo"
                                    class="uploaded-img">
                            @else
                                <img src="{{ asset('backend/img/noimage.jpg') }}" alt="..." class="uploaded-img">
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input img-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose favicon</label>
                            </div>
                        </div>

                        <div class="thumb-preview">
                            @if (!empty($basicsettings->logo))
                                <img src="{{ asset('assets/img/' . $basicsettings->logo) }}" alt="logo"
                                    class="uploaded-img2">
                            @else
                                <img src="{{ asset('backend/img/noimage.jpg') }}" alt="..." class="uploaded-img2">
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input img-input2" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose logo</label>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Website Name</label>
                            <input type="text" class="form-control is-invalid" id="exampleInputEmail1"
                                name="website_name" value="{{ $basicsettings->website_name }}" aria-describedby="emailHelp"
                                placeholder="Enter website name...">
                            <small id="emailHelp" class="form-text invalid-feedback">We'll never share your
                                email with anyone else.</small>
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Website Name</label>
                            <input type="text" class="form-control " id="exampleInputEmail1" name="website_name"
                                value="{{ $basicsettings->website_name }}" aria-describedby="emailHelp"
                                placeholder="Enter website name...">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail11">Footer Text </label>
                            <input type="text" class="form-control " id="exampleInputEmail11" name="footer_text"
                                value="{{ $basicsettings->footer_text }}" aria-describedby="emailHelp"
                                placeholder="Enter footer test...">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail11">Meta Keywords </label>
                            <input type="text" class="form-control " id="exampleInputEmail11" name="meta_keywords"
                                value="{{ $basicsettings->meta_keywords }}" aria-describedby="emailHelp"
                                placeholder="Enter meta keywords...">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail12">Meta Description </label>
                            <textarea class="form-control" name="meta_description" id="exampleInputEmail12" rows="3"
                                placeholder="Enter meta description">
                              {{ $basicsettings->meta_description }}
                            </textarea>

                        </div>
                        <button type="submit" class="btn btn-primary mx-auto">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
