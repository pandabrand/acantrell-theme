<div class="datetime-entry">
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{{$page_data['pub_date']}}</time>
</div>
@if($page_data['pub_link'] && $page_data['pub_link_name'])
  <p class="byline author vcard">
    <a href="{{$page_data['pub_link']}}" rel="external" class="fn">
      {{$page_data['pub_link_name']}} <i class="fas fa-external-link-alt fa-sm"></i>
    </a>
  </p>
@endif
