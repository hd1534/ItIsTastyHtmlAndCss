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

						htmls += "<table border='1'>"
						htmls += "<tr><th>순서</th><th>사용자 id</th><th>미션 id</th><th>사용자 이름</th><th>미션이름</th><th>보상</th><th>바코드</th><th>인쇄 횟수</th><th>쿠폰유효기간 시작날짜</th><th>쿠폰유효기간 마지막 날짜</th></tr>";
						$.each(data, function (index, item) {
							$.each(item, function (index, item) {
								htmls += "<tr>";
								htmls += "<td>" + (index + 1) + "</td>";
								htmls += "<td>" + item.user_id + "</td>";
								htmls += "<td>" + item.mission_id + "</td>";
								htmls += "<td>" + item.user_name + "</td>";
								htmls += "<td>" + item.mission_title + "</td>";
								htmls += "<td>" + item.reward + "</td>";
								htmls += "<td>" + item.bar_code + "</td>";
							 	htmls += "<td>" + item.print_count + "</td>";
							 	htmls += "<td>" + item.start_time + "</td>";
							 	htmls += "<td>" + item.end_time + "</td>";
							 	htmls += "</tr>";
							});
						});

						htmls += "</table>";
						alert(htmls)
						$('#show').html(htmls);
					}); 
				}); 
			</script>
        </head>
        <body>
                <form id="rfid" name="form" action="http://itistasty.ga:5000/form/coupon/user" method="post">
                        user id: <input type="number" name="user_id"><br>
                </form>
		<p id="show"></p>
        </body>
</html>
