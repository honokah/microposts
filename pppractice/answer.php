<?php
 
$question = $_POST['question']; 
$answer = $_POST['answer'];   


if($question == $answer){
　　 $result = "わあい当たり!";
　　  
}else{
   	$result = "ざんねん";
}

 return $result;
 
?>

<!doctype html>
<html  lang="ja">
<head>
<meta charset="utf-8">

<title>Douki クイズ - 答え合わせ</title>
</head>
<body>
    
<?php include('./indexx.php'); ?>
 
<h2>クイズの結果</h2>
<?php echo $result ; ?>
 
</body>
</html>
