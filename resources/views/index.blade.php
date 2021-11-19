@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-info" role="alert">
            게시판 목록을 size 가 10 인 pagination 을 이용하여 완성해주세요.
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">번호</th>
                <th scope="col">작성자</th>
                <th scope="col">제목</th>
            </tr>
            </thead>
            <tbody>
            <tr onclick="location.href='{{ route('board.show', 1) }}'">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
            <tr onclick="location.href='{{ route('board.show', 2) }}'">
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
            </tr>
            <tr onclick="location.href='{{ route('board.show', 3) }}'">
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('board.create') }}">글쓰기</a>
        <br/>
        <br/>

        <div class="alert alert-info" role="alert">
            pagination 예시 입니다 <br/>
            lluminate\Pagination\LengthAwarePaginator->links()
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
