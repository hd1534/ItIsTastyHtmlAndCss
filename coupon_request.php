<html>
        <head>
                <meta http-equiv="Content-Tycontent="text/html; charseet=EUC-kr" />
                <title>쿠폰 신청</title>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
			<script src="http://malsup.github.com/jquery.form.js"></script> 
			 
			<script> 
				$(document).ready(function() { 
					$('#rfid').ajaxForm(function(data) { 
						alert("신청완료");
						$('#show').html(JSON.stringify(data));
					}); 
				}); 
			</script>
        </head>
        <body>
                <form id="rfid" name="form" action="http://itistasty.ga:5000/form/coupon/" method="post">
                        user id: <input type="number" name="user_id"><br>
                        mission id: <input type="number" name="mission_id"><br>
			<input type="submit" value="쿠폰 신청">
                </form>
		<p id="show"></p>
        </body>
</html>
