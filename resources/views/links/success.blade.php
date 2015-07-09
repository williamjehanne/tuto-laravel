@extends('default')

@section('content')
    <h1>Brave</h1>

    <p>
        <a class="btn btn-primary" href="{{ action('LinksController@show', ['id' => $link->id]) }}">
            {{--<{{ action('LinksController@show', ['id' => $link->id]) }}--}}
            {{ route('link.show', $link) }}
        </a>
    </p>
@stop