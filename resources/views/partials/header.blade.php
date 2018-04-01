@if(is_front_page())
  @include('partials.front-page-header')
@else
  @include('partials.default-header')
@endif
