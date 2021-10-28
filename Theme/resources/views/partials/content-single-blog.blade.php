@include('partials.header-archive-newsroom')
@include('partials.nav-fixed')
<main class="page__layout">
<div class="container mx-auto xl:max-w-screen-xl">
  <article @php(post_class())>
    <header>
      @if (!empty($categories))
        <ul class="card-def-cat">
          @foreach ($categories as $item)
            <li class="card-def-cat-item">
              <a href="/blog/{{ $item->slug }}">
                <span>{{ $item->name }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      @endif
      <h1 class="entry-title">
        {!! $title !!}
      </h1>
  
      <div class="card-def-meta">
        <div class="card-def-date">
          @include('partials/entry-meta')
        </div>
        <div class="card-def-share"></div>
      </div>
    </header>
  
    <div class="entry-content prose font-normal">
      <div class="mx-auto max-w-[820px]">
        @php(the_content())
      </div>
    </div>
  
    <footer>
        {!! $pagination !!}
    </footer>
  
    @php(comments_template())
  </article>
</div>
</main>