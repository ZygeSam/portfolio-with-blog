@extends('layouts.app')
@section('content')
<main class="page blog-post">
        <section class="clean-block clean-post dark">
            <div class="container">
                <div class="block-content">
                    <div class="post-image" style="background-image:url(&quot;{{asset('assets/img/scenery/image3.jpg')}}&quot;);"></div>
                    <div class="post-body">
                        <h3>{{$post->title}}</h3>
                        <div class="post-info"><span>By John Smith</span><span>Jan 27, 2018</span></div>
                        <p>{{$post->body}}</p>
                </div>
            </div>
        </section>
    </main>
@endsection