@extends('students.layout')

@section('content')
<br><br>
<h1>Student <i class='far fa-address-card'></i></h1>
<hr />

<div class="bg-dark text-white rounded p-3">
    <h5 class="text-warning">Name</h5>
    <p class="fw-bold">{{ $student->fName }} {{ $student->lName }}</p>

    <h5 class="text-warning">Gender</h5>
    <p class="fw-bold"> {{ $student->gender }}</p>

    <h5 class="text-warning">Birth Date</h5>
    <p class="fw-bold"> {{ $student->bday }}</p>

    <h5 class="text-warning">Address</h5>
    <p class="fw-bold">{{ $student->address }}</p>

    <h5 class="text-warning">Course</h5>
    <p class="fw-bold">{{ $student->course }}</p>

    <h5 class="text-warning">School Year</h5>
    <p class="fw-bold"> {{ $student->year }}</p>
</div>

@endsection