@if( request()->ajax() )
    @yield("content")

    @else
    @include("layout.fulltemplate")
@endif

