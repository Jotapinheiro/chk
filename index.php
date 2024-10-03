<?php 
session_start();
?>
<!DOCTYPE html>
<html class="loading" lang="pt-br" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Pladix Central 2021 :)">
    <meta name="keywords" content="pladix">
    <meta name="author" content="PladixOficial">
    <title>PladixCentral - 2021</title>
    <link rel="apple-touch-icon" href="https://cdn.iconscout.com/icon/free/png-512/p-9-675837.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-512/p-9-675837.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="toastr.min.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
        <link rel="stylesheet" href="sweetalert3.css">
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script src="../../../cdn-cgi/apps/head/aWgZFzIn5ln8hauTCmfEvTQEy2Q.js"></script>
  <script type="text/javascript">

    function name_h1(a) {
      document.getElementById("recebe_nome").innerHTML = 'PladixOficial - Checker [' + a + ']';
    }
  </script>
   <style>
        /* width */
        ::-webkit-scrollbar {
          width: 7px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px grey;
          border-radius: 10px;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #626ed4;
          border-radius: 10px;
        }       
    #apDiv1 {
     position:absolute;
     width:200px;
     height:115px;
     z-index:1;
     left: 135px;
     top: 81px;
   }
   -->
 </style>
 <script type="text/javascript">

</script>



<body class="horizontal-layout horizontal-menu dark-layout   " data-open="hover" data-menu="horizontal-menu" data-col="2-columns" data-layout="dark-layout">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <select class="form-control" onchange="javascript:name_h1(this.value);" name="checkers" id="checkers" style="width: 200px; height: 55px">
                           <option value="Nenhum Selecionado" disabled>Selecione o checker...</option>
                            <option value="amo">Checker FULL (Gate Cielo)</option>
                            <option value="bb">Checker BB (Geradas)</option>
                                  


                         </select>
                        </div>
                    </div>
                </div>             </div>

            <div class="content-body">
                <div class="row" id1="basic-table">
                    <div class="col-12">
                        <div class="card">
                       <section class="floating-label-textarea">
                        <div class="row">
                          <div class="col-12">
                              <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"  id="recebe_nome">Pladix Oficial - [Nenhum Selecionado]</h4>
                                </div>

                                <div class="card-header">
                                     <input type="text" class="form-control round" id="palavra" placeholder="Informe a palavra chave.">
                                </div> 
                                <div class="card-content">
                                    <div class="card-body">
                                       
                                        <h6 class="display-income" id="usuario">Usuário: <?php echo $usuario ?></h6>
                                       <h6 class="display-income" id="online_info">Online agora: <?php echo $usuarios_ativos ?></h6>
                                       <h6 class="display-income" id="credits_rest">Saldo Atual: <?php echo $saldo ?></h6>
                                       <br>
                                         <p class="mb-2">Olá, informe sua lista <code>no campo de texto abaixo</code> para testar e lembre-se de selecionar o checker.</p>
                                         <p class="mb-3"><span class="badge badge-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Nenhum limite de linhas! <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span></p>
                                       
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-label-group">
                                                    
                                                    <textarea class="form-control" id="list" rows="5" placeholder="Informe este campo com sua lista." required=""></textarea>
                                                    <label for="label-textarea"></label>
                                                </fieldset>
                                                 <div class="progress progress-bar-primary">
                                            <div id="progreso" class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"  style=""><span></span></div>
                                        </div>
                                                <center><span class=""><i class="fa fa-check-circle" aria-hidden="true"></i> Aprovadas :</span>
            <span class="" ><font id="cLive" size="2">0</font></span> </li>
            <span class=""><i class="fa fa-times-circle" aria-hidden="true"></i> Reprovadas :</span>
              <span class=""><font id="cDie" size="2">0</font></span> </li>
               <span class=""><i class="fa fa-spinner" aria-hidden="true"></i> Carregadas :</span>
                <span class=""><font id="carregadas" size="2">0</font></span> </li>
              <span class=""><i class="fa fa-clock-o" aria-hidden="true"></i> Testadas : </span>
                  <span class=""><font id="total" size="2">0</font></span> </li>
                </center>
                <br>
                 <center><h6 class="text-warning" id="status">O checker não foi iniciado...</h6></center>
                <br>
                          <center>
                            <button id="start" type="button" class="btn btn-success btn-block waves-effect waves-light"><i class="fa fa-play" aria-hidden="true"></i> Iniciar</button><br>
                            <button id="stop" onclick="stopado();" type="button" class="btn btn-danger btn-block waves-effect waves-light"><i class="fa fa-stop" aria-hidden="true"></i> Parar</button><br>
                                         <button id="clear" onclick="limpar();" type="button" class="btn btn-warning btn-block waves-effect waves-light"><i class="fa fa-trash" aria-hidden="true"></i> Limpar</button><br>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <section id="basic-divider">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <li class="active"><a href="#lives" data-toggle="tab"><span style="font-weight: bold;"><span style=""><i class="fa fa-check-circle" aria-hidden="true"></i>&nbspAprovadas</a></li>

                                </div>
                                <div class="card-content">
                                    <div  id="lives" class="card-body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <section id="basic-divider">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                               <li><a href="#employe" data-toggle="tab"><span style="font-weight: bold;"><span style="color: red;);"><span><i class="fa fa-times-circle" aria-hidden="true"></i>&nbspReprovadas</a></li>
                                </div>
                                <div class="card-content">
                                    <div  class="card-body" id="employe">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

      <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <footer class="footer footer-static footer-dark navbar-shadow">
       <center><p>© <script>document.write(new Date().getFullYear())</script> PladixCentral. Desenvolvida por <i class="fa fa-heart" aria-hidden="true"></i> PladixOficial </p></center>
    </footer>
    <script src="sweetalert2.js"></script>
    <script src="toastr.min.js"></script>
    <script src="script.js"></script>
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="app-assets/js/functions.js" type="text/javascript"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
</body>
</html>