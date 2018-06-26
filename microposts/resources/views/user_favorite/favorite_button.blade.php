 @if (Auth::user()->is_liking($micropost->id))
        {!! Form::open(['route' => ['sushi.unlike', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unlike', ['class' => "btn btn-warning btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['sushi.like', $micropost->id]]) !!}
            {!! Form::submit('Like', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
 @endif
    


