<?php
$result_array = [];
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['search_btn'])) {
	$input_str = $_POST['search'];
	$query = "SELECT * FROM dish LEFT JOIN image ON dish.image_id = image.image_id WHERE dish.dish_name LIKE '%$input_str%'";
	$result = mysqli_query($conn, $query);
	$result_array = getResult($result);
} else {
	//this will be in another file
	$query = "SELECT * FROM dish LEFT JOIN image ON dish.image_id = image.image_id ";
	$result = mysqli_query($conn, $query);
	$result_array = getResult($result);
}

function getResult($result) {
	$array = [];
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($array, $row);
		}
	}
	return $array;
}
?>