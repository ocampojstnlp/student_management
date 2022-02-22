<?php

class Database {
    private function connect() {
        // The Data Source Name, or DSN, contains the information required to connect to the database. In general, a DSN consists of the PDO driver name, followed by a colon, followed by the PDO driver-specific connection syntax.
        // $string = DBDRIVER.':host='. DBHOST .';dbname='. DBNAME;
        // if (!$con = new PDO($string, DBUSER, DBPASS)) {
        //     die('Cound\'t connect to the database');
        // }
        // return $con;
        
        $string = DBDRIVER . ':host='. DBHOST .';dbname=' . DBNAME;
        
        if (!$con = new PDO($string, DBUSER, DBPASS)) {
            die('nothing');
        }

        return $con;
    }




    public function query($query, $data = array(), $data_type = 'object') {
        $con = $this->connect();
        $stm = $con->prepare($query);


        if ($stm) {
            $check = $stm->execute($data);

            if ($check) {
                if ($data_type == 'object') {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }

            }



        }

    }



}

