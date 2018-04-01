@if(get_post_type() === 'publication')
  @include('partials/entry-meta-publication')
@elseif(get_post_type() === 'project')
  @include('partials/entry-meta-project')
@else
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  <p class="byline author vcard">
    {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  </p>
@endif
