<html>
        <head>
                <meta http-equiv="Content-Tycontent="text/html; charseet=EUC-kr" />
                <title>인쇄요청</title>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
			<script src="http://malsup.github.com/jquery.form.js"></script> 
			 
			<script> 
				$(document).ready(function() { 
					$('#rfid').ajaxForm(function(data) { 
						alert("요청완료");
						$('#show').html(JSON.stringify(data));
					}); 
				}); 
			</script>
        </head>
        <body>
                <form id="rfid" name="form" action="http://itistasty.ga:5000/form/print/" method="post">
                        coupon id: <input type="number" name="coupon_id"><br>
			<input type="submit" value="쿠폰 인쇄 요청">
                </form>
		<p id="show"></p>
        </body>
</html>
