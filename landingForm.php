<?php  
//server
$cfg['Servers'][$i]['verbose'] = 'asosmidseasonsal';
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['port'] = 3307;
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';

//</server>




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $choice = $_POST['choice']; 
    $selected = $_POST['selected']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
        echo $email;
        echo $choice;
        echo $selected;
    }
}




	$servername = "127.0.0.1";
	$username = "root ";
	$password = "";
	$dbname = "landingform";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully". "<br>";		
	
	$date = date('Y-m-d');
	echo $date;
	
		$sql = "INSERT INTO basic (name, email, choice, selected, date)
			VALUES ('$name', '$email', '$choice', '$selected', '$date')";
			
	
	

	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}  		
	$conn->close();

?>