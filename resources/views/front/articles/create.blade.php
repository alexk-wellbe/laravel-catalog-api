@extends('front.app')

@section('content')

    <h1>New Article</h1>
    <hr />

    {!! Form::open(['url' => 'articles']) !!}

        @include('front.articles._form', [
            'submitButton' => 'Add Article'
        ])

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop