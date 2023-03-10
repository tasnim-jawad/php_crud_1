<?php

    class Student{

        public $connection;

        public function __construct(){
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DBNAME", "crud");

            $this->connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

        //    if ($this->connection == true) {
        //     echo "ok";
        //    } else {
        //         echo "not ok";
        //    }
           
        }

        public function show_student(){
            $query = "SELECT * FROM student";
            $result = $this->connection->query($query);
            return $result;
        }

        public function add_student($data){
            // echo "<pre>"; print_r($data); die();

            $name = $data['name'];
            $email = $data['email'];
            $password = $data['password'];
            
            $query = "INSERT INTO `student` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name ', '$email', '$password')";
            mysqli_query($this->connection ,$query);

            $this->show_student();
        }
        
        


    }




?>