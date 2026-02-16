@extends('layouts.master')

@section('content')
    <div class="container">
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
                                @php
                                    $maxStars = 10;
                                    $vote = $movie['vote']; // voto su 10
                                    $fullStars = floor($vote);
                                    $halfStar = $vote - $fullStars > 0 ? 1 : 0;
                                    $emptyStars = $maxStars - $fullStars - $halfStar;
                                @endphp
                                <div class="card-footer">
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <span style="color: #0070f3; font-size: 1.1em;"><i
                                                class="bi bi-star-fill"></i></span>
                                    @endfor
                                    @if ($halfStar)
                                        <span style="color: #0070f3; font-size: 1.1em;"><i
                                                class="bi bi-star-half"></i></span>
                                    @endif
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <span style="color: #0070f3; font-size: 1.1em;"><i class="bi bi-star"></i></span>
                                    @endfor
                                    <span style="color: #0070f3; font-size: 0.9em;">({{ $movie['vote'] }})</span>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
