<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
  $db=new mysqli("localhost","root","123456","w1703_blog");
  $num=3;
  //0 3
  $pages=$_GET["pages"]*$num;
  $db->query("set names utf8");

  $sql="select * from level";
  $result=$db->query($sql);
  $pageNums=ceil($result->num_rows/$num);


  $sql="select * from level limit {$pages}, {$num}";
  $result=$db->query($sql);





?>
  <ul>
      <?php
        while ($row=$result->fetch_assoc()) {
            ?>
            <li>

                <?php
                 echo $row["lname"];
                ?>
            </li>
            <?php
        }
      ?>
  </ul>
  <div>
      <?php

      define("PROT", strtolower(strchr($_SERVER["SERVER_PROTOCOL"], "/", true)));
      //主机地址
      define("HOST", $_SERVER["HTTP_HOST"]);
      // 项目的路径
      define("APP_URL", substr($_SERVER["SCRIPT_NAME"], 0, strrpos($_SERVER["SCRIPT_NAME"], "/")));

      define("HTTP_URL", PROT . "://" . HOST .$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"]);

      $originUrl=HTTP_URL;
      if(!strrpos($originUrl,"pages")){
          $originUrl=$originUrl."&pages=0";

      }

      $fullUrl=substr($originUrl,0,strrpos($originUrl,"&pages"));



      $pages=substr($originUrl,strrpos($originUrl,"=")+1);

        $str="";

        $str.="<a href='{$fullUrl}&pages=0'>[首页]</a>";


        $up=$pages-1<0?0:$pages-1;

        $str.="<a href='{$fullUrl}&pages={$up}'>[上一页]</a>";

        $start=$pages-3<0?0:$pages-3;
        $end=$pages+6>$pageNums-1?$pageNums-1:$pages+6;


        for($i=$start;$i<=$end;$i++){
            $num=$i+1;
            if($i==$pages){
                $style="style='color:red'";
            }else{
                $style="style='color:#000'";
            }
            $str.="<a href='{$fullUrl}&pages={$i}' {$style}>[{$num}]</a>";
        }

        $next=$pages+1>$pageNums-1?$pageNums-1:$pages+1;
      $str.="<a href='{$fullUrl}&pages={$next}'>[下一页]</a>";

        $last=$pageNums-1;
        $str.="<a href='{$fullUrl}&pages={$last}'>[尾页]</a>";

         echo $str;
      ?>
  </div>
</body>
</html>