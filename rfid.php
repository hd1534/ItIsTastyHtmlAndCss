<html>
        <head>
                <meta http-equiv="Content-Tycontent="text/html; charseet=EUC-kr" />
                <title>회원가입</title>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
			<script src="http://malsup.github.com/jquery.form.js"></script> 
			 
			<script> 
				$(document).ready(function(data) { 
					$('#rfid').ajaxForm(function(data) { 
						var htmls = '';
						htmls += "<table border='1'>";
						htmls += "<tr><th>이름</th><th>생일</th><th>RFID</th><th>사는곳</th><th>유저 타입</th></tr>";
						htmls += "<tr>";                                                
						htmls += "<td>" + data['name'] + "</td>";
						htmls += "<td>" + data['birth_day'] + "</td>";			
						htmls += "<td>" + data['rfid'] + "</td>";
						htmls += "<td>" + data['living_place'] + "</td>";
						htmls += "<td>" + data['user_type'] + "</td>";
						htmls += "</tr>";
						$('#show').html(htmls);
						alert(htmls);
					}); 
				}); 
			</script>
        </head>
        <body>
                <form id="rfid" name="form" action="http://itistasty.ga:5000/form/user/rfid" method="post">
                        rfid: <input type="text" name="rfid"><br>
                </form>
		<p id="show"></p>
        </body>
</html>
