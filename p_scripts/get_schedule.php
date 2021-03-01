<?php

require 'db_connector.php';

/**
 * @param $post
 * @param $connect
 */
function get_schedule($post, $connect) {
	extract($post);
	$dateFromOutput = strtotime($dateFromOutput);
	$dateToOutput   = strtotime($dateToOutput);

	if ($query_user = mysqli_query($connect, "SELECT region, courier, date_leaving, date_arriving  FROM schedule WHERE UNIX_TIMESTAMP(date_leaving) >= '{$dateFromOutput}' AND UNIX_TIMESTAMP(date_arriving) <= '{$dateToOutput}'")) {
		while ($data = mysqli_fetch_array($query_user, MYSQLI_ASSOC) ) {
			echo ('<li>' . 'Г.' . $data['region'] . ', ' . 'Курьер: ' . $data['courier'] . ', ' .
			 'C ' .  $data['date_leaving'] . ' ' . 'По ' .  $data['date_arriving'] . '</li>');
		}
    }
}

get_schedule($_POST, $connect);
