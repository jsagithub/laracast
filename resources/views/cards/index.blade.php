@extends('layout')

@section('content')
    <h1>Cards Page</h1>

    @foreach ($cards as $card)
    	<div>
    		{{$card->title}}
    	</div>
    @endforeach
@stop    