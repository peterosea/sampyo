<ul class="items-block">
  @if (!empty($terms) && !is_wp_error($terms))
    @foreach ($terms as $term)
        <li class="items-block-item">
          @php($class = in_array($term->term_id, $current) ? 'current ' : '')
          <a href="{!! get_term_link($term) !!}" class="{!! $class !!}">{{ $term->name }}</a>
        </li>
    @endforeach
  @endif
</ul>