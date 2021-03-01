<?php

require 'db_connector.php';

//Adds to schedule in regions on these data
/**
 * @param $connect
 * @param $post
 * @param $courier
 * @return false
 */
function add_schedule($connect, $post, $courier) {
    extract($post);
	$null = null;
	if ($courier) {
		echo "Данный курьер занят в это время";
		return false;
	}

	$query = "INSERT INTO `schedule` (`id`, `region`, `courier`, `date_leaving`, `date_arriving`) VALUES (?, ?, ?, ?, ?)";
	if (  $result = mysqli_query($connect, $query) ) {
		echo 'Добавлено в расписание';
	} else {
		echo 'Ошибка БД';
	}
}

//That function checks courier
/**
 * @param $post
 * @param $connect
 * @return bool
 */
function courier_check($post, $connect) {

    extract($post);
	$date_leaving = strtotime($date_leaving);
	$date_arriving   = strtotime($date_arriving);
    $courier_query = "SELECT courier FROM schedule WHERE (courier) = '{$courier}' AND UNIX_TIMESTAMP(date_arriving) <= '{$date_arriving}' AND UNIX_TIMESTAMP(date_leaving) >= '{$date_leaving}'";

	if ($query_courier = mysqli_query($connect, $courier_query)) {
		$data = mysqli_fetch_array($query_courier, MYSQLI_ASSOC);
		if ($data) {
			return true;
		} else {
			return false;
		}
  	}
}

if (courier_check($_POST, $connect)) {
    add_schedule($_POST, courier_check($_POST, $connect));
}
