<p align="center" >
  <img width="560" src="https://user-images.githubusercontent.com/42893446/130402792-02398eca-847c-438d-a03c-21a0285ea4ce.jpg" alt="테마 섬네일">
</p>

`삼표그룹` `wordpress` `custom theme` `laravel` `roots/sage`

---

### Theme 개발방법

1. `.env` 파일 만들기

    ```
    WORDPRESS_DB_USER=root
    WORDPRESS_DB_PASSWORD=1
    WORDPRESS_DB_NAME=sampyo
    PROJECT_NAME=sampyo
    PROJECT_PORT=40009
    ```

2. `docker-compose -f docker-compose.peter.yaml up -d`
3. `cd Theme`
4. `docker pull composer`
5. install 아래 커맨드 실행

    ```sh
    docker run --rm --interactive --tty \
    --volume $PWD:/app \
    composer install
    ```

6. `yarn install`
7. `yarn start`
8. 주소
    - 워드프레스: localhost:40009
    - 태마개발용: localhost:3000
