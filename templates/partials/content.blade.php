
<article @php(post_class("article-clipped"))>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    "INCLUDE ENTRY-META"
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    "THE EXCERPT"
    @php(the_excerpt())
  </div>
</article>