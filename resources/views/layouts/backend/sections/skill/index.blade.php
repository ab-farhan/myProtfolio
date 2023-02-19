@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Skill's</h6>
                    <a href="{{ route('dashboard.skill_section.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                        Add Skill</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th> ID</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                                <tr>
                                    <td><a href="#">RA0449</a></td>
                                    <td><i class="{{ $skill->icon }}"></i> </td>
                                    <td>{{ strlen($skill->heading) > 20 ? mb_substr($skill->heading, 0, 20, 'UTF-8') . '...' : $skill->heading }}
                                    </td>
                                    <td>{{ strlen($skill->description) > 20 ? mb_substr($skill->description, 0, 20, 'UTF-8') . '...' : $skill->description }}
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Detail</a>
                                        <a href="{{ route('dashboard.skill_section.edit', $skill->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>

                                        <a href="{{ route('dashboard.skill_section.destroy', $skill->id) }}"
                                            class="btn btn-sm btn-danger">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection
