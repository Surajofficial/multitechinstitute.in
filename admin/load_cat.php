
<?php
include 'secure.php';
    $query = "SELECT * from category  ORDER BY `sno` DESC";

$result = mysqli_query($conn, $query);

$id = 1;
if (mysqli_num_rows($result) > 0) {

    
    while ($row = mysqli_fetch_assoc($result)) {
      
echo ' <tr>
<td data-id="'.$row['sno'].'">'.$id.'</td>
<td>
'.$row['cat_name'].'
</td>
<td>
<a href="javascript:void(0)" id="delet"  data-id ="' . $row['sno'] . '" class="btn btn-danger btn-sm">Delete</a>
<a href="edit_cat.php?id='.$row['sno'].'" id="edit" style="padding:2px 15px";   class="btn btn-blue btn-sm">Edit</a>
</td>
</tr>
';
$id = $id + 1;
    }

}

?>