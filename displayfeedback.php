<html>
<head>
    <link rel="stylesheet" href="table.css">
    <title>
        Feedback Page
    </title>
    </head>
    <body>
<?php
    require_once('dbconnect.php'); 
        echo "<br>";
        $my_query = "";
    $my_query = "select * from feedback";
//    $result = mysqli_query($connection, $my_query) or die('error');
//        echo '<table class="greenTable">';
//echo "<thead>";
//echo "<tr> <th>Name</th> <th>Email</th> <th>Feedback</th> </tr>";
//echo "</thead>";
//echo "<tbody>";
//        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//        echo "<tr> <td>";
//            echo $row['Name'];
//            echo "</td> <td>";
//            echo $row['Email'];
//            echo "</td> <td>";
//            echo $row['suggestion'];
//            echo "</td> </tr>";
//        }
//echo "</tbody>";
//echo "</table>";

//prepared statement
$stmt = $connection->prepare("select * from feedback");
$stmt->execute();
$result = $stmt->get_result();
 echo '<table class="greenTable">';
echo "<thead>";
echo "<tr> <th>Name</th> <th>Email</th> <th>Feedback</th> </tr>";
echo "</thead>";
echo "<tbody>";       
while($row = $result->fetch_assoc()){
    echo "<tr> <td>";
           echo $row['Name'];
            echo "</td> <td>";
            echo $row['Email'];
          echo "</td> <td>";
            echo $row['suggestion'];
            echo "</td> </tr>";
}
        echo "</tbody>";
echo "</table>";
        $stmt->close();
        $connection->close();
      ?>  
    </body>
</html>