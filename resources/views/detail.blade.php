
@extends("layouts.base")


@section("title", $bb->title)

@section("main")

    <div class="container">
        <h1 class="my-3 text-center"Advertisement></h1>
        <h2>{{ $bb->title }}</h2>
        <p>{{ $bb->content }}</p>
        <p>{{ $bb->price }}</p>
        <p>{{ $bb->user->name }}</p>
        <p><a href="{{ route("index") }}">Back</a></p>
    </div>
@endsection
