@extends('layouts.app')

@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Semua pertanyaan</div>

                <div class="card-body">
                    @foreach($questions as $question)
                    <div class="media mb-4">
                        <div class="d-flex flex-column counters">
                            <div class="vote">
                                <strong>{{ $question->votes }}</strong> {{ Str::plural('votes', $question->votes) }}
                            </div>
                            <div class="status">
                                <strong>{{ $question->answer }}</strong> {{ Str::plural('answer',$question->answer) }}
                            </div>
                            <div class="view">
                                <strong>{{ $question->views ." ".Str::plural('views',$question->views)}}</strong>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="mt-0"> <a href="{{ $question->url }}" target="_blank">{{ $question->title }}</a></h3>
                            <p class="lead">
                                Asked By
                                <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                <small class="text-muted">{{ $question->created_at->diffForHumans() }}</small>
                            </p>
                            {{ Str::limit($question->body, 250) }}
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4"> <!-- Menempatkan pagination di tengah -->
                {{ $questions->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
