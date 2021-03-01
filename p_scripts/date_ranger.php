<?php

//gets regions from database
/**
 * @param $connect
 */
function date_ranger($connect) {
	if ($query_regions = mysqli_query($connect, "SELECT * FROM `regions`")) {
		while ($data = mysqli_fetch_assoc($query_regions)) {
			$key       = $data["region"];
       		$value     = $data["date_to"];
			$arr[$key] = $value;
		}
	}

	foreach ($arr as $key => $value) {
		if($_POST['city'] == $key) {
			echo "$value";
		}
	}
}


//Execute
date_ranger($connect);

