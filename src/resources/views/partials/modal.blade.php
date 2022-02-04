@isset($popup)
  @if ($popup->visibility)
    <div x-data="{
      popup_{!! $popup->ID !!}: Cookies.get('popup_{!! $popup->ID !!}') === undefined ? true : Cookies.get('popup_{!! $popup->ID !!}') === 'true'
    }">
      <div id="bgMask" class="fixed top-0 bottom-0 left-0 right-0 w-full h-full bg-black opacity-50" x-cloak x-show="popup_{!! $popup->ID !!}" style="z-index: 9010"></div>
      <section id="modal" class="flex items-center justify-center">
        <div
          class="fixed z-50 max-h-full w-auto transform top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
          style="z-index: 9020"
          x-show="popup_{!! $popup->ID !!}"
          x-cloak
          @click.away="popup_{!! $popup->ID !!} = false"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 transform scale-90"
          x-transition:enter-end="opacity-100 transform scale-100"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 transform scale-100"
          x-transition:leave-end="opacity-0 transform scale-90"
          >
          <div class="bg-white md:rounded shadow-2xl @if(!$popup->isImage) p-[63px] pt-[80px] @else pb-[46px] @endif overflow-y-auto">
            <button class="bg-atmosphere w-[40px] h-[40px] flex items-center justify-center absolute right-0 top-0 focus:ring-0 outline-none focus:outline-none" @click.prevent="popup_{!! $popup->ID !!} = false;"><svg class="w-[26px] h-[26px]" id="Icons" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg" fill="#fff"><path d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z"/></svg></button>
            <div>
              {!! $popup->content !!}
            </div>
            <label class="cursor-pointer absolute bottom-[16px] left-[16px] text-[14px] flex items-center gap-x-[8px] leading-none" @click.prevent="Cookies.set('popup_{!! $popup->ID !!}', false, { expires: 1 }); popup_{!! $popup->ID !!} = false">
              <input type="checkbox">
              <span>오늘하루그만보기</span>
            </label>
          </div>
        </div>
      </section>
    </div>
  @endif
@endisset
