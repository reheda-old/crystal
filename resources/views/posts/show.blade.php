@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    {{--<p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>--}}
                    <img src="{{$post->image}}" alt="">
                    <p>{{$post->body}}</p>
                    <?php
                    $tags = $post->meta_keywords;
                    $tags_as_array = explode (';', $tags);
                    $beauty_tags = join('; ', $tags_as_array);
                    ?>
                    <p class="blog-post-meta">Теги: {{$beauty_tags}}</p>
                </div><!-- /.blog-post -->

            </div><!-- /.blog-main -->


        </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
