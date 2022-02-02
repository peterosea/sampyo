@extends('layouts.app')

@section('content')
  <main class="page__layout" style="--absolute-margin-left: 0px">
    <div class="pb-[70px] sm:pb-24"></div>
    <div class="container xl:max-w-screen-xl mx-auto">
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('죄송합니다. 보려는 페이지가 존재하지 않습니다.', 'sage') !!}
      </x-alert>

      {!! get_search_form(false) !!}
    @endif
    </div>
  </main>
@endsection
