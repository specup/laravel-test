<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Laravel-test

## 설명

<<<<<<< HEAD
Laravel 을 이용하여 간단한 게시판 및 댓글 기능을 개발해보기 위한 프로젝트입니다.   
=======
Laravel 을 이용하여 간단한 게시판 및 댓글 기능을 개발해보기 위한 프로젝트 입니11다.   
>>>>>>> bc0aca25372fdc2a02c19e93296404773d509707
예시 페이지 들은 laravel-ui bootstrap 을 이용하여 만들어졌습니다.   
초기 설정으로 아래 command 를 실행해주세요.

```shell
$ composer install
$ npm install
$ npm run dev
```

## 데이터베이스

- 회원은 이름, 이메일, 패스워드 등 으로 생성되어 있습니다.
- 게시판은 작성자, 제목, 내용 등 을 포함하여 생성해주셔야 합니다.
- 댓글은 작성자, 내용 등 을 포함하여 생성해주셔야 합니다.

## 해야할 일

기존 파일들을 이용하시거나 새로운 파일을 생성하여 완성하시면 되겠습니다.   
게시판 및 댓글의 수정, 삭제는 작성자만 가능하도록 해주시면 되겠습니다.

- 게시판 목록
    - size 가 10 인 pagination 을 이용합니다.

- 게시판 생성
    - 생성 후에는 목록 페이지로 이동합니다.

- 게시판 상세
    - 게시판에 달린 댓글 목록을 포함 합니다.

- 게시판 수정
    - 수정 후에는 게시판 상세 페이지로 이동합니다.

- 게시판 삭제
    - 삭제 후에는 목록 페이지로 이동합니다.
    - 게시판에 달린 댓글을 모두 삭제 합니다.

- 댓글 목록
    - pagination 이 없어도 됩니다.

- 댓글 생성

## 규칙

- branch 는 master 가 아닌 새로 생성하여 push 해주시면 되겠습니다.
- branch 명은 편하실대로 생성하시면 되겠습니다.
- 예시로 생성된 views blade 파일들을 이용하시거나 새로 만드시면 되겠습니다.
- database\migrations 에 추가할 table 에 대한 migration 을 생성해주시면 되겠습니다.
- App\Http\Controllers 에 추가할 Controller 를 생성해주시면 되겠습니다.
- App\Models 에 추가할 Model 을 생성해주시면 되겠습니다.
- resources\views 에 추가할 blade 를 생성해주시면 되겠습니다.
- routes\web.php 파일에 route 관련된 내용을 추가해주시면 되겠습니다.

## 비고

- dummy 데이터는 factories, seeders 등을 이용하셔도 되겠습니다.
