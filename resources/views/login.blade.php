<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seni</title>
   <!--  <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}"> -->
     <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <style type="text/css">
        body{
            padding-top: 70px;
            padding-bottom: 70px
        }

        .startter-template{
            padding: 40px 15px;
            text-align: center;
        }

        .form-horizontal{
            padding: 15px 10px;
        }

        footer{
            padding-top: 15px;
            text-align: right;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about">About</a>
                    </li>
                    <li>
                        <a href="login">Login</a>
                    </li>
                </ul>
            </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Login</strong>
                </div>
                {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-8">
                        {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                        {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                    </div>
                </div>
                <div style="width: 100%; text-align: center;">
                    <button class="btn btn-primary"><i class="fa fa-lock"></i>Masuk</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; FKTI 2015</p>
                </div>
            </div>
        </footer>

    </nav>
    
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>