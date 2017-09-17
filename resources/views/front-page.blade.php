@extends('layouts.app')
@section('content')
    @while(have_posts())
        @php(the_post())
        @include('partials.home-page-header')
        <div class="page-bottom">
            <p class="button-museum"><a href="#">Prochainement : Mon musée</a></p>
        </div>
    @endwhile
@endsection