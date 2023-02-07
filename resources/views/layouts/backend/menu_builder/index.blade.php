@extends('layouts.backend.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-iconpicker.min.css') }}">
    <style>
        .dis-none {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-title">{{ __('Menu Builder') }}</div>
                        </div>

                    </div>
                </div>
                <div class="card-body  pb-5">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="card border-primary mb-3">
                                <div class="card-header bg-primary text-white">{{ __('Pre-built Menus') }}</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">{{ __('Home') }} <a data-text="{{ __('Home') }}"
                                                data-type="home" class="addToMenus btn btn-primary btn-sm float-right"
                                                href="">{{ __('Add to Menus') }}</a></li>
                                        <li class="list-group-item">{{ __('About Me') }}
                                            <a data-text="{{ __('About Me') }}" data-type="#about"
                                                class="addToMenus btn btn-primary btn-sm float-right"
                                                href="">{{ __('Add to Menus') }}</a>
                                        </li>
                                        <li class="list-group-item">{{ __('Service') }}
                                            <a data-text="{{ __('Service') }}" data-type="#service"
                                                class="addToMenus btn btn-primary btn-sm float-right"
                                                href="">{{ __('Add to Menus') }}</a>
                                        </li>
                                        <li class="list-group-item">{{ __('Protfolio') }}
                                            <a data-text="{{ __('Protfolio') }}" data-type="#protfolio"
                                                class="addToMenus btn btn-primary btn-sm float-right"
                                                href="">{{ __('Add to Menus') }}</a>
                                        </li>

                                        <li class="list-group-item">{{ __('Contact') }} <a data-text="{{ __('Contact') }}"
                                                data-type="#contact" class="addToMenus btn btn-primary btn-sm float-right"
                                                href="">{{ __('Add to Menus') }}</a></li>

                                        {{-- @foreach ($pages as $page)
                                    <li class="list-group-item">
                                        {{$page->name}} <span class="badge badge-primary">{{__('Custom Page')}}</span>
                                        <a data-text="{{$page->name}}" data-type="{{$page->id}}" data-custom="yes" class="addToMenus btn btn-primary btn-sm float-right" href="">{{__('Add to Menus')}}</a>
                                    </li>
                                    @endforeach --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-primary mb-3">
                                <div class="card-header bg-primary text-white">{{ __('Add / Edit Menu') }}</div>
                                <div class="card-body">
                                    <form id="frmEdit" class="form-horizontal">
                                        <input class="item-menu" type="hidden" name="type" value="">

                                        <div id="withUrl">
                                            <div class="form-group">
                                                <label for="text">{{ __('Text') }}</label>
                                                <input type="text" class="form-control item-menu" name="text"
                                                    placeholder="{{ __('Text') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="href">{{ __('URL') }}</label>
                                                <input type="text" class="form-control item-menu" name="href"
                                                    placeholder="{{ __('URL') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="target">{{ __('Target') }}</label>
                                                <select name="target" id="target" class="form-control item-menu">
                                                    <option value="_self">{{ __('Self') }}</option>
                                                    <option value="_blank">{{ __('Blank') }}</option>
                                                    <option value="_top">{{ __('Top') }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="withoutUrl" class="dis-none">
                                            <div class="form-group">
                                                <label for="text">{{ __('Text') }}</label>
                                                <input type="text" class="form-control item-menu" name="text"
                                                    placeholder="{{ __('Text') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="href">{{ __('URL') }}</label>
                                                <input type="text" class="form-control item-menu" name="href"
                                                    placeholder="{{ __('URL') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="target">{{ __('Target') }}</label>
                                                <select name="target" class="form-control item-menu">
                                                    <option value="_self">{{ __('Self') }}</option>
                                                    <option value="_blank">{{ __('Blank') }}</option>
                                                    <option value="_top">{{ __('Top') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i
                                            class="fas fa-sync-alt"></i> {{ __('Update') }}</button>
                                    <button type="button" id="btnAdd" class="btn btn-success"><i
                                            class="fas fa-plus"></i> {{ __('Add') }}</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header bg-primary text-white">{{ __('Website Menus') }}</div>
                                <div class="card-body">
                                    <ul id="myEditor" class="sortableLists list-group">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-3">
                    <div class="form">
                        <div class="form-group from-show-notify row">
                            <div class="col-12 text-center">
                                <button id="btnOutput" class="btn btn-success">{{ __('Update Menu') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {{dd(json_encode($prevMenu))}} --}}
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/bootstrap-iconpicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/jquery-menu-editor/jquery-menu-editor.js') }}"></script>
    <script>
        "use strict";
        var prevMenus = @php echo json_encode($prevMenu) @endphp;
        var menuUpdate = "{{ route('dashboard.menuBuilder.update') }}";
    </script>
    <script type="text/javascript" src="{{ asset('backend/js/menu-builder.js') }}"></script>
@endsection
