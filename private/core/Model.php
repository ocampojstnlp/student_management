<?php

class Model extends Database {

    // protected $table;

    public function __construct() {

        //$this->table = strtolower(get_class($this). 's');
        
        
        //echo $this->table;
        // echo Model::class;
        // echo Self::class;
        // echo get_class($this);
         if (!property_exists($this, 'table')) {
            $this->table = strtolower(get_class($this). 's');
        }

        
    }

    public function where($column, $value) {

        $column = addslashes($column);

        $query = "SELECT * FROM $this->table WHERE $column = :value";
        return $this->query($query, [
            'value' => $value
        ]);
        
    }

    public function findAll() {
        $query = "SELECT * FROM $this->table";
        return $this->query($query);
    }


   public function insert($data) {
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);
        $query = "INSERT INTO $this->table ($columns) VALUES (:$values)";
        // return $this->query($query, $data);
   }
    

    public function update($id, $data) {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        return $this->query($query, [
            'value' => $value
        ]);
        
    }


    public function delete($id) {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        return $this->query($query, [
            'value' => $value
        ]);
        
    }

}

