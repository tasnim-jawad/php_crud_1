<?php

    class Student{

        private $connection;

        public function __construct(){
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DBNAME", "crud");

            $this->connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
           
        //    if ($this->connection ==true) {
        //     echo "ok";
        //    } else {
        //         echo "not ok";
        //    }
           
        }
        public function add_student($data = null){
            // print_r($data);
            if(isset($data)){
                // echo "<pre>";
                // print_r($data);
                // die();

                $name = $data['name'];
                $email = $data['email'];
                $password = $data['password'];

                echo $name ;
                echo $email ;
                echo $password ;
                
                $query = "INSERT INTO `student` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name ', '$email', '$password')";
                mysqli_query($this->connection ,$query );
            }
            

            


            // if (!$fire) {
            //     printf("Error: %s\n", mysqli_error($this->connection));
            //     exit();
            // }else{
            //     echo "succesfulli connected";
            // }



        }
        
        


    }




?>