@extends('layouts.admin.master')
@section('content-header')
    @include('layouts.admin.content_header')
@endsection
@section('content-wrapper')
    <div class="content-wrapper m-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Nick Name</th>
                    <th scope="col">Info</th>
                    <th scope="col">Description</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">
                            {{ $user->id }}
                        </td>
                        <td scope="row">
                            <img class="bg-info rounded-circle" style="object-fit: cover" height="70px" width="70px"
                                src="{{ asset("$user->avatar") }}" alt="">
                        </td>
                        <td>
                            {{ $user->nickname }}
                        </td>
                        <td scope="row">
                            <span class="fw700">{{ $user->name }}</span> - {{ $user->gender }}
                            <br>
                            Email: <a class="link-primary" href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                            <br>
                            Phone: <a class="link-primary" href="tel:{{ $user->phone }}">{{ $user->phone }}</a>
                        </td>
                        <td scope="row">
                            {{ $user->description }}
                        </td>
                        <td scope="row">
                            {{ $user->role }}
                        </td>
                        <td scope="row">
                            {{ $user->created_at_time }}
                        </td>
                        <td scope="row">
                            <a class="btn btn-primary col-10 mb-2" href="">View</a>
                            <form action="{{ route("$table.destroy", $user->id) }}" method="POST" id="form-delete">
                                @csrf
                                <button class="btn btn-secondary col-10" onclick="submitDeleted()">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('js')
    <script>
        function submitDeleted() {
            if (confirm('You want to delete this user, right?')) {
                $('#form-delete').submit();
            }
        }
        $(document).ready(function() {});
    </script>
@endpush
