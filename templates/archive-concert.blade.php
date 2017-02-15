@extends('layouts.base')
@section('content')

    @include('partials.page-header')
    <p>---- archive concert</p>

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif

    @php($the_query = new WP_Query(array(
    'post_type' => 'concert',
    'orderby'   => 'taxonomy_annee',
	'order' => 'ASC')))

    @if($the_query->have_posts())
        @while( $the_query->have_posts())
            @php($the_query->the_post())
            @include ('partials.content-concert')
        @endwhile
    @endif

    <p>taxonomies : </p>
    @php($taxonomy_objects = get_object_taxonomies( 'annee', 'objects' ))
    {{ $taxonomy_objects }}



    {!! get_the_posts_navigation() !!}

@endsection

