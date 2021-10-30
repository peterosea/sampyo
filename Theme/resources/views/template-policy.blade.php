{{--
  Template Name: 개인정보 처리방침
--}}

@extends('layouts.app')

@section('content')
  @include('partials.header-template')
  <main class="page__layout">
  <div class="container xl:max-w-screen-xl mx-auto">
    <section class="mb-30px sm:mb-70px">
      <div class="prose tracking-[-0.16px]">
        <p>
          주식회사 삼표(이하 ‘회사＇라 합니다)는 고객님의 개인정보를 중요시하며, ‘정보통신망 이용촉진 및 정보보호＇에 관한 법률을 준수하고 있습니다. 회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 회사는 개인정보처리방침을 개정하는 경우 웹사이트를 통하여 공지할 것입니다.
        </p>
      </div>
    </section>
    <section>
      <h1 class="page__level-title mb-30px sm:mb-10 tracking-[-0.8px]">
        회사의 개인정보취급방침은 다음과 같은 내용을 담고 있습니다.
      </h1>
      <div class="border border-dugong p-30px lg:p-60px prose text-14px tracking-[-0.17px]">
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold !mt-0">01. 개인정보의 수집 및 이용목적</h2>
          <p>
            본 사이트는 고객이 별도의 회원가입 절차 없이 컨텐츠에 자유롭게 접근할 수 있습니다. 다만 회사는 다음의 목적을 위해 고객의 개인정보를 일부 수집하고 있습니다.
          </p>
          <ul>
            <li>사이버감사실: 고객 의견 확인 및 답변, 사실조사를 위한 연락 · 통지, 처리결과 통보 등</li>
            <li>채용 : 채용을 위한 입사지원자의 인적 정보 등</li>
          </ul>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">02. 수집하는 개인정보의 항목 및 수집방법</h2>
          <p>
            회사는 고객의 다음 개인정보 항목을 수집하고 있습니다.
          </p>
          <ul>
            <li>사이버 감사실 : 성명, 연락처, 이메일주소, 비밀번호, 접속IP 정보</li>
            <li>채용 : 이름, 생년월일, 성별, 로그인ID, 비밀번호 기타 채용을 위한 정보</li>
          </ul>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">03. 수집한 개인정보의 공유 및 제공</h2>
          <p>
            회사는 고객의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 다음의 경우에는 예외로 합니다.
          </p>
          <ul>
            <li>고객들이 사전에 동의한 경우</li>
            <li>법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우</li>
          </ul>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">04. 개인정보의 취급위탁</h2>
          <p>
            회사는 서비스 향상을 위해 전문 위탁 업체에 개인정보의 처리를 위탁하여 운영할 수 있습니다.<br/>
            이 경우에는 회사가 수탁자, 위탁기간 등 관련사항을 홈페이지를 통해 미리 고객님께 고지하겠습니다.
          </p>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">05. 수집한 개인정보의 보유 및 이용기간</h2>
          <p>
            회사는 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.<br/>
            단, 보유기간을 고객에게 미리 고지하였을 경우에는 그 기간 동안 해당 정보를 보유합니다.
          </p>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">06. 개인정보의 파기절차 및 방법</h2>
          <p>
            고객이 입력한 정보는 목적이 달성된 후 회사의 내부 방침 기타 관계 법령에 따라 파기됩니다.<br/>
            종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기하고, 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.
          </p>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">07. 이용자 및 법정대리인의 권리와 그 행사방법</h2>
          <p>
            고객 및 법정 대리인은 웹사이트 상에서 언제든지 등록되어 있는 고객 자신의 개인정보를 조회, 할 수 있습니다. 또한, 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 본인 확인 절차를 거친 후 지체 없이 조치하겠습니다.
          </p>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">08. 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항</h2>
          <p>
            회사는 고객의 정보를 수시로 저장하고 찾아내는 ‘쿠키(cookie)’와 같은 개인정보 자동수집 장치를 설치, 운용하지 않습니다.
          </p>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">09. 개인정보 관리책임자의 성명, 소속 및 연락처</h2>
          <p>
            회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보 관리책임자를 지정하고 있습니다.
          </p>
          <table class="table-auto">
            <colgroup>
              <col width="100px" />
              <col width="auto" />
            </colgroup>
            <tbody>
              <tr>
                <td>성명</td>
                <td>OOO</td>
              </tr>
              <tr>
                <td>소속 부서</td>
                <td>감사팀</td>
              </tr>
              <tr>
                <td>연락처</td>
                <td class="opacity-30">T. <a href="tel:+02-6270-0764">02-6270-0764</a></td>
              </tr>
              <tr>
                <td>성명</td>
                <td>OOO</td>
              </tr>
              <tr>
                <td>소속 부서</td>
                <td>홍보팀</td>
              </tr>
              <tr>
                <td>연락처</td>
                <td class="opacity-30">T. <a href="tel:+02-6270-0775">02-6270-0775</a></td>
              </tr>
            </tbody>
          </table>
          <p>
            고객은 회사의 서비스를 이용하며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 고객의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.
          </p>
        </div>
        <div class="mb-40px">
          <h2 class="!text-18px !mb-30px font-bold">10. 기타</h2>
          <p>
            개인정보정책은 본 사이트 및 회사의 웹사이트에 관한 것입니다. 본 사이트로 링크된 다른 회사의 개인정보취급방침은 별도로 확인하시기 바랍니다.
          </p>

          <div>
            공고일자 : <time datetime="2014-09-01">2014년 9월 1일</time><br/>
            시행일자 : <time datetime="2014-09-01">2014년 9월 1일</time>
          </div>
        </div>
      </div>
    </section>
  </div>
  </main>
@endsection