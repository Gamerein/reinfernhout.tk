<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reins site!</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="./sStyle.css" rel="stylesheet" type="text/css">

  </head>
  
  <body>

    <div class="home">
      <h1>Reins site!</h1>
      <p>pls don't copyright claim this background kthnx</p>
    </div>

    <table>

    <tr>
    <th>Naam</th>
    <th>Punten</th>
    </tr>

    <?php
        include 'MySQL.php';            
        $conn = new mysqli("$sqlHost", "$sqlUsername", "$sqlPassword", "$sqlDatabase");
        
        /*if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
        echo "Connected successfully";
        }*/

        $sql = "SELECT * FROM `punten`";
        $result = $conn->query($sql);
        
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td id=\"namen\">" . $row['Name'] . "</td>";
        echo "<td id=\"punten\">" . $row['Punten'] . "</td>";
        echo "</tr>";
        }

        function add($name, $value) {
            $sql = "INSERT INTO $sqlTable (Name, Punten)
            VALUES ('$name', '$value')";

            if ($conn->query($sql) === TRUE) {
                echo "Done";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
  
  </table>

</body></html>