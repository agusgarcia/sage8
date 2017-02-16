<article @php(post_class())>
    @php($taxonomy = 'annee')
    @php($term_id = get_field('annee'))
    @php($term = get_term_by('id', $term_id, $taxonomy))
    @php($term_name = $term->name)
    <div class="entry-summary year-{{ $term_name }}">
        <p>@php(the_field('concert_date')) <br> @php(the_field('place'))</p>

    </div>
</article>

