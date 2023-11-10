<!DOCTYPE html>	
<HTML>

<?php
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}
    else{echo "db connection error because of".mysqli_connect_error();}

    try{
            $sql = "SELECT * FROM menu_details WHERE Item_Availability=1 ";
            $result = mysqli_query($conn, $sql);

            echo "Available
            <div><table>";
            while($row = $result->fetch_assoc()) {
                $image = $row['Img_Link'];
                echo "<tr><td>" . htmlspecialchars($row['Item_Name']) . "</td><td>" . "£" . htmlspecialchars($row['Item_Cost']) . "</td><td>" . '<img src="images/' . $image . '" width="100" height="100"' .  "</td></tr>";
                }
            echo "</table></div><br>" ;


            $sql = "SELECT * FROM menu_details WHERE Item_Availability=0 ";
            $result = mysqli_query($conn, $sql);
            echo "<br>Un-Available
            <div><table>";
            while($row = $result->fetch_assoc()) {
                $image = $row['Img_Link'];
                echo "<tr><td>" . htmlspecialchars($row['Item_Name']) . "</td><td>" . "£" . htmlspecialchars($row['Item_Cost']) . "</td><td>" . '<img src="images/' . $image . '" width="150" height="100"' .  "</td></tr>";
                }
            echo "</table></div>" ;
        }

    catch(Exception $e) {
        echo 'Incorrect Email or password';
}

?>
<body>
</body>
</HTML>
