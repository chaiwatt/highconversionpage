@extends('layouts.salepage',[$title = $salepageurl->name])
@section('content')

	@foreach ($salepagesections as $salepagesection)
		@include($salepagesection->section,['sellpagesection' => $salepagesection])
	@endforeach

@endsection