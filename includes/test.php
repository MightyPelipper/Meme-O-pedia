<?php


            include_once 'dbh.inc.php';
            
            $sql = "SELECT * FROM Users";

            $result = mysqli_query($conn, $sql) or die("bad Query: $sql");

            echo "<table border='1'>";
            echo "<tr><td>UserID</td> <td>FirstName</td> <td>LastName</td> <td>Email</td> <td>username</td> <td>Password</td> <td>Admin</td> </tr>";

            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr> 
                <td>{$row['user_id']}</td> <td>{$row['user_first']}</td> <td>{$row['user_last']}</td> <td>{$row['user_email']}</td>
                 <td>{$row['user_uid']}</td> <td>{$row['user_pwd']}</td> <td>{$row['is_admin']}</td>
                </tr>";
            }
            echo "</table>"

            
  ?>          