<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>添加分类~~</title>

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
            padding-left: 1050px;
        }
    </style>
</head>
<body>
<form method="POST" action="test">
<div class="flex-center position-ref full-height">
    <h3>增加分类</h3>
    <div class="content">
        分类ID:<input type="text" name="id">
        模块ID:<input type="text" name="modules">
        商家ID:<input type="text" name="shop_id">
        排序:<input type="text" name="order_by">
        分类名称:<input type="text" name="name">
        状态:<input type="text" name="status">
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
