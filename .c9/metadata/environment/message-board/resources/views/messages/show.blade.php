{"filter":false,"title":"show.blade.php","tooltip":"/message-board/resources/views/messages/show.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":4,"column":0},"end":{"row":7,"column":0},"action":"remove","lines":["<h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>",""],"id":2},{"start":{"row":4,"column":0},"end":{"row":8,"column":80},"action":"insert","lines":["<h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id]) !!}"]}],[{"start":{"row":4,"column":0},"end":{"row":8,"column":80},"action":"remove","lines":["<h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id]) !!}"],"id":3},{"start":{"row":4,"column":0},"end":{"row":12,"column":25},"action":"insert","lines":["<h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":25},"end":{"row":12,"column":25},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527826634715,"hash":"951793ac93171c3b62619a49833eadbbbf011f3d"}