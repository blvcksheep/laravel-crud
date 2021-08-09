@extends('students.layout')

@section('content')

<br><br>
<h1><i class='fas fa-user-plus'></i> Student </h1>
<hr />

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('students.store') }}" method="post">
    @csrf
    <input type="text" name="fName" class="form-control mb-3" placeholder="First Name" />

    <input type="text" name="lName" class="form-control mb-3" placeholder="Last Name" />

    <select name="gender" id="gender" class="form-control mb-3">
        <option value="gender">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    Birthday: <input type="date" id="date" name="bday" class="form-control mb-3">

    <input type="text" name="address" class="form-control mb-3" placeholder="Address" />

    <select name="course" id="course" class="form-control mb-3">
        <option value="course">Select Course</option>
        <optgroup label="Department of Computer Studies">
            <option value="Bachelof of Science in Computer Science">Bachelof of Science in Computer Science</option>
            <option value="Bachelof of Science in Computer Application">Bachelof of Science in Computer Application</option>
            <option value="Bachelof of Science in Information System">Bachelof of Science in Information System</option>
            <option value="Bachelof of Science in Information Technology">Bachelof of Science in Information Technology</option>
        </optgroup>
    </select>

    <select name="year" id="year" class="form-control mb-3">
        <option value="year">Select Year Level</option>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
    </select>
    <!--<textarea class="form-control mb-3" name="description" rows="4" placeholder="Description"></textarea>-->

    <button class="btn btn-success float-end px-5" type="submit">Submit</button>
</form>

@endsection