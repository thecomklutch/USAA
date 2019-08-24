<?php
	include 'admin_functions.php';
	include 'config.php';
	$bankaccount = banksaccounts();
	//require 'pdfcrowd.php';
	//$client = new \Pdfcrowd\HtmlToPdfClient("username", "apikey");
	//$pdf = $client->convertUrl('http://en.wikipedia.org/');
?>

<!DOCTYPE html>
<html>
<title>Bank Information</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="w3-bar w3-top w3-black " style="position: fixed; margin-top: 0px; height: auto; margin-bottom: 5px;padding-bottom: 0px; width: 100%; background: #373B44;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4286f4, #373B44); height: 40px;">
		<div class="w3-bar-item w3-right">
			<select class="w3-round w3-white" style="width: 300px; margin-right: 20px;">
				<option style="color: #28477a;" disabled>--Select Year--</option>
				<option style="color: #28477a;" onclick="document.getElementById('accountsfilter').style.display='block'">all</option>
				<option style="color: #28477a;" onclick="accountfilter('2019')">2019</option>
				<option style="color: #28477a;" onclick="accountfilter('2020')">2020</option>
				<option style="color: #28477a;" onclick="accountfilter('2021')">2021</option>
			</select>

			<btn class="w3-button  w3-light-grey" style="height: 20px; margin-top: 0px; padding-top: 0px;">Generate PDF</btn>
		</div>
		<a href="../admin.php" class="w3-bar-item" style="color: #ffff; font-size: 24px;"><i class="fa fa-home fa-fw"></i></a>
	</div>
	<br>
	<br>
	<br>
	<div id="bankfiltrate"></div>
	<div id="accountsfilter">
		<?php 
			foreach ($bankaccount as $bankAC) {
				$routing_no = substr($bankAC['Account_no'], 3);
				$branch_code = substr($bankAC['Account_no'], 3, 5);
				?>
		<div class="w3-container w3-white" style="margin: 30px; padding: 10px; width: 900px; margin-left: 20%;">
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
	<?php }?>
</div>
<br>
</body>

<script type="text/javascript">
	
	function accountfilter(a)
	{
		var filter = a;
		var data = {"filteryear":filter};
		$.ajax({
			url: 'bankfilter.php',
			method: 'POST',
			datatype: 'json',
			data: data,
			success:function(html){
				$("#accountsfilter").html(html).hide();
				$("#bankfiltrate").html(html).show();
			}
		});
	}
</script>
</html>
