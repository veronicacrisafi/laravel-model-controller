@extends('layouts.master')

<div>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col">
                <h4>
                    {{ $movie['title'] }}
                </h4>
                <h6>
                    {{ $movie['original_title'] }}
                </h6>
                <p>
                    {{ $movie['nationality'] }}
                    {{ $movie['date'] }}
                </p>
                <section>
                    {{ $movie['vote'] }}
                </section>
            </div>
        @endforeach
    </div>
</div>
