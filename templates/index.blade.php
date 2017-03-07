@extends('layouts.base')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
  @endwhile
  <svg height="0" width="0">
    <defs>
      <clipPath id="svgPathArticle">
        <polygon fill="#EFA400" points="0,0 14.2,384.7 642.7,362.2 678,82.5 "/>
      </clipPath>
    </defs>
  </svg>

  <svg height="0" width="0">
    <defs>
      <clipPath id="svgPathArticle2">
        <polygon fill="#EFA400" points="678,0 663.7,384.7 35.3,362.2 0,82.5 "/>
      </clipPath>
    </defs>
  </svg>

  {!! get_the_posts_navigation() !!}
@endsection
