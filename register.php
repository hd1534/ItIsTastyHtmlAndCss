<html>
        <head>
                <meta http-equiv="Content-Tycontent="text/html; charseet=EUC-kr" />
                <title>회원가입</title>
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
					<script src="http://malsup.github.com/jquery.form.js"></script> 
				 
					<script> 
						$(document).ready(function() { 
							$('#register').ajaxForm(function() { 
								alert("가입되었습니다."); 
							}); 
						}); 
					</script>
        </head>
        <body>
                <form id="register" action="http://itistasty.ga:5000/form/user/" method="post">
                        name: <input type="text" name="name"><br>
                        birth_day: <input type="number" name="birth_day"><br>
                        rfid: <input type="text" name="rfid"><br>
                        living_place: <input type="text" name="living_place"><br>
                        user_type: <input type="text" name="user_type"><br>
                        <input type="submit" value="회원가입">
                </form>
        </body>
</html>
