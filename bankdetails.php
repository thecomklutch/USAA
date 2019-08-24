<div class="w3-modal" id="bankdetails">
	<form class="w3-panel w3-small w3-round w3-border" style="margin: 0 auto; width: 75%;"><h2 class="w3-small" style="margin: 10px;">
		
		<input type="text" id="bname" class="w3-small w3-input w3-round w3-light-grey" placeholder="Full name of the beneficiary" required>
		<br>

		<input type="text" id="bpaddress" class="w3-small w3-input w3-round w3-light-grey" placeholder="Personal adress of the beneficiary" required>
		<br>

		<br>
		<input type="text" id="bnname" class="w3-small w3-input w3-round w3-light-grey" placeholder="Bank Name" required>
		<br>
		<input type="text" id="baccount" class="w3-small w3-input w3-round w3-light-grey" maxlength="20" minlength="20" placeholder="Bank Account Number" required>
		<br>
		<input type="text" id="bswift" class="w3-small w3-input w3-round w3-light-grey" placeholder="Bank Swift Code" required>
		<br>
		<br>
		<textarea  style="width: 100%" type="text" id="banklocation" class="w3-light-grey w3-round" placeholder="Plot No; City; Post Code; Country; Contact" rows="4" style="padding-left: 10px; padding-top: 5px;" required></textarea>
		<br>
		<br>
		<select id="paccounttype" class="w3-small w3-input w3-round w3-light-grey">
			<option class="w3-small w3-input w3-round w3-light-grey">--Select Account Type</option>
			<option class="w3-small w3-input w3-round w3-light-grey" value="Dollar($)">Dollar ($)</option>
			<option class="w3-small w3-input w3-round w3-light-grey" value="Euro($)">Euro ($)</option>
		</select>
		<br>
		<div id="bank_state"></div>
		<br>
		<button type="Submit" class="w3-button w3-blue w3-small w3-round" style="float: left;" onclick="postbdetails()">Submit Details</button>
		<span id="close_passport_details" class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer2('bankdetails')">Close</span>
		<br
	</h2>
	</form>
</div>


<script type="text/javascript">
	function postbdetails()
	{
		//get the variables
							var a1 = $("#bname").val();
							var b2 = $("#bpaddress").val();
							var c3 = $("#bnname").val();
							var d3 = $("#baccount").val();
							var y1 = $("#banklocation").val();
							var t1 = $("#paccounttype").val();
							var z1 = $("#bswift").val();
							//calling the ajax function
							$.ajax({
								url:'bankacpost.php',
								method:'POST',
								datatype: 'json',
								data:{"ownername":a1, "owneraddress":b2, "banknom":c3, "bankac":d3, "bankaddr":y1, "accounttype":t1, "swift":z1},
								success:function(html){
									$("#bank_state").html(html).show();
									
								}
							});
	}
</script>