@extends('book-layout')
@section('content')
    <h1>{{ $page }}</h1>
    @isset($books)
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col"> Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $index => $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td><img width="60px" height="60px" src="{{ asset('storage/books/') ."/". $book->pic}}" alt=""></td>
                            <td>{{ $book->price }}</td>
                            <td>{{ $book->category->name ?? '-' }}</td>
                            <td>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="containter">
            {{ $books->links() }}
        </div>
    @else
        <p> No Books</p>
        @endif
    @endsection
