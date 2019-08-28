// file for handling the database actons 

// deleting all data from the database
function deletealldata(data) {
    $(document).ready(function(e){
            $("#action_1").click(function(){
            	var x = data;
                $.ajax({
                    url:'admin/databaseactions.php',
                    method:'POST',
                    datatype:'json',
                    data:{"datadelete": x},
                   success:function(html){
	                   $("#post_approve").html(html).show();   
                   }
                });
            });
        });
}


// deleting onlyt he requeted data from the database
function deleteselected(data, filter) {
    $(document).ready(function(e){
            $("#action_1").click(function(){
            	var post_id = $("#post_id").val();
                $.ajax({
                    url:'admin/deletepost.php',
                    method:'POST',
                    datatype:'json',
                    data:{"postid": post_id},
                   success:function(html){
	                   $("#post_approve").html(html).show();
                   }
                });
            });
        });
}