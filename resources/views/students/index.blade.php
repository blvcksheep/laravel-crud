@extends('students.layout')

@section('content')
<br><br>
<a class="btn btn-link float-end" href="{{ route('students.create') }}"> <i class="fa fa-user-plus"></i>
    Add Student</a>

{{-- Display message --}}
@if (session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session("success") }}
</div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id Number</th>
            <th scope="col">Name</th>
            <th scope="col">Course</th>
            <th scope="col">Year</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $stud) {{-- Loop products --}}
        <tr>
            <td>{{$loop->iteration }}</td>
            <th scope="row">2021 - {{$stud->id}}</th>
            <td>{{ $stud->fName }} {{$stud->lName}}</td>
            <td> {{ $stud->course }}</td>
            <td> {{ $stud->year }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-warning  btn-sm dropdown-toggle" type="button" id="actionDropdown" data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <a class="dropdown-item" href="{{ route('students.show', $stud->id) }}" style="color:green" title="View Information"> <i class='far fa-id-badge'></i></a> {{-- View --}}
                        <a class="dropdown-item" href="{{ route('students.edit', $stud->id) }}" title="Edit"><i class='fas fa-marker'></i></a> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>

                            <a class="dropdown-item" href="{{ route('delete', $stud->id) }}" title="Remove">
                                <i class="far fa-trash-alt text-danger  fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection