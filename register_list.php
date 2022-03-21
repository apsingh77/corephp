<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname ="corephp";

$conn = new mysqli( $servername,$username,$password,$dbname );

$qry = "select * from sign_up";
$qry_rec = $conn->query($qry);
$tr_html = '';
if($qry_rec->num_rows > 0){
    while($rows = $qry_rec->fetch_assoc()){
        $tr_html .= '<tr> <td>'.$rows['first_name'].'</td><td>'.$rows['last_name'].'</td><td>'.$rows['dob'].'</td><td>'.$rows['gender'].'</td><td>'.$rows['email'].'</td></tr>';
    }
}



?>


<table border="1" cellspacing=0 cell padding="2" width="50%">
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Date of birth</th>
        <th>Gender</th>
        <th>Email</th>
    </tr>
    <?php echo $tr_html; ?>
</table>
