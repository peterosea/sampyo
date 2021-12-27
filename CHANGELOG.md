# Change Log

이 프로젝트에서 주목할만한 모든 변경 사항이이 파일에 문서화됩니다.
[Keep a Changelog](https://keepachangelog.com/ko/1.0.0/)의 형식을 기본으로 구성됩니다.

## [v1.13.25] 2021-12-27

### Changed

- 비즈니스 - 시멘트 01 이미지 변경

## [v1.13.24] 2021-12-24

### Removed

- 사이버감사실 오픈 예정 안내 모달, 푸터 메뉴 삭제

## [v1.13.23] 2021-12-19

### Changed

- php에서 기본 언어 변경
  - ftp backup이 워드프레스 기본 언어가 영어가 아니면 작동하지 않는 버그 때문에

## [v1.13.22] 2021-12-15

### Changed

- 철도기술연구소 이미지 변경
  - 현장계측 2번
  - 현장계측 3번
  
## [v1.13.21] 2021-12-15

### Changed

- 비즈니스소개 데스크탑이외의 애매한 사이즈에서 링크가 소실되는 문제 해결 1280px 까지는 ✅

## [v1.13.20] 2021-12-15

### Changed

- 철도기술연구소 이미지 변경
  - 구조해석 1번
  - 현장계측 1번

## [v1.13.19] 2021-12-15

### 하자보수

- 모바일에서 스마트오더가 보이지 않는 문제
  - submenu 스마트오더 데스크탑에서만 제거

## [v1.13.18] 2021-12-15

### Fixed

- `post_max_size`에 대한 설정이 `upload_max_filesize`보다 작기 때문에 파일을 업로드하려고 할 때 몇 가지 문제가 발생할 수 있습니다.

## [v1.13.17] 2021-12-15

### Added

- htaccess로 용량관련 설정
- wp-embedded-content style 100%

## [v1.13.16] 2021-12-14

### Fixed 하자보수

- body min height 오류 메인페이지에서 예외 처리

## [v1.13.15] 2021-12-14

### Fixed 하자보수

- 모바일에서 body min height를 같는값 오류 수정

## [v1.13.14] 2021-12-13

### Fixed 하자보수

- 포스트타입으로 archive page 변수 주입시 포스트가 없을때 생기는 오류 수정

## [v1.13.13] 2021-12-13

### Changed

- submenu에 outlink 메뉴 노출하지 않게 변경
- body의 min height를 정의홰서 레이아웃 맞춤

## [v1.13.12] 2021-12-13

### 하자보수

- video wrap black dim (fixed)

## [v1.13.11] 2021-12-13

- [#203](https://github.com/beeclover/sampyo/issues/203)
## [v1.13.10] 2021-12-13

### 수정사항

- [#203](https://github.com/beeclover/sampyo/issues/203)

## [v1.13.9] 2021-12-13

### 하자보수(Fixed)

- 블로그 등등 카테고리의 링크 오류 term link로 변경

## [v1.13.8] 2021-12-02

### Changed

- seo 인증 html 제거

## [v1.13.7] 2021-12-02

### Added

- seo config 추가

### Changed

- 배너 링크 옵션필드로 변경

## [v1.13.6] 2021-12-01

### Changed

- mobile hover menu link erorr 조건문 추가

## [v1.13.5] 2021-12-01

### Changed

- 뉴스룸 헤더 높이 수정

## [v1.13.4] 2021-11-30

### Fixed

- Theme에서 src로 변경된 사항이 action에 추가되지 않음

## [v1.13.3] 2021-11-30

### Added

- icon-link-ext 아이콘 추가

## [v1.13.2] 2021-11-29

### Fixed

- scss사용하던 max:breakpoint 변경

## [v1.13.1] 2021-11-28

- beeclover/sampyo#202

### Changed

- composer update

## [v1.13.0] 2021-11-28

### Changed

- 테마 소스파일 이름 변경

## [v1.12.1] 2021-11-28

### Fixed

- fixed menu xxl xl 사이값 짤리는 문제 수정

## [v1.12.0] 2021-11-28

### Added

- sal 로 scroll animation 대체

### Fixed

- px token 클래스 남아있는것 교체

## [v1.11.1] 2021-11-28

### Fixed

- max:sm 있던 클래스 살리고 m_break로 변경

## [v1.11.0] 2021-11-28

### Fixed

- build scrollreveal 라이센스 임시 제거

## [v1.10.2] 2021-11-28

### Changed

- 디펜던시 업데이트

## [v1.10.1] 2021-11-28

### fixed

- deploy yaml에 저장소 이름 오타

## [v1.10.0] 2021-11-28

### Changed

- JIT 모드 활성화 beeclover/sampyo#200

## [v1.9.6] 2021-11-27

- 사이버감사실 스크롤 auto

## [v1.9.5] 2021-11-27

### Fixed

- 팝업에 스크롤제거

## [v1.9.4] 2021-11-27

### Added

- 사이버감사실 임시중단 모달팝업

## [v1.9.3] 2021-11-25

### Changed

- traefik log ignore

### Added

- 삼표 사이버감사실 proxy 추가

## [v1.9.2] 2021-11-25

### Fixed

- fixed 1730px 부분에서 fixed menu가 짤리는 오류

## [v1.9.1] 2021-11-25

### Fixed

- treafik log & cert email change

## [v1.9.0] 2021-11-25

- docker-compose live 도메인연결
- hero slider after 딤드 돔 스타일 조정

## [v1.8.25] 2021-11-25

- 추가된 PPT (beeclover/sampyo#195)

## [v1.8.24] 2021-11-25

- 19 (beeclover/sampyo#195)

## [v1.8.23] 2021-11-25

- 28 (beeclover/sampyo#195)
- 32 (beeclover/sampyo#195)

## [v1.8.22] 2021-11-24

- 잘못 적용된 부분 수정 (beeclover/sampyo#195)

## [v1.8.22] 2021-11-24

- 잘못 적용된 부분 수정 (beeclover/sampyo#195)

## [v1.8.21] 2021-11-24

### Changed

- beeclover/sampyo#197
  - 개인정보 처리방침
  - 뉴스레터 개인정보 처리방침 팝업

## [v1.8.20] 2021-11-24

- 물류 철도이미지 변경 (beeclover/sampyo#195)

## [v1.8.19] 2021-11-24

### Changed

- 레미콘 지도이미지 변경 (beeclover/sampyo#195)
- 메인 hero max-width 변경

## [v1.8.18] 2021-11-23

- https://github.com/beeclover/sampyo/issues/195

## [v1.8.17] 2021-11-23

### Fixed

- https://github.com/beeclover/sampyo/issues/194

## [v1.8.16] 2021-11-22

- https://github.com/beeclover/sampyo/issues/187
- 메인 동영상 속도조절

## [v1.8.15] 2021-11-22

- https://github.com/beeclover/sampyo/issues/187
- 물류 이미지 변경완료 ppt-7

## [v1.8.14] 2021-11-19

### Changed

- live 서버의 docker-compose 맞춤
  - Ubuntu 18.04LTS에서 adminer가 오류를 일으킴

## [v1.8.13] 2021-11-17

### Changed

- 메인페이지 뉴스레터 오픈

## [v1.8.12] 2021-11-16

- https://github.com/beeclover/sampyo/issues/187

## [v1.8.11] 2021-11-11

### Fixed

- 시멘트 중간 그리드 레이아웃에 `gap-x` 누락 추가

## [v1.8.10] 2021-11-10

### Fixed

- 사회공헌 페이지에 그리드 레이아웃에 `gap-x`누락 추가

## [v1.8.9] 2021-11-05

### Changed

- 개인정보처리방침페이지 **'취급방침'**이라고 되어있는 텍스트 모두 **‘처리방침’으로** 변경

## [v1.8.8] 2021-11-02

### Changed

- github action 간소화

## [v1.8.7] 2021-11-02

### Added

- 뉴스룸 페이지에서 blog슬라이더 pin media 슬라이더 autoplay 추가

## [v1.8.6] 2021-11-02

### Changed

- 삼표그룹 연혁 디자인 변경 (peterosea/sampyo#46)
- 순환자원 내용추가 (peterosea/sampyo#47)

## [v1.8.5] 2021-11-01

### Fixed

- header hover 화이트 로고 오류 수정

## [v1.8.4] 2021-11-01

### Fixed

- Subemnu active 스타일이 전체적으로 컬러가 들어가는것 수정

### Added

- 메인 로고 화이트 기능추가

## [v1.8.3] 2021-10-31

### Added

- Blog, Media 포스트타입의 각각 개별 tag taxonomy 추가

## [v1.8.2] 2021-10-31

### Fixed

- adminer default port 8080

## [v1.8.1] 2021-10-31

### Added

- ignore - traefik acme.json

## [v1.8.0] 2021-10-31

### Added

- traefik domain service (https)

### Changed

- relevanssi search Highlight 구분 방법 변경

## [v1.7.1] 2021-10-30, 2021-10-31

### Changed

- revert `v1.6.7`
- card__house style % > px

### Feedback

- [#42](https://github.com/peterosea/sampyo/issues/42)

### Added

- fixed menu 서브메뉴도 close 가능
- fixed menu 푸터와 겹치지 않는 기능 추가
- fixed menu business 푸터와 겹칠때 색상 변경
- global submenu (mobile) 1개의 2 level 서브 메뉴만 활성화 되게
- global submenu current item style

### Fixed

- footer 패밀리 메뉴 노출시 데스크탑에서 아래로 스크롤이 더 생기는 문제

## [v1.7.0] 2021-10-28

### Changed

- 단일 px 토큰값 제거

### Added

- tailwind jit

## [v1.6.7] 2021-10-27

### Fixed

- 뉴스룸 contaienr 사이즈 메인과 동일

## [v1.6.6] 2021-10-27

### Fixed

- 뉴스룸 미디어 카테고리 2col 레이아웃 오류

## [v1.6.5] 2021-10-27

### Changed

- Card__def2 thumbnail 크기 변경

## [v1.6.4] 2021-10-27

### Added

- Top 버튼이 푸터에 겹치지 않는 기능 추가
- sns list add url
- sns list facebook

## [v1.6.3] 2021-10-26

### Fixed

- front page 뉴스룸 섹션 content의 html 유니코드 출력 오류

## [v1.6.2] 2021-10-26

### Changed

- PHC페이지 이미지 갯수 이미지 변경
- 프리캐스트콘크리트페이지 이미지 갯수 이미지 변경

### Added

- [#37](https://github.com/peterosea/sampyo/issues/37)

## [v1.6.1] 2021-10-26

[#40](https://github.com/peterosea/sampyo/issues/40)


## [v1.6.0] 2021-10-22

[#38](https://github.com/peterosea/sampyo/issues/38)

## [v1.5.2] 2021-10-20

### Chagned

- post align center
- post link background full style

## [v1.5.1] 2021-10-20

### Fixed

- archive page fixed menu full width 조정
- 인재육성페이지 bullet prose 누락

### Changed

- 평가보상 제목위치 변경

## [v1.5.0] 2021-10-20

### Fixed

- `jit` 모드에서 https://tailwindcss.com/docs/just-in-time-mode
- screens에 대한 속성이 따른 scss로 추출되는대 해당 적요을 하는 방법을 찾기 어려움

### Changed

- 몰탈
  - `/business/mortar/`
  - 'mortar.blade.php`
  - (wp) 위치정보추가
  - 210만톤 > 250만톤

## [v1.4.7] 2021-10-20

### Added

- 사회공헌 학술장학재단 링크추가

### Fixed

- media article layout

## [v1.4.6] 2021-10-20

### Fixed

- 포스트의 이미지 정렬 선택자 선택 오류

## [v1.4.5] 2021-10-20

### Changed

- peterosea/sampyo#35

## [v1.4.4] 2021-10-20

### Feedback

- ppt에 수정사항 자세히 기록됨 (peterosea/sampyo#34)

## [v1.4.3] 2021-10-19

### Fixed

- 비즈니스 연락처 부분의 true/false가 표시되는 문제

## [v1.4.2] 2021-10-19

### Changed

- ppt에 수정사항 자세히 기록됨 (peterosea/sampyo#34)

## [v1.4.1] 2021-10-19

### Changed

- tailwind css mode jit

### Fixed

- 개인정보 처리방침 페이지 템플릿 여백오류 수정

## [v1.4.0] 2021-10-19

### Added

- 개인정보 처리방침 페이지 템플릿

### Changed

- 기존 tailwind css 환경설정에서 `function px()`로 임의 값을 지정하는 스타일을 추가했었는데 tailwindcss에서 내부에 동일한 기능이있었다. 그래서 해당 환경설정을 제거하고 모두 임의값 설저으로 변경

## [v1.3.2] 2021-10-18

### Added

- image width: 100% image map 처리

### Changed

- 비지니스 하단 모바일 이미지 추가

## [v1.3.2] 2021-10-18

### Fixed

- archive post가 없을때 헤더 이미지 노출되지 않는 문제
- 글 상세페이지에서 fixed menu가 나오지 않는 문제

## [v1.3.1] 2021-10-15

### Added

- prose figure max-wdith 추가

## [v1.3.0] 2021-10-15

### Fixed

- github action yaml git pull error 수정

### Changed

- `li/_single-1` prose 내부 list가 아니더라도 스타일 적용

### Added

- 404 페이지 layout
- 비즈니스 - 물류

## [v1.2.7] 2021-10-15

### Added

- makefile에서 test 스크립트 추가 (release 브랜치 푸시로 github action 실행)
- github action release 브랜치 이동 QA

### Changed

- 뉴스레터 지난 뉴스레터 버튼 숨김 (peterosea/smapyo#30)
- 비즈니스 - 시멘트 이미지 변경
- 사회공헌 이미지 변경
- 그룹연혁 이미지 변경

## [v1.2.6] 2021-10-15

### Changed

- submenu 위치값
- github action 트리거 release 브랜치도 추가
  - 핫픽스 커밋을 남길 수있게 되었다

## [v1.2.5] 2021-10-15

### Fixed

- mobile fixed menu toggle 버그
- career 에서 1depth fixed menu label이름이 2depth 메뉴랑 동일하게 나오는 이슈

### Chagned

- 메인페이지 뉴스룸에서 공지가 표시된느 것 제거
- footer gap-y

## [v1.2.4] 2021-10-14

### Fixed

- submenu padding (peterosea/sampyo#27)

## [v1.2.3] 2021-10-14

### Fixed

- submenu padding (peterosea/sampyo#27)
- sampyo 포스트타입 명변경
- main video autoplay

## [v1.2.2] 2021-10-14

### Chagned

- main
  - hero xl style
  - section2 lg break point
  - section2 lg - xl width 비율

## [v1.2.1] 2021-10-14

### Chagned

- business fixed-menu에서 블루콘 제거

## [v1.2.0] 2021-10-14

### Changed

- sampyo-group을 sampyo로 포스트타입 변경

## [v1.1.6] 2021-10-14

### Added

- 외부링크 링크속성 추가 `target="_blank" rel="noopener noreferrer"` 

## [v1.1.5] 2021-10-14

- 1차 피드백 제플린용 코멘트 해결

## [v1.1.4] 2021-10-14

### Fixed

- newsroom header 헤더 이미지 클래스 누락
- page header height cover
- business home link 없을때 margin 클래스 조건식으로 변경

### Changed

- header
  - search 아이콘으로 변경 & 100vw에서 100%으로 변경
- typo
  - 메인 책임경영 타이틀 변경
- image
  - 연혁
  - 비지니스 소개
  - 레미콘
- zeplin
  - [211013_02비즈니스_02_01레미콘](https://zpl.io/2v8gkeP)
  - [211009_02비즈니스_05_02철도기술연구소](https://zpl.io/bAwkQyO)
  - [211013_02비즈니스_03순환자원](https://zpl.io/awwQe4n)
  - [211013_02비즈니스_02골재](https://zpl.io/amxXN0r)
  - [211013_02비즈니스_02프리캐스트콘크리트](https://zpl.io/2yMjew9)
  - [211013_02비즈니스_03몰탈](https://zpl.io/ag5qYw9)

## [v1.1.3] 2021-10-13

### Added

- career mobile fixed menu
- breakpoint labtop(1440px)

### Fixed

- swiper js safari 포지션 오류 (beeclover/sampyo#155)
- fixed menu break point

## [v1.1.2] 2021-10-12

### Fixed

- submenu desktop padding-bottom으로 보여지는 이슈

## [v1.1.1] 2021-10-12

### Fixed

- github action code build push 트리거 수정

## [v1.1.0] 2021-10-12

### QA

- submenu (mobile)
  - list actiive pb 0
  - wrap pb 추가
- main
  - card-flip py, list gap 여백
  - hero title line-height
  - 인재상 (mobile)
    - arrow 보이게
  - hero section (mobile)
    - height 고정값으로 변경
    - readmore 모바일이미지 추가
- page
  - fixed menu hidden break point sm > md
  - header content 좌 여백
  - Fixed menu 우 여백
  - 비즈니스 홈페이지 바로가기 모바일 디자인 반영
  - mobile 홈페이지 footer 바로가기 반영
- Logo svg 변경
- search 
  - x버튼 focus 노출 취소 상시 노출
  - 버튼 크기 데스크탑 모바일 둘다 조정
- font size
  - `<div class="text-2xl font-black` > `<div class="text-16px sm:text-2xl font-black`

## [v1.0.7] 2021-10-12

### Added

- main - section3 배경그래픽 추가

## [v1.0.7] 2021-10-12

### Changed

- 메인페이지 뉴스룸 컨텐츠 중앙정렬로 변경

## [v1.0.6] 2021-10-12

### Chagned

- GNB 폰트스타일 bold

## [v1.0.5] 2021-10-11

### Fixed

- action paths 규칙 오류 수정

## [v1.0.4] 2021-10-11

### Changed

- 메인페이지 비즈니스
  - 타이틀 폰트사이즈 수정
  - 모바일 swiper slider 높이 수정

### Added

- postcss - autoprefixer 추가 브라우저 대응
- 메인페이지 비즈니스 
  - 비즈니스 카드 스크롤제거 (peterosea/sampyo#18)
  - 섹션 배경그래픽 추가 (peterosea/sampyo#19)

## [v1.0.3] 2021-10-11

### Fixed

- underline error 2줄로 넘어갈때 underline이 안생기는 문제때문에 구성방법을 변경
- submenu의 translate Y의 값이 상수로 지정되어있어서 menu의 높이갚이 1000px을 넘어가는경우 흰색박스가 보이는 문제

## [v1.0.2] 2021-10-10

### Changed

- github action에서 build가 필요한 폴더만 따로 오래걸리는 action을 실행시키게끔 분기하였다.
- views의 blade파일만 변경이 생긴다면 `git pull upstream main`
- scripts, styles 파일의 변경이 생긴다면 build를 해서 해당 빌드파일을 업로드시키는 action으로

## [v1.0.1] 2021-10-10

### Added

- git flow makefile 생성

## Release fixed

- make file의 upstream 일름 오류

## [v1.0.0] 2021-10-08

- beeclover/sampyo > PR > peterosea/sampyo