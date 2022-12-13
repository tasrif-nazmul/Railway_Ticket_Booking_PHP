<?php 
require_once'../../models/db.php';

    
    $typedText = $_POST['typedText'];
    
   
    if($typedText == null)
    {
        echo "No selected user";

    }
    else if($typedText != null )
    {
        if(isset($_POST['typedText']))
        {    
            $typedText = $_POST['typedText'];

            $con = getConnection();
            $sql= "select * from users where Username like '%{$typedText}%'";
            $result = mysqli_query($con, $sql);
            $count= mysqli_num_rows($result);




                if($count >0)
                {
                    echo
                    '<table border="1">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                        </tr>
                        <tr>';
                        while($row=mysqli_fetch_array($result))
                           { echo '<td>'.$row['Name'].'</td>
                            <td>'.$row['Email'].'</td>
                            <td>'.$row['Username'].'</td>
                            <td>'.$row['Password'].'</td>
                            <td>'.$row['Gender'].'</td>
                            <td>'.$row['DateOfBirth'].'</td>
                        </tr>'; }
                   echo '</table>';
                }
                else
                {
                    echo'Data not found';
                }
            
        }
                
    }

?>