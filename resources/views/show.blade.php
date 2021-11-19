@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-info" role="alert">
            게시판의 내용을 완성해주세요.
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="name">작성자</span>
            </div>
            <p class="form-control" aria-label="name" aria-describedby="name">name</p>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="title">제목</span>
            </div>
            <p class="form-control" aria-label="title" aria-describedby="title">title</p>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">내용</span>
            </div>
            <p class="form-control" aria-label="With textarea">contents</p>
        </div>

        <br/>

        <div class="alert alert-info" role="alert">
            게시판의 수정 기능을 완성해주세요.
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('board.edit', 1) }}">수정</a>
            <a class="btn btn-secondary" href="{{ route('board.index') }}">목록</a>
        </div>
        <br/>
        <br/>

        <main role="main" class="container bootdey.com">
            <div class="alert alert-info" role="alert">
                댓글 목록을 완성해주세요.
            </div>

            <div class="my-3 p-3 bg-white rounded box-shadow">
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">@username</strong>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">@username</strong>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">@username</strong>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                    </p>
                </div>
            </div>

            <div class="alert alert-info" role="alert">
                댓글 작성 기능을 완성해주세요.
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">댓글</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
                <button type="submit" class="btn btn-primary">등록</button>
            </div>
        </main>
    </div>
@endsection
