@extends('layouts.app')

@section('content')
  @include('partials.header-archive-newsroom')
  @include('partials.nav-fixed')
  <main class="page__layout p-0">
    <div class="container xl:max-w-screen-xl mx-auto">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
      @endif
      <ul class="post-wrap">
        @while (have_posts()) @php(the_post())
          @include('partials.content-newsroom')
        @endwhile
      </ul>
    </div>

    @empty(!$pagination = get_the_posts_pagination( array(
      'mid_size' => 3,
      'prev_text' => __( '이전' ),
      'next_text' => __( '다음' ),
    )))
      <div class="container xl:max-w-screen-xl mx-auto">
        <div class="page-pagination-number">
          {!! $pagination !!}
        </div>
      </div>
    @endempty
  </main>
@endsection