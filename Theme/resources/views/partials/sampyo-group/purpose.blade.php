<main class="sampyoGroup__page page__layout">
<div class="container xl:max-w-screen-xl mx-auto">
  <section>
    <div class="page__level-title mb-px-30 sm:mb-16 pb-1.5">
      삼표그룹, 지속가능한 미래의 기초가 되다.
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 mb-16 pb-1.5 gap-x-12">
      <div class="prose">
        <p>
          삼표그룹은 사람 ∙ 사회 ∙ 세상에 기여하는 것을 경영 이념으로 우리의 생활에 필수적인 건설기초소재를 공급하며, 지속적인 연구 개발과 기술 혁신을 통하여 사회의 다양한 요구에 부응하는 제품, 시스템 및 서비스 등을 제공합니다.
        </p>
      </div>
      <div class="prose">
        <p>
          삼표그룹의 사업은 원료(또는 자원)부터 제품까지 환경 부하가 적은 유기적인 가치사슬을 바탕으로 안정적 공급 능력을 보유하고 있으며, 고도의 리사이클 기술과 사업 기반을 바탕으로 자원순환형 사회의 기초를 다지고 있습니다. 또, 문제 해결 의식으로 뭉친 탄탄한 팀워크를 바탕으로 풍요로운 사회의 유지와 발전에 공헌하고 있습니다.
        </p>
        <p>
          삼표그룹은 앞으로도 다양한 사업 활동을 통해 사회의 디지털화, 환경 의식의 고양 등 새로운 시대적 요구에 도전하고 새로운 기초를 창조해 나갈 것입니다. 
        </p>
      </div>
    </div>
    <div class="flex text-white">
      <div class="w-full sm:w-3/5">
        <div class="card__house-root">
          <div class="card__house bg-atmosphere mb-4">
            <div class="card__house-inner flex flex-col items-center p-8 h-52 relative">
              <div class="sm:text-lg text-base">
                지속가능성 Building Materials
              </div>
              <div class="font-black text-px-26 sm:text-px-42">
                선도기업 삼표
              </div>
              <div class="label absolute w-full bottom-0 flex items-center justify-center h-16 text-lg font-bold bg-glitterLake">
                그룹 경영목표
              </div>
            </div>
          </div>
          <div class="card__house-banner text-lg text-squant flex flex-col justify-center">
            <div>Vision</div>
            <span class="opacity-30 font-medium">지향점</span>
          </div>
        </div>
        <div class="grid grid-cols-5 gap-0.5">
          @foreach (['시너지', '혁신', '전문성', '도전정신'] as $item)
            <div class="card__house bg-gradient-to-t from-glitterLake half">
              <div class="card__house-inner h-32 flex flex-col items-center justify-center p-1">
                <div class="font-bold">
                  {!! $item !!}
                </div>
              </div>
            </div>
          @endforeach
          <div class="card__house-root half">
            <div class="card__house bg-gradient-to-t from-glitterLake half">
              <div class="card__house-inner h-32 flex flex-col items-center justify-center p-1">
                <div class="font-bold">
                  윤리성
                </div>
              </div>
            </div>
            <div class="card__house-banner text-lg text-squant flex flex-col justify-center" style="height: calc(100% - 16.5%)">
              <div>핵심가치</div>
              <span class="opacity-30 font-medium">행동의 기준</span>
            </div>
          </div>
          <div class="card__house-root rootless col-span-5">
            <div class="flex flex-col items-center justify-center p-8 bg-glitterLake h-24">
              <div class="font-bold">
                새로움의 기초가 되다 /  Build th 1st
              </div>
            </div>
            <div class="card__house-banner h-full text-lg text-squant flex flex-col justify-center">
              <div>Brand Identity</div>
              <span class="opacity-30 font-medium">정체성</span>
            </div>
          </div>
          <div class="card__house-root rootless col-span-5">
            <div class="flex flex-col items-center justify-center p-8 bg-atmosphere h-24 text-white">
              <div class="font-bold">
                사람 ∙ 사회 ∙ 세상에 기여 / 전문형 ∙ 도전형 ∙ 융합형 인재
              </div>
            </div>
            <div class="card__house-banner h-full text-lg text-squant flex flex-col justify-center">
              <div>경영이념 / 인재상</div>
              <span class="opacity-30 font-medium">존재의 이유</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-px-70 sm:mb-32"></div>
  </section>
  <section>
    <div class="page__level-title mb-px-30 sm:mb-16 pb-1.5">
      사람 ∙ 사회 ∙ 세상을 위해 새로운 기초를 창조하고<br class="hidden sm:block" />
      지속가능한 사회에 공헌하는 선도 기업
    </div>
    @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-purpose-0', 'class' => 'mb-14 sm:mb-28'])
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-16 gap-x-16">
      <div class="card__s1 max-w-none">
        <div class="card__s1-thumbnail_">
            @include('partials.img', ['ex' => 'png', 'name' => 'sampyogroup-purpose-0'])
        </div>
        <div class="card__s1-body items-start text-left gap-2.5">
          <div class="card__s1-title text-xl font-bold">새로움의 기초를 세우다</div>
          <div class="card__s1-content">
            삼표는 사회 인프라의 기초를 다지는 건설기초소재 공급자로 전문성 및 기술력을 바탕으로 건설 산업의 기반을 만듭니다
          </div>
        </div>
      </div>
      <div class="card__s1 max-w-none">
        <div class="card__s1-thumbnail_">
            @include('partials.img', ['ex' => 'png', 'name' => 'sampyogroup-purpose-1'])
        </div>
        <div class="card__s1-body items-start text-left gap-2.5">
          <div class="card__s1-title text-xl font-bold">성장의 기초를 세우다</div>
          <div class="card__s1-content">
            기초소재 ∙ 레미콘 ∙ 콘크리트 ∙ 물류 ∙ 순환자원의 수직계열화를 통한 시너지를 기초로 환경부하가 적은 비즈니스 가치사슬을 고도화하고 성장합니다
          </div>
        </div>
      </div>
      <div class="card__s1 max-w-none">
        <div class="card__s1-thumbnail_">
            @include('partials.img', ['ex' => 'png', 'name' => 'sampyogroup-purpose-2'])
        </div>
        <div class="card__s1-body items-start text-left gap-2.5">
          <div class="card__s1-title text-xl font-bold">기술의 기초를 세우다</div>
          <div class="card__s1-content">
            혁신과 도전정신을 바탕으로 산업의 새로운 기초가 되는 신기술 개발에 앞장섭니다
          </div>
        </div>
      </div>
      <div class="card__s1 max-w-none">
        <div class="card__s1-thumbnail_">
            @include('partials.img', ['ex' => 'png', 'name' => 'sampyogroup-purpose-3'])
        </div>
        <div class="card__s1-body items-start text-left gap-2.5">
          <div class="card__s1-title text-xl font-bold">미래의 기초를 세우다</div>
          <div class="card__s1-content">
            지속가능한 미래를 열기 위해 기후변화에 미치는 영향을 최소화하는 제품과 기술 개발에 한발 앞선 투자를 진행하며 (탄소제로 2050 비전, 순환경제 적극 투자), 사람 ∙ 사회 ∙ 세상을 위해 새로운 기초를 창조하고 지속가능한 사회에 공헌합니다. 
          </div>
        </div>
      </div>
    </div>
    <div class="mb-px-70 sm:mb-32"></div>
  </section>
  <section>
    <div class="page__level-title mb-px-30 sm:mb-16 pb-1.5">
      지속가능한 미래의 기초를 만드는 삼표그룹의 가치체계
    </div>
    <div class="flex">
      <div class="w-full sm:w-3/5">
        <div class="card__house-root" data-label="지향가치">
          <div class="card__house bg-winterWizard mb-4 text-white"">
            <div class="card__house-inner flex flex-col items-center p-8 h-52">
              <div class="text-2xl font-black mb-4">
                시너지
              </div>
              <div class="prose max-w-sm">
                <p>
                  소통을 통해 서로의 강점을 살리고 약점을 보완하며, 협력함으로써 효과적이고 효율적인 성과를 창출해 나가는 가치
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-x-px gap-y-5">
          <div class="card__house bg-glitterLake half text-white">
            <div class="card__house-inner h-60 sm:h-52 flex flex-col items-center p-4 sm:p-8">
              <div class="text-2xl font-black mb-3">
                혁신
              </div>
              <div class="prose max-w-sm">
                <p>
                  창의적이고, 열린 사고를 기반으로 새로운 체계를 만들어가는 가치
                </p>
              </div>
            </div>
          </div>
          <div class="card__house-root half" data-label="행동가치">
            <div class="card__house bg-glitterLake half text-white">
              <div class="card__house-inner h-60 sm:h-52 flex flex-col items-center p-4 sm:p-8">
                <div class="text-2xl font-black mb-3">
                  전문성
                </div>
                <div class="prose max-w-sm">
                  <p>
                    탄탄한 기본역량과 끊임없는 자기계발로 직무분야의 최고가 되고, 사업영역의 선도기업이 될 수 있는 가치
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col items-center p-4 sm:p-8 bg-atmosphere h-60 sm:h-52 text-white">
            <div class="text-2xl font-black mb-3">
              도전정신
            </div>
            <div class="prose max-w-sm">
              <p>
                강한 열정과 추진력을 바탕으로 목표한 성과를 끈기있게 창출하는 가치
              </p>
            </div>
          </div>
  
          <div class="card__house-root rootless" data-label="기반가치">
            <div class="flex flex-col items-center p-4 sm:p-8 bg-atmosphere h-60 sm:h-52 text-white">
              <div class="text-2xl font-black mb-3">
                윤리성
              </div>
              <div class="prose max-w-sm">
                <p>
                  정직성을 바탕으로 조직의 원칙과 가치를 지키며, 모든 일을 투명하고 합리적으로 추진하는 가치
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pb-px-70 sm:pb-24"></div>
  </section>
</div>
</main>