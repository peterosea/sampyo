<main class="sampyoGroup__page business__page pb-0">
<div class="container lg:max-w-screen-lg mx-auto">
  <div class="coverbox-full left py-24 mb-24">
    <div class="business__page-title mb-8">
      삼표의 지칠줄 모르는 변화와 도전의 노력은 계속됩니다.
    </div>
    <p>
      사업 경쟁력 확보에 철저합니다. 신제품 및 신사업 개발과 지속가능성(Sustainability)의 관점을 통합합니다.<br/>
      외부 파트너와 적극적으로 협업하면서 사회적 가치와 경제적 가치를 함께 추구합니다.
    </p>
  </div>
  <div class="flex -mx-6 mb-32 relative pt-24">
    <div class="w-1/2 px-6 absolute left-0 top-0">
      <img
        src="@php echo get_theme_file_uri('resources/images/sampyo-group-history-1.jpg') @endphp"
        srcset="
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-1@2x.jpg') @endphp 2x,
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-1@3x.jpg') @endphp 3x"
        alt=""
      >
    </div>
    <div class="w-1/3 px-6">
    </div>
    <div class="w-2/3 px-6 relative z-10 py-12 pl-16 bg-white">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          2020’s
        </div>
        <ul>
          @foreach ($history['2020'] as $item)
            <li class="flex mb-4 gap-x-7">
              <div class="font-bold text-lg w-24">{!! $item['date'] !!}</div>
              <p>
                {!! $item['title'] !!}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="flex -mx-6 mb-32 relative pt-24">
    <div class="w-1/2 px-6 absolute right-0 top-0">
      <img
        src="@php echo get_theme_file_uri('resources/images/sampyo-group-history-2.jpg') @endphp"
        srcset="
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-2@2x.jpg') @endphp 2x,
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-2@3x.jpg') @endphp 3x"
        alt=""
      >
    </div>
    <div class="w-2/3 px-6 relative z-10 py-12 pr-16 bg-white flex flex-col gap-y-24">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          2010’s
        </div>
        <ul>
          @foreach ($history['2010'] as $item)
            <li class="flex mb-4 gap-x-7">
              <div class="font-bold text-lg w-24">{!! $item['date'] !!}</div>
              <p>
                {!! $item['title'] !!}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="w-1/3 px-6">
    </div>
  </div>
  <div class="flex -mx-6 mb-32 relative pt-24">
    <div class="w-1/2 px-6 absolute left-0 top-0">
      <img
        src="@php echo get_theme_file_uri('resources/images/sampyo-group-history-3.jpg') @endphp"
        srcset="
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-3@2x.jpg') @endphp 2x,
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-3@3x.jpg') @endphp 3x"
        alt=""
      >
    </div>
    <div class="w-1/3 px-6">
    </div>
    <div class="w-2/3 px-6 relative z-10 py-12 pl-16 bg-white">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          2020’s
        </div>
        <ul>
          @foreach ($history['2020'] as $item)
            <li class="flex mb-4 gap-x-7">
              <div class="font-bold text-lg w-24">{!! $item['date'] !!}</div>
              <p>
                {!! $item['title'] !!}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="flex -mx-6 mb-32 relative pt-24">
    <div class="w-1/2 px-6 absolute right-0 top-0">
      <img
        src="@php echo get_theme_file_uri('resources/images/sampyo-group-history-4.jpg') @endphp"
        srcset="
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-4@2x.jpg') @endphp 2x,
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-4@3x.jpg') @endphp 3x"
        alt=""
      >
    </div>
    <div class="w-2/3 px-6 relative z-10 py-12 pr-16 bg-white flex flex-col gap-y-24">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1990’s
        </div>
        <ul>
          @foreach ($history['1990'] as $item)
            <li class="flex mb-4 gap-x-7">
              <div class="font-bold text-lg w-24">{!! $item['date'] !!}</div>
              <p>
                {!! $item['title'] !!}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="w-1/3 px-6">
    </div>
  </div>
  <div class="flex -mx-6 mb-32 relative pt-24">
    <div class="w-1/2 px-6 absolute left-0 top-0">
      <img
        src="@php echo get_theme_file_uri('resources/images/sampyo-group-history-5.jpg') @endphp"
        srcset="
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-5@2x.jpg') @endphp 2x,
          @php echo get_theme_file_uri('resources/images/sampyo-group-history-5@3x.jpg') @endphp 3x"
        alt=""
      >
    </div>
    <div class="w-1/3 px-6">
    </div>
    <div class="w-2/3 px-6 relative z-10 py-12 pl-16 bg-white flex flex-col gap-y-24">
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1980’s
        </div>
        <ul>
          @foreach ($history['1980'] as $item)
            <li class="flex mb-4 gap-x-7">
              <div class="font-bold text-lg w-24">{!! $item['date'] !!}</div>
              <p>
                {!! $item['title'] !!}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1970’s
        </div>
        <ul>
          @foreach ($history['1970'] as $item)
            <li class="flex mb-4 gap-x-7">
              <div class="font-bold text-lg w-24">{!! $item['date'] !!}</div>
              <p>
                {!! $item['title'] !!}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="historybox">
        <div class="historybox__title pointUnderLine font-bold text-4xl mb-12" style="--bs: var(--RGB-atmosphere); --h: -0.4em">
          1960’s
        </div>
        <ul>
          @foreach ($history['1960'] as $item)
            <li class="flex mb-4 gap-x-7">
              <div class="font-bold text-lg w-24">{!! $item['date'] !!}</div>
              <p>
                {!! $item['title'] !!}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
</main>