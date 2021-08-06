<nav class="items-fixed">
  <ul class="items-fixed-wrap">
    <li class="items-fixed-item @if ($category_label === "blog_category") current @endif">
      <a href="/blog">블로그</a>
    </li>
    <li class="items-fixed-item @if ($category_label === "press_category") current @endif">
      <a href="/press">프레스</a>
    </li>
  </ul>
</nav>