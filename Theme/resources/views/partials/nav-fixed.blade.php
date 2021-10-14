<nav class="items-fixed hidden labtop:block">
  <ul class="items-fixed-wrap">
    <li class="items-fixed-item @if ($category_label === "blog_category") current @endif">
      <a href="/blog">블로그</a>
    </li>
    <li class="items-fixed-item @if ($category_label === "media_category") current @endif">
      <a href="/media">미디어</a>
    </li>
    {{-- TODO: 오픈후 공지사항 활성화 예정 --}}
    {{-- <li class="items-fixed-item @if (get_post_type() === "notice-board") current @endif">
      <a href="/notice-board">공지사항</a>
    </li> --}}
  </ul>
</nav>