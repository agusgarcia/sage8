{{--
  Template Name: Projects Template
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-projects')
  @endwhile
@endsection