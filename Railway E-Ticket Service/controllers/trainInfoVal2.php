<?php 
require_once'../models/db.php';

    
    $typedText = $_POST['typedText'];
    //$search = $_POST['search'];
    
   
    if($typedText == null)
    {
        echo "Please select a train";

    }
    else if($typedText != null )
    {
        if(isset($_POST['typedText']))
        {    
            $typedText = $_POST['typedText'];
           // echo $typedText;

           // $result = traininfo($searchTrain);
           // $rowNum = traininfoo($searchTrain);

           $con = getConnection();

           $sql= "select * from traininfo where trainName like '%{$typedText}%'";

        
       
        $result = mysqli_query($con, $sql);
        $count= mysqli_num_rows($result);




                if($count >0)
                {
                    echo
                    '<table border="1">
                        <tr>
                            <th>Train Name</th>
                            <th>From Station</th>
                            <th>Arrival Time</th>
                            <th>To Station</th>
                            <th>Arrival Time</th>
                        </tr>
                        <tr>';
                        while($row=mysqli_fetch_array($result))
                           { echo '<td>'.$row['trainName'].'</td>
                            <td>'.$row['fromStation'].'</td>
                            <td>'.$row['arrivalF'].'</td>
                            <td>'.$row['toStation'].'</td>
                            <td>'.$row['arrivalT'].'</td>
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