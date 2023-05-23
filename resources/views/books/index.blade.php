@extends('layouts.app')
@section('content')
    <section>
        <div class="container">

            <h1>LIsta dei Libri</h1>
            <ul>
                @foreach ($books as $book)
                    <li> <a href="{{ route('books.show', ['id' => $book->id]) }}">{{ $book->title }}</a></li>
                @endforeach
            </ul>
        </div>

    </section>
