<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <div class="container">
            <header>
                <section>
                    <div class="row">
                        <div class="col s9">
                            <div class="row">
                                <div class="col s5 color">
                                      <a href="#" class="brand-logo"><img src="{{ asset('img/logo_ipssi.png') }}" class="center"></a>
                                </div>
                                <div class="col s7"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="row">
                                <div class="col s12 tail">
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
                                </div>
                                <div class="col s12 marginTop">
                                    <button class="btn waves-effect waves-light large" name="action" ng-click="go('/connexion')">Mon IPSSI
                                  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section >
                    <div class="row">
                        <div class="col s12 z-depth-1">
                          <ul class="tabs">
                            <li class="tab col s2"><a href="#" class="menu" ng-click="go('/test')">Home</a></li>
                            <li class="tab col s2"><a href="#" class="menu" ng-click="go('/actu')">Le groupe</a></li>
                            <li class="tab col s2"><a href="#" class="menu" >L'activité</a></li>
                            <li class="tab col s2"><a href="#" class="menu">Nous rejoindre</a></li>
                            <li class="tab col s2"><a href="#" class="menu" ng-click="go('/collaborateur')">Espace collaborateur</a></li>
                            <li class="tab col s2"><a href="#" ng-click="go('/contact')"class="menu">Contact</a></li>
                          </ul>
                        </div>
                    </div>
                </section>
            </header>

            @yield('content')
            
          <footer class="page-footer">
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
          </footer>
        </div>

    

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    @yield('javascript')
</body>
</html>
