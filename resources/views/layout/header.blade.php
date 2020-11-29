<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- jQuery 1.8 or later, 33 KB -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="styleshee" href="{{URL::to('/resources/css/app.css')}}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Fotorama from CDNJS, 19 KB -->
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <title>Like</title>
    </head>
    <style>
        .menu-bottom .col-2 img{
            height: 25px;
            width: 25px;
        }
        .menu-bottom .col-2 h6{
            font-size: 10px;
            color: #fff;
        }
        .menu-bottom{
            border-top: 1px solid silver;
            margin: 0px !important;
            background: #151d31;
            color: #fff;
            z-index: 2;
            position: fixed;
            left: 0;
            bottom: 0;
            right: 0;
            height: 50px;
        }
        .menu-bottom .col-2{
            margin: auto;
            text-align: center;
        }
        .col-half-offset{
            margin-left:4.166666667%
        }
        .mobile-bottom-nav{
            position:fixed;
            bottom:0;
            left:0;
            right:0;
            z-index:1000;
        }
        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }
        body{
            background-color: #151d31;
        }
        .title h6{
            color: #fff;
            font-size: 12px;
        }
        h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6, p{
            margin: 0;
            font-weight: 400;
            color: #fff;
        }
        .block{
            background-color: #151d31;
            height: 100% ;
            margin: 3px;
        }
        .row{
            margin: 5px 0px;
        }
        .row .col-6:last-child{
        }

     
        .btn-spin{
            font-size: 9px;
            color: #fff;
            background: rgb(255,132,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(0,236,255,1) 52%, rgba(0,255,4,1) 100%);
            padding: 2px 5px;
            border: 1px solid #fff;
            border-radius: 5px 5px 5px 5px;
        }
        .gif-spin img{
            width: 25%;
        }
        .spin-notice-name{
            font-size: 9px;
        }
        .col-spin-notice-content p{
            font-size: 7px;
        }
        .col-spin-notice-avatar img{
            width: 25px;
            margin: auto;
            height: 25px;
            border-radius: 50%;
            border: 1px solid #fff;
        }
        .col-spin-notice-avatar{
            display: table-cell;
            width: 20%;
        }
        .col-spin-notice-content{
            display: table-cell;
            width: 80%;
        }
        .list-notice-spin{
            list-style: none;
            padding: 0;
        }
        .btn-hdkt{
            font-size: 10px;
            color: #fff;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(0,255,239,1) 100%);
            border: 1px solid #fff;
            border-radius: 5px 5px 5px 5px;
            padding: 2px 5px;
            width: 100%;
            margin: 5px auto;
            height: 25px;
            float: right;
        }
        .btn-battery{
            font-size: 10px;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 5px 5px 5px 5px;
            padding: 2px 5px;
            text-align: center;
            width: 100%;
            height: 25px;;
            margin: 5px auto;
        }
        .btn-battery i{
            margin: auto;
        }
        .btnc{
            -webkit-border-radius: 10px;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Arial;
            text-align: center;
            text-decoration: none;
            -webkit-animation: glowing 1500ms infinite;
            -moz-animation: glowing 1500ms infinite;
            -o-animation: glowing 1500ms infinite;
            animation: glowing 1500ms infinite;
            }
            @-webkit-keyframes glowing {
            0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #005cb2; }
            50% { background-color: #FF0000; -webkit-box-shadow: 0 0 10px #00eeff; }
            100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #002fb2; }
            }

            @-moz-keyframes glowing {
                0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #005cb2; }
            50% { background-color: #FF0000; -webkit-box-shadow: 0 0 10px #00eeff; }
            100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #002fb2; }
            }

            @-o-keyframes glowing {
                0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #005cb2; }
            50% { background-color: #FF0000; -webkit-box-shadow: 0 0 10px #00eeff; }
            100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #002fb2; }
            }

            @keyframes glowing {
                0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #005cb2; }
            50% { background-color: #FF0000; -webkit-box-shadow: 0 0 10px #00eeff; }
            100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #002fb2; }
        }
        
        .btnc:hover{
            background: red;
        }
        .notice-spin-list{
            height: 100%;;
        }
        .row-notice-spin{
            display: table;
            width: 100%;
        }
        .btn-invite i{
            background: lightseagreen;
            border: 1px solid #fff;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            padding: 5px;
        }
        .btn-invite{
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 15px 15px 15px 15px;
            padding: 2px 5px;
            text-align: center;
            width: 80%;
            height: 40px;
            letter-spacing: 5px;
            margin: 5px auto;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(25,38,255,1) 50%, rgba(0,255,239,1) 100%);
        }
        . {
            position: relative;
            -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
        }
        .waviy span {
            position: relative;
            display: inline-block;
            font-size: 15px;
            color: #fff;
            text-transform: uppercase;
            animation: waviy 1s infinite;
            animation-delay: calc(.1s * var(--i))
        }
        @keyframes waviy {
            0%,40%,100% {
                transform: translateY(0)
            }
            20% {
                transform: translateY(-5px)
            }
        }
        .col-spin-notice-content{
            padding: 10px;
        }
        .area-buy-spin img{
            height: 75px;
            width: auto;
           
        }
        .btn-buy-spin{
            border: 1px solid #fff;
            border-radius: 5px 5px 5px 5px;
            padding: 2px 5px;
            margin: 5px auto;
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        }
        .area-cskh img{
            height: 75px;
            width: auto;
           
        }
        .gif-cskh, .gif-buy-spin{
        }
        .btn-cskh{
            border: 1px solid #fff;
            border-radius: 5px 5px 5px 5px;
            padding: 2px 5px;
            margin: 5px auto;
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        }

        .col-dstv-avatar{
            display: inline-block;
            width: 20%;
        }
        .col-dstv-content{
            display: inline-block;
            width: 79%;
        }
        .col-dstv-content h6{
            font-weight: 500;
            font-size: 14px;
        }
        .col-dstv-content p{
            font-size: 12px;
            color: darkgray;
            font-weight: 300;
        }
      
        .list-dstv{
            list-style: none;
            padding: 0;
        }
        .row-dstv{
            padding: 10px 3px;
            display: flex;
            width: 100%;
        }
        .col-dstv-avatar img{
            width: 50px;
            margin: auto;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #fff;
        }
        .area-img-login img{
            width: 100%;
        }
        .form-login label, .form-register label{
            color: #fff;
        }
        .account-avatar img{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid lightskyblue;
        }
        .account-logout img{
            width: 50%;
            border-radius: 50%;
            border: 2px solid lightskyblue;
        }
        .account-info p{
            font-size: 12px;
            color: seashell;
        }
        .account-info span{
            font-size: 13px;
            color: lightskyblue;
        }
        .amount-title{
            color: lightcyan;
            font-size: 15px;
        }
        .amount-price{
            color: lightseagreen;
            font-size: 14px;
        }
        .area-amount{
            padding: 20px 0px 30px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
            transition: 0.4s;
        }
        .area-amount:hover{
            transform: translate(0, -3px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);

        }
        .area-balance{
            margin: 40px 0px;   
        }
        .balance-alert{
            --box-shadow-color: lightcyan;
            box-shadow: 0 0 30px var(--box-shadow-color);
        }
        .row-user{
            margin: 10px;
            border-top: 1px solid darkgray;
        }
        .area-user {
            padding: 20px 0px 30px;
        }
        .area-user img{
            width: 50px;
            height: 50px;
        }
        .navbar-brand img{
            height: 30px;
            width: 30px;
        }
        .link-ref label{
            color: #fff;
        }
        #main{
            margin-bottom: 50px;
        }
        .menu-bottom .active h6{
            color: red;
        }
    </style>
    <body style="background-color:  #0e1526">
        <header>
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{URL::to('/')}}">
                        <img src="{{asset('/resources/image/like.png')}}"/>
                    </a>
                </div>
                </div>
            </nav>
        </header>