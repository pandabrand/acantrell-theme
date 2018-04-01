<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-md nav-primary">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler navbar-toggler-block" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle Navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse navbar-right" id="navbarToggle">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav nav page-nav']) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
