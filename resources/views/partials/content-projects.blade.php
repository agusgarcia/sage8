<article @php(post_class())>
    <div class="entry-summary">
        <div class="project_main">
            <p class="project_name @if(get_field('project_description'))has-details @endif">@php(the_field('project_name'))</p>
            @if(get_field('project_soundcloud'))
                <p>@php(the_field('project_soundcloud'))</p>
            @endif
        </div>
        @if(get_field('project_description'))
            <div class="project_information">
                <a class="project_information_button-close">X</a>
                <a class="project_information_button-arrows">
                    <span data-direction="up">▲</span>
                    <span data-direction="down">▼</span>
                </a>
                <div class="project_information-clipped abs-center">
                    @if(get_field('project_youtube'))
                        <p class="project_youtube">

                            @php($iframe = get_field('project_youtube'))
                            @php(preg_match('/src="(.+?)"/', $iframe, $matches))
                            @php($src = $matches[1])
                            @php($params = array(
                                    'controls' => 1,
                                    'hd' => 1,
                                    'autoplay' => 0,
                                    'showinfo' => 0,
                                    'enablejsapi' => 1,
                                    'rel' => 0,
                                    'VQ' => 'HD1080'
                                    ))
                            @php($new_src = add_query_arg($params, $src))
                            @php($iframe = str_replace($src, $new_src, $iframe))
                            @php($attributes = 'frameborder="0"')
                            @php($iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe))
                            {!! $iframe !!}

                        </p>
                    @endif
                    @if(get_field('project_youtube_second'))
                        <p class="project_youtube">
                            @php($iframe = get_field('project_youtube_second'))
                            @php(preg_match('/src="(.+?)"/', $iframe, $matches))
                            @php($src = $matches[1])
                            @php($params = array(
                                    'controls' => 1,
                                    'hd' => 1,
                                    'autoplay' => 0,
                                    'showinfo' => 0,
                                    'enablejsapi' => 1,
                                    'rel' => 0,
                                    'VQ' => 'HD1080'
                                    ))
                            @php($new_src = add_query_arg($params, $src))
                            @php($iframe = str_replace($src, $new_src, $iframe))
                            @php($attributes = 'frameborder="0"')
                            @php($iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe))
                            {!! $iframe !!}
                        </p>
                    @endif
                    @php(the_field('project_description'))
                </div>
            </div>
        @endif
    </div>
</article>



