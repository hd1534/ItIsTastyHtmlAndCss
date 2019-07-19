<html>
        <head>
                <meta http-equiv="Content-Tycontent="text/html; charseet=EUC-kr" />
                <title>미션조회</title>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
			<script src="http://malsup.github.com/jquery.form.js"></script> 
			 
			<script> 
				$(document).ready(function(data) { 
					$('#mission').ajaxForm(function(data) { 
						var htmls = '';

						htmls += "<table border='1'>"
						htmls += "<tr><th>순서</th><th>id</th><th>제목</th><th>설명</th><th>미션시작 시간</th><th>미션 종료 시간</th><th>보상</th><th>내 시작시간</th><th>내 종료 시간</th><th>성공여부</th></tr>";
						$.each(data, function (index, item) {
							$.each(item, function (index, item) {
								htmls += "<tr>";
								htmls += "<td>" + (index + 1) + "</td>";
								htmls += "<td>" + item.id + "</td>";
								htmls += "<td>" + item.title + "</td>";
								htmls += "<td>" + item.description + "</td>";
								htmls += "<td>" + item.start_time + "</td>";
								htmls += "<td>" + item.end_time + "</td>";
								htmls += "<td>" + item.reward + "</td>";
							 	htmls += "<td>" + item.my_start_time + "</td>";
							 	htmls += "<td>" + item.my_end_time + "</td>";
							 	htmls += "<td>" + item.success + "</td>";
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
                <form id="mission" name="form" action="http://itistasty.ga:5000/form/mission/user" method="post">
                        user id: <input type="number" name="user_id"><br>
                </form>
		<p id="show"></p>
        </body>
</html>
