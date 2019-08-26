<div class="w3-modal" id="coursechange">
	<form class="w3-panel w3-small w3-round w3-border" style="margin: 0 auto; width: 75%;"><h2 class="w3-small" style="margin: 10px;">
		<input type="text" id="pcourse" class="w3-small w3-input w3-round w3-light-grey" placeholder="The course you changing from" required>
		<br>

		<input type="text" id="course1" class="w3-small w3-input w3-round w3-light-grey" placeholder="New prefered choice 1" required>
		<br>
		<input type="text" id="course2" class="w3-small w3-input w3-round w3-light-grey" placeholder="New prefered choice 2 (Optional)">
		<br>
		<br>
		<textarea style="width: 100%" class="w3-round" placeholder="Reason(s) for the change" id="reason"  rows="4" style="padding-left: 10px; padding-top: 5px;" required></textarea>
		<br>
		<br>
		<input type="text" id="wilaya1" class="w3-small w3-input w3-round w3-light-grey" placeholder="Wilaya choice 1 (Optional)"><br>
		<input type="text" id="wilaya2" class="w3-small w3-input w3-round w3-light-grey" placeholder="Wilaya choice 2 (Optional)">
		<br>
		<div id="course_state"></div>
		<br>
		<button type="submit" class="w3-button w3-blue w3-small w3-round" style="float: left;" onclick="postcoursedetails()">Submit request</button>
		<span id="close_passport_details" class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer2('coursechange')">Close</span>
		

	</h2>
	</form>
</div>
