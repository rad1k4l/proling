<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>User Login</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/vendors.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/login.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/custom/custom.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>

  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column login-bg  blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container">
            <div id="login-page" class="row">
              <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                <form class="login-form" action="{{ route('login') }}" method="post">
                    @csrf
                  <div class="row">
                    <div class="input-field col s12">
                      <h5 class="ml-4">Sign in</h5>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">person_outline</i>
                      <input name="name" id="username" type="text">
                      <label for="username" class="center-align">Username</label>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">lock_outline</i>
                      <input name="password" type="password">
                      <label for="password">Password</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12">
                      <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
    <script src="{{ asset('/js/vendors.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/custom/custom-script.js') }}" type="text/javascript"></script>
  </body>
</html>
