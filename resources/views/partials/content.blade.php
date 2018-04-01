<article @php(post_class())>
  <header>
    <h4 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h4>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    <div class="entry-text">
      @php(the_excerpt())
    </div>
    @if(has_post_thumbnail())
      <div class="entry-image">
        @php(the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']))
      </div>
    @endif
  </div>
</article>
