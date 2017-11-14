@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $page->title }}</h1>

        <article>{!! $page->content !!}</article>
    </div>
@endsection
