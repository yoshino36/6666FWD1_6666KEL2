<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Suku</title>
    <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
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
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="navbar-brand">Home</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suku
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li>
                                <a href="{{url('suku')}}">Suku</a>
                            </li>
                            
                            <li>
                                <a href="{{url('kesenian')}}">Kesenian</a>
                            </li>
                            <li>
                                <a href="{{url('kebudayaan')}}">Kebudayaan</a>
                            </li>
                            <li>
                                <a href="{{url('bantu')}}">Bantu</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daerah
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li>
                                <a href="{{url('provinsi')}}">Provinsi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li>
                                <a href="{{url('user')}}">Users</a>
                            </li>
                            <li>
                                <a href="{{url('member')}}">Member</a>
                            </li>
                            <li>
                                <a href="{{url('admin')}}">Admin</a>
                            </li>
                            <li>
                                <a href="{{url('komentar')}}">Komentar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('logout') }}">Logout</a></li>                   
                </ul>
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
    <div class="container">
        @if(Session::has('informasi'))
            <div class="alert alert-info">
                <strong>Informasi :</strong>
                {{Session::get('informasi')}}
            </div>
            @endif

            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @yield('container')
    </div>
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <footer class="container">
            created by <a href="http://twitter.com/triasbrata"><span><i class="fa fa-twitter" style="color: #1da1f2"></i> @triasbrata</span></a>
        </footer>
    </nav>
    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
</body>
</html>