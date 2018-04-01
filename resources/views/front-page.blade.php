@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="row justify-content-center">
      <div class="col-sm-11 col-md-5">
          <div class="home-content">
            @include('partials.content-page')
          </div>
      </div>
    </div>
  @endwhile
@endsection
