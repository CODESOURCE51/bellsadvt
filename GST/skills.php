<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'bellsadv_gst';
    $dbPassword = 'bells@gst#12';
    $dbName = 'bellsadv_gst';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM td_size WHERE size LIKE '%".$searchTerm."%' ORDER BY size_id ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['size'];
    }
    
    //return json data
    echo json_encode($data);
?>