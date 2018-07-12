@extends('layout.layout')
@section('title', __('pages.title.Stacks'))
@push("code")
    alert('Hello World! It\'s an inline alert code');
@endpush
@push("scripts")
    <script src="{{ asset("js/custom.js") }}" type="text/javascript"></script>
@endpush
@section('content')
    @breadcrumb
    @endbreadcrumb

    <main role="main" class="container">

        <div class="starter-template">
            <h1>JS Stacks</h1>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at accumsan nibh. Phasellus ultrices
                ultrices mauris eget rutrum. Sed interdum arcu eu lacus convallis, efficitur porttitor magna accumsan.
                Morbi ac viverra nisl. Ut a blandit nulla. Cras ornare euismod vulputate. Orci varius natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Fusce eu metus vel augue aliquam maximus non ,
                non purus.
            </p>
        </div>

    </main><!-- /.container -->
@endsection