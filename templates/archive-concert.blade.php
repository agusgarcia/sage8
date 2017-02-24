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
        <ul class="concerts_list svg-clipped">
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
                            @include ('partials.content-concert')
                            @include ('partials.content-concert')
                            @include ('partials.content-concert')
                            @include ('partials.content-concert')
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
                    <polygon fill="#FFFFFF" stroke="#000000" stroke-width="1.5794" stroke-miterlimit="10" points="0,0 238,424 470,292 751,305 618,89 230,64 "></polygon>
                </clipPath>
            </defs>
        </svg>


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

