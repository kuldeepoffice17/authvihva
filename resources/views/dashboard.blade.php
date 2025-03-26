@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>

    {{-- @if($userDetails->count() > 0) --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Designation</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userDetails as $key => $detail)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $detail->name }}</td>
                        <td>{{ $detail->phone }}</td>
                        <td>{{ $detail->age }}</td>
                        <td>{{ $detail->designation }}</td>
                        <td>{{ $detail->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{-- @else
        <p>No details found. </p>
    @endif --}}
</div>
@endsection
