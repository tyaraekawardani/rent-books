@extends('layouts.main')

@section('title', 'dashboard')

@section('content')
    <h3>welcome, {{ Auth::user()->username }}</h3>

    {{-- card --}}
    <div class="row mt-4">
        <div class="col-4">
            <div class=" books card-data">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-journal-richtext"></i>
                    </div>
                    <div class="col-6 d-flex flex-colum justify-content-center align-items-end">
                        <div class="desc">
                            Books
                        </div>
                        <div class="count">
                            {{ $book_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="category card-data">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-bookmarks-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-colum justify-content-center align-items-end">
                        <div class="desc">
                            Category
                        </div>
                        <div class="count">
                            {{ $category_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class=" user card-data">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-colum justify-content-center align-items-end">
                        <div class="desc">
                            User
                        </div>
                        <div class="count">
                            {{ $user_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end card --}}

    {{-- table rent logs --}}
    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Book title</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actual Return Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" class="text-center">No Date</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
