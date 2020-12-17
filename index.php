<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Simulation de tarif</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">




<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />




    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a> </li>
                                        <li> <a href="index.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Similateur de tarif</a> </li>
                                        <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> A propos</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contacter nous</a></li>
                                        <li class="last">
                                            <a href="#"><img src="images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="icon/call.png" />(+221)782446961</li>
                                <li><img src="icon/email.png" />zizmous@gmail.com</li>
                                <li><img src="icon/loc.png" />Localisation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>SIMULATEUR DE TARIF</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about -->
    <section class="simulateur">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                  



                <form>
                    <fieldset>
                        <legend>SIMULATION DE PRIX</legend>

                        <div class="row sub-div" id="colis">
                            <div class="col-sm-12">
                                 <label for="nom"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> COLIS</label>
                            </div>
                            <div class="form-group col-sm-6" >
                               <input type="number" class="form-control" id="input-poids" placeholder="Poids">
                            </div>
                            <div class="form-group col-sm-6">
                                <select class="form-control selectpicker" id="select-type">
                                    <option data-tokens="china" value="0">Type de colis</option>
                                    <option data-tokens="malayasia" value="1">Effets personels</option>
                                    <option data-tokens="singapore" value="2">Périssables</option>
                                    <option data-tokens="malayasia" value="1">Animaux vivant</option>
                                    <option data-tokens="singapore" value="2">Valeurs</option>
                                    <option data-tokens="malayasia" value="1">Dépouille mortelle</option>
                                </select>
                            </div>
                        </div>

                        <div class="row sub-div" id="destination">
                            <div class="col-sm-12">
                                <label for="email"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> DESTINATION</label>
                            </div>
                            <div class="form-group col-sm-6" >
                                <select class="form-control selectpicker" id="select-pays" data-live-search="true">
                                    <option data-tokens="china" value="0">Pays</option>
                                    <option data-tokens="malayasia" value="1">Malayasia</option>
                                    <option data-tokens="singapore" value="2">Singapore</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6" >
                                <select class="form-control selectpicker" id="select-aeroport" data-live-search="true">
                                    <option data-tokens="china" value="0">Aéroport</option>
                                    <option data-tokens="malayasia" value="1">Malayasia</option>
                                    <option data-tokens="singapore" value="2">Singapore</option>
                                </select>
                            </div>
                        </div>

                     <div class="row sub-div" id="compagnie">
                        <div class="col-sm-12">
                            <label for="email"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> COMPAGNIE</label>
                        </div>
                        <div class="form-group col-sm-12">
                            <select class="form-control selectpicker" id="select-compagnie" data-live-search="true">
                                <option data-tokens="china" value="0">Compagnie</option>
                                <option data-tokens="malayasia" value="1">Air Sénégal</option>
                                <option data-tokens="singapore" value="2">Air France</option>
                            </select>
                        </div>
                     </div>
               <!--      
                     <div class="form-group">
                       <label for="selection">Une liste select</label>
                       <select id="selection" class="form-control">
                         <option value="">Liste de choix...</option>
                         <optgroup label="Groupe d'options 1">
                           <option value="">Option 1</option>
                           <option value="">Option 2</option>
                           <option value="">Option 3</option>
                         </optgroup>
                         <optgroup label="Groupe d'options 2">
                           <option value="">Option 4</option>
                           <option value="">Option 5</option>
                         </optgroup>
                       </select>
                     </div>
                -->
                    </fieldset>
                </form>




                </div>
                 <div class="col-sm-4">
                    <div class="canva-resultat">
                    <div id="image-colis"><img src="images/colis.jpg"></div>
                    <div class="resultat" id="table-tarif">
                        <span class="title-result">RESUME</span>
                        <table class="table">
                          <tbody>
                            <tr class="tr-total-ht">
                              <td class="tab-bold total" colspan="2">PRIX HT</td>
                              <td class="tab-bold somme"><soan id="prix-ht"></soan><sup> FCFA</sup></td>
                            </tr>
                            <tr>
                              <td class="tab-bold">TX</td>
                              <td>15<sup> FCFA</sup>/KG</td>
                              <td class="tab-bold"><soan id="prix-tx"></soan><sup> FCFA</sup></td>
                            </tr>
                            <tr>
                              <td class="tab-bold">SCC</td>
                              <td>75<sup> FCFA</sup>/KG</td>
                              <td class="tab-bold"><soan id="prix-scc"></soan><sup> FCFA</sup></td>
                            </tr>
                            <tr>
                              <td class="tab-bold">CGC</td>
                              <td>1 250<sup> FCFA</sup></td>
                              <td class="tab-bold">1 250<sup> FCFA</sup></td>
                            </tr>
                             <tr>
                              <td class="tab-bold">GE</td>
                              <td>1 260<sup> FCFA</sup></td>
                              <td class="tab-bold">1 260<sup> FCFA</sup></td>
                            </tr>
                             <tr>
                              <td class="tab-bold">CHC</td>
                              <td>15 000<sup> FCFA</sup></td>
                              <td class="tab-bold">15 000<sup> FCFA</sup></td>
                            </tr>
                             <tr>
                              <td class="tab-bold">GT</td>
                              <td>2 000<sup> FCFA</sup></td>
                              <td class="tab-bold">2 000<sup> FCFA</sup></td>
                            </tr>
                             <tr class="tr-total-ttc">
                              <td class="tab-bold total" colspan="2">TOTAL TTC</td>
                              <td class="tab-bold somme"><soan id="prix-ttc"></soan><sup> FCFA</sup></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="div-button" id="btn-tarif">
                            <button type="button" class="btn btn-primary">Commander <span class="glyphicon glyphicon-share" aria-hidden="true"></span></button>
                        </div>


                </div>
                </div>
                </div>

            </div>
            
        </div>
    </section>
    <section class="separation">
        
    </section>
    <!-- end about -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>15 Hann Maristes Dakar, Sénégal</span>
                                <p>(+221) 78 244 69 61 
                                    <br>zizmous@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Accueil</a></li>
                                    <li> <a href="#">Simulateur de tarif</a></li>
                                    <li> <a href="#">A propos </a></li>
                                    <li> <a href="#"> Contacter nous</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design By<a href="#/">zizmoussa</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <!--   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>-->
    <!-- me select search -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script src="js/fonctions.js"></script>
</body>

</html>