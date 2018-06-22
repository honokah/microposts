@if (Auth::id() != $user->id)
    @if (Auth::user()->is_liking($microposts->id))
        {!! Form::open(['route' => ['sushi.unlike', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unlike', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['sushi.like', $user->id]]) !!}
            {!! Form::submit('Like', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif

