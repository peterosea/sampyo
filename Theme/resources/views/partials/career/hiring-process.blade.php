<main class="career__page business__page">
<div class="container lg:max-w-screen-lg mx-auto">
  <div class="business__page-title mb-8">
    신입사원 채용 프로세스
  </div>
  <div class="mb-14"></div>
  <ul class="flex gap-x-2.5">
    @foreach (['지원서 접수', '서류전형', '인성검사', '면접전형', '건강검진전형', '최종합격'] as $key => $item)
    <li class="flex-1">
      <div class="card__house bg-lighthouse right mb-3">
        <div class="card__house-inner h-24 flex flex-col items-center justify-center p-8">
          <img src="{{ get_theme_file_uri('resources/images/career-hiringprocess-'. $key .'.svg') }}" alt="">
        </div>
      </div>
      <div class="prose mr-8 text-center">
        <p>
          {{ $item }}
        </p>
      </div>
    </li>
    @endforeach
  </ul>
  <div class="mb-20"></div>
  <div class="grid grid-flow-col grid-cols-2 grid-rows-3 gap-x-12 gap-y-11">
    @foreach ([
      [
        "title" => "지원서 접수",
        "content" => "대졸신입 채용 지원자는 정해진 기간에 채용홈페이지를 접속하여 온라인 입사지원서를 접수시켜야 합니다. 지원서 접수 시 본인의 적성과 흥미에 따른 관심 직무를 선정하고, 해당 직무가 속한 직무군을 선택하여 지원서를 최종 접수합니다."
      ],
      [
        "title" => "서류전형",
        "content" => "지원서의 각 항목에 기재된 내용과 자기소개서를 바탕으로, 지원자가 지원직무와 회사에 적합한 자격, 경험, 열정을 가진 인재인지를 종합적으로​ 평가합니다."
      ],
      [
        "title" => "인성검사",
        "content" => "뇌 과학 기반의 온라인 인성검사를 적용하여, 신뢰역량, 성과역량, 가치역량을 기반으로 지원자의 성장 가능성을 종합적으로 평가합니다.​"
      ],
      [
        "title" => "면접전형",
        "content" => "실제 업무를 수행하기 위한 능력과 열정, 전략적 사고역량, 실무역량 등을 평가하는 면접이 진행됩니다. 면접 진행방식은 일대다 방식이며, 인성평가가 병행됩니다. (30분~1시간 소요)"
      ],
      [
        "title" => "건강검진전형",
        "content" => "면접합격자를 대상으로 이루어지는 채용검진으로 신체적 결격사유를 판단하는 절차입니다."
      ],
      [
        "title" => "최종합격",
        "content" => "최종 합격된 대상자는 삼표그룹의 신입사원으로 입사하게 됩니다."
      ],
    ] as $key => $item)
      <div class="prose">
        <h3 class="text-lg">{!! $key + 1 !!}.​ {!! $item['title'] !!}</h3>
        <p>
          {!! $item['content'] !!}
        </p>
      </div>
    @endforeach
  </div>
  <div class="mb-24"></div>
  <div class="business__page-title mb-5">
    경력사원 채용 프로세스
  </div>
  <p>
    기본적인 채용 프로세스는 서류전형, 인성검사, 면접전형, 건강검진전형으로 진행되며 진행방식과 내용은 대졸 신입채용과 동일합니다.
​세부사항(채용대상 및 자격기준 등)은 경력사원 채용 시 게시되는 경력사원 채용 모집공고를 참고하시기 바랍니다.
  </p>
  <div class="mb-24"></div>
  <div class="business__page-title mb-5">
    상시 채용 안내
  </div>
  <p>
    삼표그룹에서 열정적이고 도전정신을 갖춘 여러분의 지원서를 기다리고 있습니다. 등록된 지원서는 특정 직무의 채용 발생시 공고 전, 우선적으로 검토됩니다.
내부 채용발생시 DB 검토를 통하여 개별 연락을 드리고 있습니다.
  </p>
  <div class="mb-24"></div>
  <a href="https://sampyo.recruiter.co.kr" class="inline-block p-16 bg-artificialTurf text-white font-black text-lg">채용공고 바로가기</a>
  <div class="mb-24"></div>
</div>
</main>