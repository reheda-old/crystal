@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach($posts as $post)
                <div class="col-md-4">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->excerpt}} </p>
{{--                    {{dd($post)}}--}}
                    <p><a class="btn btn-default" href="/posts/{{$post->slug}}" role="button">Подробнее &raquo;</a></p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
