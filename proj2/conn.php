
<?php>
//Connect to the database
$mysqli=new mysqli("localhost","2242411","u07147","db2242411");
if($mysqli->connect_erno){
echo "Failed to connect to MySQL:".$mysqli->connect_error;
exit();
}
//Execute SQL query for Appointment table
$sql="SELECT*
FROM Appointment
WHERE AppointmentID='{$_GET['AppointmentID]}'
AND Appointment_when>=Date_SUB(NOW(),INTERVAL 60 SECOND)
$result = $mysqli->query($sql);
//Error?
if($result ==false){
 echo("<h4>SQL error description:".$mysqli->error."</h4>");
}

//Get data convert to JSON and Print
$row=$result->fetch_assoc();
print json_encode($row);

//Free result set and close connection
$result ->free_result();
$mysqli->close();

//Execute SQL query for the Carer table
$sql="SELECT*
FROM Carer
WHERE CarerID = '{$GET['CarerID]}'
AND Carer_when>=Date_SUB(NOW(),INTERVAL 60 SECOND)
$result = $mysqli->query($sql);
//Error?
if($result ==false){
  echo("<h4>SQL error description:".$mysqli->error."</h4>");
}
//Get data convert to JSON and Print
$row=$result->fetch_assoc();
print json_encode($row);

//Free result set and close the connection
$result ->free_result();
$mysqli->close();


// Execute SQL query for the Customer Carer Table
$sql = "SELECT*
FROM CustomerCare
WHERE CustomerID ='{$GET['CustomerID]}'
AND Carer_when>Date_SUB(NOW(),INTERVAL 60 SECOND)
$result = $mysqli->query($sql);
//Error?
if($result ==false){
   echo("<h4>SQL error description:".$mysqli->error."</h4>");
}
//Get data convert to JSON and Print
$row = $result->fetch_assoc();
print json_encode($row);

//Free result set and close the connection
$result ->free_result();
$mysqli->close();

//Execute SQL query for the Emergency Contact Table
$sql = "SELECT*
FROM Emergency Contact
WHERE EmergencyContactID = '{$GET['EmergencyContactID]}'
AND Emergency Contact_when>Date_SUB(NOW(),INTERVAL 60 SECOND)
$result = $mysqli->query($sql);
//Error?
if($result ==false){
    echo("<h4>SQL error description:".$mysqli->error."</h4>");
}
//Get data convert to JSON and Print
$row = $result-->fetch_assoc();
print json_encode($row);

//Free result and close the connection
$result -> free_result();
$mysqli->close();

//Execute SQL query for the Medication Table
$sql = "SELECT*
FROM Medication
WHERE MedicationID = '{$GET['MedicationID]}'
AND Medication_when>Date_SUB(NOW(),INTERVAL 60 SECOND)
$result =$mysqli->query($sql);
//Error?
if($result ==false){
    echo("<h4> SQL error description:".$mysqli->error."</h4>");
}
//Get data convert to JSON and Print
$row = $result-->fetch_assoc();
print json_encode($row);

//Free result and close the connection
$result ->free_result();
$mysqli->close();

//Execute SQL query for the Prescription table
$sql = "SELECT*
FROM Prescription
WHERE PrescriptionID = '{$GET['PrescriptionID]}'
AND Prescription_when>Date_SUB(NOW(),INTERVAL 60 SECOND)
$result=$mysqli_>query($sql);
//Error?
if($result ==false){
    echo("<h4> SQL error description:".$mysqli->error."</h4>");
}
//Get data convert to JSON and Print
$row = $result-->fetch_assoc();
print json_encode($row);

//Free result and close the connection
$result ->free_result();
$mysqli->close();


//Execute SQL query for the Reminder Table
$sql = "SELECT*
FROM Reminder
WHERE ReminderID ='{$GET['ReminderID]}'
AND Prescription_when>Date_SUB(NOW(),INTERVAL 60 SECOND)
$result=$mysqli_>query($sql);
//Error?
if($result ==false){
   echo("<h4> SQL error description:".$mysqli->error."</h4>");
}
//Get data convert to JSON and Print
$row = $result-->fetch_assoc();
print json_encode($row);

//Free result and close the connection
$result ->free_result();
$mysqli->close();

//Execute SQL query for the Login Table
$sql = "SELECT*
FROM Login
WHERE LoginID = '{$GET['LoginID]}'
AND Login_when>Date_SUB(NOW(),INTERVAL 60 SECOND)
$result=$mysqli_>query($sql);
//Error?
if($result ==false){
   echo("<h4> SQL error description:".$mysqli->error."</h4>");
}
//Get data covert to JSON and Print
$row = $result-->fetch_assoc();
print json_encode($row);

//Free result and close the connection
$result ->free_result();
$mysqli->close();


?>
