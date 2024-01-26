<!-- resources/views/students/delete.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Delete Student</h1>
        <p>Are you sure you want to delete this student?</p>

        <form action="{{ route('students.destroy', $student) }}" method="post">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
