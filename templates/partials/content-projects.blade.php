@php(the_content())
{!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

@if (have_rows('projet'))
    @while(have_rows('projet'))
        @php(the_row())
        @php(the_sub_field('nom_du_projet'))
        @php(the_sub_field('lien_soundcloud_du_projet'))
    @endwhile
@endif