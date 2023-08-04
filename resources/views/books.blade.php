@extends('book-layout')
@section('content')
    <h1>{{ $page }}</h1>
    @isset($books)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        <td>{{ $book['title'] }}</td>
                        <td>{{ $book['price'] }}</td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p> No Books</p>
        @endif
@endsection
