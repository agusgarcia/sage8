@extends('layouts.app')

@section('content')
    @include('partials.page-header',  ['close_link' => get_permalink(get_option('page_for_posts'))])
    @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
    @endwhile
@endsection
