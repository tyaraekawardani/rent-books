@extends('layouts.main')

@section('title', 'Book')

@section('content')
    <h1>book list</h1>
    <div class="mt-4 d-flex justify-content-end">
        <a href="/books-add" class="btn btn-success">add book</a>
    </div>
    @if (session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif
    <div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Book Code</th>
                <th>Title</th>
                <th>Cover</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->book_code}}</td>
                <td>{{$value->title}}</td>
                <td>@if($value->cover != '')
                    <img src="{{asset('storage/cover/'.$value->cover)}}" alt="" width="50px">
                    @else
                    <img src="{{asset('img/not-faund.jpg')}}" alt="">
                    @endif</td>
                <td>@foreach($value->categories as $category)
                    {{$category->name}},
                    @endforeach</td>
                <td>{{$value->status}}</td>
                <td>
                    <a href="/books-edit/{{$value->slug}}" class="btn btn-primary">edit</a>
                    <a href="/books-delete/{{$value->slug}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
