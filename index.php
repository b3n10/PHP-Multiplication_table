<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Multiplication Table</title>
		<style type="text/css">
		td {
			border: 1px solid #000;
			padding: 15px;
				text-align: center;
		}
		</style>
	</head>
	<body>
		<label>Enter only integer:</label>
		<input type="text" id="txt-number">
		<button type="button" onclick="load()">Go</button>
		<div id="result"></div>
		<script type="text/javascript">
			function load() {
			var number = document.getElementById('txt-number').value;

				var ajax = new XMLHttpRequest();
				ajax.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById('result').innerHTML = this.responseText;
					}
				};
				ajax.open("GET", 'multiplication_script.php?number=' + number, true);
				ajax.send();
			}
		</script>
	</body>
</html>
