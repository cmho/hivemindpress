@php
    $date = pods_field('creation', get_the_ID(), 'publication_date', true);
@endphp
<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title">{!! get_the_title() !!}
  </a></h2>
    <time class="published">{{ $date }}</time>

    <div class="authors">
        {!! get_the_term_list(get_the_ID(), 'work-author', '', ', ', '') !!}
    </div>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
