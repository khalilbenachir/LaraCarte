@extends('layouts.default',['title'=>'About'])

@section('content')
    <div class="container">
        <h2>What is Laracarte?</h2>
        <p>Laracarte is a clone app of <a href="https://www.laramap.com">Laramap.com</a>.</p>

        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-warning">
                   <strong><i class="fas fa-exclamation-circle"></i> This app has been built by <a href="https://www.facebook.com/KHALIL.BENACHI">@etsmo</a> for learning purposes.</strong>

                </div>

            </div>
        </div>
        <div>Feel free to help to improve <a href="/">the source code</a>.</div>
        <hr/>
        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspired :).</p>
        <p>More info <a href="/">here</a>.</p>
        <hr/>
        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
   
    </div>
@stop