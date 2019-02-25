@extends('layout.layout')
@section('title', __('pages.title.Home'))
@section('content')
    @breadcrumb
    @endbreadcrumb

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Bootstrap starter template with Laravel 5.6</h1>
            <p class="lead">
                Use this document as a way to quickly start any new project.
                <br>
                All you get is this text and a mostly barebones HTML document.
            </p>
            <hr>
            <p class="lead">
                <ul class="text-left">
                    <li>You can easily switch language</li>
                    <li>An example component defined as breadcrumb</li>
                    <li>YouTube API integration</li>
                    <li>Contact form</li>
                    <li>Capcha Control</li>
                </ul>
            </p>
        </div>

    </main><!-- /.container -->
@endsection