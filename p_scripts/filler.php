<?php

/**
 * @param $randata
 * @return array
 */
function randomize_date($randata) {
	$start = strtotime('2015-06-01T00:00');
	$end  = strtotime('2021-03-01T00:00');
	$random_stamp = rand($start,$end);
	$date_arriving = date("Y-m-d H:i", $random_stamp);
	$date_leaving = date("Y-m-d H:i", strtotime("+ $randata hours", $random_stamp));
	return $randomize_date=[ $date_arriving, $date_leaving ];
}

/**
 * @param $connect
 * @return mixed
 */
function randomize_courier($connect) {
	if ($query_user = mysqli_query($connect, "SELECT * FROM `couriers`")) {
		while ($data = mysqli_fetch_assoc($query_user)) {
				$courier[] = $data['name'];
        }
		$randomKey = array_rand($courier, 1);
		return ($courier[$randomKey]);
		}
	}


/**
 * @param $connect
 * @return array
 */
function randomize_region($connect) {
	if ($query_user = mysqli_query($connect, "SELECT * FROM `regions`")) {
		while ($data = mysqli_fetch_assoc($query_user)) {
			$region[] = $data['region'];
			$randata[] = $data['date_to'];
		}
		$randomKey = array_rand($region, 1);
		return $regionRandata=[ $region[$randomKey], $randata[$randomKey] ];
	}
}


/**
 * @param $courier_check
 * @param $region
 * @param $courier
 * @param $date_arriving
 * @param $date_leaving
 * @param $connect
 * @return false
 */
function input_in_schedule($courier_check, $region, $courier, $date_arriving, $date_leaving, $connect) {
	$null = null;
	if($employment) {
		return false;
	}
	$query_schedule = mysqli_query($connect, "INSERT INTO `schedule` (`id`, `region`, `courier`, `date_leaving`, `date_arriving`) VALUES ('.NULL.', ?, ?, ?, ?)");
		if ($query_schedule) {

		}
	}


	function courier_check($date_arriving, $date_leaving, $courier) {
		$date_leaving = strtotime($date_leaving);
		$date_arriving   = strtotime($date_arriving);
		if ($query_user = mysqli_query(DataBase::getDb()->msqli,
		"SELECT courier FROM schedule
		WHERE (courier) = '{$courier}'
		AND UNIX_TIMESTAMP(date_leaving) <= '{$date_arriving}'
 		AND UNIX_TIMESTAMP(date_arriving) >= '{$date_leaving}'")) {
		$data = mysqli_fetch_array($query_user, MYSQLI_ASSOC);
			if ($data) {
				return true;
			} else {
				return false;
			}
    	}
	}


if ($_POST['numfil']) {
	echo ('Расписание заполнено: ' . $_POST['numfil'] . ' записей');

	for($i=0; $i< $_POST['numfil'] ; $i++) {

		$randomize_region = randomize_region();
		$region = $randomize_region[0];
		$randata = $randomize_region[1];


		$randomize_date = randomize_date($randata);
		$date_arriving = $randomize_date[0];
		$date_leaving = $randomize_date[1];

		$courier = randomize_courier();


		$courier_check = courier_check($date_arriving, $date_leaving, $courier);
		input_in_schedule($courier_check, $region, $courier, $date_arriving, $date_leaving);
	}
}



