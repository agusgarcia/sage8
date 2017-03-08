@extends('layouts.base')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif
    <div class="articles_container">
        @while (have_posts()) @php(the_post())
        @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
        @endwhile
    </div>
    <svg height="0" width="0">
        <defs>
            <clipPath id="svgPathArticle" clipPathUnits="objectBoundingBox">
                <polygon fill="none" points="0,292.8 519.4,307 526.5,10.5 7.9,0"/>
            </clipPath>
        </defs>
    </svg>

    <svg height="0" width="0">
        <defs>
            <clipPath id="svgPathArticle2">
                <polygon fill="#EFA400" points="00,292.8 519.4,307 526.5,10.5 7.9,0"/>
            </clipPath>
        </defs>
    </svg>

    <svg height="0" width="0">
        <defs>
            <clipPath id="svgPathArticle3">
                <polygon fill="#EFA400" points="0,82.5 35.3,362.2 663.8,384.7 678,0 "/>
            </clipPath>
        </defs>
    </svg>

    <svg height="0" width="0">
        <defs>
            <clipPath id="svgPathArticle4">
                <polygon fill="#EFA400" points="0,0 14.2,384.7 642.7,362.2 678,82.5"/>
            </clipPath>
        </defs>
    </svg>

    <!-- {!! get_the_posts_navigation() !!} -->
    {!! paginate_links() !!}

@endsection
