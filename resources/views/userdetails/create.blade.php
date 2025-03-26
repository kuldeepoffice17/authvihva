@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Enter Your Details</h2>
    <form action="{{ route('details.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control" >
        </div>
        <div class="form-group">
            <label>Age:</label>
            <input type="phone" name="age" class="form-control" >
        </div>
        <div class="form-group">
            <label>Designation:</label>
            <input type="text" name="designation" class="form-control" >
        </div>
        <div class="form-group">
            <label>Address:</label>
            <textarea name="address" class="form-control" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Details</button>
    </form>
</div>
@endsection
