<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->

    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="{{asset('js/html5shiv.js')}}"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<style>
    /*
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
*/
    /* Import fonts */

    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic);

    @import url(line-icons.css);



    body {

        color: #797979;

        background: #eeeeee;

        font-family: 'Lato', sans-serif;

        padding: 0px !important;

        margin: 0px !important;

        font-size:14px !important;

    }

    h1,h2,h3,h4,h5{

        font-weight: 300;

    }

    label{

        font-weight: 300;

    }

    ul li {

        list-style: none;

    }



    a, a:hover, a:focus {

        text-decoration: none;

        outline: none;

        outline: 0;

    }

    input:focus, textarea:focus { outline: none; }

    table tr th { color: #688a7e;}

    *:focus {outline: none;}

    ::selection {

        background: #688a7e;

        color: #fff;

    }

    ::-moz-selection {

        background: #688a7e;

        color: #fff;

    }



    #container {

        width: 100%;

        height: 100%;

    }



    .Creative-pro, .Creative-pro h3{

        display: block;

        position: fixed;

        bottom:0;

        z-index: 100000;

        width: 100%;

        overflow: hidden;

        height: 50px;

        margin:0px;

    }

    .Creative-pro h3{

        padding-bottom: 10px;

        padding-top: 10px;

    }

    .lite{

        color: #00a0df !important;

    }



    /*login page*/



    .login-body {

        background-color: #f1f2f7;

    }

    .login-img-body{

        background-image: url('{{ asset('Imagenes/bg-1.jpg') }}') no-repeat center center fixed;

        -webkit-background-size: cover;

        -moz-background-size: cover;

        -o-background-size: cover;

        background-size: cover;

    }

    .login-img2-body{

        background-image: url('{{ asset('Imagenes/bg-1.jpg') }}') no-repeat center center fixed;

        -webkit-background-size: cover;

        -moz-background-size: cover;

        -o-background-size: cover;

        background-size: cover;

    }

    .login-img3-body{

        background-image: url('{{ asset('Imagenes/bg-1.jpg') }}')no-repeat center center fixed;

        -webkit-background-size: cover;

        -moz-background-size: cover;

        -o-background-size: cover;

        background-size: cover;

    }



    .login-form {

        max-width: 350px;

        margin: 200px auto 0;

        background: #d5d7de;

    }

    .login-img-body .login-form{

        max-width: 350px;

        margin: 200px auto 0;

        background: rgba(213,215,222,0.4);

        border: 1px solid #B0B6BE;

    }

    .login-img2-body .login-form{

        border: 1px solid #B0B6BE;

        background: rgba(213,215,222,0.7);

    }

    .login-img3-body .login-form{

        border: 1px solid #B0B6BE;

        background: rgba(213,215,222,0.9);

    }

    .login-form a{

        color: #688a7e !important;

    }

    .login-form h2.login-form-heading {

        margin: 0;

        padding:20px 15px;

        text-align: center;

        background: #34aadc;

        border-radius: 5px 5px 0 0;

        -webkit-border-radius: 5px 5px 0 0;

        color: #fff;

        font-size: 18px;

        text-transform: uppercase;

        font-weight: 300;

        font-family: 'Lato', sans-serif;

    }



    .login-form .checkbox {

        margin-bottom: 14px;

    }

    .login-form .checkbox {

        font-weight: normal;

        font-weight: 300;

        font-family: 'Lato', sans-serif;

    }

    .login-form .form-control {

        position: relative;

        font-size: 16px;

        height: auto;

        padding: 10px;

        -webkit-box-sizing: border-box;

        -moz-box-sizing: border-box;

        box-sizing: border-box;

    }

    .login-form .form-control:focus {

        z-index: 2;

    }

    .login-form .login-img{

        font-size: 50px;

        font-weight: 300;

    }

    .login-form .input-group{

        padding-bottom: 15px;

    }

    .login-form .input-group-addon{

        padding: 6px 12px;

        font-size: 16px;

        color: #8b9199;

        font-weight: normal;

        line-height: 1;

        text-align: center;

        background-color: #ffffff;

        border: none;

        border-radius: 0;

    }

    .login-form input[type="text"], .login-form input[type="password"] {

        border: none;

        box-shadow: none;

        font-size: 16px;

        border-radius: 0;

    }

    .login-form .btn{

        border-radius: 0;

    }

    .login-form .btn-login {

        background: #f67a6e;

        color: #fff;

        text-transform: uppercase;

        font-weight: 300;

        font-family: 'Lato', sans-serif;

        box-shadow: 0 4px #e56b60;

        margin-bottom: 20px;

    }



    .login-form p {

        text-align: center;

        color: #b6b6b6;

        font-size: 16px;

        font-weight: 300;

    }

    .login-img3-body .login-form p,.login-img2-body .login-form p {

        color: #34aadc;

    }

    .login-form a {

        color: #b6b6b6;

    }



    .login-form a:hover {

        color: #34aadc;

    }

    .form .required{

        font-size: 16px;

        color: #00a0df;

    }



    .login-wrap {

        padding: 20px;

    }



    .login-social-link  {

        display: inline-block;

        margin-top: 20px;

        margin-bottom: 15px;

    }



    .login-social-link a {

        color: #fff;

        padding: 15px 28px;

        border-radius: 4px;

    }



    .login-social-link a:hover {

        color: #fff;

    }



    .login-social-link a i {

        font-size: 20px;

        padding-right: 10px;

    }



    .login-social-link a.facebook {

        background: #5193ea;

        margin-right: 22px;

        box-shadow: 0 4px #2775e2;

        float:left;

    }



    .login-social-link a.twitter {

        background: #44ccfe;

        box-shadow: 0 4px #2bb4e8;

        float:left;

    }

    /*Modal Content*/

    .modal-content{

        border-radius:0px;

        background:rgba(255,255,255,0.9);

    }

    .modal-header .close{

        font-weight: 300;

        font-size: 30px;

    }



    /*sidebar navigation*/



    #sidebar {

        width: 180px;

        height: 100%;

        position: fixed;

        background: #394a59;

    }



    .nav-collapse.collapse {

        display: inline;

    }



    ul.sidebar-menu , ul.sidebar-menu li ul.sub{

        margin: -2px 0 0;

        padding: 0;

    }



    ul.sidebar-menu {

        margin-top: 60px;

    }



    #sidebar > ul > li > ul.sub {

        display: none;

    }



    #sidebar > ul > li.active > ul.sub, #sidebar > ul > li > ul.sub > li > a {

        display: block;

    }



    ul.sidebar-menu li ul.sub li{

        background: #394a59;

        margin-bottom: 0;

        margin-left: 0;

        margin-right: 0;

    }



    ul.sidebar-menu li ul.sub li:last-child{

        border-radius: 0 0 4px 4px;

        -webkit-border-radius: 0 0 4px 4px;

    }



    ul.sidebar-menu li ul.sub li a {

        font-size: 12px;

        padding: 0 0 0 32px;

        line-height: 35px;

        height: 35px;

        -webkit-transition: all 0.3s ease;

        -moz-transition: all 0.3s ease;

        -o-transition: all 0.3s ease;

        -ms-transition: all 0.3s ease;

        transition: all 0.3s ease;

        color: #d0d8df;

        font-size: 14px;

    }



    ul.sidebar-menu li ul.sub li a:hover, ul.sidebar-menu li ul.sub li.active a {

        color: #fff;

        -webkit-transition: all 0.3s ease;

        -moz-transition: all 0.3s ease;

        -o-transition: all 0.3s ease;

        -ms-transition: all 0.3s ease;

        transition: all 0.3s ease;

        display: block;

    }



    ul.sidebar-menu li{

        line-height: 20px !important;

        /*margin-bottom: 5px;

    margin-left:10px;

    margin-right:10px;*/



    }

    /*ul.sidebar-menu li:hover{

    border-bottom: 1px solid #688a7e;

}*/

    ul.sidebar-menu li.sub-menu{

        line-height: 15px;

        font-size: 16px;

    }



    ul.sidebar-menu li a span{

        display: inline-block;

    }



    ul.sidebar-menu li a{

        color: #d0d8df;

        text-decoration: none;

        display: block;

        padding: 15px 0 15px 10px;

        font-size: 16px;

        font-weight: 300;

        outline: none;

        -webkit-transition: all 0.3s ease;

        -moz-transition: all 0.3s ease;

        -o-transition: all 0.3s ease;

        -ms-transition: all 0.3s ease;

        transition: all 0.3s ease;

        border-right: 1px solid #D7D7D7;

        border-bottom: 1px solid #D7D7D7;

    }

    /*ul.sidebar-menu li a i{

    position: relative;

    top: 2px;

}*/

    ul.sidebar-menu li.active a, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {

        background: #2e3b46;

        color: #fff;

        display: block;

        /*border-radius: 4px;

    -webkit-border-radius: 4px;*/

        -webkit-transition: all 0.3s ease;

        -moz-transition: all 0.3s ease;

        -o-transition: all 0.3s ease;

        -ms-transition: all 0.3s ease;

        transition: all 0.3s ease;

    }

    ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {

        border-bottom: 1px solid #d0d8df;

    }

    /*ul.sidebar-menu li.active a,*/ ul.sidebar-menu .sub-menu li.active a{

                                         border-bottom: 1px solid #d0d8df;

                                     }



    ul.sidebar-menu li a i {

        font-size: 18px;

        padding-right: 6px;

        /*color: #688a7e;*/

    }



    ul.sidebar-menu li a:hover i, ul.sidebar-menu li a:focus i {

        color: #fff;

    }



    ul.sidebar-menu li.active a i {

        color: #fff;

    }





    #sidebar ul > li > a .arrow {

        border-bottom: 4px solid transparent;

        border-left: 4px solid #A0A0A0;

        border-top: 4px solid transparent;

        float: right;

        height: 0;

        margin-right: 10px;

        margin-top: 6px;

        width: 0;

    }

    #sidebar ul > li > a .menu-arrow {

        float: right;

        margin-right: 8px;

        margin-top: 6px;

    }

    #sidebar > ul > li > a .arrow.open {

        border-left: 4px solid transparent;

        border-right: 4px solid transparent;

        border-top: 5px solid #A0A0A0;

        float: right;

        height: 0;

        margin-right: 10px;

        margin-top: 8px;

        width: 0;

    }



    #sidebar ul > li.active > a .arrow, #sidebar ul > li > a:hover .arrow, #sidebar ul > li > a:focus .arrow {

        float: right;

        margin-top: 6px;

        margin-right: 10px;

        width: 0;

        height: 0;

        border-left: 4px solid #d0d8df;

        border-top: 4px solid transparent;

        border-bottom: 4px solid transparent;

    }



    #sidebar > ul > li.active > a .arrow.open, #sidebar > ul > li > a:hover .arrow.open, #sidebar > ul > li > a:focus .arrow.open {

        float: right;

        margin-top: 8px;

        margin-right: 10px;

        width: 0;

        height: 0;

        border-top: 5px solid #d0d8df;

        border-left: 4px solid transparent;

        border-right: 4px solid transparent;

    }



    .mail-info, .mail-info:hover {

        margin: 3px 6px 0 0;

        font-size: 11px;

    }

    /*profile status bubbly*/

    .online-profile li a i {

        position: relative;

        left: -12px;

        top: -10px;

    }

    .online-profile li a span i {

        position: relative;

        top: 10px;

    }

    /*chat-*/



    .chat-online-profile li a i {

        position: relative;

        left: -12px;

        top: -10px;

    }

    .chat-online-profile li a span i {

        position: relative;

        top: 10px;

    }

    .chat-online-profile li a{

        border-bottom: 1px solid #D7D7D7;

    }

    .chat-online-profile li a:hover, .chat-online-profile li a:focus, .chat-online-profile li a:active{

        background: #eeeeee !important;

        border-bottom: 1px solid #688a7e !important;

    }

    .chat-online-profile li a:hover span i,.chat-online-profile li a:focus span i,.chat-online-profile li a:active span i{

        color: #688a7e;

    }

    .right-chat-panel{

        max-height: 600px;

    }

    .compose-mail{

        width: 95%;

        font-size: 16px;

        border-radius: 0;

    }

    /*main content*/



    #main-content {

        margin-left: 180px;

    }



    .header, .footer {

        min-height: 60px;

        padding: 0 15px;

    }

    .box1 {

        font-size: 16px;

        display: inline-block;

        width: 25%;

        padding: .25em .5em;

        margin: 20px 10px 0 0;

    }

    .header {

        position: fixed;

        left: 0;

        right: 0;

        z-index: 1002;

    }



    .white-bg {

        background: rgba(255,255,255,0.9);

        border-bottom: 1px solid #f1f2f7;

    }

    .dark-bg {

        background: rgba(54,66,74,1);

        border-bottom: 1px solid #f1f2f7;

    }

    .panel-content{

        padding: 10px;

    }

    .wrapper {

        display: inline-block;

        margin-top: 60px;

        padding: 15px;

        width: 100%;

    }



    a.logo {

        font-size: 22px;

        font-weight: 300;

        color: #fed189;

        float: left;

        margin-top: 15px;

        text-transform: uppercase;

    }



    a.logo:hover, a.logo:focus {

        text-decoration: none;

        outline: none;

    }



    a.logo span {

        color: #688a7e;

    }





    /*notification*/



    #top_menu .nav > li, ul.top-menu > li {

        float: left;

    }

    .search-row {

        float: left;

        margin-top: 15px;

        margin-left: 16px;

    }

    .notification-row {

        float: right;

        margin-top: 15px;

        margin-left: 65px;

    }

    #task_notificatoin_bar, #mail_notificatoin_bar, #alert_notificatoin_bar{

        margin-top: 7px;

    }



    ul.top-menu > li > a {

        color: #fed189;

        font-size: 18px;

        padding: 2px 6px;

        margin-right: 15px;

    }



    ul.top-menu > li > a:hover, ul.top-menu > li > a:focus {

        background: transparent !important;

        color: #D7D7D7 !important;

    }



    .notification-row .badge {

        position: absolute;

        right: -4px;

        top: 0px;

        z-index: 100;

        border-radius: 9px;

        min-width: 18px;

        height: 18px;

        text-align: center;

        padding: 3px 5px;

        background: #00a0df;

        font-weight: 400;

    }

    .badge {

        border-radius: 9px;

        min-width: 18px;

        height: 18px;

        text-align: center;

        padding: 3px 5px;

        background: #00a0df;

    }



    .dropdown-menu.extended {

        max-width: 300px !important;

        min-width: 160px !important;

        top: 42px;

        width: 235px !important;

        padding: 0;

        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.176) !important;

        border: none !important;

        border-radius: 4px;

        -webkit-border-radius: 4px;

    }

    .navbar-form{

        padding: 0px;

        margin: 0 0 0 10px;

    }



    .navbar-form .form-control{

        width: 200px;

        height: 30px;

        background: white url('../img/icons/search-line-icon.png') no-repeat 3px;

        padding-left: 24px;

        margin-top: 1px;

    }



    @media screen and (-webkit-min-device-pixel-ratio:0) {

        /* Safari and Chrome */

        .dropdown-menu.extended  {

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.176) !important;

        };

    }

    /* bootstrape editor*/

    #editor {

        max-height: 250px;

        height: 250px;

        background-color: white;

        border-collapse: separate;

        border: 1px solid rgb(204, 204, 204);

        padding: 4px;

        box-sizing: content-box;

        -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;

        box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;

        border-top-right-radius: 3px; border-bottom-right-radius: 3px;

        border-bottom-left-radius: 3px; border-top-left-radius: 3px;

        overflow: scroll;

        outline: none;

    }

    #voiceBtn {

        width: 20px;

        color: transparent;

        background-color: transparent;

        transform: scale(2.0, 2.0);

        -webkit-transform: scale(2.0, 2.0);

        -moz-transform: scale(2.0, 2.0);

        border: transparent;

        cursor: pointer;

        box-shadow: none;

        -webkit-box-shadow: none;

    }



    div[data-role="editor-toolbar"] {

        -webkit-user-select: none;

        -moz-user-select: none;

        -ms-user-select: none;

        user-select: none;

    }

    .dropdown-menu.extended li p {

        background-color: #F1F2F7;

        color: #666666;

        margin: 0;

        padding: 10px;

    }



    .dropdown-menu.extended li p.green {

        background-color: #4cd964;

        color: #fff;

    }



    .dropdown-menu.extended li p.red {

        background-color: #00a0df;

        color: #fff;

    }

    .dropdown-menu.extended li p.blue {

        background-color: #688a7e;

        color: #fff;

    }



    .dropdown-menu.extended li p.yellow {

        background-color: #fcb322;

        color: #fff;

    }



    .dropdown-menu.extended li a {

        border-bottom: 1px solid #EBEBEB !important;

        font-size: 12px;

        list-style: none;

    }



    .dropdown-menu.extended li a {

        padding: 15px 10px !important;

        width: 100%;

        display: inline-block;

    }



    .dropdown-menu.extended li a:hover {

        background-color: #F7F8F9 !important;

        color: #2E2E2E;

        border-bottom: 1px solid #688a7e !important;

    }



    .dropdown-menu.tasks-bar .task-info .desc {

        font-size: 13px;

        font-weight: normal;

    }



    .dropdown-menu.tasks-bar .task-info .percent {

        display: inline-block;

        float: right;

        font-size: 13px;

        font-weight: 600;

        padding-left: 10px;

        margin-top: -4px;

    }



    .dropdown-menu.extended .progress {

        margin-bottom: 0 !important;

        height: 10px;

    }



    .dropdown-menu.inbox li a .photo img {

        border-radius: 2px 2px 2px 2px;

        float: left;

        height: 40px;

        margin-right: 4px;

        width: 40px;

    }



    .dropdown-menu.inbox li a .subject {

        display: block;

    }



    .dropdown-menu.inbox li a .subject .from {

        font-size: 12px;

        font-weight: 600;

    }



    .dropdown-menu.inbox li a .subject .time {

        font-size: 11px;

        font-style: italic;

        font-weight: bold;

        position: absolute;

        right: 5px;

    }



    .dropdown-menu.inbox li a .message {

        display: block !important;

        font-size: 11px;



    }



    .top-nav  {

        margin-top: 7px;

    }



    .top-nav ul.top-menu > li .dropdown-menu.logout {

        width: 200px !important;



    }



    .top-nav li.dropdown .dropdown-menu {

        float: right;

        right: 0;

        left: auto;

    }



    .dropdown-menu.extended.logout > li {

        float: left;

        text-align: left;

        width: 100%;

    }

    .dropdown-menu.extended.logout > li.eborder-top {

        border-top: 2px solid #688a7e !important;

    }

    .dropdown-menu.extended.logout > li:last-child {

        float: left;

        text-align: left;

        width: 100%;

        background: #688a7e;

    }



    .dropdown-menu.extended.logout > li:last-child > a, .dropdown-menu.extended.logout > li:last-child > a:hover {

        color: #fff;

        border-bottom: none !important;

        text-transform: uppercase;

        background-color:#688a7e !important;

    }



    .dropdown-menu.extended.logout > li:last-child > a:hover > i{

        color: #fff;

    }

    .dropdown-menu > li > a{

        color: #797979;

    }

    .dropdown-menu.extended.logout > li > a {

        border-bottom: 1px solid #EBEBEB !important;

        font-size: 14px;

        list-style: none;

        padding: 15px 10px !important;

        width: 100%;

        display: inline-block;

    }



    .dropdown-menu.extended.logout > li > a:hover {

        background-color: #F7F8F9 !important;

        color: #2E2E2E;

        border-bottom: 1px solid #688a7e !important;

    }



    .dropdown-menu.extended.logout > li > a:hover i {

        color: #688a7e;

    }



    .dropdown-menu.extended.logout > li > a i {

        font-size: 17px;

    }



    .dropdown-menu.extended.logout > li > a > i {

        display: inline-block;

        padding-right: 10px

    }



    .top-nav .username {

        font-size: 13px;

        color: #bdbdbd;

    }



    .top-nav ul.top-menu > li > a {

        padding: 8px;

        background: none;

        margin-right: 0;

    }

    .top-nav ul.top-menu > li {

        margin-left: 10px;

    }



    .top-nav ul.top-menu > li > a:hover, .top-nav ul.top-menu > li > a:focus {

        background: #F1F2F7;



    }



    .top-nav .dropdown-menu.extended.logout {

        top: 50px;

    }



    .top-nav .nav .caret {

        border-bottom-color: #A4AABA;

        border-top-color: #A4AABA;

    }

    .top-nav ul.top-menu > li > a:hover .caret {

        border-bottom-color: #7498f1;

        border-top-color: #7498f1;

    }



    .log-arrow-up {

        background: url("../img/arrow-up.png") no-repeat;

        width: 20px;

        height: 11px;

        position: absolute;

        right: 20px;

        top: -10px;

    }

    /*----*/

    .page-header {

        margin: 12px 0 20px;

        border-bottom: none;

        opacity: 0.7;

        text-transform: uppercase;

    }

    .page-header i {

        color: #acb1b8;

        margin-right: 10px;

        float: left;

        font-size: 30px;

        line-height: 22px;

        opacity: 0.8;

    }

    .breadcrumb {

        -webkit-border-radius: 0px;

        -moz-border-radius: 0px;

        border-radius: 0px;

        height: 34px;

        position: relative;

        margin: 0 0 19px 0;

        overflow: hidden;

    }

    .breadcrumb li {

        position: relative;

        margin-right: 0;

    }

    .breadcrumb li i {

        Font-size: 15px;

        margin-right: 5px;

    }

    .breadcrumb > .active {

        color: #d4d4d4;

    }

    /* .info-box

=================================================================== */

    .info-box {

        min-height: 140px;

        margin-bottom: 30px;

        padding: 20px;

        color: white;

        -webkit-box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);

        -moz-box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);

        box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);

    }

    .info-box i {

        display: block;

        height: 100px;

        font-size: 60px;

        line-height: 100px;

        width: 100px;

        float: left;

        text-align: center;

        margin-right: 20px;

        padding-right: 20px;

        color: rgba(255, 255, 255, 0.75);

    }

    .info-box .count {

        margin-top: 20px;

        font-size: 34px;

        font-weight: 700;

    }

    .info-box .title {

        font-size: 12px;

        text-transform: uppercase;

        font-weight: 600;

    }

    .info-box .desc {

        margin-top: 10px;

        font-size: 12px;

    }

    .info-box.danger {

        background: #ff5454;

        border: 1px solid #ff2121;

    }

    .info-box.warning {

        background: #fabb3d;

        border: 1px solid #f9aa0b;

    }

    .info-box.primary {

        background: #20a8d8;

        border: 1px solid #1985ac;

    }

    .info-box.info {

        background: #67c2ef;

        border: 1px solid #39afea;

    }

    .info-box.success {

        background: #79c447;

        border: 1px solid #61a434;

    }

    /*----------------	color------------------------*/

    .dark-heading-bg {

        background: #4c4f53;

        border: 1px solid #4c4f53;

    }

    .main-bg {

        background: #e6e8ea;

    }

    .white-bg {

        color : #768399;

        background : #fff;

        background-color : #fff;

    }

    .red-bg {

        color : #fff;

        background : #d95043;

        background-color : #d95043;

    }

    .blue-bg {

        color : #fff;

        background : #57889c;

        background-color : #57889c;

    }

    .green-bg {

        color : #fff;

        background : #26c281;

        background-color : #26c281;

    }

    .greenLight-bg {

        color: #71843f;

        background: #71843f;

        background-color: #71843f;

    }

    .yellow-bg {

        color : #fff;

        background : #fc6;

        background-color : #fc6;

    }

    .orange-bg {

        color : #fff;

        background : #f4b162;

        background-color : #f4b162;

    }

    .purple-bg {

        color : #fff;

        background : #af91e1;

        background-color : #af91e1;

    }

    .pink-bg {

        color : #fff;

        background : #f78db8;

        background-color : #f78db8;

    }

    .lime-bg {

        color : #fff;

        background : #a8db43;

        background-color : #a8db43;

    }

    .magenta-bg {

        color : #fff;

        background : #e65097;

        background-color : #e65097;

    }

    .teal-bg {

        color : #fff;

        background : #97d3c5;

        background-color : #97d3c5;

    }

    .brown-bg {

        color : #fff;

        background : #d1b993;

        background-color : #d1b993;

    }

    .gray-bg {

        color : #768399;

        background : #e4e9eb;

        background-color : #e4e9eb;

    }

    .dark-bg {

        color : #fff;

        background : #1a2732;

        background-color : #1a2732;

    }

    .facebook-bg {

        color: #fff;

        background: #3b5998;

        background-color : #3b5998;

    }

    .twitter-bg {

        color: #fff;

        background: #00aced;

        background-color : #00aced;

    }

    .linkedin-bg {

        color: #fff;

        background: #4875b4;

        background-color : #4875b4;

    }

    /*----------------------	panel-----------------*/

    .panel {

        border:none;

        -webkit-border-radius: 0px;

        -moz-border-radius: 0px;

        border-radius: 0px;

        -webkit-box-shadow: none;

        -moz-box-shadow: none;

        box-shadow: none;

        margin-bottom: 30px;

    }

    .panel .panel-heading {

        line-height: 34px;

        padding: 0 15px;

        min-height: 34px;

        border-left: 1px solid #ccc;

        border-right: 1px solid #ccc;

        -webkit-border-radius: 0px;

        -moz-border-radius: 0px;

        border-radius: 0px;

        position: relative;

        box-shadow: inset 0 -2px 0 rgba(0,0,0,.05);

        -moz-box-shadow: inset 0 -2px 0 rgba(0,0,0,.05);

        -webkit-box-shadow: inset 0 -2px 0 rgba(0,0,0,.05);

    }

    .panel .panel-heading .panel-title {

        line-height: 40px;

    }

    .panel .panel-heading i {

        width: 30px;

        display: inline-block;

        font-size: 14px;

        border-right:1px solid #e6e6e6 ;

    }

    .panel .panel-heading ul li {

        border-top:1px solid #e6e6e6 ;

        border-left:1px solid #e6e6e6 ;

        border-right:1px solid #e6e6e6 ;

    }

    .panel .panel-heading h2 {

        height: 100%;

        width: auto;

        display: inline-block;

        font-size: 14px;

        position: relative;

        margin: 0;

        line-height: 34px;

        font-weight: 400;

        letter-spacing: 0;

    }

    .panel .panel-heading .panel-actions {

        float: right;

        margin-right: -15px;

        height: 40px;

        font-size: 0;

    }

    .panel .panel-heading .panel-actions i {

        display: inline-block;

        text-align: center;

        width: 34px;

        -webkit-transition: all 0.1s ease-in-out;

        -moz-transition: all 0.1s ease-in-out;

        -ms-transition: all 0.1s ease-in-out;

        -o-transition: all 0.1s ease-in-out;

        transition: all 0.1s ease-in-out;

        text-decoration: none;

        font-size: 14px;

    }

    .panel .panel-heading .panel-actions a {

        text-decoration: none;

        font-size: 14px;

        text-align: center;

        display: inline-block;

        line-height: 32px;

        padding: 0;

        margin: 0;

        color: #333;

        border-left: 1px solid rgba(0,0,0,.09);

    }

    .panel-actions .btn-setting:hover,

    .panel-actions .btn-minimize:hover,

    .panel-actions .btn-close:hover {

        background-color: rgba(0,0,0,.05);

    }

    .panel .panel-heading .switch {

        margin: 10px;

    }

    .panel .panel-body {

        border-width: 1px 1px 2px;

        border-style: solid;

        border-top: none;

        border-right-color: #ccc!important;

        border-bottom-color: #ccc!important;

        border-left-color: #ccc!important;

    }

    .panel .panel-body-map {

        border-width: 1px 1px 2px;

        border-style: solid;

        background:#eef3f7;

        height:380px;

        border-top: none;

        border-right-color: #ccc!important;

        border-bottom-color: #ccc!important;

        border-left-color: #ccc!important;

    }

    .panel .panel-body.no-padding {

        padding: 0;

    }

    .panel .panel-body.padding-horizontal {

        padding: 0 15px;

    }

    .panel .panel-body.no-padding-bottom {

        padding-bottom: 0;

    }

    .panel-footer {

        padding: 10px 15px;

        background-color: #f5f5f5;

        border-top: 1px solid #ddd;

        border-bottom-right-radius: 0;

        border-bottom-left-radius: 0;

    }

    .panel .panel-footer {

        border-width: 0 1px 2px 1px;

        border-style: solid;

        border-top: none;

        border-right-color: #ccc!important;

        border-bottom-color: #ccc!important;

        border-left-color: #ccc!important;

        position: relative;

    }

    .panel.panel-default {

        border-radius: 0px;



        border-top: 1px solid #d4d4d4;

        -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);

        -moz-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);

        box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);



    }

    }

    .panel.panel-default.panel-heading {

        background: #97d3c5;

    }

    .panel.panel-default .panel-footer {

        background: #f5f5f5;

    }

    .panel.panel-primary {

        border-color: #20a8d8;

    }

    .panel.panel-primary .panel-heading,

    .panel.panel-primary .panel-footer {

        background: #5dc3e7;

        color: #092f3d;

        border-color: #20a8d8;

    }

    .panel.panel-success {

        border-color: #79c447;

    }

    .panel.panel-success .panel-heading,

    .panel.panel-success .panel-footer {

        background: #a3d781;

        color: #284315;

        border-color: #79c447;

    }

    .panel.panel-info {

        border-color: #67c2ef;

    }

    .panel.panel-info .panel-heading,

    .panel.panel-info .panel-footer {

        background: #acdef6;

        color: #106894;

        border-color: #67c2ef;

    }

    .panel.panel-warning {

        border-color: #fabb3d;

    }

    .panel.panel-warning .panel-heading,

    .panel.panel-warning .panel-footer {

        background: #fcd588;

        color: #815703;

        border-color: #fabb3d;

    }

    .panel.panel-danger {

        border-color: #ff5454;

    }

    .panel.panel-danger .panel-heading,

    .panel.panel-danger .panel-footer {

        background: #ffa1a1;

        color: #a10000;

        border-color: #ff5454;

    }

    /* Chat Widget starts */



    .chats{

        list-style-type: none;

        margin: 0px;

    }



    .chats li{

        margin-bottom: 8px;

        padding-bottom: 8px;

    }



    .chats .by-me img{

        margin-top: 5px;

        margin-right:10px;

        padding: 1px;

        background:#fff;

        border: 1px solid #ccc;

    }



    .chats .by-me .chat-meta{

        font-size: 11px;

        color: #999;

    }



    .chats .by-me .chat-content{

        margin-left: 60px;

        position: relative;

        background: #fff;

        border: 1px solid #ddd;

        padding: 7px 10px;

        border-radius: 5px;

        font-size: 13px;

    }



    .chats .by-me .chat-content:after, .chats .by-me .chat-content:before {

        right: 100%;

        border: solid transparent;

        content: " ";

        height: 0;

        width: 0;

        position: absolute;

        pointer-events: none;

    }



    .chats .by-me .chat-content:after {

        border-color: rgba(255, 255, 255, 0);

        border-right-color: #fff;

        border-width: 10px;

        top: 30%;

        margin-top: -10px;

    }



    .chats .by-me .chat-content:before {

        border-color: rgba(238, 238, 238, 0);

        border-right-color: #ccc;

        border-width: 11px;

        top: 30%;

        margin-top: -11px;

    }



    .chats .by-other img{

        margin-top: 5px;

        margin-left:10px;

        padding: 1px;

        background:#fff;

        border: 1px solid #ccc;

    }



    .chats .by-other .chat-meta{

        font-size: 11px;

        color: #999;

    }



    .chats .by-other .chat-content{

        margin-right: 60px;

        position: relative;

        background: #fff;

        border: 1px solid #ddd;

        padding: 7px 10px;

        border-radius: 5px;

        font-size: 13px;

    }



    .chats .by-other .chat-content:after, .chats .by-other .chat-content:before {

        left: 100%;

        border: solid transparent;

        content: " ";

        height: 0;

        width: 0;

        position: absolute;

        pointer-events: none;

    }



    .chats .by-other .chat-content:after {

        border-color: rgba(255, 255, 255, 0);

        border-left-color: #fff;

        border-width: 10px;

        top: 30%;

        margin-top: -10px;

    }



    .chats .by-other .chat-content:before {

        border-color: rgba(238, 238, 238, 0);

        border-left-color: #ccc;

        border-width: 11px;

        top: 30%;

        margin-top: -11px;

    }



    /* Chat widget ends */

    .portlets{

        min-height:50px;

    }



    .portlets .widget-head{

        cursor:move;

    }

    /* Just Gage - Demo Charts

=================================================================== */

    .sz1 {

        width: 200px;

        height: 160px;

    }

    .sz0 {

        margin: 2em 0 0 0;

    }

    .sz0 {

        width: 100px;

        height: 80px;

    }

    /**

 * Nestable

 */

    .dd {

        position: relative;

        display: block;

        margin: 0;

        padding: 0;

        list-style: none;

        font-size: 13px;

        line-height: 20px;

    }

    .dd-list {

        display: block;

        position: relative;

        margin: 0;

        padding: 0;

        list-style: none;

    }

    .dd-list .dd-list {

        padding-left: 30px;

    }

    .dd-collapsed .dd-list {

        display: none;

    }

    .dd-item,

    .dd-empty,

    .dd-placeholder {

        display: block;

        position: relative;

        margin: 0;

        padding: 0;

        min-height: 20px;

        font-size: 13px;

        line-height: 20px;

    }

    .dd-handle {

        display: block;

        height: 30px;

        margin: 5px 0;

        padding: 4px 10px;

        text-decoration: none;

        border: 1px solid #d4d4d4;

        background: #eeeeee;

        -webkit-border-radius: 1px;

        -moz-border-radius: 1px;

        border-radius: 1px;

        -webkit-box-sizing: border-box;

        -moz-box-sizing: border-box;

        box-sizing: border-box;

    }

    .dd-handle:hover {

        color: #20a8d8;

        background: white;

    }

    .dd-handle .icon {

        float: right;

        font-size: 16px;

        margin-left: 10px;

    }

    .dd-handle .icon:hover {

        text-decoration: none;

    }

    .dd-item > button {

        display: block;

        position: relative;

        cursor: pointer;

        float: left;

        width: 25px;

        height: 20px;

        margin: 5px 0;

        padding: 0;

        text-indent: 100%;

        white-space: nowrap;

        overflow: hidden;

        border: 0;

        background: transparent;

        font-size: 12px;

        line-height: 1;

        text-align: center;

        font-weight: bold;

    }

    .dd-item > button:before {

        content: '+';

        display: block;

        position: absolute;

        width: 100%;

        text-align: center;

        text-indent: 0;

    }

    .dd-item > button[data-action="collapse"]:before {

        content: '-';

    }

    .dd-placeholder,

    .dd-empty {

        margin: 5px 0;

        padding: 0;

        min-height: 30px;

        background: #f2fbff;

        border: 1px dashed #b6bcbf;

        -webkit-box-sizing: border-box;

        -moz-box-sizing: border-box;

        box-sizing: border-box;

    }

    .dd-empty {

        border: 1px dashed #bbb;

        min-height: 100px;

        background-color: #e5e5e5;

        background-size: 60px 60px;

        background-position: 0 0, 30px 30px;

    }

    .dd-dragel {

        position: absolute;

        pointer-events: none;

        z-index: 9999;

    }

    .dd-dragel > .dd-item .dd-handle {

        margin-top: 0;

    }

    .dd-dragel .dd-handle {

        -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);

        -moz-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);

        box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);

    }

    * /Widget-Content */



    .widget-content .error .form-inline button{

        margin-left:-2px;

        padding:8px 12px;

    }



    .chats{

        padding-left:0px;

        margin-left:0px;

    }



    .recent{

        padding-left:0px;

        margin-left:0px;

    }



    .widget-foot .form-inline button {

        margin-left: -3px;

        padding:7px 12px;

    }



    .widget-content .form-inline button {

        margin-left: 0px;

        padding:7px 12px;

    }



    .buttons button{

        margin-top:10px;

    }



    .widget-content ol#slist{

        padding:0px;

    }

    .widget .widget-head,.modal-header{

        background-color: #f8f8f8;

        background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f2f2f2));

        background: -webkit-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: -moz-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: -ms-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: -o-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: linear-gradient(top, #f8f8f8, #f2f2f2);

        border-top-right-radius: 3px;

        border-top-left-radius: 3px;

        text-shadow:0px 1px #fff;

        border-bottom: 1px solid #ccc;

        border-top: 1px solid #fff;

        color: #666;

        font-size: 14px;

        font-weight: bold;

        padding: 8px 15px;

    }



    .widget.wblack .widget-head{

        background-color: #e8ece9;

        background: -webkit-gradient(linear, left top, left bottom, from(#e8ece9), to(#111));

        background: -webkit-linear-gradient(top, #e8ece9, #111);

        background: -moz-linear-gradient(top, #e8ece9, #111);

        background: -ms-linear-gradient(top, #e8ece9, #111);

        background: -o-linear-gradient(top, #e8ece9, #111);

        background: linear-gradient(top, #e8ece9, #111);

        text-shadow:0px 1px #000;

        border-bottom: 1px solid #555;

        border-top: 1px solid #666;

        box-shadow: inset 0px 1px 1px #444;

        color: #ccc;

    }



    .widget .widget-head .widget-icons i{

        font-size: 14px;

        margin: 0px 4px;

    }



    .widget .widget-head .widget-icons a{

        color: #aaa;

    }



    .widget .widget-head .widget-icons a:hover{

        color: #999;

    }



    .widget.wblack .widget-head .widget-icons i{

        font-size: 14px;

        margin: 0px 4px;

    }



    .widget .widget-foot, .modal-footer{

        background-color: #f8f8f8;

        background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f2f2f2));

        background: -webkit-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: -moz-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: -ms-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: -o-linear-gradient(top, #f8f8f8, #f2f2f2);

        background: linear-gradient(top, #f8f8f8, #f2f2f2);

        border-bottom-right-radius: 3px;

        border-bottom-left-radius: 3px;

        text-shadow:0px 1px #fff;

        border-bottom: 1px solid #fff;

        border-top: 1px solid #ccc;

        padding: 8px 15px;

        font-size: 12px;

        color: #555;

        box-shadow: inset 0px 1px 1px #fff;

    }

    .widget-content .error .form-inline button{

        margin-left:-2px;

        padding:8px 12px;

    }



    .chats{

        padding-left:0px;

        margin-left:0px;

    }



    .recent{

        padding-left:0px;

        margin-left:0px;

    }



    .widget-foot .form-inline button {

        margin-left: -3px;

        padding:7px 12px;

    }



    .widget-content .form-inline button {

        margin-left: 0px;

        padding:7px 12px;

    }

    .widget .padd .modal-body{

        padding: 13px 15px;

    }



    .buttons button{

        margin-top:10px;

    }



    .widget-content ol#slist{

        padding:0px;

    }



    .task i {

        display:inline-block;

        width: 30px;

        height: 17px;

        background: #ccc;

        text-align: center;

        border-radius: 50px;

        font-size: 10px;

        line-height: 17px;

    }



    .pagination li a{

        color:#777;

    }

    /* Widget white extras */



    .widget .nav-tabs > li a {



    }



    .widget .nav-tabs {

        margin-bottom: 5px;

    }



    .widget .tab-content{

        margin-bottom: 10px;

    }

    .widget .padd, .modal-body{

        padding: 13px 15px;

    }

    .portlets{

        min-height:50px;

    }



    .portlets .widget-head{

        cursor:move;

    }

    /*-----	map-----*/

    * Google maps */



    .gmap iframe{

        width: 100%;

        margin: 0px;

        padding: 0px;

    }



    /* Google maps ends */

    /* Today datas */



    .today-datas{

        list-style-type: none;

        padding: 0px;

        margin: 10px 0px;

    }



    .today-datas li{

        display: inline-block;

        margin-bottom: 5px;

        margin-right: 10px;

        padding: 10px 10px;

        text-shadow:0px 1px 0px #fff;

        max-width: 100%;

        text-align: center;

    }



    .today-datas li .datas-text{

        font-size: 13px;

        padding: 7px 0px 0px 0px;

        font-weight: normal;

    }



    /*----*/



    .notify-arrow {

        border-style: solid;

        border-width: 0 9px 9px;

        height: 0;

        margin-top: 0;

        opacity: 0;

        position: absolute;

        right: 7px;

        top: -18px;

        transition: all 0.25s ease 0s;

        width: 0;

        z-index: 10;

        margin-top: 10px;

        opacity: 1;

    }

    .notify-arrow-blue{

        border-color: transparent transparent #688a7e;

        border-bottom-color: #688a7e !important;

        border-top-color: #688a7e !important;

    }

    .notify-arrow-yellow {

        border-color: transparent transparent #FCB322;

        border-bottom-color: #FCB322 !important;

        border-top-color: #FCB322 !important;

    }

    .notify-arrow-red {

        border-color: transparent transparent #00a0df;

        border-bottom-color: #00a0df !important;

        border-top-color: #00a0df !important;

    }

    .notify-arrow-green {

        border-color: transparent transparent #4cd964;

        border-bottom-color: #4cd964 !important;

        border-top-color: #4cd964 !important;

    }





    /*search*/



    .search {

        margin-top: 6px ;

        width: 20px;

        -webkit-transition: all .3s ease;

        -moz-transition: all .3s ease;

        -ms-transition: all .3s ease;

        -o-transition: all .3s ease;

        transition: all .3s ease;

        border: 1px solid #fff;

        box-shadow: none;

        background: url("../img/search-icon.jpg") no-repeat 10px 8px;

        padding:0 5px 0 35px;

        color: #fff;

    }



    .search:focus {

        margin-top: 5px ;

        width: 180px;

        border: 1px solid #eaeaea;

        box-shadow: none;

        -webkit-transition: all .3s ease;

        -moz-transition: all .3s ease;

        -ms-transition: all .3s ease;

        -o-transition: all .3s ease;

        transition: all .3s ease;

        color: #c8c8c8;

        font-weight: 300;

    }



    /*--sidebar toggle---*/



    .toggle-nav {

        float: left;

        padding-right: 15px;

        margin-top: 20px;

    }



    .toggle-nav .icon-reorder {

        cursor: pointer;

        display: inline-block;

        font-size: 20px;

    }





    .sidebar-closed > #sidebar > ul {

        display: none;

    }



    .sidebar-closed #main-content {

        margin-left: 0px;

    }



    .sidebar-closed #sidebar {

        margin-left: -180px;

    }



    /*state overview*/



    .state-overview .symbol, .state-overview .value {

        display: inline-block;

        text-align: center;

    }



    .state-overview .value  {

        float: right;



    }



    .state-overview .value h1{

        margin: 0;

        padding: 0;

        color: #688a7e;

    }

    .state-overview .value p  {

        margin: 0;

        padding: 0;

        color: #fed189;

    }



    .state-overview .value h1 {

        font-weight: 300;

        font-weight: 30px;

    }



    .state-overview .symbol i {

        color: #688a7e;

        font-size: 30px;

    }



    .state-overview .symbol {

        width: 30%;

        padding: 25px 15px;

    }



    .state-overview .value {

        width: 68%;

        padding-top: 21px;

    }



    .state-overview .terques {

        background: #34AADC;

    }



    .state-overview .red {

        background: #00a0df;

    }



    .state-overview .yellow {

        background: #FCB322;

    }



    .state-overview .blue {

        background: #688a7e;

    }





    /**/

    .state .panel-body{

        padding: 0px;

    }

    .panel-body.chart-texture {

        background: url("../img/chart-texture.jpg");

        -webkit-border-radius: 4px 4px 0px 0px;

        border-radius: 4px 4px 0px 0px;

        padding: 0px;

    }





    /*personal task*/



    .task-thumb {

        width: 90px;

        float: left;

    }



    .task-thumb img {

        border-radius: 4px;

        -webkit-border-radius: 4px;

    }



    .task-thumb-details {

        display: inline-block;

        margin: 25px 0 0 10px;

    }



    .task-progress {

        float: left;

    }



    .task-thumb-details h1, .task-thumb-details h1 a, .task-progress h1, .task-progress h1 a {

        color: #688a7e;

        font-size: 18px;

        margin: 0;

        padding: 0;

        font-weight: 300;

    }



    .task-thumb-details p, .task-progress p {

        padding-top: 5px;

        color: #fed189;

    }





    .personal-task tbody tr td{

        padding: 11px 15px;

        border-color: #eeeff1;

    }



    .personal-task tbody tr td i {

        font-size: 16px;

        color: #c7cbd4;

        position: relative;

        right: 6px;

        top: 6px;

    }



    .personal-task.table-hover > tbody > tr:hover > td,

    .table-hover > tbody > tr:hover > th {

        background-color: #f7f8fc;

    }



    .personal-task.table-hover > tbody > tr:hover > td i{

        color: #688a7e;

    }



    .personal-task > tbody > tr > td:last-child {

        text-align: right;

    }



    .task-option {

        float: right;

    }



    .task-option select{

        height: 35px;

        border: 1px solid #eaeaea;

        border-radius: 4px;

        -webkit-border-radius: 4px;

        padding: 8px;

        color: #a4abbb;

    }



    .progress-panel {

        padding-bottom: 5px;

    }



    /*badge*/



    .badge.bg-primary {

        background: #688a7e;

    }



    .badge.bg-success {

        background: #4cd964;

    }



    .badge.bg-warning {

        background: #FCB322;

    }



    .badge.bg-important {

        background: #00a0df;

        font-family: 'Lato', sans-serif;

        font-size: 11px;

    }



    .badge.bg-info {

        background: #34aadc;

    }



    .badge.bg-inverse {

        background: #797979;

    }







    /*---revenue----*/



    .revenue-head {

        background: #688a7e;

        color: #fff;

        line-height: 50px;

        text-align: center;

    }



    .revenue-head span {

        /*background: rgba(0,0,0,0.1);*/

        text-align: left;

        line-height: normal;

        padding: 16px;

        font-weight: 300;

    }



    .revenue-head span i {

        font-size: 18px;

    }



    .revenue-head h3 {

        display: inline;

        padding: 0 10px;

        font-size: 16px;

        font-weight: 400;

    }



    .revenue-head span.rev-combo {

        /*background: rgba(0,0,0,0.1);*/

        text-align: right;

        padding: 16px;

        line-height: normal;

        font-weight: 300;

    }



    /*easy pie chart*/



    .easy-pie-chart {

        display: inline-block;

        padding: 30px 0;

    }



    .chart-info, .chart-info .increase, .chart-info .decrease {

        display: inline-block;

    }



    .chart-info {

        width: 100%;

        margin-bottom:5px;

    }



    .chart-position {

        margin-top: 70px;

    }



    .chart-info span {

        margin: 0 3px;

    }



    .chart-info .increase {

        background: #688a7e;

        width: 10px;

        height: 10px;

    }



    .chart-info .decrease {

        background: #f2f2f2;

        width: 10px;

        height: 10px;

    }



    .panel-footer.revenue-foot {

        background-color: #e6e7ec;

        -webkit-border-radius: 0px 0px 4px 4px;

        border-radius: 0px 0px 4px 4px;

        border: none;

        padding: 0;

        width: 100%;

        display: inline-block;

    }



    @media screen and (-webkit-min-device-pixel-ratio:0) {

        /* Safari and Chrome */

        .panel-footer.revenue-foot {

            margin-bottom: -4px;

        };

    }





    .panel-footer.revenue-foot ul  {

        margin: 0;

        padding: 0;

        width: 100%;

        display: inline-flex;

    }



    .panel-footer.revenue-foot ul li {

        float: left;

        width: 33.33%;

    }



    .panel-footer.revenue-foot ul li.first a:hover, .panel-footer.revenue-foot ul li.first a {

        -webkit-border-radius: 0px 0px 0px 4px;

        border-radius: 0px 0px 0px 4px;

    }



    .panel-footer.revenue-foot ul li.last a:hover, .panel-footer.revenue-foot ul li.last a {

        -webkit-border-radius: 0px 0px 4px 0px;

        border-radius: 0px 0px 4px 0px;

        border-right: none;



    }



    .panel-footer.revenue-foot ul li a{

        display: inline-block;

        width: 100%;

        padding: 14px 15px;

        text-align: center;

        border-right: 1px solid #d5d8df;

        color: #797979;

    }



    .panel-footer.revenue-foot ul li a:hover, .panel-footer.revenue-foot ul li.active a {

        background: #fff;

        position: relative;

    }



    .panel-footer.revenue-foot ul li a i {

        color: #c6cad5;

        display: block;

        font-size: 16px;

    }

    .panel-footer.revenue-foot ul li a:hover i, .panel-footer.revenue-foot ul li.active a i {

        color: #688a7e;

        display: block;

        font-size: 16px;

    }



    /*Creative carousel model*/



    .flat-carousal {

        background: #00a0df;

        padding: 10px;

        color: #fff;

        position: relative;

    }



    .flat-carousal h1 {

        text-align: center;

        font-size: 16px;

        margin: 30px 20px;

        line-height: 20px;

        font-weight: 300;

        font-style: italic;

    }



    a.view-all {

        color: #fff;

        background: rgba(0,0,0,0.1);

        padding: 8px 15px;

        text-align: center;

        border-radius: 25px;

        -webkit-border-radius: 25px;

        margin-bottom: 18px;

        display: inline-block;

        text-transform: uppercase;

        font-size: 12px;

    }



    ul.ft-link {

        margin: 0;

        padding: 0;

    }



    ul.ft-link li {

        border-right: 1px solid #E6E7EC;

        display: inline-block;

        line-height: 30px;

        margin: 8px 0;

        text-align: center;

        width: 24%;

    }



    ul.ft-link li a {

        color: #74829c;

        text-transform: uppercase;

        font-size: 12px;

    }



    ul.ft-link li a:hover, ul.ft-link li.active a {

        color: #00a0df;

    }



    ul.ft-link li:last-child {

        border-right: none;

    }



    ul.ft-link li a i {

        display: block;

    }





    #owl-slider .item img{

        display: block;

        width: 100%;

        height: auto;

    }



    .owl-buttons {

        position: absolute;

        top: 70px;

        width: 100%;



    }



    .owl-prev, .owl-next {

        position: absolute;

    }



    .owl-next {

        right: 0;

    }



    .owl-buttons .owl-prev {

        text-indent: -9999px;

        background: url("../img/left-arrow.png") no-repeat;

        width: 6px;

        height: 10px;

        display: inline-block;

    }



    .owl-buttons .owl-next {

        text-indent: -9999px;

        background: url("../img/right-arrow.png") no-repeat;

        width: 6px;

        height: 10px;

        display: inline-block;

    }



    /*product post*/



    .post-wrap aside {

        display: table-cell;

        float: none;

        height: 100%;

        padding: 0;

        vertical-align: top;

    }



    .pro-box {

        border-collapse: collapse;

        border-spacing: 0;

        display: table;

        table-layout: fixed;

        width: 100%;

    }

    .post-info {

        position: relative;

    }



    .arrow-pro.right:after {

        border-left-color: #FFFFFF;

        border-right-width: 0;

        top: 85px;

        content: " ";

    }



    .arrow-pro.left:after {

        border-right-color: #FFFFFF;

        border-left-width: 0;

        top: 80px;

        content: " ";

    }



    .arrow-pro.left {

        left: -8px;

    }



    .arrow-pro:after {

        border-width: 7px;

        content: "";

    }



    .arrow-pro, .arrow-pro:after {

        border-color: rgba(0, 0, 0, 0);

        border-style: solid;

        display: block;

        height: 0;

        position: absolute;

        width: 0;

        right: -5px;



    }



    .post-highlight.yellow {

        background: #FCB322;

    }



    .post-highlight.terques {

        background: #688a7e;

    }



    .post-info h1 {

        margin: 0;

        font-size: 18px;

        color: #a19899;

        font-weight: 300;

    }



    .post-highlight.terques h2 {

        font-size: 16px;

        color: #fff;

        font-style: italic;

        padding: 0 20px;

        line-height: 22px;

        margin: 0;

        font-weight: 300;

    }



    .post-highlight.terques h2 span, .post-highlight.terques h2 a {

        color: #92faf3;

    }



    .post-info h1 strong {

        text-transform: uppercase;

        color: #937b7b;

    }



    .post-info .desk {

        display: inline-block;

    }



    .post-info .desk  h3{

        font-size: 16px;

    }



    .post-info .desk.yellow h3 {

        color:#FCB322 ;

    }



    .post-btn {



    }



    .post-btn a {

        float: left;

        margin-right: 8px;

        font-size: 18px;

        color: #9a9a9a;

    }



    .post-btn a:hover {

        color: #727272;

    }



    .pro-thumb {

        text-align: center;

        display: inline-block;

        border-radius: 50%;

        -webkit-border-radius: 50%;

        border: 10px solid rgba(256,256,256,0.4);

    }



    .pro-thumb img{

        text-align: center;

        width: 112px;

        height: 112px;

        border-radius: 50%;

        -webkit-border-radius: 50%;



    }



    .v-align {

        vertical-align: middle !important;

    }



    .twite h1 {

        margin: 50px 0;

    }





    .social-footer {

        display: inline;

        text-align: center;

    }



    .social-footer ul {

        text-align: center;

        margin: 0;

        padding: 0;

    }



    .social-footer ul li {

        display: inline-block;

        margin: 0 20px;

    }



    .social-footer ul li a {

        font-size: 25px;

        color: #ceced0;

    }



    .social-footer ul li a:hover i.icon-facebook, .social-footer ul li.active a i.icon-facebook {

        color: #486eac;

    }



    .social-footer ul li a:hover i.icon-twitter, .social-footer ul li.active a i.icon-twitter {

        color: #00a0df;

    }



    .social-footer ul li a:hover i.icon-google-plus, .social-footer ul li.active a i.icon-google-plus {

        color: #4a4a4a;

    }



    .social-footer ul li a:hover i.icon-pinterest, .social-footer ul li.active a i.icon-pinterest {

        color: #d1282d;

    }



    /*pie chart */



    .pie-foot {

        background: #6b6b6b;

        padding: 18px 15px;

        color: #fff;

        border-radius: 0 0 4px 4px;

        -webkit-border-radius: 0 0 4px 4px;

        text-align: center;

        font-size: 16px;

        font-weight: 300;

    }



    /*profile-widget*/



    .profile-widget {

        color: #fff;

        text-align: center;

    }



    /*profile-widget image bg*/

    .profile-widget-img{

        background: url('../img/backgrounds/bg-11-small.jpg') no-repeat !important;

    }

    .profile-nav .profile-widget-img .bg-layer {

        background: rgba(0,0,0,0.5) !important;

    }

    .profile-widget-img .panel-body{

        background: rgba(0,0,0,0.5) !important;

    }

    .profile-widget-img .profile-widget-foot{

        background: rgba(0,0,0,0.8);

    }

    .profile-widget p{

        font-weight: 300;

        /*margin-bottom: 15px;*/

    }

    .profile-widget{

        /*padding-left: 20px 15px 30px 15px;*/

    }

    .profile-widget .twt-category{

        display: inline-block;

        margin-bottom: 0px;

        margin-top: 10px;

        width: 100%;

        padding: 0px;

    }

    .profile-widget .twt-category ul li{

        color: #ffffff;

    }

    .knob-charts{

        margin-top: 10px;



    }

    .follow-task{

        padding: 5px;

    }

    .follow-task a{

        color: #ffffff;

        width: 15%;

        display: inline-block;

    }

    .follow-task a span.badge{

        top: -12px;

        position: relative;

        left: -8px;

        background: #FFFFFF;

        color: #34AADC;



    }

    .follow-task i{

        font-size: 20px;

    }

    .profile-widget-foot {

        padding: 8px 5px 5px 5px;

        background: rgba(0,0,0,0.1);

        color: #757575;

        font-weight: 300;

    }

    .profile-foot {

        padding: 8px 5px 5px 5px;

        background: rgba(0,0,0,0.1);

        color: #ffffff;

        font-weight: 300;

        overflow: hidden;

    }

    .profile-foot .active{



    }

    .profile-foot a{

        color: #ffffff;

    }

    .profile-widget-foot ul {

        padding: 0;

        margin: 0;

    }

    .profile-widget-foot ul li{

        display: inline-block;

        text-align: center;

        width: 48%;

        line-height: normal;

    }



    .profile-widget-foot ul li h5{

        margin: 5px 0 0 0;

    }

    .follow-info{

        text-align: left;

        padding-top: 20px;

        padding-bottom: 10px;





    }

    .profile-widget h4 {

        margin: 5px;

        font-size: 18px;

        font-weight: 300;

    }

    .profile-widget h6 {

        margin: 0px;

        font-size: 12px;

        color: rgba(255,255,255,0.9);

        font-weight: 300;

    }

    .profile-widget h6 span i{

        padding-right: 4px;

    }

    .profile-widget h6 span{

        padding-right: 8px;

    }



    .project-team, .panel-title,.progress-panel{

        background: #F7F7F7;

    }

    .profile-ava img{

        border-radius: 50%;

        -webkit-border-radius: 50%;

        border: 2px solid #688a7e;

        display: inline-block;

    }

    .profile-ava img.simple{

        border-radius: 50%;

        -webkit-border-radius: 50%;

        border: 2px solid rgba(0,112,255,0.4);

        display: inline-block;

    }

    .profile-name{

        margin: 0px;

        font-size: 16px;

    }

    .profile-occupation{

        margin: 0px;

        font-size: 12px;

    }

    .follow-ava {

        border-radius: 50%;

        -webkit-border-radius: 50%;

        border: 5px solid rgba(0,0,0,0.1);

        display: inline-block;

    }

    .timeline-ava {

        border-radius: 50%;

        -webkit-border-radius: 50%;

        border: 5px solid #688a7e;

        display: inline-block;

    }

    .timeline-ava img{

        border-radius: 50%;

        -webkit-border-radius: 50%;

        width: 50px;

        height: 50px;

    }

    .profile-widget img {

        border-radius: 50%;

        -webkit-border-radius: 50%;

        width: 62px;

        height: 62px;

        /*display: inline-block;*/

    }



    /* .social-box

=================================================================== */

    .social-box {

        min-height: 158px;

        background: white;

        margin-bottom: 30px;

        text-align: center;

    }

    .social-box i {

        display: block;

        font-size: 40px;

        line-height: 90px;

        background: #f5f5f5;

    }

    .social-box ul {

        list-style: none;

        padding: 10px 0;

    }

    .social-box ul li {

        display: block;

        width: 50%;

        float: left;

    }

    .social-box ul li:first-child {

        border-right: 1px solid #f5f5f5;

    }

    .social-box ul li strong {

        display: block;

        font-size: 20px;

    }

    .social-box ul li span {

        color: #d4d4d4;

        font-weight: 500;

        text-transform: uppercase;

        font-size: 10px;

    }

    .social-box.facebook i {

        background: #3b5998;

        color: white;

        margin: -1px -1px 1px -1px;

    }

    .social-box.twitter i {

        background: #00aced;

        color: white;

        margin: -1px -1px 1px -1px;

    }

    .social-box.linkedin i {

        background: #4875b4;

        color: white;

        margin: -1px -1px 1px -1px;

    }

    .social-box.google-plus i {

        background: #d34836;

        color: white;

        margin: -1px -1px 1px -1px;

    }

    /*weather*/



    .weather-bg {

        background: #34AADC;

        color: #fff;

        text-align: center;

        font-size: 16px;

        font-weight: 300;

    }



    .weather-bg i {

        font-size: 60px;

        display: block;

    }

    .weather-bg h3{

        font-weight: 300;

        font-size: 28px;

    }

    .weather-bg .degree {

        padding-top: 10px;

        font-size: 60px;

    }



    .weather-category {

        padding: 15px 0;

        color: #ffffff;

    }

    .weather-info{

        background: #34AADC;

    }



    .weather-category ul {

        padding:0;

        margin: 0;

        display: inline-block;

        width: 100%;

    }



    .weather-category ul   {

        display: inline-block;

        width: 100%;

        padding-bottom: 10px;

        text-align: center;

        border-top:1px solid #e6e6e6 ;

        border-left:1px solid #e6e6e6 ;

        border-right:1px solid #e6e6e6 ;

        border-bottom:1px solid #e6e6e6 ;

        display: inline-block;

    }

    .weather-category ul  li {

        display: inline-block;

        width: 70%;

        padding-top: 10px;

        padding-bottom: 10px;

        text-align: center;







        display: inline-block;

    }

    .weather-category ul li i  {

        margin-bottom:10px;

    }

    .weather-category ul li h4 {

        margin: 10px 0 0 0 ;

        text-transform: uppercase;

        font-weight: 300;

    }



    .weather-days{

        color: #ffffff;

        background: #34AADC;

    }



    .weather-days ul {

        padding:0;

        margin: 0;

        display: inline-block;

        width: 100%;

    }



    .weather-days ul li {

        display: inline-block;

        width: 16.6%;

        text-align: center;

        display: inline-block;

        margin-right: -2.9px;

        padding: 5px 0px;

    }

    .weather-days ul li.day1{

        background: rgba(0,0,0,0.05);

    }

    .weather-days ul li.day2{

        background: rgba(0,0,0,0.1);

    }

    .weather-days ul li.day3{

        background: rgba(0,0,0,0.15);

    }

    .weather-days ul li.day4{

        background: rgba(0,0,0,0.2);

    }

    .weather-days ul li.day5{

        background: rgba(0,0,0,0.25);

    }

    .weather-days ul li.day6{

        background: rgba(0,0,0,0.3);

    }



    .weather-days ul li h5 {

        margin: 0 0 5px 0;

        text-transform: uppercase;

        font-weight: 300;

    }



    .weather-category ul li a {



    }



    .weather-category ul li:last-child,.weather-days ul li:last-child  {

        border-right:none ;

    }

    /*weather widget 2*/

    .weather-bg-img {

        background: url(../img/backgrounds/bg-14-small.jpg) no-repeat center center;

        color: #fff;

        text-shadow: 0px 1px 5px #fed189;

        text-align: center;

        font-size: 16px;

        font-weight: 300;

    }



    .weather-bg-img i {

        font-size: 60px;

        text-shadow: 0px 1px 5px #fed189;

        display: block;

    }

    .weather-bg-img h3{

        font-weight: 300;

        font-size: 28px;

    }

    .weather-bg-img .degree {

        padding-top: 10px;

        font-size: 60px;

    }



    .weather-bg-img .weather-category {

        padding: 15px 0;

        color: #ffffff;

        text-shadow: 0px 1px 5px #fed189;

        background: transparent;

    }



    .weather-bg-img .weather-category ul {

        padding:0;

        margin: 0;

        display: inline-block;

        width: 100%;

    }



    .weather-bg-img .weather-category ul li {

        display: inline-block;

        width: 32%;

        text-align: center;

        border-right:1px solid #e6e6e6 ;

        display: inline-block;

    }



    .weather-bg-img .weather-category ul li h5 {

        margin: 0 0 5px 0;

        text-transform: uppercase;

        font-weight: 300;

        text-shadow: 0px 1px 5px #fed189;

    }

    .weather-bg-img .panel-body, footer.weather-bg-img ul{

        background: rgba(0,0,0,0.5);

    }

    .weather-days-img{

        color: #ffffff;

        text-shadow: 0px 1px 5px #fed189;

    }

    .weather-days-img{

        background: transparent !important;

    }



    /*fontawesome*/



    .fontawesome-icon-list h2 {

        margin-top: 0;

        font-size: 20px;

        font-weight: 300;

    }



    .fontawesome-icon-list .col-sm-3 {

        margin-bottom: 10px;

    }



    .fontawesome-icon-list .page-header {

        border-bottom: 1px solid #C9CDD7;

    }



    .fontawesome-icon-list i {

        font-size: 16px;

        padding-right: 10px;

    }



    #web-application, #text-editor, #directional, #video-player, #brand, #medical, #currency {

        margin-top: 10px;

    }



    /*mail inbox*/



    .inbox-wrapper {

        border-collapse: collapse;

        border-spacing: 0;

        display: table;

        table-layout: fixed;

        width: 100%;

    }



    .inbox-wrapper aside {

        display: table-cell;

        float: none;

        height: 100%;

        padding: 0;

        vertical-align: top;

    }



    .inbox-wrapper .inbox-left {

        width: 20%;

        background: #e5e8ef;

    }

    .inbox-wrapper .inbox-middle {

        width: 25%;

        background: #fff;

    }

    .inbox-wrapper .inbox-right {

        width: 65%;

        background: #f5f5f5;

    }

    .inbox-wrapper .inbox-left .inbox-left-menu {

        background: #688a7e;

    }



    .table-inbox .icon_star_alt:hover, .starred{

        color: #FCB322;

    }

    .inbox-wrapper .inbox-left .user-head {

        background: rgba(0,0,0,0.2);

        padding: 10px;

        color: #fff;

        min-height: 80px;

    }

    .inbox-wrapper .inbox-middle .inbox-mail {

        background: #688a7e;

        padding: 10px;

        color: #fff;

        min-height: 80px;

    }



    .user-head .inbox-avatar {

        width: 65px;

        float: left;

    }



    .user-head .inbox-avatar img {

        border-radius: 4px;

        -webkit-border-radius: 4px;

    }

    .user-head .user-name {

        display: inline-block;

        margin:0 0 0 10px;

    }



    .user-head .user-name h5 {

        font-size: 14px;

        margin-top: -15px;

        margin-bottom: 0;

        font-weight: 300;

    }

    .user-head .user-name h5 a {

        color: #fff;

    }



    .user-head .user-name span a {

        font-size: 12px;

        color: rgba(255,255,255,0.9);

    }



    a.mail-dropdown {

        background: #80d3d9;

        padding:3px 5px;

        font-size: 10px;

        color: #01a7b3;

        border-radius: 2px;

        margin-top: 20px;

    }



    .inbox-body {

        padding: 20px;

    }



    .btn-compose {

        background: #00a0df;

        padding: 12px 0;

        text-align: center;

        width: 100%;

        color: #fff;

    }

    .btn-compose:hover {

        background: #f5675c;

        color: #fff;

    }

    ul.mail-nav  {

        display: inline-block;

        width: 100%;

        margin: 0;

        padding: 0;

    }



    .mail-divider {

        border-bottom: 1px solid #d5d8df;

    }



    ul.mail-nav li {

        display: inline-block;

        line-height: 20px;

        padding: 10px;

        width: 100%;

        border-right: 1px solid #D7D7D7;

        border-bottom: 1px solid #D7D7D7;

    }



    ul.mail-nav li a  {

        color: #6a6a6a;

        width: 100%;

        display: inline-block;

        padding: 0 20px;

    }

    ul.mail-nav .mail-info{

        padding: 5px;

        font-size: 14px;

    }

    ul.mail-nav p{

        font-size: 12px;

    }

    ul.mail-nav li:hover, ul.mail-nav li.active, ul.mail-nav li:focus  {

        color: #6a6a6a;

        background: #f5f5f5;

        border-bottom: 1px solid #688a7e;

        border-right: none;

    }



    ul.mail-nav li a i {

        padding-right: 10px;

        font-size: 16px;

        color: #6a6a6a;

    }



    ul.mail-nav li a span.label {

        margin-top: 13px;

    }

    ul.inbox-nav  {

        display: inline-block;

        width: 100%;

        margin: 0;

        padding: 0;

    }



    .inbox-divider {

        border-bottom: 1px solid #d5d8df;

    }



    ul.inbox-nav li {

        display: inline-block;

        line-height: 45px;

        width: 100%;

    }



    ul.inbox-nav li a  {

        color: #6a6a6a;

        line-height: 45px;

        width: 100%;

        display: inline-block;

        padding: 0 20px;

    }



    ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus  {

        color: #6a6a6a;

        background: #d5d7de;

    }



    ul.inbox-nav li a i {

        padding-right: 10px;

        font-size: 16px;

        color: #6a6a6a;

    }



    ul.inbox-nav li a span.label {

        margin-top: 13px;

    }



    ul.labels-info li h4 {

        padding-left:15px;

        padding-right:15px;

        padding-top: 5px;

        color: #5c5c5e;

        font-size: 13px;

        text-transform: uppercase;

    }



    ul.labels-info li  {

        margin: 0;

    }



    ul.labels-info li a {

        color: #6a6a6a;

        border-radius: 0;

    }



    ul.labels-info li a:hover, ul.labels-info li a:focus {

        color: #6a6a6a;

        background: #d5d7de;

    }



    ul.labels-info li a i {

        padding-right: 10px;

    }



    .nav.nav-pills.nav-stacked.labels-info p {

        margin-bottom: 0;

        padding: 0 22px;

        color: #9d9f9e;

        font-size: 11px;

    }



    .inbox-head {

        padding:10px;

        background: #688a7e;

        color: #fff;

        border-bottom: 1px solid #D7D7D7;

        min-height: 80px;

    }



    .inbox-head  h3 {

        margin: 0;

        display: inline-block;

        padding-top: 6px;

        font-weight: 300;

    }



    .inbox-head  .sr-input {

        height: 40px;

        border: none;

        box-shadow: none;

        padding: 0 10px;

        float: left;

        border-radius: 4px 0 0 4px;

        color: #8a8a8a;

    }

    .inbox-head  .sr-btn {

        height: 40px;

        border: none;

        background: #00a6b2;

        color: #fff;

        padding: 0 20px;

        border-radius: 0 4px 4px 0;

        -webkit-border-radius: 0 4px 4px 0;

    }



    .table-inbox {

        border: 1px solid #d3d3d3;

        margin-bottom: 0;

    }



    .table-inbox tr td{

        padding: 12px !important;

    }



    .table-inbox tr td:hover{

        cursor: pointer;

    }



    .table-inbox tr td .icon-star.inbox-started ,.table-inbox tr td .icon-star:hover{

        color: #f78a09;

    }



    .table-inbox tr td .icon-star{

        color: #d5d5d5;

    }



    .table-inbox tr.unread td {

        font-weight: 600;

        background: #f7f7f7;

    }



    ul.inbox-pagination  {

        float: right;

    }



    ul.inbox-pagination li {

        float: left;

    }



    .mail-option {

        display: inline-block;

        margin-bottom: 0px;

        width: 100%;

        margin-top: 18px;

    }

    .open-mail-action i{

        padding-right: 5px;

        font-size: 14px;

    }

    .inbox-mail .navbar-form{

        margin-top: 15px;

    }

    .mail-option .chk-all, .mail-option .btn-group {

        margin-right: 5px;

    }



    .mail-option .chk-all, .mail-option .btn-group a.btn {

        border: 1px solid #e7e7e7;

        padding: 5px 10px;

        display: inline-block;

        background: #ffffff;

        color: #688a7e;

        border-radius: 0px !important;

        -webkit-border-radius: 0px !important;

    }

    .inbox-pagination a.np-btn  {

        border: 1px solid #e7e7e7;

        padding: 5px 15px;

        display: inline-block;

        background: #fcfcfc;

        color: #afafaf;

        border-radius: 0px !important;

        -webkit-border-radius: 0px !important;

    }



    .mail-option .chk-all input[type=checkbox] {

        margin-top: 0;

    }



    .mail-option .btn-group a.all {

        padding: 0;

        border: none;

    }



    .inbox-pagination a.np-btn {

        margin-left: 5px;

    }



    .inbox-pagination li span {

        display: inline-block;

        margin-top: 7px;

        margin-right: 5px;

    }



    .fileinput-button {

        border: 1px solid #e6e6e6;

        background: #eeeeee;

    }



    .inbox-body .modal .modal-body input, .inbox-body .modal .modal-body textarea{

        border: 1px solid #e6e6e6;

        box-shadow: none;

    }



    .btn-send, .btn-send:hover {

        background: #00A8B3;

        color: #fff;

    }



    .btn-send:hover {

        background: #009da7;

    }



    .modal-header h4.modal-title {

        font-weight: 300;

        font-family: 'Lato', sans-serif;

    }



    .modal-body label {

        font-weight: 400;

        font-family: 'Lato', sans-serif;

    }





    /*404 page*/



    .page-404{

        position:relative;

        width:350px;

        height:200px;

        margin:100px auto;

        text-align: center;

    }



    .text-404{

        font-size:138px;

        background:#e9e3dd;

        background-image: url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQTdWeWNteABnbzguiXSBxmfc8Z8nh_HHoWoK35QL81x4HnpVmgvQ');

        background-repeat: no-repeat;

        background-size: 200% 200%;

        background-position: 100% 100%;

        -webkit-animation: square 3s linear infinite;

        -ms-animation: square 3s linear infinite;

        animation: square 3s linear infinite;

        -webkit-background-clip: text;

        color:transparent;

        text-align:center;

        line-height:200px;

        position:relative;

    }



    .text-404:nth-of-type(2){

        text-shadow:none;

        z-index:2;

        position:absolute;

        top:-139px;

        left:-1px;

    }



    @-webkit-keyframes square {

        0% { background-position: 0 0; }

        25% { background-position: 100% 0; }

        50% { background-position: 100% 100%; }

        75% { background-position: 0 100%; }

        100% { background-position: 0 0; }

    }



    @-ms-keyframes square {

    0% { background-position: 0 0; }

    25% { background-position: 100% 0; }

    50% { background-position: 100% 100%; }

    75% { background-position: 0 100%; }

    100% { background-position: 0 0; }

    }



    @keyframes square {

        0% { background-position: 0 0; }

        25% { background-position: 100% 0; }

        50% { background-position: 100% 100%; }

        75% { background-position: 0 100%; }

        100% { background-position: 0 0; }

    }



    /*profile*/



    .profile-nav .user-heading {

        background: #688a7e;

        color: #fff;

        padding: 30px;

        text-align: center;

    }



    .profile-nav .user-heading.round a  {

        border-radius: 50%;

        -webkit-border-radius: 50%;

        border: 10px solid rgba(256,256,256,0.3);

        display: inline-block;

    }



    .profile-nav .user-heading a img {

        width: 112px;

        height: 112px;

        border-radius: 50%;

        -webkit-border-radius: 50%;

    }



    .profile-nav .user-heading h1 {

        font-size: 22px;

        font-weight: 300;

        margin-bottom: 5px;

    }



    .profile-nav .user-heading p {

        font-size: 12px;

    }



    .profile-nav ul {

        margin-top: 1px;

    }



    .profile-nav ul > li {

        border-bottom: 1px solid #ebeae6;

        margin-top: 0;

        line-height: 30px;

    }



    .profile-nav ul > li:last-child {

        border-bottom: none;

    }



    .profile-nav ul > li > a {

        border-radius: 0;

        -webkit-border-radius: 0;

        color: #89817f;

        border-left: 5px solid #fff;

    }



    .profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {

        background: #f8f7f5 !important;

        border-left: 5px solid #688a7e;

        color: #89817f !important;

    }



    .profile-nav ul > li:last-child > a:last-child {

        border-radius: 0 0 4px 4px;

        -webkit-border-radius: 0 0 4px 4px;

    }



    .profile-nav ul > li > a > i{

        font-size: 16px;

        padding-right: 10px;

        color: #bcb3aa;

    }



    .r-activity {

        margin: 6px 0 0;

        font-size: 12px;

    }

    /*profile-widget color bg*/

    .profile-widget-info{

        background: #324c57 !important;

    }

    .profile-widget-success{

        background: #4cd964 !important;

    }

    .profile-widget-primary{

        background: #688a7e !important;

    }

    .profile-widget-warning{

        background: #ffcc00 !important;

    }

    .profile-widget-danger{

        background: #00a0df !important;

    }

    .profile-widget-name{

        padding: 0px;

    }



    .p-text-area, .p-text-area:focus {

        border: none;

        font-weight: 300;

        box-shadow: none;

        color: #c3c3c3;

        font-size: 16px;

    }



    .profile-info .panel-footer {

        background-color:#f8f7f5 ;

        border-top: 1px solid #e7ebee;

    }



    .profile-info .panel-footer ul li a {

        color: #7a7a7a;

    }



    .bio-graph-heading {

        background: #263a4f;

        color: #fff;

        text-align: center;

        font-style: italic;

        padding: 40px 110px;



        font-size: 16px;

        font-weight: 300;

    }



    .bio-graph-info {

        color: #89817e;

    }



    .bio-graph-info h1 {

        font-size: 22px;

        font-weight: 300;

        margin: 0 0 20px;

    }



    .bio-row {

        width: 50%;

        float: left;

        margin-bottom: 10px;

        padding:0 15px;

    }



    .bio-row p span {

        width: 100px;

        display: inline-block;

    }



    .bio-chart, .bio-desk {

        float: left;

    }



    .bio-chart {

        width: 40%;

    }



    .bio-desk {

        width: 60%;

    }



    .bio-desk h4 {

        font-size: 15px;

        font-weight:400;

    }



    .bio-desk h4.terques {

        color: #34aadc;

    }



    .bio-desk h4.red {

        color: #e26b7f;

    }



    .bio-desk h4.green {

        color: #97be4b;

    }



    .bio-desk h4.purple {

        color: #caa3da;

    }



    .file-pos {

        margin: 6px 0 10px 0;

    }



    .profile-activity h5 {

        font-weight: 300;

        margin-top: 0;

        color: #c3c3c3;

    }



    .summary-head {

        background: #ee7272;

        color: #fff;

        text-align: center;

        border-bottom: 1px solid #ee7272;

    }



    .summary-head h4 {

        font-weight: 300;

        text-transform: uppercase;

        margin-bottom: 5px;

    }



    .summary-head p {

        color: rgba(256,256,256,0.6);

    }



    ul.summary-list {

        display: inline-block;

        padding-left:0 ;

        width: 100%;

        margin-bottom: 0;

    }



    ul.summary-list > li {

        display: inline-block;

        width: 19.5%;

        text-align: center;

    }



    ul.summary-list > li > a > i {

        display:block;

        font-size: 18px;

        padding-bottom: 5px;

    }



    ul.summary-list > li > a {

        padding: 10px 0;

        display: inline-block;

        color: #818181;

    }



    ul.summary-list > li  {

        border-right: 1px solid #eaeaea;

    }



    ul.summary-list > li:last-child  {

        border-right: none;

    }



    .activity {

        width: 100%;

        float: left;

        margin-bottom: 10px;

    }



    .activity.alt {

        width: 100%;

        float: right;

        margin-bottom: 10px;

    }



    .activity span {

        float: left;

    }



    .activity.alt span {

        float: right;

    }

    /*.activity span, .activity.alt span {

    width: 45px;

    height: 45px;

    line-height: 45px;

    border-radius: 50%;

    -webkit-border-radius: 50%;

    background: #eee;

    text-align: center;

    color: #fff;

    font-size: 16px;

}*/



    .activity.terques span {

        background: #8dd7d6;

    }



    .activity.terques h4 {

        color: #8dd7d6;

    }

    .activity.purple span {

        background: #b984dc;

    }



    .activity.purple h4 {

        color: #b984dc;

    }

    .activity.blue span {

        background: #90b4e6;

    }



    .activity.blue h4 {

        color: #90b4e6;

    }

    .activity.green span {

        background: #4cd964;

    }



    .activity.green h4 {

        color: #4cd964;

    }



    .activity h4 {

        margin-top:0 ;

        font-size: 16px;

    }



    .activity p {

        margin-bottom: 0;

        font-size: 13px;

    }



    .activity .activity-desk i, .activity.alt .activity-desk i {

        float: left;

        font-size: 18px;

        margin-right: 10px;

        color: #bebebe;

    }



    .activity .activity-desk {

        margin-left: 70px;

        position: relative;

    }



    .activity.alt .activity-desk {

        margin-right: 70px;

        position: relative;

    }



    .activity.alt .activity-desk .panel {

        float: right;

        position: relative;

        border-radius: 10px;

        -webkit-border-radius: 10px;

    }



    .activity .activity-desk .panel {

        background: #F4F4F4 ;

        display: inline-block;

    }

    .activity.alt .activity-desk .panel {

        background: #688a7e ;

        color: #ffffff;

        display: inline-block;

    }





    .activity .activity-desk .arrow {

        border-right: 8px solid #F4F4F4 !important;

    }

    .activity .activity-desk .arrow {

        border-bottom: 8px solid transparent;

        border-top: 8px solid transparent;

        display: block;

        height: 0;

        left: -7px;

        position: absolute;

        top: 13px;

        width: 0;

    }



    .activity-desk .arrow-alt {

        border-left: 8px solid #688a7e !important;

    }



    .activity-desk .arrow-alt {

        border-bottom: 8px solid transparent;

        border-top: 8px solid transparent;

        display: block;

        height: 0;

        right: -7px;

        position: absolute;

        top: 13px;

        width: 0;

    }



    .activity-desk .album {

        display: inline-block;

        margin-top: 10px;

    }



    .activity-desk .album a{

        margin-right: 10px;

    }



    .activity-desk .album a:last-child{

        margin-right: 0px;

    }



    /*invoice*/



    .invoice-list  {

        margin-bottom: 30px;

    }



    .invoice-list h4 {

        font-weight: 300;

        font-size: 16px;

    }



    .invoice-block {

        text-align: right;

    }

    .invoice-paid{

        color: #4cd964;

    }



    ul.amounts li {

        background: #f5f5f5;

        margin-bottom: 5px;

        padding: 10px;

        border-radius: 4px;

        -webkit-border-radius: 4px;

        font-weight: 300;

    }



    .invoice-btn a{

        font-weight: 300;

        margin: 0 5px;

        font-size: 16px;

    }



    .company-logo {

        margin: 30px;

    }



    /*panel heading color*/

    .panel-heading,.modal-header{

        background: #F7F7F7;

        color: #688a7e;



    }

    .panel-heading h3{

        margin: 0px !important;

    }

    .panel-primary > .panel-heading.navyblue {

        background-color: #2A3542;

        border-color: #2A3542;

        color: #FFFFFF;

    }



    /*table*/



    .table-advance tr td {

        vertical-align: middle !important;

    }



    .no-border {

        border-bottom: none;

    }



    .dataTables_length , .dataTables_filter{

        padding:15px;

    }

    .dataTables_info{

        padding:0 15px;

    }



    .dataTables_filter {

        float: right;

    }



    .dataTables_length select {

        width: 65px;

        padding:5px 8px;

    }



    .dataTables_length label, .dataTables_filter label {

        font-weight: 300;

    }



    .dataTables_filter label {

        width: 100%;

    }



    .dataTables_filter label input {

        width: 78%;

    }



    .border-top {

        border-top: 1px solid #ddd;

    }



    .dataTables_paginate.paging_bootstrap.pagination li {

        float: left;

        margin: 0 1px;

        border: 1px solid #ddd;

        border-radius: 3px;

        -webkit-border-radius: 3px;

    }



    .dataTables_paginate.paging_bootstrap.pagination li.disabled a{

        color: #c7c7c7;

    }

    .dataTables_paginate.paging_bootstrap.pagination li a{

        color: #797979;

        padding: 5px 10px;

        display: inline-block;

    }



    .dataTables_paginate.paging_bootstrap.pagination li:hover a, .dataTables_paginate.paging_bootstrap.pagination li.active a{

        color: #797979;

        background: #eee;

        border-radius: 3px;

        -webkit-border-radius: 3px;

    }



    .dataTables_paginate.paging_bootstrap.pagination {

        float: right;

        margin-right: 15px;

        margin-top: -5px;

        margin-bottom: 15px;



    }



    .dataTable tr:last-child {

        border-bottom: 1px solid #ddd;

    }





    /*button*/



    .btn-row {

        margin-bottom: 10px;

    }



    /*tabs*/



    .tab-head {

        background: #688a7e;

        display: inline-block;

        width: 100%;

        margin-top: 60px;

    }



    .tab-container {

        margin-top: 10px;

    }



    .tab-head .nav-tabs > li > a {

        border-radius: 0;

        margin-right: 1px;

        color: #fff;

    }



    .tab-head .nav-tabs > li.active > a, .tab-head .nav-tabs > li > a:hover, .tab-head .nav-tabs > li.active > a:hover, .tab-head .nav-tabs > li.active > a:focus {

        background-color: #f1f2f7;

        border-color: #f1f2f7;

        color: #797979;

    }



    /*general page*/



    .progress-xs {

        height: 8px;

    }



    .progress-sm {

        height: 12px;

    }



    .panel-heading .nav {

        border: medium none;

        font-size: 13px;

        margin: -10px -15px -11px;

    }



    .tab-bg-primary {

        background: #688a7e;

        border-bottom: none;

    }



    .tab-bg-info {

        background: #324c57;



        border-bottom: none;

    }

    .tab-bg-info.panel-heading .nav > li.active > a, .tab-bg-info.panel-heading .nav > li > a:hover{

        color: #36464d;

    }

    .tab-bg-info.panel-heading .nav{

        margin: -10px 15px -11px;

    }

    .panel-heading .nav > li > a,

    .panel-heading .nav > li.active > a, .panel-heading .nav > li.active > a:hover, .panel-heading .nav > li.active > a:focus {

        border-width: 0;

        border-radius: 0;

    }



    .panel-heading .nav > li > a {

        color: #fff;

    }



    .panel-heading .nav > li.active > a, .panel-heading .nav > li > a:hover {

        color: #688a7e;

        background: #fff;

    }



    .tab-right {

        height: 38px;

    }



    .panel-heading.tab-right .nav > li:first-child.active > a, .tab-right.panel-heading .nav > li:first-child > a:hover {

        border-radius:  0 ;

        -webkit-border-radius: 0 ;

    }



    .panel-heading.tab-right .nav > li:last-child.active > a, .tab-right.panel-heading .nav > li:last-child > a:hover {

        border-radius:  0 4px 0 0;

        -webkit-border-radius: 0 4px 0 0;

    }



    .panel-heading.tab-right .nav-tabs > li > a {

        margin-left: 1px;

        margin-right: 0px;

    }



    .m-bot20 {

        margin-bottom: 20px;

    }



    .m-bot-none {

        margin-bottom: 0;

    }



    .wht-color {

        color: #fff;

    }



    .close-sm {

        font-size: 14px;

    }



    /*carousel*/



    .carousel-indicators li {

        background:  rgba(0, 0, 0, 0.2) ;

        border:  none;

        transition:background-color 0.25s ease 0s;

        -moz-transition:background-color 0.25s ease 0s;

        -webkit-transition:background-color 0.25s ease 0s;

    }



    .carousel-indicators .active {

        background:#00a0df;

        height: 10px;

        margin: 1px;

        width: 10px;

    }



    .carousel-indicators.out {

        bottom: -5px;

    }



    .carousel-indicators.out {

        bottom: -5px;

    }



    .carousel-control {

        color: #999999;

        text-shadow: none;

        width: 45px;

    }



    .carousel-control i {

        display: inline-block;

        height: 25px;

        left: 50%;

        margin-left: -10px;

        margin-top: -10px;

        position: absolute;

        top: 50%;

        width: 20px;

        z-index: 5;

    }





    .carousel-control.left, .carousel-control.right {

        background: none;

        filter:none;

    }



    .carousel-control:hover, .carousel-control:focus {

        color: #CCCCCC;

        opacity: 0.9;

        text-decoration: none;

    }



    .carousel-inner h3 {

        font-weight: 300;

        font-size: 16px;

        margin: 0;

    }



    .carousel-inner {

        margin-bottom: 15px;

    }



    /*gritter*/

    .gritter-close {

        left: auto !important;

        right: 3px !important;

    }





    /*form*/





    .sm-input {

        width: 175px;

    }



    .form-horizontal .form-group {

        border-bottom: 1px solid #eff2f7;

        padding-bottom: 15px;

        margin-bottom: 15px;

    }



    .form-horizontal .form-group:last-child {

        border-bottom: none;

        padding-bottom: 0px;

        margin-bottom: 0px;

    }





    .form-horizontal .form-group .help-block {

        margin-bottom: 0;

    }





    .round-input {

        border-radius: 500px;

        -webkit-border-radius: 500px;

    }





    .m-bot15 {

        margin-bottom: 15px;

    }



    .form-horizontal .checkbox-inline > input {

        margin-top: 1px;

        border:none;

    }





    /*form validation*/



    .form-validate .form-group label.error {

        display: inline;

        margin: 5px 0;

        color: #00a0df;

        font-weight: 400;

    }



    input:focus:invalid:focus, textarea:focus:invalid:focus, select:focus:invalid:focus, .form-validate .form-group input.error , .form-validate .form-group textarea.error{

        border-color: #00a0df !important;

    }



    #register_form label.error {

        display: inline;

        margin:5px 0px;

        width: auto;

        color: #00a0df;

    }



    .checkbox, .checkbox:hover, .checkbox:focus  {

        border:none;

    }





    /*slider*/

    table.sliders tr td {

        padding: 30px 0;

        border:none;

    }



    .slider {

        margin-top: 3px;

    }



    .slider-info {

        padding-top: 10px;

    }



    .sliders .ui-widget-header {

        background: #688a7e !important;

        border-radius: 15px !important;

        -webkit-border-radius: 15px !important;

    }



    .ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {

        border-bottom-right-radius: 0 !important;

    }

    .ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl {

        border-bottom-left-radius: 0 !important;

    }

    .ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr {

        border-top-right-radius: 0 !important;

    }

    .ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl {

        border-top-left-radius: 0 !important;

    }





    #eq span {

        height:120px; float:left; margin:15px

    }





    .ui-widget-content {

        background: #f0f2f7 !important;

        border: none !important;

        border-radius: 15px !important;

        -webkit-border-radius: 15px !important;

    }



    .ui-slider-horizontal {

        height: 8px !important;

    }



    .ui-slider-horizontal .ui-slider-handle {

        top: -0.57em   !important;

    }



    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {

        background: #fff !important;

        /*border: 3px solid #22bacf !important;*/

        box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);

        border-radius: 50% !important;

        -webkit-border-radius: 50% !important;

    }



    .ui-slider-vertical {

        width: 8px !important;

    }



    .ui-slider-vertical .ui-slider-handle {

        left: -0.5em  !important;

    }



    .ui-slider .ui-slider-handle {

        cursor: default;

        height: 1.6em;

        position: absolute;

        width: 1.6em;

        z-index: 2;

    }



    .bound-s {

        width: 90px;

        margin-bottom: 15px;

    }





    /*----switch ----*/





    .has-switch {

        border-radius: 30px;

        -webkit-border-radius: 30px;

        display: inline-block;

        cursor: pointer;

        line-height: 1.231;

        overflow: hidden;

        position: relative;

        text-align: left;

        width: 80px;

        -webkit-mask: url('../img/mask.png') 0 0 no-repeat;

        mask: url('../img/mask.png') 0 0 no-repeat;

        -webkit-user-select: none;

        -moz-user-select: none;

        -ms-user-select: none;

        -o-user-select: none;

        user-select: none;

    }

    .has-switch.deactivate {

        opacity: 0.5;

        filter: alpha(opacity=50);

        cursor: default !important;

    }

    .has-switch.deactivate label,

    .has-switch.deactivate span {

        cursor: default !important;

    }

    .has-switch > div {

        width: 162%;

        position: relative;

        top: 0;

    }

    .has-switch > div.switch-animate {

        -webkit-transition: left 0.25s ease-out;

        -moz-transition: left 0.25s ease-out;

        -o-transition: left 0.25s ease-out;

        transition: left 0.25s ease-out;

        -webkit-backface-visibility: hidden;

    }

    .has-switch > div.switch-off {

        left: -63%;

    }

    .has-switch > div.switch-off label {

        background-color: #7f8c9a;

        border-color: #bdc3c7;

        -webkit-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);

        -moz-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);

        box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);

    }

    .has-switch > div.switch-on {

        left: 0%;

    }

    .has-switch > div.switch-on label {

        background-color: #34aadc;

    }

    .has-switch input[type=checkbox] {

        display: none;

    }

    .has-switch span {

        cursor: pointer;

        font-size: 14.994px;

        font-weight: 700;

        float: left;

        height: 29px;

        line-height: 19px;

        margin: 0;

        padding-bottom: 6px;

        padding-top: 5px;

        position: relative;

        text-align: center;

        width: 50%;

        z-index: 1;

        -webkit-box-sizing: border-box;

        -moz-box-sizing: border-box;

        box-sizing: border-box;

        -webkit-transition: 0.25s ease-out;

        -moz-transition: 0.25s ease-out;

        -o-transition: 0.25s ease-out;

        transition: 0.25s ease-out;

        -webkit-backface-visibility: hidden;

    }

    .has-switch span.switch-left {

        border-radius: 30px 0 0 30px;

        background-color: #2A3542;

        color: #34aadc;

        border-left: 1px solid transparent;

    }

    .has-switch span.switch-right {

        border-radius: 0 30px 30px 0;

        background-color: #bdc3c7;

        color: #ffffff;

        text-indent: 7px;

    }

    .has-switch span.switch-right [class*="fui-"] {

        text-indent: 0;

    }

    .has-switch label {

        border: 4px solid #2A3542;

        border-radius: 50%;

        -webkit-border-radius: 50%;

        float: left;

        height: 29px;

        margin: 0 -21px 0 -14px;

        padding: 0;

        position: relative;

        vertical-align: middle;

        width: 29px;

        z-index: 100;

        -webkit-transition: 0.25s ease-out;

        -moz-transition: 0.25s ease-out;

        -o-transition: 0.25s ease-out;

        transition: 0.25s ease-out;

        -webkit-backface-visibility: hidden;

    }

    .switch-square {

        border-radius: 6px;

        -webkit-border-radius: 6px;

        -webkit-mask: url('../img/mask.png') 0 0 no-repeat;

        mask: url('../img/mask.png') 0 0 no-repeat;

    }

    .switch-square > div.switch-off label {

        border-color: #7f8c9a;

        border-radius: 6px 0 0 6px;

    }

    .switch-square span.switch-left {

        border-radius: 6px 0 0 6px;

    }

    .switch-square span.switch-left [class*="fui-"] {

        text-indent: -10px;

    }

    .switch-square span.switch-right {

        border-radius: 0 6px 6px 0;

    }

    .switch-square span.switch-right [class*="fui-"] {

        text-indent: 5px;

    }

    .switch-square label {

        border-radius: 0 6px 6px 0;

        border-color: #34aadc;

    }





    /*tag input*/



    .tagsinput {

        border: 1px solid #e3e6ed;

        border-radius: 6px;

        height: 100px;

        padding: 6px 1px 1px 6px;

        overflow-y: auto;

        text-align: left;

    }

    .tagsinput .tag {

        border-radius: 4px;

        background-color: #688a7e;

        color: #ffffff;

        cursor: pointer;

        margin-right: 5px;

        margin-bottom: 5px;

        overflow: hidden;

        line-height: 15px;

        padding: 6px 13px 8px 19px;

        position: relative;

        vertical-align: middle;

        display: inline-block;

        zoom: 1;

        *display: inline;

        -webkit-transition: 0.14s linear;

        -moz-transition: 0.14s linear;

        -o-transition: 0.14s linear;

        transition: 0.14s linear;

        -webkit-backface-visibility: hidden;

    }

    .tagsinput .tag:hover {

        background-color: rgba(0,122,255,0.7);

        color: #ffffff;

        padding-left: 12px;

        padding-right: 20px;

    }

    .tagsinput .tag:hover .tagsinput-remove-link {

        color: #ffffff;

        opacity: 1;

        display: block\9;

    }

    .tagsinput input {

        background: transparent;

        border: none;

        color: #34495e;

        font-family: "Lato", sans-serif;

        font-size: 14px;

        margin: 0px;

        padding: 0 0 0 5px;

        outline: 0;

        margin-right: 5px;

        margin-bottom: 5px;

        width: 12px;

    }

    .tagsinput-remove-link {

        bottom: 0;

        color: #ffffff;

        cursor: pointer;

        font-size: 12px;

        opacity: 0;

        padding: 7px 7px 5px 0;

        position: absolute;

        right: 0;

        text-align: right;

        text-decoration: none;

        top: 0;

        width: 100%;

        z-index: 2;

        display: none\9;

    }

    .tagsinput-remove-link:before {

        color: #ffffff;

        content: "\f00d";

        font-family: "FontAwesome";

    }

    .tagsinput-add-container {

        vertical-align: middle;

        display: inline-block;

        zoom: 1;

        *display: inline;

    }

    .tagsinput-add {

        background-color: #d6dbdf;

        border-radius: 3px;

        color: #ffffff;

        cursor: pointer;

        margin-bottom: 5px;

        padding: 6px 9px;

        display: inline-block;

        zoom: 1;

        *display: inline;

        -webkit-transition: 0.25s;

        -moz-transition: 0.25s;

        -o-transition: 0.25s;

        transition: 0.25s;

        -webkit-backface-visibility: hidden;

    }

    .tagsinput-add:hover {

        background-color: #688a7e;

    }

    .tagsinput-add:before {

        content: "\f067";

        font-family: "FontAwesome";

    }

    .tags_clear {

        clear: both;

        width: 100%;

        height: 0px;

    }





    /*checkbox & radio style*/





    .checkboxes label, .radios label {

        display: block;

        cursor: pointer;

        line-height: 20px;

        padding-bottom: 7px;

        font-weight: 300;

    }



    .radios {

        padding-top: 18px;

    }



    .label_check input,

    .label_radio input {

        margin-right: 5px;

    }



    .has-js .label_check,

    .has-js .label_radio {

        padding-left: 34px;

    }



    .has-js .label_radio {

        background: url(../img/checkbox/radio-off.png) no-repeat;

    }



    .has-js .label_check {

        background: url(../img/checkbox/check-off.png) no-repeat;

    }



    .has-js label.c_on {

        background: url(../img/checkbox/check-on.png) no-repeat;

    }



    .has-js label.r_on {

        background: url(../img/checkbox/radio-on.png) no-repeat;

    }



    .has-js .label_check input,

    .has-js .label_radio input {

        position: absolute;

        left: -9999px;

    }



    /*date picker*/





    .add-on {

        border: 1px solid #E2E2E4;

        border-radius: 4px;

        -webkit-border-radius: 4px;

        float: right;

        margin-right: -37px;

        margin-top: -34px;

        padding: 8px;

        text-align: center;

        background: #EEEEEE;

    }



    .daterangepicker .ranges .range_inputs > div:nth-child(2) {

        margin-bottom: 10px;

        padding-left: 0px;

    }



    .daterangepicker .ranges label {

        padding-bottom: 0;

        padding-top: 8px;

    }





    .daterangepicker td.active, .daterangepicker td.active:hover,

    .datepicker td.active:hover, .datepicker td.active:hover:hover, .datepicker td.active:active, .datepicker td.active:hover:active, .datepicker td.active.active, .datepicker td.active.active:hover, .datepicker td.active.disabled, .datepicker td.active.disabled:hover, .datepicker td.active[disabled], .datepicker td.active[disabled]:hover,

    .datepicker td span.active:hover, .datepicker td span.active:active, .datepicker td span.active.active, .datepicker td span.active.disabled, .datepicker td span.active[disabled]{

        background: #688a7e;

    }



    .daterangepicker .calendar th, .daterangepicker .calendar td {

        font-family: 'Lato', sans-serif;

        font-weight: 300;

        text-align: center;

        white-space: nowrap;

    }



    .daterangepicker td.active, .daterangepicker td.active:hover, .datepicker td.active, .datepicker td.active:hover, .datepicker td span.active {

        text-shadow: none;

    }



    .datepicker th.switch {

        width: 125px;

    }



    .datepicker td span {

        height: 40px;

        line-height: 40px;

    }





    /*ck editor*/



    .cke_top, .cke_bottom {

        background: #F5F5F5 !important;

        background: -moz-linear-gradient(center top , #F5F5F5, #F5F5F5) repeat scroll 0 0 #F5F5F5 !important;

        background: -webkit-linear-gradient(center top , #F5F5F5, #F5F5F5) repeat scroll 0 0 #F5F5F5 !important;

        background: -o-linear-gradient(center top , #F5F5F5, #F5F5F5) repeat scroll 0 0 #F5F5F5 !important;

        box-shadow: none;

        padding: 6px 8px 2px;

    }



    .cke_top {

        border-bottom: 1px solid #cccccc !important;

    }



    .cke_chrome {

        border: 1px solid #cccccc !important;

        box-shadow: none !important;

        display: block;

        padding: 0;

    }



    /*form wizard*/



    .stepy-tab {

        text-align: center;

    }



    .stepy-tab ul{

        display: inline-block;

    }



    .stepy-tab ul li {

        float: left;

    }



    .step legend {

        border: none;

    }



    .button-back {

        float: left;

    }



    .button-next, .finish {

        float: right;

    }



    .button-back, .button-next, .finish {

        cursor: pointer;  text-decoration: none;

    }



    .step {

        clear: left;

    }

    .step label {

        display: block;

    }





    .stepy-titles li {

        color: #757575;

        cursor: pointer;

        float: left;

        margin: 10px 15px;

    }



    .stepy-titles li span { display: block; }



    .stepy-titles li.current-step div {

        color: #fff;

        cursor: auto;

        background: #688a7e;

        border-radius: 50%;

        -webkit-border-radius: 50%;

        width: 80px;

        height: 80px;

        line-height: 80px;

    }



    .stepy-titles li div{

        font-size:16px;

        font-weight: 300;

        background: #eee;

        border-radius: 50%;

        -webkit-border-radius: 50%;

        width: 80px;

        height: 80px;

        line-height: 80px;

    }





    /*widget*/



    .user-heading.alt {

        display: inline-block;

        width: 100%;

        text-align: left;

    }



    .alt.green-bg {

        background: #4cd964;

    }



    .profile-nav.alt.green-border ul > li > a:hover, .profile-nav.alt.green-border ul > li > a:focus, .profile-nav.alt.green-border ul li.active a {

        border-left: 5px solid #4cd964;

    }



    .user-heading.alt a {

        float: left;

        margin-right: 15px;

        margin-left: -10px;

        display: inline-block;

        border: 5px solid rgba(255, 255, 255, 0.3);

        border-radius: 50%;

        -webkit-border-radius: 50%;

    }

    .user-heading.alt a img{

        width: 100px;

        height: 100px;

        border-radius: 50%;

        -webkit-border-radius: 50%;

    }



    .twt-feed {

        border-radius: 4px 4px 0 0;

        -webkit-border-radius: 4px 4px 0 0;

        color: #FFFFFF;

        padding: 10px;

        position: relative;

        text-align: center;

    }



    .twt-feed.blue-bg {

        background: #00a0df;

    }



    .twt-feed h1 {

        font-size: 22px;

        font-weight: 300;

        margin-bottom: 5px;

    }



    .twt-feed a  {

        border: 8px solid #fff;

        border-radius: 50%;

        -webit-border-radius: 50%;

        display: inline-block;

        margin-bottom: -55px;

    }



    .twt-feed a img {

        height: 112px;

        width: 112px;

        border-radius: 50%;

        -webit-border-radius: 50%;

    }



    .twt-category {

        display: inline-block;

        margin-bottom: 11px;

        margin-top: 55px;

        width: 100%;

    }

    .profile-widget-data{

        display: inline-block;

        margin-bottom: 10px;

        margin-top: 15px;

        width: 100%;

    }



    .twt-category ul li, .profile-widget-data ul li,.profile-nav ul > li{

        color: #89817f;

        font-size: 13px;

        border-bottom: none;

    }



    .twt-category h5  {

        font-size: 20px;

        font-weight: 300;

    }



    .twt-write .t-text-area {

        border: 1px solid #eeeeee;

        border-radius: 0;

    }



    .twt-footer {

        padding: 10px 15px;

    }



    .btn-space {

        padding-left: 11.6%;

        padding-right: 11%;

    }



    .p-head {

        color: #f77b6f;

        font-weight: 400;

        font-size: 14px;

    }



    .cmt-head {

        font-weight: 400;

        font-size: 13px;

    }



    .p-thumb img {

        width: 50px;

        border-radius: 3px;

        -webkit-border-radius: 3px;

    }



    .tasi-tab .media-body p {

        /*color: #b8bac6;*/

    }





    /*Timeline chat*/



    .chat-form {

        margin-top: 25px;

        clear: both;

    }



    .chat-form .input-cont {

        margin-bottom: 10px;

    }



    .chat-form .input-cont input {

        margin-bottom: 0px;

    }



    .chat-form .input-cont input{

        border: 1px solid #d3d3d3 !important;

        margin-top:0;

        min-height: 45px;

    }



    .chat-form .input-cont input {

        background-color: #fff !important;

    }



    .chat-features a {

        margin-left: 10px;

    }



    .chat-features a i{

        color: #d0d0d0;

    }



    .profile-activity:before {

        background: rgba(0, 0, 0, 0.1);

        bottom: 0;

        top: 0;

        width: 2px;

    }

    /*.profile-activity:before, .act-time:before, .act-time .text:before {

    content: "";

    left: 60px;

    position: absolute;

    top: -2px;

}*/

    .profile-activity, .act-time , .profile-activity .act-in, .profile-activity .act-out {

        position: relative;

    }





    .profile-activity .act-in  .arrow {

        /*border-right: 8px solid #F4F4F4 !important;*/

    }

    .profile-activity .act-in .arrow {

        border-bottom: 8px solid transparent;

        border-top: 8px solid transparent;

        display: block;

        height: 0;

        left: -8px;

        position: absolute;

        top: 13px;

        width: 0;

    }



    .profile-activity .act-out  .arrow {

        /*border-right: 8px solid #34aadc !important;*/

    }

    .profile-activity .act-out .arrow {

        border-bottom: 8px solid transparent;

        border-top: 8px solid transparent;

        display: block;

        height: 0;

        left: -8px;

        position: absolute;

        top: 13px;

        width: 0;

    }



    .act-time:first-child:before {

        margin-top: 16px;

    }

    .act-time:before {

        background:#CCCCCC;

        border: 2px solid #FAFAFA;

        border-radius: 100px;

        -moz-border-radius: 100px;

        -webkit-border-radius: 100px;

        height: 14px;

        margin: 23px 0 0 -6px;

        width: 14px;

    }

    .act-time:hover:before {

        background: #34aadc;

    }

    .act-time:first-child {

        padding-top: 0;

    }

    .activity-img {

        float: left;

        margin-right: 30px;

        overflow: hidden;

    }

    .activity-img img {

        display: block;

        height: 44px;

        width: 44px;

    }

    .activity-body {

        /*margin-left: 80px;*/

    }

    .act-time .act-in .text {

        border: 1px solid #e3e6ed;

        padding: 10px;

        border-radius: 4px;

        -webkit-border-radius: 4px;

    }



    .act-time .act-out .text {

        border: 1px solid #e3e6ed;

        padding: 10px;

        border-radius: 4px;

        -webkit-border-radius: 4px;

    }

    .act-time p {

        margin: 0;

    }

    .act-time .attribution {

        font-size: 11px;

        margin: 0px 0 5px;

    }

    .act-time {

        overflow: hidden;

        padding:8px 0;

    }



    .act-in a, .act-in a:hover{

        color: #b64c4c;

        text-decoration: none;

        border-radius: 50%;

        -webkit-border-radius: 50%;

        margin-right: 10px;

        font-weight: 400;

        font-size: 13px;

    }

    .act-out a, .act-out a:hover{

        color: #288f98;

        text-decoration: none;

        border-radius: 4px;

        -webkit-border-radius: 4px;

        margin-right: 10px;

        font-weight: 400;

        font-size: 13px;

    }



    .messages-wrapper {

        position: relative;

    }

    .message {

        border-radius: 20px 20px 20px 20px;

        margin: 0 15px 10px;

        padding: 5px 20px;

        position: relative;

    }

    .message.to {

        background-color: #2095FE;

        color: #fff;

        margin-left: 80px;

    }

    .message.from {

        background-color: #E5E4E9;

        color: #363636;

        margin-right: 80px;

    }

    .message.to + .message.to,

    .message.from + .message.from {

        margin-top: -7px;

    }

    .message:before {

        border-color: #2095FE;

        border-radius: 50% 50% 50% 50%;

        border-style: solid;

        border-width: 0 20px;

        bottom: 0;

        clip: rect(20px, 35px, 42px, 0px);

        content: " ";

        height: 40px;

        position: absolute;

        right: -50px;

        width: 30px;

        z-index: -1;

    }

    .message.from:before {

        border-color: #E5E4E9;

        left: -50px;

        -webkit-transform: rotateY(180deg);

        -moz-transform: rotateY(180deg);

        transform: rotateY(180deg);

    }



    /*custom select*/



    span.customSelect {

        font-size:12px;

        background-color: #ffffff;

        padding:10px;

        border:1px solid #EAEAEA;

        -moz-border-radius: 4px;

        -webkit-border-radius: 4px;

        border-radius: 4px;

        color: #A4AABA;

    }

    span.customSelect.changed {

        background-color: #fff;

    }

    .customSelectInner {

        background:url(../img/customSelect-arrow.gif) no-repeat center right;

    }

    /* Contact Form */

    .validation {
        color: red;
        display:none;
        margin: 0 0 20px;
        font-weight:400;
        font-size:13px;
    }

    #sendmessage {
        color: green;
        border:1px solid green;
        display:none;
        text-align:center;
        padding:15px;
        font-weight:600;
        margin-bottom:15px;
    }

    #errormessage {
        color: red;
        display:none;
        border:1px solid red;
        text-align:center;
        padding:15px;
        font-weight:600;
        margin-bottom:15px;
    }

    #sendmessage.show, #errormessage.show, .show {
        display:block;
    }

</style>
<body class="login-img3-body">
<
<div class="container">

    <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_profile"></i></span>

                <input id="email" type="email" class="form-control" name="email" required  autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

            </div>
            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" placeholder="Username" autofocus>


            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
    </form>
    <div class="text-right">
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</div>


</body>

</html>