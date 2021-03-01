<?php

/**
 * @param $connect
 * @return array
 */
function fill_region($connect) {
	$Reg = array();
	if ($query_user = mysqli_query($connect, "SELECT * FROM `regions`")) {
		while ($data = mysqli_fetch_assoc($query_user)) {
			$Reg[$data['id']] = $data['region'];
        }
			return $Reg;
	}
}

$Reg = fill_region($connect);

foreach ($Reg as $key => $value) {
	echo "<option value='$value'> $value </option>";
}

