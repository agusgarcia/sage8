@php(the_content())
{!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

@if(have_rows('projects'))
    @while(have_rows('projects'))
        @php(@the_row())
        @php(the_sub_field('project_name'))
        @php(the_sub_field('project_link'))
        @php(the_sub_field('project_description'))
    @endwhile
@endif