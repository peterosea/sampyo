@php
$link;
switch ($item) {
  case '바닥 콘크리트':
    $link = 'floor';
    break;
  case '내한 콘크리트':
    $link = 'winter';
    break;
  case '조강 콘크리트':
    $link = 'speed';
    break;
  case '자기충전 콘크리트':
    $link = 'self';
    break;
  case '20mm 콘크리트':
    $link = 'easy';
    break;
  default:
    $link = ''; 
    break;
}
@endphp
<div class="card__s4">
  <div class="card__s4-thumbnail">
    @include('partials.img', ['ex' => 'jpg', 'name' => 'ready-mix-li-'.$index.'-1'])
  </div>
  <div class="card__s4-body">
    <a href="/business/blue-con#{{ $link }}" class="card__s4-title font-bold">{!! $item !!}</a>
    <div class="card__s4-logo">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'ready-mix-li-'.$index.'-2'])
    </div>
  </div>
</div>