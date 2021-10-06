<div class="overflow-hidden header-archive-root2">
  <div class="sm:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto max:sm:px-0">
        <div class="header-archive-imgRow">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'header-blog'])
        </div>
        <div class="header-archive-content max:sm:px-8 max:sm:w-full">
          <div x-data="select({label: '{!! $title !!}', selected: {!! $selected !!}})" class="w-full relative mb-30px sm:hidden flex">
            <div class="depth-1 relative flex-1">
              <button class="flex items-center justify-between w-full px-3 py-3 text-left border focus:outline-none @if (get_post_type() !== 'notice-board') border-r-0 @endif"
                @click="toggle()"
                @click.away="close()">
                <span x-text="label" class="text-xs"></span>
                <svg width="11.107" height="11.107">
                  <path d="M0 .067 7.345 0l-.068 7.345" transform="rotate(135 4.297 4.826)" style="fill:none;stroke:#fff"/>
                </svg>
              </button>
              <ul x-show="dropdown" x-cloak class="absolute w-full z-50 shadow divide-y bg-white">
                @foreach ($fixedMenu as $item)
                  <li class="items-fixed-item">
                    <a href="{!! $item->permalink !!}" class="p-3 block text-lg">{!! $item->label !!}</a>
                  </li>
                @endforeach
              </ul>
            </div>
            @if (get_post_type() !== 'notice-board')
              <div class="depth-2 relative flex-1">
                @foreach ($fixedMenu as $item)
                  @isset($item->children)
                    <div
                      x-show="@if (current($item->children)->taxonomy === $category_label) true @else false @endif"
                      x-cloak
                    > 
                      <div x-data="{
                          @foreach ($item->children as $child)
                            @if ($child->name === $title)
                              label2: '{{$child->name}}',
                              @break
                            @endif
                          @endforeach
                        placeholder: '{{ current($item->children)->name }}',
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
                              <a href="{{ $child->link }}" class="p-3 block text-lg @if ($child->ID === get_the_ID()) current @endif">{{ $child->name }}</a>
                            </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  @endisset
                @endforeach
              </div>
            @endif
          </div>
          <h1 class="header-archive-title text-36px sm:text-70px mb-5px sm:mb-18px">@if (is_archive()) {!! $title !!} @else {!! $title !!} @endif</h1>
          <span class="header-archive-description">{!! $description !!}</span>
        </div>
        @if (get_post_type() !== 'notice-board')
          <div class="header-archive-nav hidden sm:block">
            <x-Items label="{!! $category_label !!}" type="block" />
          </div>
        @endif
      </div>
    </header>
  </div>
</div>
