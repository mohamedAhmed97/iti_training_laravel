@extends('book-layout')
@section('project-name')
    Project Test
@endsection
@section('title')
    Create Book
@endsection
@section('content')
    <h1>{{ $page }}</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Description</label>
            <textarea class="form-control" name="description" name="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
