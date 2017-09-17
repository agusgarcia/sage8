<article @php(post_class())>
    @php($taxonomy = 'annee')
    @php($term_id = get_field('annee'))
    @php($term = get_term_by('id', $term_id, $taxonomy))
    @php($term_name = $term->name)
    <div class="entry-summary year-{{ $term_name }}">
        <p class="concert_date">
            @if( get_locale() == 'fr_FR')
                @php(the_field('date'))
            @else
                @php($date = get_field('date', false, false))
                @php($date = new DateTime($date))
                @php($date = $date->format('M jS Y'))
                {{ $date }}
            @endif
        </p>
        <p class="concert_group">
            @if(get_field('group_link')) <a href="@php(the_field('group_link'))" target="_blank">@endif
                @php(the_field('group'))
                @if(get_field('group_link'))
            </a>
            @endif
        </p>
        <p class="concert_place">@php(the_field('place')) - @php(the_field('city'))</p>
    </div>
</article>

