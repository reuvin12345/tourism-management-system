<?php
    $conn= new mysqli('localhost', 'root', '', 'tourism');

    $sql = "SELECT visitors, place FROM counter ORDER BY visitors DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<h5 style='font-style:'Poppins'; color='purple'; font-weight='bold'>" . $row['visitors'] . " : " . $row['place'] . "</h5>";
        }
      } else {
        echo "0 results";
      }
      
      $conn->close();

?>