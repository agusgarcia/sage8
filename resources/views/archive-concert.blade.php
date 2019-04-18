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
       'orderby' => 'meta_value_num',
       'meta_type' => 'DATE',
       'meta_key' => 'concert_date',
       'posts_per_page' => -1,
       'order' => 'DESC')))
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
            </div>
        @endif
    </div>
    <svg height="0" width="0">
        <defs>
            <clipPath id="svgPath-xs">
                <polygon points="351.6,-27 6.2,15.2 63,221.1 0,423.9 193.5,369.9 285.6,92.8 "/>
            </clipPath>
            <clipPath id="svgPath-s">
                <polygon id="svg_2" points="351.6,-27 6.2,15.2 63,221.1 0,423.9 193.5,369.9 338,257 "/>
            </clipPath>
            <clipPath id="svgPath-m">
                <polygon id="svg_2" points="501.1,11.5 6.2,15.2 112,233.7 44.2,435.2 318,401.9 514,302.3 505.9,119 387,92 503.6,67.9 "/>
            </clipPath>
            <clipPath id="svgPath-l">
                <polygon id="svg_2" points="640.5,21.4 10.9,-3.3 109,241 83.6,445.4 430.1,425.8 771,331 623,283 703.3,219.2 652.8,135.9
	499.9,100.4 646.9,81.5 "/>
            </clipPath>
            <clipPath id="svgPath">
                <polygon points="57,27 233,509 489.9,350.8 784,366.4 644.6,107.6 240.7,77.7 "/>
            </clipPath>
        </defs>
    </svg>
    <svg height="0" width="0">
        <defs>
            <clipPath id="svgPathArchives">
                <polygon stroke-width="1.5794" stroke-miterlimit="10"
                         points="0,13 78.4,231 64.6,110.8 162,107.6 141.3,0 "></polygon>
            </clipPath>
        </defs>
    </svg>


@endsection

