<div class="sm:overflow-hidden header-archive-root2">
  <div class="sm:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto max:sm:px-0">
        <div class="header-archive-imgRow">
          @if ($thumbnail)
            {!! $thumbnail !!}
          @else
            @include('partials.img', ['ex' => 'jpg', 'name' => 'header-blog', 'class' => 'header-archive-img'])
          @endif
        </div>
        <div class="header-archive-content max:sm:px-8 max:sm:w-full">
          <h1 class="header-archive-title text-36px sm:text-70px mb-5px sm:mb-18px">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $description !!}</span>
        </div>
      </div>
    </header>
  </div>
</div>