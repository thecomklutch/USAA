$(document).ready(function(e){

            $("#suggestx").click(function(){
            	var suggestion = $("#suggest").val();
                $.ajax({
                    url:'suggestion_post.php',
                    method:'POST',
                    datatype:'json',
                    data:{"suggesty": suggestion},
                   success:function(html){
	                   $("#suggestion_status").html(html).show();
	                   
                   }
                });
            });
        });