<div class="row">
    <div class="col-sm-6">

        <h4>@yield('title')</h4>

    </div><!-- col -->
    <div class="col-sm-6">

        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">@lang('pages.menu.Anasayfa')</a></li>
            <li class="active">@yield('title')</li>
        </ol>

    </div><!-- col -->
</div><!-- row -->