@extends('layouts.main')

@section('title', 'User Detail')

@section('content')
    <h1>User Detail</h1>
    <div class="mt-4 d-flex justify-content-end">
        @if ($users->status == 'inactive')
            <a href="/users-approve/{{$users->slug}}" class="btn btn-primary me-2">Approve User</a>
            <a href="/users-registered" class="btn btn-secondary">Back</a>
        @else
            <a href="/users" class="btn btn-secondary">Back</a>
        @endif
    </div>
    @if (session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif
    <div class="mt-4">
        <label for="" class="form-label">Username</label>
        <input type="text" class="text form-control" readonly value="{{$users->username}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="text form-control" readonly value="{{$users->phone}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Address</label>
        <input type="text" class="text form-control" readonly value="{{$users->address}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Status</label>
        <input type="text" class="text form-control" readonly value="{{$users->status}}">
    </div>
@endsection