@extends('layouts.base')

@section('content')
    <p class="button-tgomez"><a href="{{ home_url('/') }}" >Thibault Gomez</a> @php(wp_title($sep = '|'))</p>
    <a href="{{ get_permalink(get_option('page_for_posts'))  }}" class="button-back">X</a>
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
  @endwhile
@endsection

