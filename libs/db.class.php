<?php
class db {
    function __construct($tablename=""){
        global $configs;
        $this->host=$configs["database"]["host"];
        $this->port=$configs["database"]["port"];
        $this->user=$configs["database"]["user"];
        $this->password=$configs["database"]["password"];
        $this->database=$configs["database"]["database"];
        $this->table=$tablename;

        $this->opt["field"]="*";
        $this->opt["where"]=$this->opt["order"]=$this->opt["limit"]="";
        $this->connect();


    }

    function connect(){
        $this->db=new mysqli($this->host,$this->user,$this->password,$this->database,$this->port);
        if(mysqli_connect_error()){
            echo "数据库连接错误";
            exit;
        }
        $this->db->query("set names utf8");
    }

    function selectTable($tablename){
        $this->table=$tablename;
    }

    /*查询多条数据*/
    function select(){
       $sql="select ".$this->opt["field"]." from ".$this->table." ".$this->opt["where"]." ".$this->opt["order"]." ".$this->opt["limit"];
       $result=$this->db->query($sql);
       $arr=array();
       while ($row=$result->fetch_assoc()){
            $arr[]=$row;
       }

       return $arr;

    }

    /*查询单条数据*/

    function find(){
        $sql="select ".$this->opt["field"]." from ".$this->table." ".$this->opt["where"]." ".$this->opt["order"]." ".$this->opt["limit"];

        $result=$this->db->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }

    /*执行自定义的sql*/

    function exec($sql){
        $result=$this->db->query($sql);

        return $result;

    }

    function filed($filed){
        $this->opt["field"]=$filed;
        return $this;
    }
    function where($where){
        $this->opt["where"]="WHERE ". $where;
        return $this;
    }
    function order($order){
        $this->opt["order"]="ORDER BY ".$order;
        return $this;
    }
    function limit($limit){
        $this->opt["limit"]="LIMIT ".$limit;
        return $this;
    }

    /*插入*/



    function insert ($arr){
        $attr="";
        $val="";
        foreach ($arr as $k=>$v){
            $attr.=$k.",";
            $val.=$v.",";
        }
        $attr=substr($attr,0,-1);
        $val=substr($val,0,-1);

        $sql="insert into ".$this->table." (".$attr.") values (".$val.")";

        $this->db->query($sql);

        return $this->db->affected_rows;

    }

    function update($sql){
       $sql="update ".$this->table." set ".$sql." ".$this->opt["where"];
       $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function delete(){
        $sql="delete from ".$this->table." ".$this->opt["where"];

        $this->db->query($sql);

        return $this->db->affected_rows;
    }

}








