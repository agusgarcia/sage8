@extends('layouts.app')
@section('content')
    @while(have_posts())
        @php(the_post())

        @include('partials.page-header')
        @php(the_content())

        <svg height="0" width="0">
            <defs>
                <clipPath id="svgContact">
                    <polygon fill="#EFA400"
                             points="34.7,33.6 0,214.4 54.7,272.8 478.1,166.5 612.9,261 662.1,80.2 589.2,87 668.9,33.7 671.2,0
	465.1,51.4 "/>
                </clipPath>
            </defs>
        </svg>

    @endwhile
@endsection