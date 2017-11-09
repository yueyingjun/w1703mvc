<?php
class tree{
    public $str="";
    function getTree($pid,$table,$db){
      $sql="select * from ".$table." where pid=".$pid;

      $result=$db->db->query($sql);

      $this->str.="<ul>";
      while ($row=$result->fetch_assoc()){
         $sql1="select * from ".$table." where pid=".$row["cid"];
          $result1=$db->db->query($sql1);
          if($result1->num_rows>0){
                $this->str.="<li class='parent'>{$row['cname']} </li>";
          }else{
              $cid=$row["cid"];
              $this->str.="<li> <a href='index.php?m=index&f=write&a=addCon&cid={$cid}' target='con'> {$row['cname']}</a> </li>";

              }
           $this->getTree($row["cid"],$table,$db);
      }

      $this->str.="</ul>";
    }
}
