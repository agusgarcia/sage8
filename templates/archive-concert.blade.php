@extends('layouts.base')
@section('content')
    <p class="button-tgomez"><a href="{{ home_url('/') }}" >Thibault Gomez</a> @php(wp_title($sep = '|'))</p>
    <a href="/" class="button-back">X</a>
    <div class="concerts">
        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif

        @php($terms = get_terms(array(
    'taxonomy' => 'annee',
    'order' => 'DESC')))
        @if ($terms != null )
            <ul class="concerts_list svg-clipped">
                @foreach( $terms as $term )
                    @php($term_name = $term->name)
                    <li class="concert_year concert_year-{{ $term_name }}">
                        <p class="the-year">{{ $term_name }}</p>
                        @php($the_query = new WP_Query(array(
           'post_type' => 'concert',
           'annee' => $term_name,
           'order_by' => 'date',
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
        <svg height="0" width="0">
            <defs>
                <clipPath id="svgPath">
                    <polygon stroke-width="1.5794" stroke-miterlimit="10" points="1,1 211,425 415,293 664,306 546,90 204,65 " id="svg_2"/>                </clipPath>
            </defs>
        </svg>


        @php($tax = 'taxonomy_annee')
        @php($terms = get_terms('annee'))
        @if ($terms != null )
            <div class="concerts_archive-container">
                <h1><span>Archives</span></h1>
                <ul class="concerts_archive js-concerts_archive">
                    @foreach( $terms as $term )
                        @php($term_link = get_term_link($term))
                        <li data-year="{{$term->name}}"> {{ $term->name }}</li>
                    @endforeach
                </ul>
                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPathArchives">
                            <polygon stroke-width="1.5794" stroke-miterlimit="10" points="0,13 78.4,231 64.6,110.8 162,107.6 141.3,0 "></polygon>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        @endif


        {!! get_the_posts_navigation() !!}
    </div>
@endsection

