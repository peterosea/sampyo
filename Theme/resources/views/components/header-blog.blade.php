<div class="overflow-hidden header-archive-root2">
  <div class="overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto">
        <div class="header-archive-imgRow">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'header-blog'])
        </div>
        <div class="header-archive-content">
          <h1 class="header-archive-title">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $description !!}</span>
        </div>
        <div class="header-archive-nav">
          <x-Items label="{!! $category_label !!}" type="block" />
        </div>
      </div>
    </header>
  </div>
</div>
@include('partials.nav-fixed')