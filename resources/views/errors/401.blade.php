<!DOCTYPE html>
<html>
<head>
    <title>Be right back.401</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #70201f;
            display: table;
            font-weight: 100;
            font-family: 'Consolas';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 24px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Bạn không thể truy cập vào trang này</div>
        <a href="{{route('home')}}">Trang chủ</a>
    </div>
</div>
</body>
</html>
