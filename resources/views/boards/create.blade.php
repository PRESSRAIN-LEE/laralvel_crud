@extends('boards.layout')	{{-- 레이아웃을가져온다 --}}

{{-- 섹션 시작 --}}
@section('content')

	게시판 > create

	<form name='frm' id='frm' action="{{ route('boards.store') }}" method='POST'>
		@csrf
	<table border='1'>
		<tr>
			<th>제목</th>
			<td><input type="text" name="subject"/></td>
		</tr>
		<tr>
			<th>내용</th>
			<td><textarea name="contents"></textarea></td>
		</tr>
		<tr>
			<td colspan='2'><button type='submit'>저장</button></td>
		</tr>
	</table>
</form>

	@endsection
{{-- 섹션 끝 --}}
