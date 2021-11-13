@extends('layouts.app')
@section('content')
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Trying to contact me</h2>
                    <p>Please , Kindly <span style="text-decoration: underline;">Send me a mail</span> &nbsp;by filling this form or <span style="text-decoration: underline;">Call me or Sms</span> &nbsp;@<strong> 08159275936</strong>. Same number is available
                        on <span style="text-decoration: underline;">Whatsapp</span> if you need more information that isn't here.<br></p>
                </div>
                <form>
                    <div class="form-group"><label>Name</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Subject</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Message</label><textarea class="form-control"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="button">Send</button></div>
                </form>
            </div>
            <p style="text-align:center; background:lightblue;margin-top:20px;">If filling the form is a little bit stressful or its not convienient for you, Kindly hit me up at <strong>sakinbarnessamuel@gmail.com</strong>... I'll be waiting for you..<br></p>
        </section>
    </main>
@endsection