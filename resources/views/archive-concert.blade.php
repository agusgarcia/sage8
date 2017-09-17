@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <div class="concerts">

        @php($terms = get_terms('annee'))
        @if ($terms != null )
            <ul class="concerts_list svg-clipped">
                @foreach( $terms as $term )
                    @php($term_name = $term->name)

                    @php($the_query = new WP_Query(array(
       'post_type' => 'concert',
       'annee' => $term_name,
       'order_by' => 'date',
       'order' => 'ASC')))
                    @if($the_query->have_posts())
                        <li class="concert_year concert_year-{{ $term_name }}">
                            <p class="the-year">{{ $term_name }}</p>
                            @while( $the_query->have_posts())
                                @php($the_query->the_post())
                                @include ('partials.content-concert')
                            @endwhile
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
        <svg height="0" width="0">
            <defs>
                <clipPath id="svgPath">
                    <polygon stroke-width="1.5794" stroke-miterlimit="10"
                             points="1,1 211,425 415,293 664,306 546,90 204,65 " id="svg_2"/>
                </clipPath>
            </defs>
        </svg>


        @php($terms = get_terms(array(
'taxonomy' => 'annee',
'order' => 'DESC')))
        @if ($terms != null )
            <div class="concerts_archive-container">
                <h1><span>Archives</span></h1>
                <ul class="concerts_archive js-concerts_archive">
                    @foreach( $terms as $term )
                        @php($term_name = $term->name)
                        @php($the_query = new WP_Query(array(
     'post_type' => 'concert',
     'annee' => $term_name)))
                        @if($the_query->have_posts())
                            @php($term_link = get_term_link($term))
                            <li data-year="{{$term->name}}"> {{ $term->name }}</li>
                        @endif
                    @endforeach
                </ul>
                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPathArchives">
                            <polygon stroke-width="1.5794" stroke-miterlimit="10"
                                     points="0,13 78.4,231 64.6,110.8 162,107.6 141.3,0 "></polygon>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        @endif


    </div>
@endsection

