<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Melkin, Booking and Reservation form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Mr.Bricolage</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.ico')}}img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('front/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('front/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('front/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('front/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('front/css/custom.css')}}" rel="stylesheet">

    <!-- MODERNIZR -->
    <script src="{{asset('front/js/modernizr.js')}}"></script>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<nav>
    <ul class="cd-primary-nav">
        <li><a href="{{route('front.index')}}" class="animated_link">Home</a></li>
    </ul>
</nav>
<!-- /menu -->

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 content-left">
            <div class="content-left-wrapper bg_restaurant">
                <div class="wrapper">
                    <a href="{{route('front.index')}}" id="logo"><img src="{{asset('front/logo.png')}}" alt="" width="300" height="100"></a>
                    <!-- /social -->
                    <div class="left_title">
                        <h3>Réservez n'importe quel service</h3>
                        <p>Mr. Bricolage Guadeloupe</p>
                    </div>
                </div>
            </div>
            <!--/content-left-wrapper -->
        </div>
        <!-- /content-left -->

        <div class="col-lg-6 content-right">

            <div id="wizard_container">
                <div id="top-wizard">
                    <div id="progressbar"></div>
                </div>

                <!-- /top-wizard -->
                <form action="{{route('form.submit')}}" method="POST">
                    @csrf
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <input id="website" name="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">
                        <div class="step">
                            <h3 class="main_question"><strong>1/2</strong>Sélectionnez la date et l'heure</h3>
                                    <div class="form-group">
                                        <input type="text" name="dates" class="form-control required" placeholder="Date de préférence">
                                        <i class="icon-hotel-calendar_3"></i>
                                    </div>

                            <div class="form-group">
                                <div class="styled-select clearfix">
                                    <select class="wide time required" name="time">
                                        <option value="">Heure préférée</option>
                                        <option value="07:30:00">07.30 PM</option>
                                        <option value="08:00:00">08.00 PM</option>
                                        <option value="08:30:00">08.30 PM</option>
                                        <option value="09:00:00">09.00 PM</option>
                                        <option value="09:30:00">09.30 PM</option>
                                        <option value="10:00:00">10.00 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="styled-select clearfix">
                                    <select class="required ddslick" name="service_id">
                                        <option value="" data-imagesrc="{{asset('front/img/icons_select/select_treatment.svg')}}">Sélectionnez le service</option>
                                        @foreach($services as $serv)
                                        <option value="{{$serv->id}}" data-imagesrc="{{asset('front/img/icons_select/select_treatment.svg')}}">{{$serv->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control notes" name="comments" placeholder="Special notes or alergies"></textarea>
                            </div>
                        </div>
                        <!-- /step-->


                        <div class="submit step">
                            <h3 class="main_question"><strong>2/2</strong>S'il vous plaît remplir avec vos coordonnées</h3>
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control required" placeholder="Prénom">
                                <i class="icon-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control required" placeholder="Nom">
                                <i class="icon-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control required" placeholder="Email">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="form-group terms">
                                <label class="container_check">Veuillez accepter notre <a href="#" data-toggle="modal" data-target="#terms-txt">Termes et conditions</a>
                                    <input type="checkbox" name="terms" value="Yes" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!-- /step-->

                    </div>
                    <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                        <button type="button" name="backward" class="backward">Précédent</button>
                        <button type="button" name="forward" class="forward">Prochain</button>
                        <button type="submit" name="process" class="submit">Soumettre</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->

            <div class="footer">
                <em>© 2021 IKAE DIGITAL</em>
            </div>
            <!-- Footer -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
<!-- /menu button -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Termes et conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('front/js/common_scripts.min.js')}}"></script>
<script src="{{asset('front/js/velocity.min.js')}}"></script>
<script src="{{asset('front/js/functions.js')}}"></script>

<!-- Wizard script -->
<script src="{{asset('front/js/booking_restaurant_func.js')}}"></script>

</body>
</html>
