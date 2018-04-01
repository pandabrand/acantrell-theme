<div class="datetime-entry">
  <div class="date">
    @if($page_data['start_date'])
      <time class="start-date" datetime="{{ get_post_time('c', true) }}">{{$page_data['start_date']}}</time>
    @endif
    @if($page_data['end_date'])
      - <time class="start-date" datetime="{{ get_post_time('c', true) }}">{{$page_data['end_date']}}</time>
    @endif
  </div>
  <div class="time">
    @if($page_data['start_time'])
      <time class="start-time" datetime="{{ get_post_time('c', true) }}">{{$page_data['start_time']}}</time>
    @endif
    @if($page_data['end_time'])
        - <time class="start-date" datetime="{{ get_post_time('c', true) }}">{{$page_data['end_time']}}</time>
      @endif
    </div>
  </div>
</div>
if($page_data['place'] || $page_data['place_address'])
  <div class="byline author vcard">
    @if($page_data['place'])<div class="place-name">{{$page_data['place']}}</div>@endif
    @if($page_data['place_address'])<div class="place-address>">{{$page_data['place_address']}}</div>@endif
  </div>
@endif
