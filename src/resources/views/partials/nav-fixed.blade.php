<nav
  id="fixedMenu"
  class="items-fixed hidden labtop:block"
  :class="{'absolute bottom-72 footerFixed': footerShown}"
>
  <ul class="items-fixed-wrap">
    <li class="items-fixed-item @if ($category_label === "blog_category") current @endif">
      <a href="{{ home_url('/blog') }}">블로그</a>
    </li>
    <li class="items-fixed-item @if ($category_label === "media_category") current @endif">
      <a href="/media">미디어</a>
    </li>
    <li class="items-fixed-item @if (get_post_type() === "notice-board") current @endif">
      <a href="/notice-board">자료실</a>
    </li>
  </ul>
</nav>