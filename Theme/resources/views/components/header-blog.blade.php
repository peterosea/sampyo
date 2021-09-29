<div class="sm:overflow-hidden header-archive-root2">
  <div class="sm:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto mx_sm:px-0">
        <div class="header-archive-imgRow">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'header-blog'])
        </div>
        <div class="header-archive-content mx_sm:px-8 mx_sm:w-full">
          <h1 class="header-archive-title text-px-36 sm:text-px-70 mb-px-5 sm:mb-px-18">{!! $title !!}</h1>
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