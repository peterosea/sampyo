@include('partials.header-single-business')
@includeFirst(['partials.business.'. $slug, 'partials.content-single'])
@if ($acf)
  @include('partials.footer-single-business')
@endif