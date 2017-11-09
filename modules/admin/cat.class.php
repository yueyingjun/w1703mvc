<?php
class cat extends main{
    //显示添加的页面
    function addCat(){
        $this->smarty->display("admin/addCat.html");
    }
    //提交数据
    function addCatCon(){
        $pid=sql($_POST["pid"]);
        $cname=sql($_POST["cname"]);
        $cinfo=sql($_POST["cinfo"]);

        $db=new db("category");
        if($db->insert(array("pid"=>$pid,"cname"=>"'{$cname}'","cinfo"=>"'{$cinfo}'"))){
            echo "<script>alert('success');location.href='index.php?m=admin&f=cat&a=addCat'</script>";
        }
    }
    function showCat(){
        $arr=array(
            array(
            "id"=>0,
            "text"=>"一级栏目"
            )
        );

        tree(0,$arr[0]["children"]);
        echo json_encode($arr);
    }

    function tableCat(){
        $this->smarty->display("admin/tableCat.html");
    }

    function tableCatCon(){
        $db=new db("category");

        $arr=array();

        $result=$db->select();
        $arr["total"]=count($result);
        $arr["rows"]=array(
            array(
            "id"=>0,
            "cname"=>"一级选项","iconCls"=>"icon-ok","cinfo"=>"一级栏目"
            )

        );

        foreach ($result as $v){
          $v["id"]=intval($v["cid"]);
          $v["_parentId"]=intval($v["pid"]);
          $arr["rows"][]=$v;
        }
        $arr["footer"]=array(
            array(
            "cname"=>"Total","cinfo"=>count($result),"iconCls"=>"icon-sum"
            )

        );

        echo json_encode($arr);
    }

    function edit(){
        $cid=$_POST["cid"];
        $field=$_POST["field"];
        $val=$_POST["val"];

        $db=new db("category");
        if($db->where("cid=".$cid)->update($field."="."'{$val}'")){
            echo "ok";
        }else{
            echo "no";
        }

    }

    function del(){
        $cid=$_POST["cid"];
        $db=new db("category");
        if($db->where("cid=".$cid)->delete()){
            echo "ok";
        }else{
            echo "no";
        }
    }
}