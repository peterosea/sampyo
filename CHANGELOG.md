# Change Log

이 프로젝트에서 주목할만한 모든 변경 사항이이 파일에 문서화됩니다.
[Keep a Changelog](https://keepachangelog.com/ko/1.0.0/)의 형식을 기본으로 구성됩니다.

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