<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=${sqldb}", "${sqlusr}", "${sqlpas}");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
        echo "<p>And we have:</p>";
    }
    catch (PDOException $e)
    {
        $output = "unable to connect to the database server.";
        echo "$output = $e";
        exit();
    }
    $PDO_connection = "connect success";
?>
