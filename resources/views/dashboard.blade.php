@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center text-primary">User Dashboard</h2>

    <div class="card shadow-lg p-4 mb-4 bg-white rounded">
        <div class="d-flex flex-column flex-md-row justify-content-between mb-3">
            <h4 class="text-dark">User Details</h4>
            @auth
                    {{-- Show only if the user is logged in --}}
                    <a href="{{ route('details.create') }}" class="btn btn-success">Create Details</a>
                    <a href="{{ route('logout') }}" class="btn btn-danger"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            <input type="text" id="search" class="form-control w-100 w-md-25 mt-2 mt-md-0" placeholder="Search..." onkeyup="searchTable()">
        </div>

        {{-- Responsive Table --}}
        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white">
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
                            <td class="text-truncate" style="max-width: 150px;">{{ $detail->name }}</td>
                            <td>{{ $detail->phone }}</td>
                            <td>{{ $detail->age }}</td>
                            <td>{{ $detail->designation }}</td>
                            <td class="text-truncate" style="max-width: 200px;">{{ $detail->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- JavaScript for Table Search --}}
<script>
    function searchTable() {
        let input = document.getElementById("search").value.toLowerCase();
        let rows = document.querySelectorAll("tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(input) ? "" : "none";
        });
    }
</script>

{{-- CSS for Mobile Responsiveness --}}
<style>
    @media (max-width: 768px) {
        h2 {
            font-size: 1.5rem;
        }
        table {
            font-size: 14px;
        }
        .table td, .table th {
            padding: 10px;
        }
        .text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }
</style>

@endsection
