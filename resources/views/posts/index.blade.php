<?php ?>
@extends('layouts.app')
@section('content')
 <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Blog Post List</h2>
                    <p>Ooh, you're here, Please read what I talk about and kindly drop a feedback if you feel the need to. I would like to improve on my writing, you know I'm not a pro.</p>
                    <a class="btn btn-primary my-3" href="{{route ('posts.create') }}">Click to Create your very own content</a>
                </div>
                <div class="block-content">
                
                @if(count($posts)>0)
                    @foreach($posts as $post)
                                        <div class="clean-blog-post">
                                            <div class="row">
                                                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                                                    <div class="col-lg-7">
                                                        
                                                        <h3>{{$post->title}}</h3>
                                                        <div class="info"><span class="text-muted">{{$post->created_at}}&nbsp;<a href="#">{{$post->user->name}}</a></span></div>
                                                        <p> {{\Illuminate\Support\Str::substr($post->body, 0, 20)}}...</p>
                                                        <a href="/posts/{{$post->id}}"><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></a>
                                                        <div class="interaction pt-3">
                                                            <a href="#">Like</a>
                                                        </div>
                                                    </div>   
                                                </div>
                                            </div>                    
                                         @endforeach
                   {{$posts->links()}}
                    @else
                        <div class="jumbotron">
                            <p class="lead"> No Posts found </p>
                        </div>
                @endif                    
        </section>
    </main>
    @endsection