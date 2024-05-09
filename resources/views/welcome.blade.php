<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">   
        <div style="background-color:darkslategrey; height: 100%;" class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="svg/codecta.svg" class="h-200">
            </div>
            <div class="col-md-6" style="padding-left: 0; padding-right: 0;">
                <div class="ibox-content " style="background-color: #374961; height: 100%;">
                    <form style="top: 150px;" class="mt-4 col-md-8 mx-auto" role="form" action="areas" >
                        <h2 class="font-bold mb-5 text-white">Ingrese a La Cuenta</h2>
                        <div class="form-group d-flex align-items-center">
                            <span class="me-2 "><i class="btn fa fa-user" style="color: black; font-size: 16px;"></i></span>
                            <input type="email" class="form-control border-0" style="background-color: #374961; color: white; font-size: 16px; " placeholder="Nombre de Usuario" required="">
                            
                        </div>
                        <hr class="bg-white">
                        <style>
                            .form-control::placeholder {
                                color: white;
                                font-size: 16px; 
                            }
                            
                        </style>        
                        <div class="form-group d-flex align-items-center">
                            <span class="me-2 "><i class="btn fa fa-lock" style="color: black; font-size: 16px;"></i></span>
                            <input type="password" class="form-control text-white border-0" style="background-color: #374961; color: white;  font-size: 16px;" placeholder="Contraseña" required="">
                            
                        </div>
                        <hr class="bg-white mb-5">
                        <button type="submit" style="background-color: #6fdecb; font-size: 20px;" class=" font-bold btn btn-primary block full-width m-b" href="areas">Ingresar</button>
                    </form>
                    <p class="m-t">
                        
                    </p>
                </div>
            </div>
        </div>
</body>

</html>