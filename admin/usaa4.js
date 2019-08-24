    //Getting value from "ajax.php".
    function fill(Value) {
       //Assigning value to "search" div in "search.php" file.
       $('#suggestionsearch').val(Value);
       //Hiding "display" div in "search.php" file.
       
    }
    $(document).ready(function() {
       //On pressing a key on "Search box" in "search.php" file. This function will be called.
       $("#suggestionsearch").keyup(function() {
           //Assigning search box value to javascript variable named as "name".
           var name = $('#suggestionsearch').val();
           //Validating, if "name" is empty.
           if (name == "") {
               //Assigning empty value to "display" div in "search.php" file.
               $("#suggestionsresults").html("");
               $('#allsuggestions').show();
           }
           //If name is not empty.
           else {
			   $('#allsuggestions').hide();
               //AJAX is called.
               $.ajax({
                   //AJAX type is "Post".
                   type: "POST",
                   //Data will be sent to "ajax.php".
                   url: "admin/usaasuggestions.php",
                   //Data, that will be sent to "ajax.php".
                   data: {
                       //Assigning value of "name" into "search" variable.
                       search: name
                   },
                   //If result found, this funtion will be called.
                   success: function(html) {
                       //Assigning result to "display" div in "search.php" file.
                       $("#suggestionsresults").html(html).show();
                   }
               });
           }
       });
    });
