<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel='shortcut icon' href='logo.ico' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Đăng nhập</title>

    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="styles/backend/login.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-offset-4 col-md-4" id="box">
                <h2>Đăng nhập AD</h2>
                <hr>
                <form class="form-horizontal" action="#" method="get" id="login_form">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="first_name" placeholder="Username" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input name="email" placeholder="Password" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-md btn-danger pull-right">Đăng nhập </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>