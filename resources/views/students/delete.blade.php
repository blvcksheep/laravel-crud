@extends('students.layout')

@section('content')
<br><br>


<form action="{{ route('students.destroy', $student->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('delete')


        <h5 class="text-center">Are you sure you want to delete {{ $student->fName }} {{ $student->lName }} ?</h5>
    </div>
    <div class="modal-footer">
        <a class="btn btn-secondary" href="{{ route('students.index') }}">Cancel</a>
        <button type="submit" class="btn btn-danger">Yes, Delete </button>
    </div>
</form>

@endsection