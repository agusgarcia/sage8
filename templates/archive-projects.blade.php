@extends('layouts.base')
@section('content')
    <p class="button-tgomez"><a href="{{ home_url('/') }}" >Thibault Gomez</a> @php(wp_title($sep = '|'))</p>
    <a href="{{ home_url('/') }}" class="button-back">X</a>
    <div class="projects_archive">
        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif

        @php($the_query = new WP_Query(array(
          'post_type' => 'projects')))
        @if($the_query->have_posts())
            @while($the_query->have_posts())
                @php($the_query->the_post())
                @include ('partials.content-projects')
            @endwhile
        @endif

        {!! get_the_posts_navigation() !!}
    </div>
@endsection

