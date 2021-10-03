<div class="sm:overflow-hidden header-archive-root2">
  <div class="sm:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto max:sm:px-0">
        <div class="header-archive-imgRow" @if(!empty($acf['outlink'])) style="margin-bottom: 75px" @endif>
          @if (!empty($thumbnail))
              {!! $thumbnail !!}
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content max:sm:px-8 max:sm:w-full @if(empty($acf['outlink'])) top-1/2 @endif">
          <div x-data="select({label: '{!! $fixedMenuLabel !!}', selected: {!! $selected !!}})" class="w-full relative mb-px-30 sm:hidden flex">
            <div class="depth-1 relative flex-1">
              <button class="flex items-center justify-between w-full px-3 py-3 text-left border focus:outline-none border-r-0"
                @click="toggle()"
                @click.away="close()">
                <span x-text="label" class="text-xs"></span>
                <svg width="11.107" height="11.107">
                  <path d="M0 .067 7.345 0l-.068 7.345" transform="rotate(135 4.297 4.826)" style="fill:none;stroke:#fff"/>
                </svg>
              </button>
              <ul x-show="dropdown" x-cloak class="absolute w-full z-50 shadow divide-y bg-white">
                @foreach ($fixedMenu as $item)
                  @if ($item->term_taxonomy_id)
                    <li class="items-fixed-item">
                      <a href="javascript:;" 
                        @click="selectOption('{!! $item->name !!}'); selected !== {!! $item->term_taxonomy_id !!} ? selected = {!! $item->term_taxonomy_id !!} : selected = null"
                        class="p-3 block text-lg @if ($item->term_taxonomy_id === get_the_ID()) color-point @endif"
                      >
                        {{ $item->name }}
                      </a>
                    </li>
                  @else
                    <li class="items-fixed-item">
                      <a href="{!! $item->permalink !!}" class="block text-lg @if ($item->ID === get_the_ID()) current @endif">{!! $item->post_title !!}</a>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
            <div class="depth-2 relative flex-1">
              @foreach ($fixedMenu as $item)
                @if ($item->term_taxonomy_id)
                  <div
                    x-show="selected === {!! $item->term_taxonomy_id !!}"
                    x-cloak
                  > 
                    <div x-data="{
                        @foreach ($item->children as $child)
                          @if ($child->post_title === $title)
                            label2: '{{$child->post_title}}',
                            @break
                          @endif
                        @endforeach
                      placeholder: '{{ current($item->children)->post_title }}',
                      dropdown: false
                    }">
                      <button class="flex items-center justify-between w-full px-3 py-3 text-left border focus:outline-none"
                        @click="dropdown = !dropdown"
                        @click.away="dropdown = false">
                        <template x-if="label2">
                          <span x-text="label2" class="text-xs"></span>
                        </template>
                        <span x-text="placeholder" class="text-xs"></span>
                        <svg width="11.107" height="11.107">
                          <path d="M0 .067 7.345 0l-.068 7.345" transform="rotate(135 4.297 4.826)" style="fill:none;stroke:#fff"/>
                        </svg>
                      </button>
                      <ul
                        class="items-fixed-child absolute w-full z-50 shadow divide-y bg-white mt-0 gap-0"
                        x-show="dropdown"
                        x-cloak
                      >
                        @foreach ($item->children as $child)
                          <li class="items-fixed-item">
                            <a href="{{ $child->permalink }}" class="p-3 block text-lg @if ($child->ID === get_the_ID()) current @endif">{{ $child->post_title }}</a>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
          <h1 class="header-archive-title text-px-36 sm:text-px-70 mb-px-5 sm:mb-px-18">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $excerpt !!}</span>
        </div>
        @if(!empty($acf['outlink']))
          <div class="header-archive-nav hidden sm:block bg-transparent translate-y-1/2">
            <ul>
              <li class="items-block-item-2">
                <a class="text-white" href="{!! $acf['outlink'] !!}">홈페이지 바로가기</a>
              </li>
            </ul>
          </div>
        @endif
      </div>
    </header>
  </div>
</div>
<nav class="items-fixed hidden sm:block">
  <ul class="items-fixed-wrap" x-data="{
    selected: {!!$selected !!}
  }">
    @foreach ($fixedMenu as $item)
      @if ($item->term_taxonomy_id)
        <li class="items-fixed-item">
          <a href="javascript:;" 
            @click="selected !== {!! $item->term_taxonomy_id !!} ? selected = {!! $item->term_taxonomy_id !!} : selected = null"
            @if ($item->term_taxonomy_id === $selected) class="current" @endif
          >
            {{ $item->name }}
          </a>
          @if (count($item->children) > 0)
              <ul class="items-fixed-child" x-show="selected === {!! $item->term_taxonomy_id !!} || @if ($item->term_taxonomy_id === $selected) true @else false @endif">
                @foreach ($item->children as $child)
                  <li class="items-fixed-item">
                    <a href="{{ $child->permalink }}" @if ($child->ID === get_the_ID()) class="current" @endif>{{ $child->post_title }}</a>
                  </li>
                @endforeach
              </ul>
          @endif
        </li>
      @else
        <li class="items-fixed-item">
          <a href="{!! $item->permalink !!}" @if ($item->ID === get_the_ID()) class="current" @endif>{!! $item->post_title !!}</a>
        </li>
      @endif
    @endforeach
  </ul>
</nav>