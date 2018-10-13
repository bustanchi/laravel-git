@extends('layouts.app')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </div>
    @endif

    {!! Form::open(['method'=>'POST' , 'action'=>'PostsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','عنوان :') !!}
        {!! Form::text('title' , null , ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','توضیحات :') !!}
        {!! Form::textarea('description' , null , ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('file','تصویر اصلی :') !!}
        {!! Form::file('file' , ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('ذخیره' , null , ['class' =>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}



    {{--<form method="post" action="/posts">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

        {{--<input type="text" name="title" placeholder="عنوان مطلب">--}}
        {{--<br/>--}}
        {{--<textarea name="description" type="text" placeholder="توضیح مطلب"></textarea>--}}
        {{--<br/>--}}
        {{--<button type="submit" name="submit"> ذخیره</button>--}}
    {{--</form>--}}

@endsection