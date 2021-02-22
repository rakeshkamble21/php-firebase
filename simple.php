<?php
             require 'dbconfig.php';
                $ref='test-27574-default-rtdb'; 
                $data=$database->getReference($ref)->getValue();
    
                print_r($data);
                ?>