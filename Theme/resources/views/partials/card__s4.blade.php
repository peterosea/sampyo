<div class="card__s4">
  <div class="card__s4-thumbnail">
    @include('partials.img', ['ex' => 'jpg', 'name' => 'ready-mix-li-'.$index.'-1'])
  </div>
  <div class="card__s4-body">
    <div class="card__s4-title font-bold">{!! $item !!}</div>
    <div class="card__s4-logo">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'ready-mix-li-'.$index.'-2'])
    </div>
  </div>
</div>