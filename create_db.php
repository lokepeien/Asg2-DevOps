<!-- ONLY CALL ONCE -->
<!-- Creates database for site -->
 <?php
    $conn = mysqli_connect(
        getenv('DB_HOST') ?: 'localhost',
        getenv('DB_USER') ?: 'root',
        getenv('DB_PASSWORD') ?: ''
    );
    $sql = "create database if not exists asg_3;";
    if($conn){
     echo "connected";
     if (mysqli_query($conn, $sql)) {
         echo "database created";
     }
    }

    mysqli_close($conn);