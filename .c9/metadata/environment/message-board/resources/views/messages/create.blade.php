{"filter":false,"title":"create.blade.php","tooltip":"/message-board/resources/views/messages/create.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":15,"column":4},"end":{"row":16,"column":86},"action":"remove","lines":["{{ '<p style=\"color: red;\">When passed through htmlentities function</p>' }}","    {!! '<p style=\"color: red;\">When not passed through htmlentities function</p>' !!}"],"id":3}],[{"start":{"row":4,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["<h1>メッセージ新規作成ページ</h1>","","    {!! Form::model($message, ['route' => 'messages.store']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('投稿') !!}","","    {!! Form::close() !!}","    ","    "],"id":4},{"start":{"row":4,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["<h1>メッセージ新規作成ページ</h1>","","    @if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif","","","    {!! Form::model($message, ['route' => 'messages.store']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('投稿') !!}","","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":5,"column":0},"end":{"row":22,"column":25},"action":"remove","lines":["","    @if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif","","","    {!! Form::model($message, ['route' => 'messages.store']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('投稿') !!}","","    {!! Form::close() !!}"],"id":5},{"start":{"row":5,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["<h1>メッセージ新規作成ページ</h1>","","    {!! Form::model($message, ['route' => 'messages.store']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('投稿') !!}","","    {!! Form::close() !!}",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":4},"end":{"row":18,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527834485909,"hash":"dd106872d61aa5bf4053ea73a0267bed1dae7e14"}