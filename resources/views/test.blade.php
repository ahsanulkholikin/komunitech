@extends('layouts.app')

@section('content')
    @foreach ($comments as $comment)
        <p>{{ $comment->komentar }}</p>

        @if ($comment->replies)
            @foreach ($comment->replies as $rep1)
                <p>>{{ $rep1->komentar }}</p>
            @endforeach
        @endif
    @endforeach
@endsection
