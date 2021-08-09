@extends('students.layout')

@section('content')
<br><br>

<h1><i class="fa fa-edit" style="font-size:36px"> Student </i></h1>
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

<form action="{{ route('students.update', $student->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="fName" class="form-control mb-3" placeholder="First Name" value="{{ $student->fName }}" />

    <input type="text" name="lName" class="form-control mb-3" placeholder="Last Name" value="{{ $student->lName }}" />

    <select name="gender" id="gender" class="form-control mb-3">
        <option value="{{$student->gender}}">{{$student->gender}}</option>
        <option value="gender">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    Birthday: <input type="date" id="date" name="bday" class="form-control mb-3" placeholder="Birthdday" value="{{ $student->bday }}">


    <input type="text" name="address" class="form-control mb-3" placeholder="Address" value="{{ $student->address }}" />

    <select name="course" id="course" class="form-control mb-3">
        <option value="{{ $student->course }}">{{ $student->course }}</option>
        <option value="course">Select Course</option>
        <optgroup label="Department of Computer Studies">
            <option value="Bachelor of Science in Computer Science">Bachelof of Science in Computer Science</option>
            <option value="Bachelor of Science in Computer Application">Bachelof of Science in Computer Application</option>
            <option value="Bachelor of Science in Information System">Bachelof of Science in Information System</option>
            <option value="Bachelor of Science in Information Technology">Bachelof of Science in Information Technology</option>
        </optgroup>
    </select>

    <select name="year" id="year" class="form-control mb-3">
        <option value="{{ $student->year }}">{{ $student->year }}</option>
        <option value="year">Select</option>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
    </select>

    <!--<textarea class="form-control mb-3" name="description" rows="4" placeholder="Description">{{ $student->description }}</textarea>-->

    <button class="btn btn-success float-end px-5" type="submit">Update</button>
</form>

@endsection