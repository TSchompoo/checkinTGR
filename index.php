<meta charset="utf-8">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One|Roboto|Oxygen|Open+Sans+Condensed:300|Cantarell|Ubuntu' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=K2D|Kanit|Prompt" rel="stylesheet">

	<title>TESA2019</title>
	<link rel="icon" type="image/png" href="assets/img/icon_esa.png" />
<?php
session_start();
$user_id = $_GET['userID'];
// $team = $_GET['team'];
// $number = $_GET['number'];
require 'DB/select-index.php';
$_SESSION['teamStraff'] = $row['Team_Name'];
$number = $row['ID'];
$team = $row['Team_Name'];
$university = $row['University'];
$FirstLastname = $row['NameThai'];
$Shirt = $row['SizeShirt'];
?>
</head>

<body>
	<div class="container">

			<div class="panel-heading">
				<div class="panel-title text-center">
					<img src="assets/img/icon_esa.png">
				</div>
			</div>

			<div class="main-back main-center">
				<div class="table-center">
					<?php
echo
    "<table>" .
    "<tr>" .
    "<td class='td-right'>ลำดับ </td>
								<td class='td-center'>:</td>
								<td class='td-left'>" . $number . "</td>
							</tr>" .
    "<tr>" .
    "<td class='td-right'>ชื่อทีม </td>
								<td class='td-center'>:</td>
								<td class='td-left'> " . $team . "</td>
							</tr>" .
    "<tr>" .
    "<td class='td-center' colspan='3'>" . $university . " </td>
							</tr>" .
    "<tr>" .
    "<td class='td-right'>ชื่อ-นามสกุล </td>
								<td class='td-center'>:</td>
								<td class='td-left'>" . $FirstLastname . "</td>
							</tr>" .
    "<tr>" .
    "<td class='td-right'>Shirt size </td>
								<td class='td-center'>:</td>
								<td class='td-left'>" . $Shirt . "</td>
							</tr>"
    . "</table>";
?>
				</div>
			</div>
			<a href="staff.php" target="_blank">
			<button class="button button1" >Check-in </button> </a>
			</button>

	</div>
<?php
include_once 'footer.php';
?>
</body>

</html>