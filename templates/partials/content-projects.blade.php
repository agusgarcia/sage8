<article @php(post_class())>
    <div class="entry-summary">
        <div class="project_main">
            <p class="project_name">@php(the_field('project_name'))</p>
            <p>@php(the_field('project_link'))</p>
        </div>
        <div class="background-black"></div>
        <div class="project_information">
            <a class="project_information_button-close">X</a>
            <div class="project_information-clipped abs-center">
                @php(the_field('project_description'))
            </div>
            <svg height="0" width="0">
                <defs>
                    <clipPath id="svgPath">
                        <polygon fill="#EFA400" points="0,109.3 851.5,0 873.2,176.7 632,202.7 886,276.2 472,450.2 "/>
                    </clipPath>
                </defs>
            </svg>
        </div>
    </div>
</article>



