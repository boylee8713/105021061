<!DOCTYPE html>
<html lang="en">
<head>
    <title>時文中 - 首頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">首頁</a></li>
                <li><a href="page1.html">獲獎</a></li>
                <li><a href="page2.html">執行計畫</a></li>
                <li><a href="page3.html">學術服務</a></li>
                <li><a href="page4.html">期刊論文</a></li>
                <li><a href="page5.html">專書論文</a></li>
                <li><a href="page6.html">指導大學生計畫</a></li>
                <li><a href="page6.html">指導論文</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><img src="970101846.jpg" width="250"></p>
        </div>
        <div class="col-sm-8 text-left">
            <h2 align="center">
                <span style="font-size: 1em; color: #050100">歡</span>
                <span style="font-size: 1em; color: #050100">迎</span>
                <span style="font-size: 1em; color: #050100">來</span>
                <span style="font-size: 1em; color: #050100">到</span>
                <span style="font-size: 1em; color: #050100">時</span>
                <span style="font-size: 1em; color: #050100">文</span>
                <span style="font-size: 1em; color: #050100">中</span>
                <span style="font-size: 1em; color: #050100">老</span>
                <span style="font-size: 1em; color: #050100">師</span>
                <span style="font-size: 1em; color: #050100">的</span>
                <span style="font-size: 1em; color: #050100">首</span>
                <span style="font-size: 1em; color: #050100">頁</span>
            </h2>
            <hr>
            <h3 align="center">現職：亞洲大學 資訊工程學系 副教授<br/>
                兼任：亞洲大學 資訊工程學系 系主任<br/>
                學歷：交通大學 資訊科學與工程研究所 博士<br/>
                研究領域：數位學習科技<br/>
                研究專長：知識工程、雲端運算<br/>
                Email: <a href="wjshih@asia.edu.tw">wjshih@asia.edu.tw</a> or <a href="wjshih1@gmail.com">wjshih1@gmail.com</a><br/>
                研究室：HB39<br/>
                分機：20039<br/>
                實驗室: <a href="http://kdelab.aim.asia.edu.tw/">知識與資料工程實驗室I434B</a></h3>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p align="center">

        <span style="color: #ff8f02">亞洲大學資工系 時文中</span>
    </p>
</footer>

</body>
</html>
