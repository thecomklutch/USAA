<?php
	//include the connection pack
	include 'config.php';
	//get the var
	$bankyear = $_POST['filteryear'];
	$sql = "SELECT * FROM bdetails WHERE Submitted_at='$bankyear'";
	$result = mysqli_query($conn, $sql);
	$bankaccountsfilter = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<body>
	
	<div id="bankfiltrate"></div>
	<div id="accountsfilter">
		<?php 
			foreach ($bankaccountsfilter as $bankAccount) {
				$routing_no = substr($bankAccount['Account_no'], 3);
				$branch_code = substr($bankAccount['Account_no'], 3, 5);
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
						<td style="border: 1px solid">Supplier Name: <?php echo $bankAccount['Names'];?></td>
						<td style="border: 1px solid">Address and Contact Details<br> <?php echo $bankAccount['Bank_Address'];?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Account Name: <?php echo $bankAccount['Names'];?></td>
						<td style="border: 1px solid">Account Currency: <?php echo $bankAccount['AccountType'];?></td>
					</tr>
					<tr>
						<td class="w3-center" colspan="2" style="border: 1px solid">Account Number: <?php echo $bankAccount['Account_no'];?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Bank Name: <?php echo $bankAccount['Bank_name'];?></td>
						<td style="border: 1px solid">SWIFT Code (BIC) : <?php echo $bankAccount['swift_code'];?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Bank Branch: <?php echo $bankAccount['personal_address'];?></td>
						<td style="border: 1px solid">Branch Code: <?php echo $branch_code;?></td>
					</tr>
					<tr class="w3-white">
						<td style="border: 1px solid">Branch SWIFT Code(BIC): <?php echo $bankAccount['swift_code'];?></td>
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
</html>
