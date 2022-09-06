<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bf3tyxdb24jfqzb3qigp-mysql.services.clever-cloud.com","ubm2yxj7mfernzx3","7d4ZeynCSKaAHRA02cl0","bf3tyxdb24jfqzb3qigp");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }