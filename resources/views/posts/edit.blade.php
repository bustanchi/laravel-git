@extends('layouts.app')

@section('content')

    {!! Form::model( $post, ['method'=>'POST' , 'action'=>['PostsController@update',$post->id]]) !!}
    {!! Form::hidden('_method','patch') !!}
        <div class="form-group">
            {!! Form::label('title','عنوان :') !!}
            {!! Form::text('title' , $post->title , ['class' =>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','توضیحات :') !!}
            {!! Form::textarea('description' , $post->content , ['class' =>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('بروزرسانی' , null , ['class' =>'btn btn-warning']) !!}
        </div>
    {!! Form::close() !!}


    {!! Form::model( $post, ['method'=>'DELETE' , 'action'=>['PostsController@destroy',$post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('حذف' , ['class' =>'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}












    {{--<form method="post" action="/posts/{{ $post->id }}">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        {{--<input type="hidden" name="_method" value="patch">--}}

        {{--<input type="text" name="title" placeholder="عنوان مطلب" value="{{ $post->title }}">--}}
        {{--<br/>--}}
        {{--<textarea name="description" type="text" placeholder="توضیح مطلب">{{ $post->content }}</textarea>--}}
        {{--<br/>--}}
        {{--<button type="submit" name="submit">بروزرسانی</button>--}}
    {{--</form>--}}

    {{--<form method="post" action="/posts/{{ $post->id }}">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        {{--<input type="hidden" name="_method" value="delete">--}}

        {{--<button type="submit" name="submit">حذف</button>--}}
    {{--</form>--}}

@endsection