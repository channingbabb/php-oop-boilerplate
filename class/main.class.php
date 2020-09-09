<?php

  class main{

    public function select($param){
        $query = $this->db->prepare("SELECT * FROM testtable WHERE parama=:parama LIMIT 1");
        $query->execute(array(":parama" => $param));
        if ($query->rowCount() > 0) {
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                return $row->id;
            }
        }
    }

    public function test($text){
        return $test;
    } 
}
