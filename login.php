<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accediendo</title>
    <link href="css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/css.css" media="screen" rel="stylesheet" type="text/css">
    <style>
        body {
            background: #eeeeee;
        }
        .bg-white {
            background: white;
            padding: 10%;
            border-radius: 5px;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container">
        <center>Adminitrador de clientes</center>
        <form class="form-signin ">
            <img src="images/logo.png" style="width: 100%">
            <div class="bg-white">
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email address" required>
                <br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" required>
                <br>
                <ul class="nav nav-pills">
                </ul>
                <button id="yyy" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" onclick="showModal();">Forget password?</button>
                <button id="xxx" type="button" class="btn btn-default text-right pull-right">Login</button>
            </div>
        </form>
    </div>
    <!-- /container -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ingrese correo</h4>
                </div>
                <div class="modal-body">
                    <p>Ingrese el correo para reestablecer su contraseña:</p>
                    <input id="reset" type="email" class="form-control" placeholder="Email address" required>
                    <label for="reset" class="sr-only">Email</label>
                </div>
                <div class="modal-footer">
                    <button id="xxx" onclick="resetPassword()" type="button" class="btn btn-default text-right">Resetear Constraseña</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modals -->
</body>
<script src="js/jquery-2.1.1.min.js" charset="utf-8"></script>
<script src="js/bootstrap.js"></script>
<script src="js/cookie.js"></script>


<script>
     $("#password").keypress(function(e) {
       if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.
          var $this = $(this);
          $this.button('loading');
          if ($("#email").val() && $("#password").val()) {
              var user = {
                  "email": $("#email").val(),
                  "password": $("#password").val(),
                  "grant_type": "password"
              };
              $.ajax({
                  type: "POST",
                  url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/oauth/token',
                  contentType: "application/json",
                  data: JSON.stringify(user),
                  success: function(data) {
                      Cookies.set('token', data.Result.access_token, {
                          expires: 2
                      });
                      Cookies.set('Id', data.Result.principal_id, {
                          expires: 2
                      });
                      $.ajax({
                          type: "GET",
                          url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/Users/' + data.Result.principal_id,
                          success: function(data) {
                              Cookies.set('user', data.Result, {
                                  expires: 2
                              });
                              var user = JSON.parse(Cookies.get('user'));
                              $.ajax({
                                  type: "GET",
                                  url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/clientes/' + user.cliente,
                                  headers: {
                                      // "X-Everlive-expand" : JSON.stringify(expand)
                                  },
                                  // contentType: "application/json",
                                  // data: JSON.stringify(object2),
                                  success: function(data) {
                                      Cookies.set('cliente', data.Result, {
                                          expires: 2
                                      });
                                      location.href = 'http://localhost/workspace/proyecto-invian/adminadbeacons/monitoreo.html';
                                  },
                                  error: function(error) {
                                      $this.button('reset');
                                      alert("Error de internet. Refresque la página.");
                                  }
                              });
                          },
                          error: function(error) {
                              $this.button('reset');
                              alert("Se produjo un error. Intente nuevamente");
                          }
                      });
                  },
                  error: function(error) {
                      $this.button('reset');
                      alert("Se produjo un error. Intente nuevamente");
                  }
              });
          } else {
              $this.button('reset');
          }
       }
    });
</script>

<script type="text/javascript">
    function showModal() {
        $("#reset").val($("#email").val());
        $('#modal1').modal('open');
    }


    $("#xxx").on('click', function() {
        var $this = $(this);
        $this.button('loading');
        if ($("#email").val() && $("#password").val()) {
            var user = {
                "email": $("#email").val(),
                "password": $("#password").val(),
                "grant_type": "password"
            };
            $.ajax({
                type: "POST",
                url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/oauth/token',
                contentType: "application/json",
                data: JSON.stringify(user),
                success: function(data) {
                    Cookies.set('token', data.Result.access_token, {
                        expires: 2
                    });
                    Cookies.set('Id', data.Result.principal_id, {
                        expires: 2
                    });
                    $.ajax({
                        type: "GET",
                        url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/Users/' + data.Result.principal_id,
                        success: function(data) {
                            Cookies.set('user', data.Result, {
                                expires: 2
                            });
                            var user = JSON.parse(Cookies.get('user'));
                            $.ajax({
                                type: "GET",
                                url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/clientes/' + user.cliente,
                                headers: {
                                    // "X-Everlive-expand" : JSON.stringify(expand)
                                },
                                // contentType: "application/json",
                                // data: JSON.stringify(object2),
                                success: function(data) {
                                    Cookies.set('cliente', data.Result, {
                                        expires: 2
                                    });
                                    location.href = 'http://localhost/workspace/proyecto-invian/adminadbeacons/monitoreo.html';
                                },
                                error: function(error) {
                                    $this.button('reset');
                                    alert("Error de internet. Refresque la página.");
                                }
                            });
                        },
                        error: function(error) {
                            $this.button('reset');
                            alert("Se produjo un error. Intente nuevamente");
                        }
                    });
                },
                error: function(error) {
                    $this.button('reset');
                    alert("Se produjo un error. Intente nuevamente");
                }
            });
        } else {
            $this.button('reset');
        }
    });

    function resetPassword() {
        // alert(123);
        if ($("#reset").val()) {
            var object = {
                "Email": $("#reset").val()
            };
            $.ajax({
                type: "POST",
                url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/Users/resetpassword',
                contentType: "application/json",
                data: JSON.stringify(object),
                success: function(data) {
                    alert("Password is reset, see your email.");
                },
                error: function(error) {
                    var message = JSON.parse(error.responseText);
                    alert(message.message + "\nPlease, train again.");
                }
            });
        } else {

        }
    }

    function verificar2() {
        // console.log(Cookies.get('token')+"token");
        // alert("token "+Cookies.get('token'));
        console.log(Cookies.get('token'));
        if (Cookies.get('token') == null) {
            window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/login.html");
        }
    }
</script>

</html>
