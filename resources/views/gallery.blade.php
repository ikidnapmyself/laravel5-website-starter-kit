@extends('layout.layout')
@section('title', __('pages.title.Galeri'))
@section('content')
    @breadcrumb
    @endbreadcrumb

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Gallery</h1>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at accumsan nibh. Phasellus ultrices
                ultrices mauris eget rutrum. Sed interdum arcu eu lacus convallis, efficitur porttitor magna accumsan.
                Morbi ac viverra nisl. Ut a blandit nulla. Cras ornare euismod vulputate. Orci varius natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Fusce eu metus vel augue aliquam maximus non ,
                non purus.
            </p>
            <hr>
            <div class="row">
            @foreach($gallery as $item)
                <div class="card col">
                    <img class="card-img-top" src="{{ $item['thumbnail'] }}" alt="{{ $item['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <h6 class="card-title">{{ $item['date'] }}</h6>
                        <a href="{{ $item['link'] }}" class="btn btn-primary">Video URL</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </main><!-- /.container -->
@endsection