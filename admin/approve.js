$(document).ready(function(e){
		$("#post_approve").hide();
            $("#action_1").click(function(){
            	var post_id = $("#post_id").val();
                $.ajax({
                    url:'admin/deletepost.php',
                    method:'POST',
                    datatype:'json',
                    data:{"postid": post_id},
                   success:function(html){
	                   $("#post_approve").html(html).show();
	                   $("#btn_container").hide();
	                   location.reload();
                   }
                });
            });
        });