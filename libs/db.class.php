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


    function select(){
       $sql="select ".$this->opt["field"]." from ".$this->table." ".$this->opt["where"]." ".$this->opt["order"]." ".$this->opt["limit"];
       $result=$this->db->query($sql);
       $arr=array();
       while ($row=$result->fetch_assoc()){
            $arr[]=$row;
       }

       return $arr;

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

}








