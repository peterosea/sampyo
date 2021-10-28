<div class="card-flip swiper-slide" data-scrollreveal>
  <div class="card-flip-area">
    <div class="card-flip-front">
      <div class="card-flip-title">{!! $cat->name !!}</div>
      <div class="card-flip-content">
        <p>{!! $cat->description !!}</p>
      </div>
    </div>
    <div class="card-flip-back">
      <ul class="card-flip-cat max:sm:text-[16px] max:sm:text-bold max:sm:gap-[12px]">
        @foreach($cat->children as $businessCat)
          <li>
            <a href="{!! $businessCat->permalink !!}">{!! $businessCat->post_title !!}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="card-flip-bg">
    @if (!empty($cat->thumbnail))
        <img src="{!! $cat->thumbnail !!}" alt="">
    @else
        <img src="https://picsum.photos/600?random={!! $cat->ID !!}" alt="">
    @endif
  </div>
</div>