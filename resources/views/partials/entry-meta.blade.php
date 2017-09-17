<time class="updated" datetime="{{ get_post_time('c', true) }}">
    @if( get_locale() == 'fr_FR')
        {{ get_the_date() }}
    @else
        {{ get_the_date('F jS, Y') }}
    @endif
</time>
