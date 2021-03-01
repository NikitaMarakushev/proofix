<?php

//fills html with a data from courier table
function fill_courier($connect) {
	$Courier = array();
	if ($query_user = mysqli_query($connect, "SELECT * FROM `couriers`")) {
		while ($data = mysqli_fetch_assoc($query_user)) {
			$Courier[$data['id']] = $data['name'];
        }
			return $Courier;
	}
}

//Execute
$Courier = fill_courier($connect);

foreach ($Courier as $key => $value) {
	echo "<option value='$value'> $value </option>";
}


