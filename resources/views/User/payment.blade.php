<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .navbar-brand {
            margin-right: 40px;
            /* Adjusted spacing */
        }

        .navbar-nav {
            margin-left: auto;
        }

        body {
            background: #f9f9fb;
        }

        .view-account {
            background: #ffffff;
            margin-top: 20px;
        }

        .view-account .pro-label {
            font-size: 13px;
            padding: 4px 5px;
            position: relative;
            top: -5px;
            margin-left: 10px;
            display: inline-block;
        }

        .view-account .side-bar {
            padding-bottom: 30px;
        }

        .view-account .side-bar .user-info {
            text-align: center;
            margin-bottom: 15px;
            padding: 30px;
            color: #616670;
            border-bottom: 1px solid #f3f3f3;
        }

        .view-account .side-bar .user-info .img-profile {
            width: 120px;
            height: 120px;
            margin-bottom: 15px;
        }

        .view-account .side-bar .user-info .meta li {
            margin-bottom: 10px;
        }

        .view-account .side-bar .user-info .meta li span {
            display: inline-block;
            width: 100px;
            margin-right: 5px;
            text-align: right;
        }

        .view-account .side-bar .user-info .meta li a {
            color: #616670;
        }

        .view-account .side-bar .user-info .meta li.activity {
            color: #a2a6af;
        }

        .view-account .side-bar .side-menu {
            text-align: center;
        }

        .view-account .side-bar .side-menu .nav {
            display: inline-block;
            margin: 0 auto;
        }

        .view-account .side-bar .side-menu .nav>li {
            font-size: 14px;
            margin-bottom: 0;
            border-bottom: none;
            display: inline-block;
            float: left;
            margin-right: 15px;
            margin-bottom: 15px;
        }

        .view-account .side-bar .side-menu .nav>li:last-child {
            margin-right: 0;
        }

        .view-account .side-bar .side-menu .nav>li>a {
            display: inline-block;
            color: #9499a3;
            padding: 5px;
            border-bottom: 2px solid transparent;
        }

        .view-account .side-bar .side-menu .nav>li>a:hover {
            color: #616670;
            background: none;
        }

        .view-account .side-bar .side-menu .nav>li.active a {
            color: #40babd;
            border-bottom: 2px solid #40babd;
            background: none;
            border-right: none;
        }

        .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
            color: #6dbd63;
            border-bottom-color: #6dbd63;
        }

        .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
            color: #497cb1;
            border-bottom-color: #497cb1;
        }

        .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
            color: #ec6952;
            border-bottom-color: #ec6952;
        }

        .view-account .side-bar .side-menu .nav>li .icon {
            display: block;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .view-account .content-panel {
            padding: 30px;
        }

        .view-account .content-panel .title {
            margin-bottom: 15px;
            margin-top: 0;
            font-size: 18px;
        }

        .view-account .content-panel .fieldset-title {
            padding-bottom: 15px;
            border-bottom: 1px solid #eaeaf1;
            margin-bottom: 30px;
            color: #616670;
            font-size: 16px;
        }

        .view-account .content-panel .avatar .figure img {
            float: right;
            width: 64px;
        }

        .view-account .content-panel .content-header-wrapper {
            position: relative;
            margin-bottom: 30px;
        }

        .view-account .content-panel .content-header-wrapper .actions {
            position: absolute;
            right: 0;
            top: 0;
        }

        .view-account .content-panel .content-utilities {
            position: relative;
            margin-bottom: 30px;
        }

        .view-account .content-panel .content-utilities .btn-group {
            margin-right: 5px;
            margin-bottom: 15px;
        }

        .view-account .content-panel .content-utilities .fa {
            font-size: 16px;
            margin-right: 0;
        }

        .view-account .content-panel .content-utilities .page-nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        .view-account .content-panel .content-utilities .page-nav .btn-group {
            margin-bottom: 0;
        }

        .view-account .content-panel .content-utilities .page-nav .indicator {
            color: #a2a6af;
            margin-right: 5px;
            display: inline-block;
        }

        .view-account .content-panel .mails-wrapper .mail-item {
            position: relative;
            padding: 10px;
            border-bottom: 1px solid #f3f3f3;
            color: #616670;
            overflow: hidden;
        }

        .view-account .content-panel .mails-wrapper .mail-item>div {
            float: left;
        }

        .view-account .content-panel .mails-wrapper .mail-item .icheck {
            background-color: #fff;
        }

        .view-account .content-panel .mails-wrapper .mail-item:hover {
            background: #f9f9fb;
        }

        .view-account .content-panel .mails-wrapper .mail-item:nth-child(even) {
            background: #fcfcfd;
        }

        .view-account .content-panel .mails-wrapper .mail-item:nth-child(even):hover {
            background: #f9f9fb;
        }

        .view-account .content-panel .mails-wrapper .mail-item a {
            color: #616670;
        }

        .view-account .content-panel .mails-wrapper .mail-item a:hover {
            color: #494d55;
            text-decoration: none;
        }

        .view-account .content-panel .mails-wrapper .mail-item .checkbox-container,
        .view-account .content-panel .mails-wrapper .mail-item .star-container {
            display: inline-block;
            margin-right: 5px;
        }

        .view-account .content-panel .mails-wrapper .mail-item .star-container .fa {
            color: #a2a6af;
            font-size: 16px;
            vertical-align: middle;
        }

        .view-account .content-panel .mails-wrapper .mail-item .star-container .fa.fa-star {
            color: #f2b542;
        }

        .view-account .content-panel .mails-wrapper .mail-item .star-container .fa:hover {
            color: #868c97;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-to {
            display: inline-block;
            margin-right: 5px;
            min-width: 120px;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject {
            display: inline-block;
            margin-right: 5px;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label {
            margin-right: 5px;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label:last-child {
            margin-right: 10px;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a,
        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a:hover {
            color: #fff;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-1 {
            background: #f77b6b;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-2 {
            background: #58bbee;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-3 {
            background: #f8a13f;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-4 {
            background: #ea5395;
        }

        .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-5 {
            background: #8a40a7;
        }

        .view-account .content-panel .mails-wrapper .mail-item .time-container {
            display: inline-block;
            position: absolute;
            right: 10px;
            top: 10px;
            color: #a2a6af;
            text-align: left;
        }

        .view-account .content-panel .mails-wrapper .mail-item .time-container .attachment-container {
            display: inline-block;
            color: #a2a6af;
            margin-right: 5px;
        }

        .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
            display: inline-block;
            text-align: right;
        }

        .view-account .content-panel .mails-wrapper .mail-item .time-container .time.today {
            font-weight: 700;
            color: #494d55;
        }

        .drive-wrapper {
            padding: 15px;
            background: #f5f5f5;
            overflow: hidden;
        }

        .drive-wrapper .drive-item {
            width: 130px;
            margin-right: 15px;
            display: inline-block;
            float: left;
        }

        .drive-wrapper .drive-item:hover {
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .drive-wrapper .drive-item-inner {
            padding: 15px;
        }

        .drive-wrapper .drive-item-title {
            margin-bottom: 15px;
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .drive-wrapper .drive-item-title a {
            color: #494d55;
        }

        .drive-wrapper .drive-item-title a:hover {
            color: #40babd;
        }

        .theme-2 .drive-wrapper .drive-item-title a:hover {
            color: #6dbd63;
        }

        .theme-3 .drive-wrapper .drive-item-title a:hover {
            color: #497cb1;
        }

        .theme-4 .drive-wrapper .drive-item-title a:hover {
            color: #ec6952;
        }

        .drive-wrapper .drive-item-thumb {
            width: 100px;
            height: 80px;
            margin: 0 auto;
            color: #616670;
        }

        .drive-wrapper .drive-item-thumb a {
            -webkit-opacity: 0.8;
            -moz-opacity: 0.8;
            opacity: 0.8;
        }

        .drive-wrapper .drive-item-thumb a:hover {
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
        }

        .drive-wrapper .drive-item-thumb .fa {
            display: inline-block;
            font-size: 36px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .drive-wrapper .drive-item-footer .utilities {
            margin-bottom: 0;
        }

        .drive-wrapper .drive-item-footer .utilities li:last-child {
            padding-right: 0;
        }

        .drive-list-view .name {
            width: 60%;
        }

        .drive-list-view .name.truncate {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .drive-list-view .type {
            width: 15px;
        }

        .drive-list-view .date,
        .drive-list-view .size {
            max-width: 60px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .drive-list-view a {
            color: #494d55;
        }

        .drive-list-view a:hover {
            color: #40babd;
        }

        .theme-2 .drive-list-view a:hover {
            color: #6dbd63;
        }

        .theme-3 .drive-list-view a:hover {
            color: #497cb1;
        }

        .theme-4 .drive-list-view a:hover {
            color: #ec6952;
        }

        .drive-list-view td.date,
        .drive-list-view td.size {
            color: #a2a6af;
        }

        @media (max-width: 767px) {
            .view-account .content-panel .title {
                text-align: center;
            }

            .view-account .side-bar .user-info {
                padding: 0;
            }

            .view-account .side-bar .user-info .img-profile {
                width: 60px;
                height: 60px;
            }

            .view-account .side-bar .user-info .meta li {
                margin-bottom: 5px;
            }

            .view-account .content-panel .content-header-wrapper .actions {
                position: static;
                margin-bottom: 30px;
            }

            .view-account .content-panel {
                padding: 0;
            }

            .view-account .content-panel .content-utilities .page-nav {
                position: static;
                margin-bottom: 15px;
            }

            .drive-wrapper .drive-item {
                width: 100px;
                margin-right: 5px;
                float: none;
            }

            .drive-wrapper .drive-item-thumb {
                width: auto;
                height: 54px;
            }

            .drive-wrapper .drive-item-thumb .fa {
                font-size: 24px;
                padding-top: 0;
            }

            .view-account .content-panel .avatar .figure img {
                float: none;
                margin-bottom: 15px;
            }

            .view-account .file-uploader {
                margin-bottom: 15px;
            }

            .view-account .mail-subject {
                max-width: 100px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container {
                position: static;
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
                width: auto;
                text-align: left;
            }
        }

        @media (min-width: 768px) {
            .view-account .side-bar .user-info {
                padding: 0;
                padding-bottom: 15px;
            }

            .view-account .mail-subject .subject {
                max-width: 200px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        }

        @media (min-width: 992px) {
            .view-account .content-panel {
                min-height: 800px;
                border-left: 1px solid #f3f3f7;
                margin-left: 200px;
            }

            .view-account .mail-subject .subject {
                max-width: 280px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .view-account .side-bar {
                position: absolute;
                width: 200px;
                min-height: 600px;
            }

            .view-account .side-bar .user-info {
                margin-bottom: 0;
                border-bottom: none;
                padding: 30px;
            }

            .view-account .side-bar .user-info .img-profile {
                width: 120px;
                height: 120px;
            }

            .view-account .side-bar .side-menu {
                text-align: left;
            }

            .view-account .side-bar .side-menu .nav {
                display: block;
            }

            .view-account .side-bar .side-menu .nav>li {
                display: block;
                float: none;
                font-size: 14px;
                border-bottom: 1px solid #f3f3f7;
                margin-right: 0;
                margin-bottom: 0;
            }

            .view-account .side-bar .side-menu .nav>li>a {
                display: block;
                color: #9499a3;
                padding: 10px 15px;
                padding-left: 30px;
            }

            .view-account .side-bar .side-menu .nav>li>a:hover {
                background: #f9f9fb;
            }

            .view-account .side-bar .side-menu .nav>li.active a {
                background: #f9f9fb;
                border-right: 4px solid #40babd;
                border-bottom: none;
            }

            .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
                border-right-color: #6dbd63;
            }

            .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
                border-right-color: #497cb1;
            }

            .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
                border-right-color: #ec6952;
            }

            .view-account .side-bar .side-menu .nav>li .icon {
                font-size: 24px;
                vertical-align: middle;
                text-align: center;
                width: 40px;
                display: inline-block;
            }
        }
    </style>
</head>


<body class="sb-nav-fixed">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-2" href="{{ url('user/userdashboard') }}">Member Management System</a>

        <button class="btn btn-link btn-sm order-0 order-lg-0 ms-5" id="sidebarToggle"><i
                class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto ms-md-45 me-10 me-lg-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{ url('user/userdashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Manage</div>
                        <a class="nav-link" href="{{ route('user.register') }}">Register</a>
                        <a class="nav-link" href="{{ route('user.eventRegister') }}">Make Payments</a>
                        <a class="nav-link" href="{{ route('user.eventRegister') }}">Register for Events</a>


                    </div>
                </div>

            </nav>
        </div>

        <div class="container">
            <div class="view-account">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                            <div class="user-info">
                                <img class="img-profile img-circle img-responsive center-block"
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png" alt />
                                <ul class="meta list list-unstyled">
                                    <li class="name">
                                        Rebecca Sanders
                                        <label class="label label-info">UX Designer</label>
                                    </li>
                                    <li class="email">
                                        <a href="#"><span class="__cf_email__"
                                                data-cfemail="2c7e494e494f4f4d027f6c5b494e5f455849024f4341">[email&#160;protected]</span></a>
                                    </li>
                                    <li class="activity">Last logged in: Today at 2:18pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-panel">
                            <h2 class="title">Billing</h2>
                            <div class="billing">
                                <div class="secure text-center margin-bottom-md">
                                    <h3 class="margin-bottom-md text-success">
                                        <span class="fs1 icon" aria-hidden="true" data-icon=""></span>
                                        Secure credit card payment<br />
                                        <small>This is a secure 128-bit SSL encrypted payment</small>
                                    </h3>
                                    <div class="accepted-cards">
                                        <ul class="list-inline">
                                            <li>
                                                <img src="https://www.uxfordev.com/demo/1.0.6/assets/images/payment-icon-set/icons/visa-curved-32px.png"
                                                    alt="Visa" />
                                            </li>
                                            <li>
                                                <img src="https://www.uxfordev.com/demo/1.0.6/assets/images/payment-icon-set/icons/mastercard-curved-32px.png"
                                                    alt="MasterCard" />
                                            </li>
                                            <li>
                                                <img src="https://www.uxfordev.com/demo/1.0.6/assets/images/payment-icon-set/icons/maestro-curved-32px.png"
                                                    alt="Maestro" />
                                            </li>
                                            <li>
                                                <img src="https://www.uxfordev.com/demo/1.0.6/assets/images/payment-icon-set/icons/american-express-curved-32px.png"
                                                    alt="American Express" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <form id="billing" class="form-horizontal" method="Post"
                                    action="{{ route('user.payment.process') }}" role="form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Name on Card</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Your name" />
                                            <p class="help-block">As it appears on the card</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Card Number </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                placeholder="••••  ••••  ••••  ••••" />
                                            <p class="help-block">
                                                The 16 digits on the front of your credit card.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Expiration Date</label>
                                        <div class="col-sm-9 form-inline">
                                            <select class="form-control">
                                                <option value="01">01</option>
                                                <option value="01">02</option>
                                                <option value="01">03</option>
                                                <option value="01">04</option>
                                                <option value="01">05</option>
                                                <option value="01">06</option>
                                                <option value="01">07</option>
                                                <option value="01">08</option>
                                            </select>
                                            <span class="divider">/</span>
                                            <select class="form-control">
                                                <option value="01">2015</option>
                                                <option value="01">2016</option>
                                                <option value="01">2017</option>
                                                <option value="01">2018</option>
                                                <option value="01">2019</option>
                                                <option value="01">2020</option>
                                                <option value="01">2021</option>
                                                <option value="01">2022</option>
                                            </select>
                                            <p class="help-block">
                                                The date your credit card expires. Find this on the
                                                front of your credit card.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Security Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" style="width: 120px"
                                                placeholder="CVC" />
                                            <p class="help-block">
                                                The last 3 digits displayed on the back of your credit
                                                card.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="address">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Address" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-5 col-sm-offset-3">
                                                <input type="text" class="form-control" placeholder="City" />
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control"
                                                    placeholder="Zip/Postal" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-5 col-sm-offset-3">
                                                <input type="text" class="form-control" placeholder="Country" />
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="State" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="action-wrapper text-center">
                                        <h4 class="notes margin-bottom-sm">
                                            You'll be charged
                                            <span class="text-stronger">$99/year</span>
                                        </h4>
                                        <div class="action-btn">
                                            <button class="btn btn-success btn-lg">
                                                Make Payment
                                                <i class="fa fa-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright © Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        ·
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('layoutSidenav_nav').classList.toggle('sb-sidenav-toggled');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
