
var currentyear = $("#academic_year").val();
var currentwilaya = $("#wilaya").val();
var currentuniversity = $("#university").val();
var currentcourse = $("#course").val();
var currentphone = $("#contact").val();
var cardnumber = $("#residencecard").val();
var oldyear = "<?php $_SESSION['user']['year'];?>";
var errors2 = [];

function update() {
    if (oldyear == "French Year") {
        if (currentyear == 'select') {errors2.push("Select the current Academic Year");}
        if (currentwilaya == 'select' || currentwilaya == 'Wilaya') {errors2.push("Select your new wilaya");}
        if (currentuniversity == 'select' || currentuniversity == 'University') {errors2.push("Select your university please");}
        if (currentcourse == 'select') {errors2.push("Select your Course");}
        if (!varlen(currentphone)) {errors2.push("Enter your current phone number");}
        if (!varlen(cardnumber)) {errors2.push("Enter your student's card number ");}
        if (currentyear == oldyear || currentyear != 1) {errors2.push("Please select a valid academic year");}
        if (currentphone.length != 10) {errors2.push("Enter a valid phone number");}

        if (errors2.length == 0) {
            document.getElementById("updateform").style.display = 'none';
            document.getElementById("verifyaccount").style.display = 'block';
        } else {
            document.getElementById('notification').style.display='block';
			document.getElementById('notificationmsg').innerHTML = errors2;
			window.scrollTo(0, 0);
        }


    } else if (oldyear == "1") {
        if (currentyear == 'select') {errors2.push("Select the current Academic Year");}
        if (currentwilaya == 'select' || currentwilaya == 'Wilaya') {errors2.push("Select your new wilaya");}
        if (currentuniversity == 'select' || currentuniversity == 'University') {errors2.push("Select your university please");}
        if (currentcourse == 'select') {errors2.push("Select your Course");}
        if (!varlen(currentphone)) {errors2.push("Enter your current phone number");}
        if (!varlen(cardnumber)) {errors2.push("Enter your student's card number ");}
        if (currentyear < oldyear || currentyear > (oldyear + 1)) {errors2.push("Please select a valid academic year");}
        if (currentphone.length != 10) {errors2.push("Enter a valid phone number");}

        if (errors2.length == 0) {
            document.getElementById("updateform").style.display = 'none';
            document.getElementById("verifyaccount").style.display = 'block';
        } else {
            document.getElementById('notification').style.display='block';
			document.getElementById('notificationmsg').innerHTML = errors2;
			window.scrollTo(0, 0);
        }


    } else {
        if (currentyear == 'select') {errors2.push("Select the current Academic Year");}
        if (currentwilaya == 'select' || currentwilaya == 'Wilaya') {errors2.push("Select your new wilaya");}
        if (currentuniversity == 'select' || currentuniversity == 'University') {errors2.push("Select your university please");}
        if (currentcourse == 'select') {errors2.push("Select your Course");}
        if (!varlen(currentphone)) {errors2.push("Enter your current phone number");}
        if (!varlen(cardnumber)) {errors2.push("Enter your student's card number ");}
        if (currentyear < oldyear || currentyear > (oldyear + 1)) {errors2.push("Please select a valid academic year");}
        if (currentphone.length != 10) {errors2.push("Enter a valid phone number");}

        if (errors2.length == 0) {
            document.getElementById("updateform").style.display = 'none';
            document.getElementById("verifyaccount").style.display = 'block';
        } else {
            document.getElementById('notification').style.display='block';
			document.getElementById('notificationmsg').innerHTML = errors2;
			window.scrollTo(0, 0);
        }

    }
}

function confirmupdate() {
    var password = $("#password").val();
    $.ajax ({
        type: 'POST',
        url: 'USAAstudent/update.php',
        data: {
            "pass":password,
            "course":currentcourse,
            "phone":currentphone,
            "university":currentuniversity,
            "wilaya":currentwilaya,
            "year":currentyear,
            "card":cardnumber
        },
        success: function(html) {
            $("#status").html(html).show();
        }
    });

}

function varlen(obj) {
    return obj.length;
}