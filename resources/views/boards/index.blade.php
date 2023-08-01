@extends('boards.layout')	{{-- 레이아웃을가져온다 --}}

{{-- 섹션 시작 --}}
@section('content')

	게시판 > index

	<a href='/boards/create'>글 쓰기</a>

	<a href="{{ route('boards.create')}}">글 쓰기</a>

	<table border='1'>
		<tr>
			<td>No</td>
			<td>제목</td>
			<td>작성일</td>
			<td>관리</td>
		</tr>
		@foreach ($lists as $list)
		<tr>
			<td>{{ $list -> id }}</td>
			<td>{{ $list -> subject }}</td>
			<td>{{ $list -> created_at }}</td>
			<td>
				<a href="{{ route('boards.show', $list -> id) }}">보기</a>
				<a href="{{ route('boards.edit', $list -> id) }}">수정</a>

				<form name='frm' id='frm' action="{{ route('boards.destroy', $list -> id) }}" method='POST'>
					@csrf
					@method('DELETE')
				<button type='submit'>삭제</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
{{-- 섹션 끝 --}}