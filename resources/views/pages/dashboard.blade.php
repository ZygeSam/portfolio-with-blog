@extends('layouts.app')
@section('content')
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="block-heading">
                            <h2 class="text-info">Create Post</h2>
                            <p>Hi there , welcome Zygers <span style="text-decoration: underline;">Try visiting here always, Create  your post today and see it  fly around the world</p>
                        </div>
                    
                        <form action="" method="post">
                        @include('posts.form')
                        <div class="form-group"><button class="btn btn-primary btn-block">Create</button></div>
                        </form>
                    </div>
                    <div class="col">
                        <div class="block-heading">
                            <h2 class="text-info">{{$title}}</h2>
                        </div>
                        <div class="block-content">
                        {{session()->flash('message')}}
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
                                                            <a href="{{route ('posts.edit', ['post'=>$post->id ]) }}">Edit</a>
                                                            <a href="{{route('posts.destroy', ['post'=> $post->id])}}">Delete</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection