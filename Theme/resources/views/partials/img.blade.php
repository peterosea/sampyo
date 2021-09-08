<img
  @if (!empty($class))
      class="{{ $class }}"
  @endif
  src="@php echo get_theme_file_uri('resources/images/'.$name.'.'.$ex) @endphp"
  @if ($ex !== 'svg')
  srcset="
    @php echo get_theme_file_uri('resources/images/'.$name.'@2x.'.$ex) @endphp 2x,
    @php echo get_theme_file_uri('resources/images/'.$name.'@3x.'.$ex) @endphp 3x"
  @endif
  alt=""
>