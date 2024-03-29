    //Getting value from "ajax.php".
    function fill(Value) {
       //Assigning value to "search" div in "search.php" file.
       $('#search2').val(Value);
    }
    $(document).ready(function() {
       //On pressing a key on "Search box" in "search.php" file. This function will be called.
       $("#search2").keyup(function() {
           //Assigning search box value to javascript variable named as "name".
           var name = $('#search2').val();
           $("#show_passport_details").show();
           //Validating, if "name" is empty.
           if (name == "") {
               //Assigning empty value to "display" div in "search.php" file.
               $("#details_passport").html("");
           }
           //If name is not empty.
           else {
               //AJAX is called.
               $.ajax({
                   //AJAX type is "Post".
                   type: "POST",
                   //Data will be sent to "ajax.php".
                   url: "admin/usaapassports.php",
                   //Data, that will be sent to "ajax.php".
                   data: {
                       //Assigning value of "name" into "search" variable.
                       search: name
                   },
                   //If result found, this funtion will be called.
                   success: function(html) {
                       //Assigning result to "display" div in "search.php" file.
                       $("#details_passport").html(html).show();
                       $("#show_passport_details").show();
                   }
               });
           }
       });
    });
