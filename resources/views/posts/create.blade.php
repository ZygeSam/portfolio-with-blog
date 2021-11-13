@extends('layouts.app')
@section('content')
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">{{$title}}</h2>
                    <p>Hi there , welcome Zygers <span style="text-decoration: underline;">Try visiting here always, Create  your post today and see it  fly around the world</p>
                </div>
                
                <form action="{{route('posts.store')}}" method="post">
                   @include('posts.form')
                   <div class="form-group"><button class="btn btn-primary btn-block">Create</button></div>
                </form>
            </div>
        </section>
    </main>
@endsection