<?php

include 'db.php';


$query = "SELECT * FROM tblimages";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);

if ($row > 0) {
    
    $opt = '<table class="table table-bordered">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Delete</th>
        </tr>
    ';

    
        while($row = mysqli_fetch_assoc($result)) {
    
        $opt .= "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['image']}</td>
                    <td><button type='button'  class='btn btn-danger delete' id='" . $row['id'] . "'>Delete</button></td>
                </tr>
                ";
    }
    $opt .= '</tbody>
        </table>';
    
    echo $opt;
}
?>