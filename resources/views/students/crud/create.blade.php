<!-- resources/views/students/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Student</h1>

        <form action="{{ route('students.store') }}" method="post">
            @csrf

            <!-- Add your form fields here -->
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
