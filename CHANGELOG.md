# Change Log

이 프로젝트에서 주목할만한 모든 변경 사항이이 파일에 문서화됩니다.
[Keep a Changelog](https://keepachangelog.com/ko/1.0.0/)의 형식을 기본으로 구성됩니다.

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