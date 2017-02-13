@php(the_content())
{!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

@if(have_rows('projects'))
    @while(have_rows('projects'))
        @php(@the_row())
        <div class="project_main">
            <p>@php(the_sub_field('project_name'))</p>
            @php(the_sub_field('project_link'))
        </div>
        <div class="project_information">
            <div class="project_information-clipped abs-center">
                <div>
                    @php(the_sub_field('project_description'))</div>
            </div>
            <svg height="0" width="0">
                <defs>
                    <clipPath id="svgPath">
                        <polygon fill="#EFA400" points="0,109.3 851.5,0 873.2,176.7 632,202.7 886,276.2 472,450.2 "/>
                    </clipPath>
                </defs>
            </svg>
        </div>
    @endwhile
@endif