<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud'
);

// Prueba de Conexion
// if(isset($conn)){
//     echo "DB is connected";
// };