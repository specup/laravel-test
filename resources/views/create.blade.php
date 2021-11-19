@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-info" role="alert">
            게시판 작성 기능을 완성해주세요.
        </div>

        <form action="{{ route('board.store') }}" method="POST">
            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="name">작성자</span>
                </div>
                <p class="form-control" aria-label="name" aria-describedby="name">{{ Auth::user()->name }}</p>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="title">제목</span>
                </div>
                <input type="text" class="form-control" placeholder="title" aria-label="title" aria-describedby="title">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">내용</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>

            <br/>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-secondary" href="{{ route('board.index') }}">목록</a>
                <button type="submit" class="btn btn-primary">작성하기</button>
            </div>
        </form>
    </div>
@endsection
