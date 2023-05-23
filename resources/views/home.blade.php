@extends('layouts.app')
@section('content')
    <section>
        <div class="container">

            <h1>Home page</h1>
            <p>Hello World</p>
            <a href="{{ route('books.index') }}">Vai all lista dei libri</a>
        </div>

    </section>
