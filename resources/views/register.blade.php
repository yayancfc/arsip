    <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-1"></div>
                <div class="col-md-4 col-sm-6 col-xs-10">
                    <div class="image">
                        <img src="{{asset('image/login.png')}}" alt="">
                    </div>
                    
                    <form method="post"  id="formLogin" class="form-container" >
                       @csrf

						<div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" id="nama" required="required">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="NIK atau NIM" id="password" required="required">
                        </div>
                        
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" id="username">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                        </div>
      

                        <button type="submit" class="btn btn-submit btn-block">Daftar</button>
                    </form>
                    
                </div>
                <div class="col-md-4 col-sm-3 col-xs-1"></div>
            </div>
        </div>
    </body>
</html>
<script>
$('#formLogin').submit(function(e) {
    e.preventDefault();
    var username = $('input#username').val();
    var password = $('input#password').val();

    if(password == ""){
       alert("Please enter a Password");
       $('#password').focus();
       return false;
    }

    if(username == ""){
       alert("Please enter a Username");
       $('#username').focus();
       return false;
    }
</script>