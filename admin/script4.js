//Getting value from "ajax.php".
function fill(Value) {
   //Assigning value to "search" div in "search.php" file.
   $('#search4').val(Value);
   //Hiding "display" div in "search.php" file.
   $('#display4').hide();
}
$(document).ready(function() {
   //On pressing a key on "Search box" in "search.php" file. This function will be called.
   $("#search4").keyup(function() {
       //Assigning search box value to javascript variable named as "name".
       var name = $('#search4').val();
       //Validating, if "name" is empty.
       if (name == "") {
           //Assigning empty value to "display" div in "search.php" file.
           $("#display4").html("");
       }
       //If name is not empty.
       else {
           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",
               //Data will be sent to "ajax.php".
               url: "admin/summary.php",
               //Data, that will be sent to "ajax.php".
               data: {
                   //Assigning value of "name" into "search" variable.
                   search: name
               },
               //If result found, this funtion will be called.
               success: function(html) {
                   //Assigning result to "display" div in "search.php" file.
                   $("#display4").html(html).show();
               }
           });
       }
   });
});