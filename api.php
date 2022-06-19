<?php
$con = mysql_connect("localhost","root","","api");
$response = array();
If($con) {
$sql = "select * from users";
$result = mysql-query($con,$sql);
if($result) {
$x = 0;
while ($row = mysql_fetch_assoc($result)){
$respond[$x]['id'] = $row['id'];
$respond[$x]['name'] = $row['name'];
$respond[$x]['age'] = $row['age'];
$respond[$x]['email'] = $row['email'];
$x++;
}
echo json-encode($response, JSON_PRETTY_PRINT);
}
}
else {
echo "database connection failed";
}
?>
