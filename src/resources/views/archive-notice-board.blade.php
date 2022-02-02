@extends('layouts.app')

@section('content')
  @include('partials.header-archive-newsroom')
  @include('partials.nav-fixed')
  <main class="page__layout p-0">
    <div class="container xl:max-w-screen-xl mx-auto">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('죄송합니다. 검색된 결과가 없습니다.', 'sage') }}
        </div>
      @endif
      <ul class="border-t mt-20 mb-28">
        @while (have_posts()) @php(the_post())
          @include('partials.content-noticeBoard')
        @endwhile
      </ul>
    </div>

    @empty(!$pagination = get_the_posts_pagination( array(
      'mid_size' => 2,
      'prev_text' => __( '이전', 'sage' ),
      'next_text' => __( '다음', 'sage' ),
    )))
      <div class="container xl:max-w-screen-xl mx-auto">
        <div class="page-pagination-number">
          {!! $pagination !!}
        </div>
      </div>
    @endempty
  </main>
@endsection
