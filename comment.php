<?php
    $con = new mysqli('localhost', 'root', '', 'tourism');

    $sql = mysqli_query($con, "SELECT name, comment, rating FROM feedback 
	UNION 
	SELECT name, comment, rating FROM feedback2 
	UNION
	SELECT name, comment, rating FROM feedback3 
	UNION 
	SELECT name, comment, rating FROM feedback4 
	UNION 
	SELECT name, comment, rating FROM feedback5 
	UNION 
	SELECT name, comment, rating FROM feedback6 
	UNION
	SELECT name, comment, rating FROM feedback7 
	UNION 
	SELECT name, comment, rating FROM feedback8 
	UNION 
	SELECT name, comment, rating FROM feedback9 ORDER BY name, comment, rating");
	if(mysqli_num_rows($sql) >= 0){
		while ($row = mysqli_fetch_assoc($sql)) { 
		    if(empty($row['name'])){
				echo '<div class="comment-sect" style=" word-break: break-all; margin-bottom: auto; height: min-content; max-width: 1000px; font-size: 15px; margin-bottom: 0.5%; box-shadow: 5px 10px 8px #888888; border-radius: 20px; padding: 10px;">'. '<b>'. '<h3>Anonymous</h3>' . '</b>' . $row["comment"] . '<br>'. '<h5> Rating: '. $row['rating']. '</h5>'. '</div>';
			}elseif(!empty($row['name'])) {
				echo '<div class="comment-sect" style=" word-break: break-all; margin-bottom: auto; height: min-content; max-width: 1000px; font-size: 15px; margin-bottom: 0.5%; box-shadow: 5px 10px 8px #888888; border-radius: 20px; padding: 10px;">'. '<b>'. '<h3>'.$row["name"]. '</h3>' . '</b>' . $row["comment"] . '<br>'. '<h5> Rating: '. $row['rating']. '</h5>'. '</div>';
			} else {
				echo 'No Comment';
			}
		}
	}

?>