@extends('layouts.base')
@section('content')
<div class="concerts">
    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif


    @php($tax = 'taxonomy_annee')
    @php($terms = get_terms('annee'))
    @if ($terms != null )
        <ul class="concerts_list">
            @foreach( $terms as $term )
                @php($term_name = $term->name)
                <li class="concert_year concert_year-{{ $term_name }}"> {{ $term_name }} :
                    @php($the_query = new WP_Query(array(
       'post_type' => 'concert',
       'annee' => $term_name,
       'orderby'   => 'date',
       'order' => 'ASC')))

                    @if($the_query->have_posts())
                        @while( $the_query->have_posts())
                            @php($the_query->the_post())
                            @include ('partials.content-concert')
                        @endwhile
                    @endif
                </li>
            @endforeach
        </ul>
    @endif



    @php($tax = 'taxonomy_annee')
    @php($terms = get_terms('annee'))
    @if ($terms != null )
        <div class="concerts_archive-container">
        <h1>Archives</h1>
        <ul class="concerts_archive js-concerts_archive">
            @foreach( $terms as $term )
                @php($term_link = get_term_link($term))
                <li data-year="{{$term->name}}"> {{ $term->name }}</li>
            @endforeach
        </ul>
        </div>
    @endif

    {!! get_the_posts_navigation() !!}
</div>
@endsection

