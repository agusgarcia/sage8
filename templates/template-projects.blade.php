{{--
  Template Name: Projects Template
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
   <p>Titre :</p> @include('partials.page-header')
    @include('partials.content-projects')

  @endwhile
@endsection
