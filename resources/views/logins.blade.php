<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>用户登录~~</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {

            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            margin-top: 70px;
        }

        .title {
            font-size: 36px;
            padding-left: 600px;
        }
    </style>
</head>
<body>
<form method="POST" action="test">
    <div class="flex-center position-ref full-height">
        <h3>login</h3>
        <div class="content">
            name:<input type="text" name="name">
            email:<input type="text" name="email">
            password:<input type="text" name="password">
            <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s') ?>">
            <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d H:i:s') ?>">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="title">
                <input type="submit" value="提交">
            </div>
        </div>
    </div>
</form>
</body>
</html>
