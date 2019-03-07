@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => 'post.store']) !!}


    <div class="form-group">
        {!! Form::label('title', 'Title ') !!}
        {!! Form::text('title',null,["class"=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description ') !!}
        {!! Form::text('description',null,["class"=>'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    {!! Form::close() !!}
@endsection
