<?php



$omikuji=array("アリー","たけまる","TKay","ほのか","TAKA","とーる",);
$id= rand (0,5);




$image_rand = array(
    "ally-min.jpg",
    "viber image.jpg",
    "tknokao-min.jpg",
    "taka-min.jpg",
    "toru2-min.jpg",
);
 
$image_rand = $image_rand[mt_rand(0, count($image_rand)-1)];



?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="uranai.css">
         
        <title>タイトル</title>
        
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        
        
        <h1>今日のあなたのラッキーパーソン</h1>
        <span class="glyphicon glyphicon-asterisk"></span><a href="index.php" class="btn btn-default">今日のラッキーパーソンを占いたい！</a>
        
    
       <div><?php echo '<img src="'.$image_rand.'" alt="">';?> </div>
　　　　
　　　　<h2>"<?php echo $omikuji[$id] ;?>"<br>にお菓子をあげるといいことがあります:)<br>Trick or treat</h2>
　　　　
    </body>
</html>



