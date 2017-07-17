<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles-->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'>

    @yield('css')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Optional theme -->
	<link rel="stylesheet" href="/bootstrap-theme.min.css">
  <style type="text/css">
  .full {
      width: 100%;    
  }
  .gap {
    height: 30px;
    width: 100%;
    clear: both;
    display: block;
  }
  .footer {
    background: #EDEFF1;
    height: auto;
    padding-bottom: 30px;
    position: relative;
    width: 100%;
    border-bottom: 1px solid #CCCCCC;
    border-top: 1px solid #DDDDDD;
  }
  .footer p {
    margin: 0;
  }
  .footer img {
    max-width: 100%;
  }
  .footer h3 {
    border-bottom: 1px solid #BAC1C8;
    color: #54697E;
    font-size: 18px;
    font-weight: 600;
    line-height: 27px;
    padding: 40px 0 10px;
    text-transform: uppercase;
  }
  .footer ul {
    font-size: 13px;
    list-style-type: none;
    margin-left: 0;
    padding-left: 0;
    margin-top: 15px;
    color: #7F8C8D;
  }
  .footer ul li a {
    padding: 0 0 5px 0;
    display: block;
  }
  .footer a {
    color: #78828D
  }
  .supportLi h4 {
    font-size: 20px;
    font-weight: lighter;
    line-height: normal;
    margin-bottom: 0 !important;
    padding-bottom: 0;
  }
  .newsletter-box input#appendedInputButton {
    background: #FFFFFF;
    display: inline-block;
    float: left;
    height: 30px;
    clear: both;
    width: 100%;
  }
  .newsletter-box .btn {
    border: medium none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    display: inline-block;
    height: 40px;
    padding: 0;
    width: 100%;
    color: #fff;
  }
  .newsletter-box {
    overflow: hidden;
  }
  .bg-gray {
    background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
    box-shadow: 0 1px 0 #B4B3B3;
  }
  .social li {
    background: none repeat scroll 0 0 #B5B5B5;
    border: 2px solid #B5B5B5;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    float: left;
    height: 36px;
    line-height: 36px;
    margin: 0 8px 0 0;
    padding: 0;
    text-align: center;
    width: 36px;
    transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -webkit-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
  }
  .social li:hover {
    transform: scale(1.15) rotate(360deg);
    -webkit-transform: scale(1.1) rotate(360deg);
    -moz-transform: scale(1.1) rotate(360deg);
    -ms-transform: scale(1.1) rotate(360deg);
    -o-transform: scale(1.1) rotate(360deg);
  }
  .social li a {
    color: #EDEFF1;
  }
  .social li:hover {
    border: 2px solid #2c3e50;
    background: #2c3e50;
  }
  .social li a i {
    font-size: 16px;
    margin: 0 0 0 5px;
    color: #EDEFF1 !important;
  }
  .footer-bottom {
    background: #E3E3E3;
    border-top: 1px solid #DDDDDD;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .footer-bottom p.pull-left {
    padding-top: 6px;
  }
  .payments {
    font-size: 1.5em; 
  }
  /* 
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
*/
*, *:before, *:after {
  /* Chrome 9-, Safari 5-, iOS 4.2-, Android 3-, Blackberry 7- */
  -webkit-box-sizing: border-box; 

  /* Firefox (desktop or Android) 28- */
  -moz-box-sizing: border-box;

  /* Firefox 29+, IE 8+, Chrome 10+, Safari 5.1+, Opera 9.5+, iOS 5+, Opera Mini Anything, Blackberry 10+, Android 4+ */
  box-sizing: border-box;
}
.btn-nav {
    background-color: #fff;
    border: 1px solid #e0e1db;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
}
.btn-nav:hover {
    color: #e92d00;
    cursor: pointer;
    -webkit-transition: color 1s; /* For Safari 3.1 to 6.0 */
    transition: color 1s;
}
.btn-nav.active {
    color: #e92d00;
    padding: 2px;
  border-top: 6px solid #e92d00;
  border-bottom: 6px solid #e92d00;
    border-left: 0;
    border-right: 0;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
    -webkit-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -moz-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -ms-transition: border 0.3s ease-out, color 0.3s ease 0.5s; /* IE10 is actually unprefixed */
    -o-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -webkit-animation: pulsate 1.2s linear infinite;
    animation: pulsate 1.2s linear infinite;
}
.btn-nav.active:before {
  content: '';
  position: absolute;
  border-style: solid;
  border-width: 6px 6px 0;
  border-color: #e92d00 transparent;
  display: block;
  width: 0;
  z-index: 1;
  margin-left: -6px;
  top: 0;
  left: 50%;
}
.btn-nav .glyphicon {
    padding-top: 16px;
  font-size: 40px;
}
.btn-nav.active p {
    margin-bottom: 8px;
}
@-webkit-keyframes pulsate {
 50% { color: #000; }
}
@keyframes pulsate {
 50% { color: #000; }
}
@media (max-width: 480px) {
    .btn-group {
        display: block !important;
        float: none !important;
        width: 100% !important;
        max-width: 100% !important;
    }
}
@media (max-width: 600px) {
    .btn-nav .glyphicon {
        padding-top: 12px;
        font-size: 26px;
    }
}
</style>
	<!-- Latest compiled and minified JavaScript -->
	<script src="/js/bootstrap.min.js"></script>
</head>
<body id="app-layout">
    <div class="container">
            <header>
                <section>
                    <div class="row">
                        <div class="col s9">
                            <div class="row">
                                <div class="col s5 color">
                                      <a href="{{ route('accueilIndex') }}" class="brand-logo"><img src="{{ asset('img/logo_ipssi.png') }}" class="center"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="row">
                                <!--<div class="col s12 tail">
                                    <nav>
                                        <div class="nav-wrapper">
                                          <form>
                                            <div class="input-field blue-input">
                                              <input id="search" type="search" required>
                                              <label for="search"><i class="material-icons">search</i></label>

                                            </div>
                                          </form>
                                        </div>
                                     </nav>
                                </div>-->
                                <div class="col s12 marginTop">
                                    <a class="btn waves-effect waves-light large" href="{{ url('/login') }}">Mon IPSSI
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section >

                <?php
 $accueil="";
 $groupe="";
 $activite="";
 $recrutement="";
 $connexion="";
 $contact="";
if (\Request::is('/'))
  $accueil='active';
if (\Request::is('groupe/index'))
  $groupe='active';
if (\Request::is('activite/index'))
  $activite='active';
if (\Request::is('recrutements'))
  $recrutement='active';
if (\Request::is('login'))
  $connexion='active';
if (\Request::is('connexion/index'))
  $contact='active';

?>
                <div class="container">
                  <div class="row">
                  <div class="btn-group btn-group-justified">
                          <div class="btn-group">
                              <button type="button" class="btn btn-nav  <?php echo $accueil; ?>" onclick="window.location.href='{{ route('accueilIndex') }}'">
                                  <span class="glyphicon glyphicon-home"></span>
                            <p>Home</p> 
                              </button>
                          </div>
                          <div class="btn-group">
                              <button type="button" class="btn btn-nav <?php echo $groupe; ?>"  onclick="window.location.href='{{ route('groupeIndex') }}'">
                                  <span class="glyphicon glyphicon-globe"></span>
                            <p>Le groupe</p>
                              </button>
                          </div>
                          <div class="btn-group">
                              <button type="button" class="btn btn-nav <?php echo $activite; ?>" onclick="window.location.href='{{ route('activiteIndex') }}'">
                                  <span class="glyphicon glyphicon-list-alt"></span>
                            <p>L'activité</p>
                              </button>
                          </div>
                          <div class="btn-group">
                              <button type="button" class="btn btn-nav <?php echo $recrutement; ?>" onclick="window.location.href='{{ route('recrutementsIndex') }}'">
                                  <span class="glyphicon glyphicon-pencil"></span>
                            <p>Nous rejoindre</p>
                              </button>
                          </div>
                          <div class="btn-group">
                              <button type="button" class="btn btn-nav <?php echo $connexion; ?>" onclick="window.location.href='{{ route('collaborateursIndex') }}'">
                                  <span class="glyphicon glyphicon-user"></span>
                            <p>Espace collaborateur</p>
                              </button>
                          </div>
                          <div class="btn-group">
                              <button type="button" class="btn btn-nav <?php echo $contact; ?>" onclick="window.location.href='{{ route('contactIndex') }}'">
                                  <span class="glyphicon glyphicon-envelope"></span>
                            <p>Contact</p>
                              </button>
                          </div>
                      </div>
                </div>
              </div>
              <br>
                  <!--  <div class="row">
                        <div class="col s12 z-depth-1">
                          <a href="{{ route('groupeIndex') }}" class="menu">Le groupe</a>
                          <ul class="">
                              <li class="tab col s2"><a href="{{ route('accueilIndex') }}" class="menu">Home</a></li>
                              <li class="tab col s2"><a href="{{ route('groupeIndex') }}" class="menu">Le groupe</a></li>
                              <li class="tab col s2"><a href="{{-- route('accueilIndex') --}}" class="menu">L'activité</a></li>
                              <li class="tab col s2"><a href="{{ route('recrutementsIndex') }}" class="menu">Nous rejoindre</a></li>
                              <li class="tab col s2"><a href="{{ route('collaborateursIndex') }}" class="menu">Espace collaborateur</a></li>
                              <li class="tab col s2"><a href="{{ route('contactIndex') }}"class="menu">Contact</a></li>
                          </ul>
                        </div>
                    </div> -->
                </section>
            </header>

            @yield('content')

         <!-- <footer class="page-footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Footer Content</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li class="footerli"><i class="material-icons">call</i><span>Phone</span></li>
                    <li  class="footerli"><i class="material-icons">email</i><span>Email</span></li>
                        <li  class="footerli"><i class="material-icons">home</i><span>Adress</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2016 Copyright IPSSI
              </div>
            </div>
          </footer>-->
        </div>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<footer class="container">
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3> Site </h3>
                    <ul>
                        <li> <a href="{{ route('accueilIndex') }}"> Home</a> </li>
                        <li> <a href="{{ route('groupeIndex') }}" class="menu">Le groupe</a></li>
                        <li> <a href="{{ route('activiteIndex') }}"> L'activité </a> </li>
                        <li> <a href="{{ route('recrutementsIndex') }}"> Nous rejoindre </a> </li>
                        <li> <a href="{{ route('collaborateursIndex') }}"> Espace collaborateur </a> </li>
                        <li> <a href="{{ route('contactIndex') }}"> Contact </a> </li>
                    </ul>
                </div> 
                <div class="col-md-4">
                    <h3> Nos activités et compétences </h3>
                    <ul>
                        <li> <a href="#"> Energie</a> </li>
                        <li> <a href="#"> Défense </a> </li>
                        <li> <a href="#"> Chimie/Pétrochimie </a> </li>
                        <li> <a href="#"> Pharmarcie </a> </li>
                        <li> <a href="#"> Industrie lourde </a> </li>
                        <li> <a href="#"> Transport </a> </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3> Nous contacter</h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box">
                                <p>contact@ipssi.com</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © IPSSI 2017. </p>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>

    <!-- JavaScripts -->
    <!-- <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/materialize.min.js') }}"></script> -->
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @yield('javascript')
</body>
</html>
