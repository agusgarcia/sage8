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
    @php($terms = acf_get_taxonomy_terms('taxonomy_annee'))
    @if ( $terms != null )
        not null
        {{$terms}}
        @foreach( $terms as $term )
            {{ $term->name  }}
        @endforeach
    @else
        terms null
    @endif


    <?php
    // your taxonomy name
    $tax = 'cat';

    // get the terms of taxonomy
    $terms = get_terms( $tax, $args = array(
            'hide_empty' => false, // do not hide empty terms
    ));

    // loop through all terms
    foreach( $terms as $term ) {

        echo 'terms :';
        // Get the term link
        $term_link = get_term_link( $term );

        if( $term->count > 0 )
            // display link to term archive
            echo '<a href="' . esc_url( $term_link ) . '">' . $term->name .'</a>';

        elseif( $term->count !== 0 )
            // display name
            echo '' . $term->name .'';
    }
    ?>




    {!! get_the_posts_navigation() !!}

@endsection

