<article @php(post_class())>
    <p>---- content single concert</p>

    <header>
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        @include('partials/entry-meta-concert')
    </header>
    <div class="entry-content">
        @php(the_content())
        @php(the_field('place'))
        @php(the_field('concert_year'))
    </div>
    <footer>
        {!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php(comments_template('/templates/partials/comments.blade.php'))
</article>
