<div class="py-10 border-b border-superSilver">
  @include('partials.card.__def', [
    'thumbnail' => $thumbnail,
    'permalink' => $permalink,
    'title' => relevanssi_the_title($echo = false),
    'excerpt' => $excerpt,
  ])
</div>
