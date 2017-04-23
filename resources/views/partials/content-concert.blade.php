<article @php(post_class())>
    @php($taxonomy = 'annee')
    @php($term_id = get_field('annee'))
    @php($term = get_term_by('id', $term_id, $taxonomy))
    @php($term_name = $term->name)
    <div class="entry-summary year-{{ $term_name }}">
        <p class="concert_date">@php(the_field('date')) </p>
        <p class="concert_group">@php(the_field('group'))</p>
        <p class="concert_place">@php(the_field('place')) - @php(the_field('city'))</p>
    </div>
</article>

