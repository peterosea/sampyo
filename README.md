[![๐ prod server deploy (NCP)](https://github.com/beeclover/sampyo/actions/workflows/ncp-deploy.yml/badge.svg)](https://github.com/beeclover/sampyo/actions/workflows/ncp-deploy.yml)

<p align="center" >
  <img width="560" src="https://user-images.githubusercontent.com/42893446/130402792-02398eca-847c-438d-a03c-21a0285ea4ce.jpg" alt="ํ๋ง ์ฌ๋ค์ผ">
</p>

`์ผํ๊ทธ๋ฃน` `wordpress` `custom theme` `laravel` `roots/sage`

---

### Theme ๊ฐ๋ฐ๋ฐฉ๋ฒ

1. `.env.example` ํ์ผ `.env` ์ด๋ฆ๋ณ๊ฒฝ

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
5. install ์๋ ์ปค๋งจ๋ ์คํ

    ```sh
    docker run --rm --interactive --tty \
    --volume $PWD:/app \
    composer install
    ```

6. `yarn install`
7. `yarn start`
8. ์ฃผ์
    - ์๋ํ๋ ์ค: localhost:40009
    - ํ๋ง๊ฐ๋ฐ์ฉ: localhost:3000

---

### Archive

- ์์ ํผ๋ธ๋ฆฌ์ฑ: https://peterosea.github.io/sampyo/
- (์์ฌ) ์น์ฌ์ดํธ: http://sampyo.peterosea.com/
