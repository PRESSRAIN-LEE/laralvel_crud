@extends('boards.layout')	{{-- 레이아웃을가져온다 --}}

@section('content')
	<a href="{{ route('boards.index') }}">목록</a>
<form name='frm' id='frm' action="{{ route('boards.update', $board -> id) }}" method='POST'>
	@csrf
	@method('PUT')
	<table border='1'>
		<tr>
			<td>제목</td>
			<td><input type='text' name='subject'value="{{ $board -> subject }}"></td>
		</tr>
		<tr>
			<td>내용</td>
			<td><textarea name='contents'>{{ $board -> contents }}</textarea></td>
		</tr>
		<tr>
			<td colsapn='2'><button type='submit'>저장</button></td>
		</tr>
	</table>
</form>
@endsection