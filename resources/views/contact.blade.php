<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>adminLTE test</title>
    <!-- for responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="{{asset("AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- adminLTE style -->
    <link href="{{asset("AdminLTE-2.3.0/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("AdminLTE-2.3.0/dist/js/app.js")}}"  type="text/javascript" />
</head>
<body class="skin-blue-light">
    <div class="wrapper">

        <!-- トップメニュー -->
        <header class="main-header">

            <!-- ロゴ -->
            <a href="" class="logo">システム</a>

            <!-- トップメニュー -->
            <nav class="navbar navbar-static-top" role="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="">顧客管理</a></li>
                    <li><a href="">社員管理</a></li>
                    <li><a href="">部署管理</a></li>
                    <li><a href="">勤怠管理</a></li>
                </ul>
            </nav>

        </header><!-- end header -->


        <!-- サイドバー -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">

                    <!-- メニューヘッダ -->
                    <li class="header">グループウェア</li>

                    <!-- メニュー項目 -->
                    <li><a href=""　data-skin="skin-blue"><i class="fa fa-eye"></i>スケジュール管理</a></li>
                    <!-- メニュー項目 -->
                    <li><a href="">ワークフロー</a></li>

                    <!-- メニューヘッダ -->
                    <li class="header">営業管理</li>
                    
                    <!-- メニュー項目 -->
                    <li><a href="">見積</a></li>
                    <!-- メニュー項目 -->
                    <li><a href="">請求</a></li>
                    <li><a href="">収入</a></li>

                </ul>
            </section>
        </aside><!-- end sidebar -->


        <!-- content -->
        <div class="content-wrapper">

            <!-- コンテンツヘッダ -->
            <section class="content-header">
                <h1>PAGE TIELE</h1>
            </section>

            <!-- メインコンテンツ -->
            <section class="content">

                <!-- コンテンツ1 -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">ボックスタイトル</h3>
                    </div>
                    <div class="box-body">
                        <p>ボックスボディー</p>
                        <div>岡本さん</div>
                    </div>
                </div>

            </section>

        </div><!-- end content -->


        <!-- フッター -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">Version1.0</div>
            <strong>Copyright &copy; 2015</strong>, All rights reserved.
        </footer><!-- end footer -->


    </div><!-- end wrapper -->
    <!-- JS -->

    <!-- jquery -->
    <script src="{{asset("AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js")}}" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="{{asset("AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <!-- adminLTE -->
    <script src="{{asset("AdminLTE-2.3.0/dist/js/app.min.js")}}" type="text/javascript"></script>
</body>
</html>