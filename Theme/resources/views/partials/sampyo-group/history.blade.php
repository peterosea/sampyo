<main class="sampyoGroup__page page__layout pb-0 max:sm:pt-0">
<div class="container xl:max-w-screen-xl mx-auto">
  <div class="coverbox-full left py-10 sm:py-24 mb-px-40 sm:mb-24">
    <div class="page__level-title mb-px-30 sm:mb-8">
      삼표의 지칠줄 모르는 변화와 도전의 노력은 계속됩니다.
    </div>
    <p>
      사업 경쟁력 확보에 철저합니다. 신제품 및 신사업 개발과 지속가능성(Sustainability)의 관점을 통합합니다.<br/>
      외부 파트너와 적극적으로 협업하면서 사회적 가치와 경제적 가치를 함께 추구합니다.
    </p>
  </div>
  <div class="flex max:sm:flex-wrap sm:-mx-6 mb-32 relative pt-px-10 sm:pt-24">
    <div class="w-full sm:w-1/2 sm:px-6 sm:absolute sm:left-0 sm:top-0 max:sm:mb-px-30">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-1'])
    </div>
    <div class="max:sm:hidden w-1/3 px-6"></div>
    <div class="w-full sm:w-2/3 sm:px-6 relative z-10 sm:py-12 sm:pl-16 bg-white">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-px-40 sm:text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          2020’s
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['2020'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="flex max:sm:flex-wrap sm:-mx-6 mb-32 relative pt-px-10 sm:pt-24">
    <div class="w-full sm:w-1/2 sm:px-6 sm:absolute sm:right-0 sm:top-0 max:sm:mb-px-30">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-2'])
    </div>
    <div class="w-full sm:w-2/3 sm:px-6 relative z-10 sm:py-12 sm:pl-16 bg-white">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-px-40 sm:text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          2010’s
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['2010'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
    </div>
    <div class="max:sm:hidden w-1/3 px-6"></div>
  </div>
  <div class="flex max:sm:flex-wrap sm:-mx-6 mb-32 relative pt-px-10 sm:pt-24">
    <div class="w-full sm:w-1/2 sm:px-6 sm:absolute sm:left-0 sm:top-0 max:sm:mb-px-30">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-3'])
    </div>
    <div class="max:sm:hidden w-1/3 px-6"></div>
    <div class="w-full sm:w-2/3 sm:px-6 sm:relative sm:z-10 sm:py-12 sm:pl-16 bg-white">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-px-40 sm:text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          2000’s
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['2000'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="flex max:sm:flex-wrap sm:-mx-6 mb-32 relative pt-px-10 sm:pt-24">
    <div class="w-full sm:w-1/2 sm:px-6 sm:absolute sm:right-0 sm:top-0 max:sm:mb-px-30">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-4'])
    </div>
    <div class="w-full sm:w-2/3 sm:px-6 sm:relative sm:z-10 sm:py-12 sm:pr-16 bg-white flex flex-col gap-y-24">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-px-40 sm:text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1990’s
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['1990'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
    </div>
    <div class="max:sm:hidden w-1/3 px-6"></div>
  </div>
  <div class="flex max:sm:flex-wrap sm:-mx-6 mb-32 relative pt-px-10 sm:pt-24">
    <div class="w-full sm:w-1/2 sm:px-6 sm:absolute sm:left-0 sm:top-0 max:sm:">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-5'])
    </div>
    <div class="max:sm:hidden w-1/3 px-6"></div>
    <div class="w-full sm:w-2/3 sm:px-6 sm:relative sm:z-10 sm:py-12 sm:pl-16 bg-white flex flex-col gap-y-px-30 sm:gap-y-24">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-px-40 sm:text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1980’s
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['1980'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-px-40 sm:text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1970’s
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['1970'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-px-40 sm:text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1960’s
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['1960'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</main>