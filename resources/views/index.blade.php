@extends('layouts.master')

@section('content')
    <div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $movie['title'] }}
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $movie['original_title'] }}
                            </h6>
                            <div class="card-text">
                                {{ $movie['nationality'] }}<br>
                                {{ $movie['date'] }}<br>
                                {{ $movie['vote'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
