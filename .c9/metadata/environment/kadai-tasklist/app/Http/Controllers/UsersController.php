{"filter":false,"title":"UsersController.php","tooltip":"/kadai-tasklist/app/Http/Controllers/UsersController.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\User; // add","","class UsersController extends Controller","{","    public function index()","    {","        $users = User::all();","        ","        return view('users.index', [","            'users' => $users,","        ]);","    }","}"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":1},"end":{"row":18,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528940010763,"hash":"a6f183eb860e4bd2582fc07edec850e9f7c17544"}