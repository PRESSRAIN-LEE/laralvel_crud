@extends('boards.layout')	{{-- 레이아웃을가져온다 --}}

@section('content')
	<a href="{{ route('boards.index') }}">목록</a>

	<table border='1'>
		<tr>
			<td>제목</td>
			<td>{{ $board -> subject }}</td>
		</tr>
		<tr>
			<td>내용</td>
			<td>{{ $board -> contents }}</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</table>
@endsection