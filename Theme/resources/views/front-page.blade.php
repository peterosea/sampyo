@extends('layouts.app')

@section('content')
<div class="section hero">
  <div class="xl:container mx-auto px-0">
    <div class="swiper-container hero-slide">
      <div class="swiper-wrapper">
        @foreach ($heroSlide as $item)
          <div class="swiper-slide">
            <div class="hero-img-wrap">
              <a href="{!! $item->guid !!}" class="hero-img-readmore">
                @include('partials.img', ['ex' => 'png', 'name' => 'readmore', 'class' => 'hidden sm:block'])
                @include('partials.img', ['ex' => 'png', 'name' => 'readmore-mobile', 'class' => 'block sm:hidden'])
              </a>
            </div>
            <div class="hero-content hero-content-wrap px-7 lg:px-12 2xl:px-0">
              <h1 class="hero-content-title-1">
                {!! $item->title !!}
              </h1>
              <div class="hero-content-title-2 prose">
                {!! $item->description !!}
              </div>
            </div>
          </div>
        @endforeach
        <div class="hero-slide-wrap">
          <video autoplay loop muted playsinline>
            <source src="{!! $heroVideo !!}" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="hero-slide-pagination swiper-pagination"></div>
    </div>
  </div>
</div>
<div class="section home__s1  overflow-hidden">
  <div class="container mx-auto relative">
    <div class="absolute w-screen h-full transform left-1/2 -translate-x-1/2">
      @include('partials.img', ['ex' => 'png', 'name' => 'txt-business-03-hover', 'class' => 'absolute top-[150px] left-1/2 hidden sm:block'])
      @include('partials.img', ['ex' => 'png', 'name' => 'label', 'class' => 'absolute bottom-0 hidden sm:block'])
    </div>
    <div class="home__s1-header">
      <div class="home__s1-title text-[36px] sm:text-6xl font-black mb-[15px]">비즈니스</div>
      <p class="home__s1-header-content break-words">끊임없는 도전과 창조적인 혁신을 통해 지속가능한 Building Materials의 기초를 만들어갑니다.</p>
    </div>
    <div id="macy-container">
      <div class="home__s1-imgCol-1"></div>
      @include('partials.card-flip', ['cat' => array_shift($business) ])
      <div class="home__s1-imgCol-3 hidden xl:block"></div>
      @include('partials.card-flip', ['cat' => array_shift($business) ])
      @include('partials.card-flip', ['cat' => array_shift($business) ])
      @include('partials.card-flip', ['cat' => array_shift($business) ])
      @include('partials.card-flip', ['cat' => array_shift($business) ])
    </div>
    <div id="swiper-container">
    </div>
  </div>
</div>
<div class="section home__s23 sm:bg-lighthouse">
  <div class="section home__s2">
    <div id="swiperBgRoot" class="swiper-root-bg">
      <div class="swiper-wrapper">
        @foreach ($newsroom as $id => $pt)
          <div class="swiper-slide">
            <div id="swiperBgChild" class="card-content-swiper-bg" data-id="{{$id}}">
              <div class="swiper-wrapper">
                @foreach ($pt as $post)
                  <div class="swiper-slide">
                    @if(!empty($post->thumbnail))
                      <img class="card-content-thumbnail" src="{{ $post->thumbnail }}" alt="">
                    @else
                      @include('partials.img', ['ex' => 'jpg', 'name' => $newsroomBg[$id], 'class' => 'card-content-thumbnail' ])
                    @endif
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex lg:py-32 flex-wrap">
        <div class="w-full order-2 lg:order-1 lg:w-1/2 xl:w-3/5 text-white">
          <div id="swiperContentRoot" class="h-full">
            <div class="swiper-wrapper">
              @foreach ($newsroom as $id => $pt)
                <div class="swiper-slide overflow-hidden">
                  <div class="card-content">
                    <div id="swiperContentChild" data-id="{{$id}}">
                      <div class="swiper-wrapper">
                        @php($index = 0)
                        @foreach ($pt as $post)
                          <div class="swiper-slide" data-index="{{$index}}">
                            <div data-id="{{ $post->ID }}"class="card-content-body">
                              <div class="card-content-title">
                                {!! $post->post_title !!}
                              </div>
                              <div class="card-content-content prose text-sm sm:text-base">
                                {!! $post->excerpt !!}
                              </div>
                              <div class="card-content-more text-sm sm:text-base"> 
                                <a href="{{ $post->permalink }}">더보기</a>
                              </div>
                            </div>
                          </div>
                          @php($index++)
                        @endforeach
                        @php($index = 0)
                      </div>
                    </div>
                    <div class="card-content-footer"> 
                      <a href="javascript:;" class="relative inline-flex items-center py-2 prev">
                          <!-- Heroicon name: solid/chevron-left -->
                          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                          </svg>
                          <span>PRE</span>
                        </a>
                        <a href="javascript:;" class="relative inline-flex items-center py-2 next">
                          <span>NEXT</span>
                          <!-- Heroicon name: solid/chevron-right -->
                          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                          </svg>
                        </a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="w-full order-1 lg:order-2 lg:w-1/2 xl:w-2/5 relative">
          <div class="box-content py-8 lg:py-16 px-[40px] lg:px-20 bg-white lg:bg-transparent">
            <div class="box-content-inner">
              <ul id="tab" class="flex tab-wrap">
                <li data-id="blog" class="tab-item active">
                  <a href="javascript:;">블로그</a>
                </li>
                <li data-id="media" class="tab-item">
                  <a href="javascript:;">미디어</a>
                </li>
                {{-- <li data-id="notice-board" class="tab-item">
                  <a href="javascript:;">공지</a>
                </li> --}}
              </ul>
              <div id="tab-content" class="hidden lg:block">
                @foreach ($newsroom as $id => $pt)
                  <ul id="postBox" data-id="{{$id}}" @if ($id === "blog") class="active" @endif>
                    @foreach ($pt as $key=>$post)
                      <li data-id="{{ $post->ID }}" class="li__s1 @if ($key === 0) active @endif">
                        @if (count($post->category) > 0)
                          <ul class="li__s1-cat">
                            @foreach ($post->category as $cat)
                              <li class="li__s1-cat-item">{{ $cat->name }}</li>
                            @endforeach
                          </ul>
                        @endif
                        <div class="li__s1-body">
                          <div class="li__s1-content">
                            {{ $post->post_title }}
                          </div>
                          <div class="li__s1-etc"> 
                            <a href="{{ $post->permalink }}" class="li__s1-btn">
                                <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                                  l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                                  c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                                  c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                                  S1.293,9.212,1.729,9.212z"></path>
                                </svg>
                            </a>
                          </div>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section home__s3 relative overflow-hidden">
    <div class="absolute top-0 w-full h-full left-0">
      @include('partials.img', ['ex' => 'png', 'name' => 'main-s3-01', 'class' => 'absolute top-0 transform -translte-y-[50px] hidden sm:block'])
    </div>
    <div class="container mx-auto relative">
      <div class="home__s3-header">
        <div class="home__s3-title">삼표의 지속가능경영</div>
        <div class="home__s3-description">
          삼표는 사람 사회 세상에 기여하는 경영이념을 바탕으로<br/>
          풍요로운 미래를 위한 지속적인 노력을 아끼지 않고 있습니다.
        </div>
      </div>
      <div class="home__s3-body">
        <div id="originalS3" class="hidden sm:flex">
          <div id="cardWrap" class="w-1/3 flex justify-center">
            @php($post = array_shift($sustainability))
            <div class="card__s1">
              <div data-scrollreveal class="card__s1-thumbnail"><img src="{{ get_theme_file_uri('resources/images/53.svg') }}"></div>
              <div class="card__s1-body">
                <div class="card__s1-title">{!! $post->post_title !!}</div>
                <div class="card__s1-content">
                  정부의 탄소중립 선언과 그린뉴딜 정책에<br/>
                  발맞춰 ‘친환경 기업’으로 도약해 나가는<br/>
                  삼표의 미래를 위한 이야기
                </div>
                <div class="card__s1-etc">
                  <a href="{!! $post->permalink !!}" class="card__s1-btn">
                    <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                    l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                    c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                    c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                    S1.293,9.212,1.729,9.212z"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="cardWrap" class="w-1/3 flex justify-center">
            @php($post = array_shift($sustainability))
            <div class="card__s1">
              <div data-scrollreveal class="card__s1-thumbnail"><img src="{{ get_theme_file_uri('resources/images/57.svg') }}"></div>
              <div class="card__s1-body">
                <div class="card__s1-title">{!! $post->post_title !!}</div>
                <div class="card__s1-content">
                  ‘기업과 사회가 함께하는 것이<br/>
                  진정한 행복’이라는 믿음 아래 실천중인<br/>
                  삼표의 ‘나눔경영’
                </div>
                <div class="card__s1-etc">
                  <a href="{!! $post->permalink !!}" class="card__s1-btn">
                    <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                    l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                    c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                    c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                    S1.293,9.212,1.729,9.212z"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="cardWrap" class="w-1/3 flex justify-center">
            @php($post = array_shift($sustainability))
            <div class="card__s1">
              <div data-scrollreveal data-sr-delay="300" class="card__s1-thumbnail"><img src="{{ get_theme_file_uri('resources/images/56.svg') }}"></div>
              <div class="card__s1-body">
                <div class="card__s1-title">{!! $post->post_title !!}</div>
                <div class="card__s1-content">
                  자원과 에너지의 효율적 이용과 더불어<br/>
                  안전한 사업장 운영을 위한 노력
                </div>
                <div class="card__s1-etc">
                  <a href="{!! $post->permalink !!}" class="card__s1-btn">
                    <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                    l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                    c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                    c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                    S1.293,9.212,1.729,9.212z"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="swipercontainerS3" class="block sm:hidden overflow-hidden">
          <div class="swiper-pagination s3 pagination__s1 static mt-7 pt-0.5"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section home__s45">
  <div class="section home__s4 sm:mb-32">
    <div class="container mx-auto flex flex-wrap sm:block sm:mb-[150px]">
      <ul id="originalS4" class="home__s4-container hidden sm:flex relative z-10">
        @foreach ($career as $item)
          <li data-scrollreveal id="cardWrap" class="w-1/3">
            <a href="{!! $item->permalink !!}">
              <div class="card__s2">
                <div class="card__s2-header">
                  <div class="arrow max:sm:w-[52px]">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDkgNTEyLjAwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHNjcmlwdD48L3NjcmlwdD4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik01MDguNjI1LDI0Ny44MDFMNTA4LjYyNSwyNDcuODAxTDM5Mi4yNjIsMTMxLjQzN2MtNC4xOC00Ljg4MS0xMS41MjYtNS40NS0xNi40MDctMS4yNjkgICAgYy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN2MwLjM5LDAuNDU1LDAuODE0LDAuODgsMS4yNjksMS4yNjlsOTYuNDY1LDk2LjU4MkgxMS42MzZDNS4yMSwyNDQuNDI2LDAsMjQ5LjYzNiwwLDI1Ni4wNjMgICAgczUuMjEsMTEuNjM2LDExLjYzNiwxMS42MzZINDcyLjMybC05Ni40NjUsOTYuNDY1Yy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN3MxMS41MjYsNS40NSwxNi40MDcsMS4yNjkgICAgYzAuNDU1LTAuMzksMC44OC0wLjgxNCwxLjI2OS0xLjI2OWwxMTYuMzY0LTExNi4zNjRDNTEzLjEzNywyNTkuNjcsNTEzLjEzNywyNTIuMzQsNTA4LjYyNSwyNDcuODAxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4="/>
                  </div>
                </div>
                <div class="card__s2-body">
                  <div class="card__s2-title">{!! $item->post_title !!}</div>
                  <div class="card__s2-content">{!! $item->post_excerpt !!}</div>
                </div>
                <div class="card__s2-bg">
                  {!! $item->thumbnail !!}
                </div>
              </div>
            </a>
          </li>
        @endforeach
      </ul>
      <div id="swipercontainerS4" class="block sm:hidden order-2 w-full z-10 relative"></div>
      <div class="home__s4-content text-white order-1 static sm:absolute z-50 text-center sm:text-left mb-[60px] sm:mb-0 max:sm:mx-auto">
        <div class="home__s4-title text-[36px] sm:text-[56px]">인재채용</div>
        <div class="home__s4-description text-[14px] sm:text-[22px]">
          변화를 주도하며 창의적인 사고를 가진 삼표인과 함께<br/>
          더 큰 미래를 향해 성장해나갑니다.
        </div>
      </div>
    </div>
  </div>
  <div class="section home__s5 mt-[10px] sm:mt-0 max:sm:pb-2.5">
    <div class="newsroom__newsletter">
      <div class="container mx-auto mb-[30px]">
        <x-Newsletter />
      </div>
    </div>
    <div class="container mx-auto mt-14 max:sm:px-0">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
        <a href="https://smart.sampyo.co.kr/main/group/introduction" target="_blank" rel="noopener noreferrer">
          <div class="card__s3 max:sm:py-[54px] max:sm:px-[30px]">
            <div class="card__s3-body">
              <div class="card__s3-title text-2xl sm:text-[32px]">사업장 정보</div>
              <div class="card__s3-content text-[12px] sm:text-base">삼표삼표그룹 계열사들의 사업장 정보를 조회하실 수 있습니다.</div>
            </div>
            <div class="card__s3-bg nonDim">
              @include('partials.img', ['ex' => 'jpg', 'name' => '3340'])
            </div>
          </div>
        </a>
        <a href="https://smart.sampyo.co.kr/" target="_blank" rel="noopener noreferrer">
          <div class="card__s3 max:sm:py-[54px] max:sm:px-[30px]">
            <div class="card__s3-body">
              <div class="card__s3-title text-2xl sm:text-[32px]">SMART 삼표</div>
              <div class="card__s3-content text-[12px] sm:text-base">자체시험성적표/제품 주문 등 다양한 자료와 정보를 제공합니다.</div>
            </div>
            <div class="card__s3-bg nonDim">
              @include('partials.img', ['ex' => 'jpg', 'name' => '3341'])
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection