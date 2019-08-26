<div class="w3-modal" id="admin_msg">
	<div class="w3-panel w3-small w3-border w3-round" style="margin: 0 auto; width: 75%"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
		<textarea  class="w3-round" placeholder="Enter the message to sebd to the Admin" id="adminmsg"  rows="4" style="width: 100%; padding-left: 10px; padding-top: 5px;" required></textarea>
        <br>
		<div id="post_status"></div>
        <br>
        <button type="submit" class="w3-button w3-blue w3-small w3-round" style="float: left;" onclick="postadmin()">Send</button>
        <span id="close_passport_details" class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer2('admin_msg')">Close</span>
        <br>
    </div>
</div>

<script type="text/javascript">
	function postadmin()
	{
		var msg = $("#adminmsg").val();
		$.ajax({
			url: 'USAAstudent/sendadminmsg.php',
			method: 'POST',
			datatype: 'json',
			data: {"message":msg},
			success: function(html){
				$("#post_status").html(html).show();
			}
		});
	}

</script>