<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin Template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/') }}/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/') }}/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="{{ url('/') }}/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/style.css">
    <!-- END Custom CSS-->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/')}}/assets/robust-select.css">

  </head>
  <style type="text/css">
    .page-link {
      position: relative;
      float: left;
      padding: 0px 7px;
      margin-left: -1px;
      color: #7A54D8;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #ddd;
      color:blue;
    }

    .page-item.active .page-link, .page-item.active .page-link:focus {
      z-index: 2;
      color: #fff;
      cursor: default;
      background-color: blue;
      border-color: blue;
  }

  .page-item.disabled .page-link, .page-item.disabled .page-link:focus {
    color: blue;
    pointer-events: none;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
  }
     .card{
        margin:10px;
        padding: 10px;
    }
    .table  tr th{
        padding: 1px;
        margin:0px;
        background: #e3ebf3;
        font-size: 14px;
        text-align:top-left;
        border-bottom: thin solid black;
        font-family: calibri;
        color:black;
    }
    table{
      width: 100%;
    }
    .table tbody tr td {
        padding: 3px;
        font-size: 10pt;
         
        
    }
    input.form-control{
      border-radius: 0px;
    }
    .dropdown-menu a{
      color:blue;
      padding: none;
      margin:0px;
      font-size: 9pt;
    }
    .dataTables_info{
      font-size: 11px;
      color:blue;
      font-weight: bold;
    }
    footer{
      font-size: 11px;
    }
    .btn, .form-control{
      border-radius: 0px;
    }
 
 

  </style>

