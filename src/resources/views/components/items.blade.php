<ul>
  @foreach ($terms as $term)
    <li class="items-block-item">
      <a href="{!! get_term_link($term) !!}">{{ $term->name }}</a>
    </li>
  @endforeach
</ul>