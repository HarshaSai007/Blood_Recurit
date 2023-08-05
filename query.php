<?php
include "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$grp = $_POST['grp'];

$sql = "SELECT lat,lon FROM users WHERE blood_grp='$grp'";
$result = $conn->query($sql);

// Store the data in a PHP array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $lat[] = $row['lat'];
    $lon[] = $row['lon'];

    // Encode the data as a JSON string
$lat1 = json_encode($lat);
$lon1 = json_encode($lon);
}

}
?>