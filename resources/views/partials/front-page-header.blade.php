<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <div class="home-default-image">
      <div class="svg-container">
        <svg viewBox="0 0 615 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <!-- Generator: Sketch 49.2 (51160) - http://www.bohemiancoding.com/sketch -->
          <desc>Created with Sketch.</desc>
          <defs></defs>
          <g id="home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="home---path" transform="translate(-194.000000, -335.000000)" stroke="#730505" stroke-width="2">
                  <path d="M195,336 L808,374" id="Path"></path>
              </g>
          </g>
        </svg>
      </div>
    </div>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
