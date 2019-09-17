<?php
    include 'config.php';
    $passport = $_SESSION['user']['passport_no'];
    // get the bank details of the student 
    $sql = "SELECT * FROM `bdetails` WHERE passsport_no='$passport'";
    $exec = mysqli_query($conn, $sql);
    $bankAC = mysqli_fetch_assoc($exec);
    $routing_no = substr($bankAC['Account_no'], 3);
	$branch_code = substr($bankAC['Account_no'], 3, 5);
?>

<!DOCTYPE html>
<html>
<title>Bank Information</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="w3-mobile">
	<div class="w3-top"><?php include 'topbar.php'; ?></div>
        <br />
        <br />
		<div class="w3-container w3-white" style="margin: 0 auto;margin-left: 40px; margin-right: 40px; padding: 10px; overflow: auto;">
			<div class="w3-center">
				<b><h2 class="w3-small">
					<div class="w3-container">
						<b>REPUBLIC OF UGANDA<br><br>
						<div class="w3-black" style="height: 30px; width: 30px; margin-left: 48%;"></div><br><br>
						IFMS INPUT FORM-FOREIGN SUPPLIERS<br><br>
						Vote name code: 013
						Tick as Appropriate New: <input type="checkbox" checked>   Change: <input type="checkbox"><br><br>
						Vote Name: MINISTRY OF EDUCATION AND SPORTS<br><br></b>
					</div>
				</h2>
				<table class="w3-small w3-table-all">
					<tr class="w3-white">
						<td style="border: 1px solid">Supplier Name: <?php echo $bankAC['Names'];?></td>
						<td style="border: 1px solid">Address and Contact Details<br> <?php echo $bankAC['Bank_Address'];?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Account Name: <?php echo $bankAC['Names'];?></td>
						<td style="border: 1px solid">Account Currency: <?php echo $bankAC['AccountType'];?></td>
					</tr>
					<tr>
						<td class="w3-center" colspan="2" style="border: 1px solid">Account Number: <?php echo $bankAC['Account_no'];?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Bank Name: <?php echo $bankAC['Bank_name'];?></td>
						<td style="border: 1px solid">SWIFT Code (BIC) : <?php echo $bankAC['swift_code'];?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Bank Branch: <?php echo $bankAC['personal_address'];?></td>
						<td style="border: 1px solid">Branch Code: <?php echo $branch_code;?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Branch SWIFT Code(BIC): <?php echo $bankAC['swift_code'];?></td>
						<td style="border: 1px solid">Routing Number: <?php echo $routing_no;?></td>
					</tr>
					<tr class="w3-white">
						<td class="w3-center" colspan="2" style="border: 1px solid">Intermediary Bank Information</td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Intermediary Bank name</td>
						<td style="border: 1px solid">Intermediary Bank SWIFT Code (BIC)</td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Prepared By (Vote):</td>
						<td style="border: 1px solid">Approved By (Vote):</td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Name: </td>
						<td style="border: 1px solid">Name: </td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Title: </td>
						<td style="border: 1px solid">Title: </td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Signature& date </td>
						<td style="border: 1px solid">Signature& date(stamp)</td>
					</tr>
					<tr class="w3-white">
						<td class="w3-center" colspan="2" style="border: 1px solid">
							Accountant General’s Office(Approved By<br>
							Name and Title<br>
							Date & Signature
						</td>
					</tr>
					<tr class="w3-white">
						<td class="w3-center" colspan="2" style="border: 1px solid;">Entered on IFMS BY: </td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid;">Name: </td>
						<td style="border: 1px solid">Title: </td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Signature & Date: </td>
						<td style="border: 1px solid">Supplier No: </td>
					</tr>
				</table>
			</b>
		</div>
	</div>
</div>
<br>
</body>
</html>
