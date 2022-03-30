<?php

include 'db.php';


$query = "SELECT * FROM tbladmins";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);

if ($row > 0) {
    
    $opt = '<table class="table table-bordered="1">
    <tbody>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
           
            
        </tr>
    ';

    
        while($row = mysqli_fetch_assoc($result)) {
    
        $opt .= "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['firstName']}</td>
                    <td>{$row['lastName']}</td>
                   
                   
                </tr>
                ";
    }
    $opt .= '</tbody>
        </table>';
    
    echo $opt;
}
?>