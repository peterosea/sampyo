<header class="header-newsroom">
  <div class="header-newsroom-content">
    <h1 class="header-newsroom-title">{!! $title !!}</h1>
    <span class="header-newsroom-description">{!! $excerpt !!}</span>
    @include('partials.img', ["ex" => "jpg", "name" => "header-newsroom", "class" => "header-newsroom-img"])
  </div>
</header>
