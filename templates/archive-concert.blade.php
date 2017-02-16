@extends('layouts.base')
@section('content')

    @include('partials.page-header')

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif


    @php($tax = 'taxonomy_annee')
    @php($terms = get_terms('annee'))
    @if ($terms != null )
        <ul>
            @foreach( $terms as $term )
                @php($term_name = $term->name)
                <li> {{ $term_name }} :
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
        <ul>
            @foreach( $terms as $term )
                @php($term_link = get_term_link($term))
                <li><a href='{{esc_url($term_link)}}'> {{ $term->name }}</a></li>
            @endforeach
        </ul>
    @endif

    {!! get_the_posts_navigation() !!}

@endsection

