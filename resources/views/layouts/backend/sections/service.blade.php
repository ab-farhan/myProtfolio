@extends('layouts.backend.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('/backend/css/fontawesome-iconpicker.min.css') }}" />
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Service Section</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.service_section.update', $service->id) }}" method="post">
                        @csrf
                        <label class="d-block"> Select Icon</label>
                        <div class="btn-group">

                            <button data-selected="graduation-cap " type="button"
                                class=" btn btn-primary icp demo11 btn btn-default dropdown-toggle iconpicker-component"
                                data-toggle="dropdown">
                                </i> <i class="{{ $service->icon ?? 'fa fa-fw fa-heart' }} iconpicker-component"></i>
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu"></div>
                            <br>
                        </div>

                        <input type="hidden" id="inputIcon" name="icon" value="{{ $service->icon }}">

                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1"> Heading</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="heading" value="{{ $service->heading }}" placeholder="Enter heading...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter description...">{{ $service->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"> Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('/backend/js/fontawesome-iconpicker.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.demo11').iconpicker();
            $('.icp').on('iconpickerSelected', function(event) {
                $("#inputIcon").val($(".iconpicker-component").find('i').attr('class'));
            });
        });
    </script>
@endsection
