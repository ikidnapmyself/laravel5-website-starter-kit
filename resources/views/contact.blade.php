@extends('layout.layout')
@section('title', __('pages.title.Contact'))
@section('content')
    @breadcrumb
    @endbreadcrumb

    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-sm-12">
            @if(session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ol>
                        @foreach ($errors->all() as $key => $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ol>
                </div>
            @endif
            <form action="{{ action('ContactController@mailToAdmin') }}" method="post">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-12">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="col-md-12">
                        <label>E-mail</label>
                        <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="col-md-12">
                        <label>Subject</label>
                        <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{ old('subject') }}">
                    </div>

                    <div class="col-md-12">
                        <label>Message</label>
                        <textarea class="form-control" name="message" cols="30" rows="10">{{ old('message') }}</textarea>
                    </div>
                    <div class="col-xs-12">
                        {!! NoCaptcha::display() !!}
                        <br>
                        <br>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div><!-- col -->
    </div><!-- row -->
@endsection