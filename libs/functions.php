<?php

function P($param){
    return $_POST[$param];
}
function G($param){
    return $_GET[$param];
}
function sql($param){

    return addslashes(htmlspecialchars($param));

}


function tree($pid=0,&$arr){
    $db=new db();
    $i=0;
    $sql="select * from category where pid=".$pid;
    $result=$db->db->query($sql);
    while ($row=$result->fetch_assoc()){
        $arr[$i]=array(
            "id"=>$row["cid"],
            "text"=>$row["cname"]
        );
        tree($row["cid"],$arr[$i]["children"]);
        $i++;
    }
}

