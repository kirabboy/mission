<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <meta name="csrf-token" content="{{ csrf_token() }}" />
         <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- jQuery 1.8 or later, 33 KB -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


        <!-- Fotorama from CDNJS, 19 KB -->
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <title>Like</title>
    </head>
    <style>
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
            background: #efd363;
            color: #000;
            font-weight: 600;
        }
        .alert-gold{
            background: #efd363;
        }
        .btn{
            font-weight: 600;
            color: #000 !important;
        }
        .vip-card{
            margin: 20px 0px 20px 0px !important;
        }
        .area-vip-pack{
            background-repeat: no-repeat !important;
            background-size: 100% !important;
            height: 100%;
            margin-bottom: 10px;
            -webkit-box-shadow: 0px 9px 5px 9px rgba(255,255,255,1);
-moz-box-shadow: 0px 9px 5px 9px rgba(255,255,255,1);
box-shadow: 0px 1px 5px 1px rgba(255,255,255,1);
        }
        .area-vip-pack .alert{
            padding-top: 20%;
        }
        .content-vip h3, .content-vip p{
            color: #d2a210;
        }
        .btn-red{
            background-color: #e65726;
            border-color: #e65726;
        }
        .form-changepass label{
            color: #000;
        }
        .row-spin .alert-dark h5{
            color: #000;
        }
        .menu-bottom .col-2 img{
            height: 25px;
            width: 25px;
        }
        .menu-bottom .col-2 h6{
            font-size: 10px;
            color: #000;
            font-weight: 600;
        }
        .menu-bottom{
            border-top: 1px solid silver;
            margin: 0px !important;
            background: #221e1d;
            color: #fff;
            z-index: 2;
            position: fixed;
            left: 0;
            bottom: 0;
            right: 0;
            height: 60px;
        }
        .menu-bottom .col-2{
         
            margin: auto;
            text-align: center;
            padding: 8px 0px;
            background: #efd363;
            height: 51px;
            width: 50px;
            vertical-align: middle;
            border-radius: 6px;
            color: #000;
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
            padding: 10px 5px;
            background-color: #000;
            height: 100% ;
            margin: 3px;
        }
        .block-g{
            padding: 10px 5px;
            background-color: rgba(122, 122, 122, 0.493);
            height: 100% ;
            border: 1px solid rgb(158, 93, 93);

            margin: 3px;
        }
        .title-block{
            text-decoration: underline;
            text-transform: uppercase;
            text-align: center;
            color: #eed363;
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
            width: 100%;
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
            color: rgb(9, 255, 0);
            margin: auto;

        }
        .title-cskh h6{
            color: red;
            font-weight: 900;
            padding: 2px 0px;
            background: rgba(91, 95, 107, 0.747);

        }
        .title-cskh {
            padding: 130px 0px 0px 0px;
        }
        .area-cskh{
            background-image: url('{{asset("/resources/image/tdv.jpg")}}');
            background-size: cover;
            height: 150px;
        }
        .btn-battery .fa-circle{
            color: rgb(9, 255, 0);
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
            height: 100%;
            width: 100%;
           
        }
        .area-buy-spin{
            height: 150px;
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
            font-size: 16px;
        }
        .col-dstv-content p{
            font-size: 13px;
            color: darkgray;
            font-weight: 300;
        }
      
        .list-dstv{
            list-style: none;
            padding: 0;

        }
        .area-facebook img, .area-zalo img{
            width: 100%;
        }
        .area-facebook .col-4, .area-zalo .col-4,.area-facebook .col-8, .area-zalo .col-8{
            padding: 5px;
        }
        .area-facebook h5, .area-zalo h5{
            font-size: 15px;
            font-weight: 700;

        }
        .area-facebook span, .area-zalo span{
            color: lightslategrey;
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
        .block-g img{
            border-radius: 5px;
            padding: 10px;
            width: 50%;
            background: rgb(255 204 0);
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
        .btn{
            color: #000;
        }
        .amount-title{
            color: lightcyan;
            font-size: 15px;
        }
        .amount-price{
            color: lightgreen;
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
        }
        .balance-alert{
            --box-shadow-color: #fff100;
            box-shadow: 0 0 30px var(--box-shadow-color);
        }
        .row-user{
            margin: 10px;
            border-top: 1px solid darkgray;
        }
        .modal-content{
            background: #000 !important;
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
        .block-social{
            background: #163266;
        }
        .row-vip{
            margin: 50px 0px;
        }
        .alert-bronze {
            color: #1b1e21;
            background-color: #d29e00;
            border-color: #c6c8ca;
        }
        .alert-green {
            color: #1b1e21;
            background-color: rgb(102, 197, 102);
            border-color: #c6c8ca;
        }
        /*.alert-bronze{*/
        /*    -webkit-animation: glowing1 1500ms infinite;*/
        /*    -moz-animation: glowing1 1500ms infinite;*/
        /*    -o-animation: glowing1 1500ms infinite;*/
        /*    animation: glowing1 1500ms infinite;*/
        /*}*/
        /*@-webkit-keyframes glowing1 {*/
        /*    0% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    50% { background-color: #d2af43; -webkit-box-shadow: 0 0 10px #d2af43; }*/
        /*    100% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    }*/

        /*    @-moz-keyframes glowing1 {*/
        /*        0% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    50% { background-color: #d2af43; -webkit-box-shadow: 0 0 10px #d2af43; }*/
        /*    100% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    }*/

        /*    @-o-keyframes glowing1 {*/
        /*        0% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    50% { background-color: #d2af43; -webkit-box-shadow: 0 0 10px #d2af43; }*/
        /*    100% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    }*/

        /*    @keyframes glowing1 {*/
        /*        0% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    50% { background-color: #d2af43; -webkit-box-shadow: 0 0 10px #d2af43; }*/
        /*    100% { background-color: #d2af43; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*}*/
        /*.alert-secondary{*/
        /*    -webkit-animation: glowing2 1500ms infinite;*/
        /*    -moz-animation: glowing2 1500ms infinite;*/
        /*    -o-animation: glowing2 1500ms infinite;*/
        /*    animation: glowing2 1500ms infinite;*/
        /*}*/
        /*@-webkit-keyframes glowing2 {*/
        /*    0% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*    50% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 10px #e2e3e5; }*/
        /*    100% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*    }*/

        /*    @-moz-keyframes glowing2 {*/
        /*        0% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*    50% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 10px #e2e3e5; }*/
        /*    100% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*    }*/

        /*    @-o-keyframes glowing2 {*/
        /*        0% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*    50% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 10px #e2e3e5; }*/
        /*    100% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*    }*/

        /*    @keyframes glowing2 {*/
        /*        0% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*    50% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 10px #e2e3e5; }*/
        /*    100% { background-color: #e2e3e5; -webkit-box-shadow: 0 0 3px #e2e3e5; }*/
        /*}*/
       
        .alert-gold {
            color: #ab0000  ;
            background-color: #c9c353;
            border-color: #c6c8ca;
        }
        /*.alert-gold{*/
        /*    -webkit-animation: glowing3 1500ms infinite;*/
        /*    -moz-animation: glowing3 1500ms infinite;*/
        /*    -o-animation: glowing3 1500ms infinite;*/
        /*    animation: glowing3 1500ms infinite;*/
        /*}*/
        /*@-webkit-keyframes glowing3 {*/
        /*    0% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #fff100; }*/
        /*    50% { background-color: #fff100; -webkit-box-shadow: 0 0 20px #fff100; }*/
        /*    100% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #fff100; }*/
        /*    }*/

        /*    @-moz-keyframes glowing3 {*/
        /*        0% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #fff100; }*/
        /*    50% { background-color: #fff100; -webkit-box-shadow: 0 0 20px #fff100; }*/
        /*    100% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #fff100; }*/
        /*    }*/

        /*    @-o-keyframes glowing3 {*/
        /*        0% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    50% { background-color: #fff100; -webkit-box-shadow: 0 0 20px #d2af43; }*/
        /*    100% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #d2af43; }*/
        /*    }*/

        /*    @keyframes glowing3 {*/
        /*        0% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #fff100; }*/
        /*    50% { background-color: #fff100; -webkit-box-shadow: 0 0 20px #fff100; }*/
        /*    100% { background-color: #fff100; -webkit-box-shadow: 0 0 3px #fff100; }*/
        /*}*/
        .alert-platium{
            color: #1b1e21;
            background-color: #71e240;
            border-color: #c6c8ca;
        }
        #img-modal{
            width: 100%;;
        }
        /*.alert-platium{*/
        /*    -webkit-animation: glowing4 1500ms infinite;*/
        /*    -moz-animation: glowing4 1500ms infinite;*/
        /*    -o-animation: glowing4 1500ms infinite;*/
        /*    animation: glowing4 1500ms infinite;*/
        /*}*/
        /*@-webkit-keyframes glowing4 {*/
        /*    0% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*    50% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 25px #d4ffc2; }*/
        /*    100% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*    }*/

        /*    @-moz-keyframes glowing4{*/
        /*        0% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*    50% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 25px #d4ffc2; }*/
        /*    100% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*    }*/

        /*    @-o-keyframes glowing4 {*/
        /*        0% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*    50% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 25px #d4ffc2; }*/
        /*    100% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*    }*/

        /*    @keyframes glowing4 {*/
        /*        0% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*    50% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 25px #d4ffc2; }*/
        /*    100% { background-color: #d4ffc2; -webkit-box-shadow: 0 0 3px #d4ffc2; }*/
        /*}*/
        .alert-diamond{
            color: #1b1e21;
            background-color: #29a7e4;
            border-color: #c6c8ca;
        }
        /*.alert-diamond{*/
        /*    -webkit-animation: glowing5 1500ms infinite;*/
        /*    -moz-animation: glowing5 1500ms infinite;*/
        /*    -o-animation: glowing5 1500ms infinite;*/
        /*    animation: glowing5 1500ms infinite;*/
        /*}*/
        /*@-webkit-keyframes glowing5 {*/
        /*    0% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*    50% { background-color: #9bdeff; -webkit-box-shadow: 0 0 30px #9bdeff; }*/
        /*    100% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*    }*/

        /*    @-moz-keyframes glowing5{*/
        /*        0% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*    50% { background-color: #9bdeff; -webkit-box-shadow: 0 0 30px #9bdeff; }*/
        /*    100% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*    }*/

        /*    @-o-keyframes glowing5 {*/
        /*        0% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*    50% { background-color: #9bdeff; -webkit-box-shadow: 0 0 30px #9bdeff; }*/
        /*    100% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*    }*/

        /*    @keyframes glowing5 {*/
        /*        0% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*    50% { background-color: #9bdeff; -webkit-box-shadow: 0 0 30px #9bdeff; }*/
        /*    100% { background-color: #9bdeff; -webkit-box-shadow: 0 0 3px #9bdeff; }*/
        /*}*/
        .avatar-vip img{
            width: 100%;
        }
        .content-vip h5{
            color: #89ff00;
            font-weight: 700;
        }
        .content-vip{
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
        .vip-price{
            border: 1px solid lightskyblue;
            border-radius: 5px;
            padding: 1px 2px;
            font-weight: 700;
            color: #fff;
            background: #0e1526b4;
        }
        .area-title-page h5{
            padding: 5px; 
            font-weight: 700;
            font-size: 15px; 
        }
        #form-info label{
            color: #fff;
        }
        .area-history{
            margin: 30px 0px 0px 0px;
        }
        .img-mission img{
            border-radius: 5px;
    padding: 10px;
    width: 100%;
    background: rgb(255 204 0);
        }
        .area-mission h5, .area-mission span, .area-mission p{
            color: black;
        }
        h5.mission-price{
            font-size: 23px;
            color: #000;
            font-weight: 600;
        }
        h5.mission-name{
            color: lightslategray;
        }
        .img-mission-detail img{
            width: 100%;
        }
        .area-spin img{
            height: 50px;
            width: 50px;
        }
        h5.mission-count{
            border: 1px solid lightsteelblue;
            border-radius: 5px;
            padding: 1px 2px;
            background: dodgerblue;
        }
        .img-mission-detail img{
            width: 100%;
        }
        .tab-history li{
            text-align: center;
            width: 20%;
        }
        .tab-history li a{
            padding: 10px 2px;
            font-size: 11px;
             color: #fff;
        }
        .tab-earn li{
            text-align: center;
            width: 33.3333333%;
        }
        .tab-earn li a{
            padding: 10px 5px;
            font-size: 13px;
             color: #fff;
        }
        .gif-buy-spin img{
            width: 100%;
        }
        .admin .row-home-admin a{
            width: 100%;
        }
        .table-cus tr,  .table-cus thead{
            color: #000;
        }
        .table-cus td{
            color: #000;
        }
        .navbar-header .col-6 {
            vertical-align: middle;
        }
        .navbar-header .amount b{
            padding-top: 30px;
            color: #fff;
            display: block;
        }
        .navbar-header .col-6 span{
            color: red;
        }
        .outer{
            position:relative;
            top:0px;
            max-height: 300px;
        }
        .inner{
            top: 100px;
            overflow: hidden !important;
            position: relative;
            z-index: -99999;
            width: 100%;
            bottom: 100px;
        }
        
       
        .marquee {
            width: 100%;
            position: relative;
            box-sizing: border-box;
            animation: marquee 60s linear infinite;
            margin: 0 auto;
            bottom: 600px;
            /* text-align: center; */
            color: #ffffff;
            z-index: -99999999;
        }
        .row-dstv{
            border-bottom: 1px solid #ccc;
        }

        @keyframes marquee {
        from {
            transform: translateY(0);
        }
        to {
            transform: translateY(-150%);
        }
        }
        footer .menu-bottom{
            z-index: 99999 !important;
        }
        /* .area-btn-spin{
            background-image: url('{{asset('/resources/image/spin-wheel.gif')}}');
            background-repeat: no-repeat;
            background-size: cover;
        } */
        .area-btn-spin .gif-spin{
            padding: 10px 50px;
        }
        .area-btn-spin .gif-spin img{
            border-radius: 5%;
        }
        .notice-spin{
            vertical-align: middle;

        }
        .spin-not{
            border-right: 1px solid #ccc;
            padding-right: 5px;
            color: #fff;
            
        }
        .sdt{
            color: red;
            letter-spacing: 1px;
            font-size: 15px;
        }
        .spin-not img{
            width:5%;
            
        }
        .area-btn-spin{
            background-image: url('{{asset('/resources/image/spin-wheel.gif')}}');
            background-size: cover;
            background-repeat: repeat;
            height: 210px;
        }
        .ranking img{
            width: 100%;
        }
        .shopping{
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            color: #efd363;
            border: 1px solid;

            background: url('{{asset('/resources/image/img_app/background-8.jpg')}}') no-repeat;
        }
        .shopping i{
            background: #efd363;
            color: #000;
            border-radius: 50%;
            padding: 5px;
            
        }
        .gioi-thieu, .giai-dap{
            color: #efd363;
            background: url('{{asset('/resources/image/img_app/background-8.jpg')}}') no-repeat;
            background-size: cover;
        }
        .gioi-thieu, .giai-dap{
            color: #efd363;
            border: 1px solid;

        }
        .gioi-thieu img, .giai-dap img{
            width:  25px;
        }
        .hotro{
            text-align: center;
            padding: 15px;
        }

        .upgrade{
            text-align: center;
            padding: 15px;
        }
        .upgrade img, .hotro img{
            border-radius: 5px;
            width:  100%;
            border: 1px solid;
            color: #efd363;
            margin-top:5px; 


        }
        .flashsale{
            text-align: center;
        }
        .flashsale marquee{
            border: 2px solid;
            background: linear-gradient(331deg, rgba(191,164,38,1) 0%, rgba(214,189,96,1) 25%, rgba(251,213,121,1) 43%, rgba(253,217,42,1) 100%);
            border-color: #e65726;

        }
        .flashsale marquee span{
      
      font-style: italic;
      
      
      
      color:#313131;
      font-weight: bold;
      -webkit-animation:colorchange 10s infinite alternate;
      
      
    }

    @-webkit-keyframes colorchange {
      0% {
        
        color: blue;
      }
      
      10% {
        
        color: #8e44ad;
      }
      
      20% {
        
        color: #1abc9c;
      }
      
      30% {
        
        color: #d35400;
      }
      
      40% {
        
        color: blue;
      }
      
      50% {
        
        color: #000;
      }
      
      60% {
        
        color: blue;
      }
      
      70% {
        
        color: #2980b9;
      }
      80% {
     
        color: red;
      }
      
      90% {
     
        color: #2980b9;
      }
      
      100% {
        
        color: pink;
      }
    }
        .qua{
            text-align: center;
            background: url('{{asset('/resources/image/img_app/background-7.jpg')}}') no-repeat;
            background-color: #efd363;
            border-color: #efd363;

        }
        .qua img{
            width: 50%;
            background-size: cover;

        }
          .qua{
           -webkit-animation: glowing5 1500ms infinite;
           -moz-animation: glowing5 1500ms infinite;
           -o-animation: glowing5 1500ms infinite;
           animation: glowing5 1500ms infinite;
        }
        @-webkit-keyframes glowing5 {
           0% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
           50% { background-color: #efd363; -webkit-box-shadow: 0 0 30px #efd363; }
           100% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
           }

           @-moz-keyframes glowing5{*/
               0% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
           50% { background-color: #efd363; -webkit-box-shadow: 0 0 30px #efd363; }
           100% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
           }

           @-o-keyframes glowing5 {
               0% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
           50% { background-color: #efd363; -webkit-box-shadow: 0 0 30px #efd363; }
           100% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
          }

           @keyframes glowing5 {
               0% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
           50% { background-color: #efd363; -webkit-box-shadow: 0 0 30px #efd363; }
                100% { background-color: #efd363; -webkit-box-shadow: 0 0 3px #efd363; }
        }
        label{
            color: #efd363;
        }
        .alert-name{
            background: #ffffff24;
        }
        .form-control{
            background: #efd363;
            border: 2px solid #e65726;
        }
        .account-block-name b{
            font-size: 13px;
            color: #fff;
        }
        .account-block-name span{
            color: #efd363;
            font-size: 13px;
        }
    </style>
    
    <body style="background-color:  #000">

        <header>
          
        </header>