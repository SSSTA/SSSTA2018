<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SS:STA 2018 报名表</title>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    .form-bg{
        background: #00b4ef;
    }
    .form-horizontal{
        background: #fff;
        padding-bottom: 40px;
        border-radius: 15px;
        text-align: center;
    }
    .form-horizontal .heading{
        display: block;
        font-size: 35px;
        font-weight: 700;
        padding: 35px 0;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 30px;
    }
    .form-horizontal .form-group{
        padding: 0 40px;
        margin: 0 0 25px 0;
        position: relative;
    }
    .form-horizontal .form-control{
        background: #f0f0f0;
        border: none;
        border-radius: 20px;
        box-shadow: none;
        padding: 0 20px 0 45px;
        height: 40px;
        transition: all 0.3s ease 0s;
    }
    .form-horizontal .form-control:focus{
        background: #e0e0e0;
        box-shadow: none;
        outline: 0 none;
    }
    .form-horizontal .form-group i{
        position: absolute;
        top: 12px;
        left: 60px;
        font-size: 17px;
        color: #c8c8c8;
        transition : all 0.5s ease 0s;
    }
    .form-horizontal .form-control:focus + i{
        color: #00b4ef;
    }
    .form-horizontal .fa-question-circle{
        display: inline-block;
        position: absolute;
        top: 12px;
        right: 60px;
        font-size: 20px;
        color: #808080;
        transition: all 0.5s ease 0s;
    }
    .form-horizontal .fa-question-circle:hover{
        color: #000;
    }
    .form-horizontal .main-checkbox{
        float: left;
        width: 20px;
        height: 20px;
        background: #11a3fc;
        border-radius: 50%;
        position: relative;
        margin: 5px 0 0 5px;
        border: 1px solid #11a3fc;
    }
    .form-horizontal .main-checkbox label{
        width: 20px;
        height: 20px;
        position: absolute;
        top: 0;
        left: 0;
        cursor: pointer;
    }
    .form-horizontal .main-checkbox label:after{
        content: "";
        width: 10px;
        height: 5px;
        position: absolute;
        top: 5px;
        left: 4px;
        border: 3px solid #fff;
        border-top: none;
        border-right: none;
        background: transparent;
        opacity: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }
    .form-horizontal .main-checkbox input[type=checkbox]{
        visibility: hidden;
    }
    .form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
        opacity: 1;
    }
    .form-horizontal .text{
        float: left;
        margin-left: 7px;
        line-height: 20px;
        padding-top: 5px;
        text-transform: capitalize;
    }
    .form-horizontal .btn{
        float: right;
        font-size: 14px;
        color: #fff;
        background: #00b4ef;
        border-radius: 30px;
        padding: 10px 25px;
        border: none;
        text-transform: capitalize;
        transition: all 0.5s ease 0s;
    }
    @media only screen and (max-width: 479px){
        .form-horizontal .form-group{
            padding: 0 25px;
        }
        .form-horizontal .form-group i{
            left: 45px;
        }
        .form-horizontal .btn{
            padding: 10px 20px;
        }
    }
    </style>        
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <form class="form-horizontal" name="myForm" method="post" action="submit.php">
                <span class="heading">SS:STA 2018 科协报名表</span>
                <div class="form-group">
                    <input type="text" class="form-control"  name="name" placeholder="姓名" required="required"> 
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="邮箱" required="required">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="form-group help">
                    <input type="value" class="form-control"  name="number" placeholder="学号" required="required">
                    <i class="fa fa-id-card"></i>
                </div>
                <div class="form-group help">
                    <input type="value" class="form-control"  name="phone_number" placeholder="手机号" required="required">
                    <i class="fa fa-phone"></i>
                </div>

                <div class="form-group">
                    <select class="form-control" name="group">
                        <option value="Acm">ACM组</option>
                        <option value="Game">Game组</option>
                        <option value="Web">Web组</option>
                        <option value="设计组">设计组</option>
                        <option value="移动开发组">移动开发组</option>
                    </select>                    
                    <i class="fa fa-group"></i>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  name="introduction" placeholder="自我介绍">
                    <i class="fa fa-user-plus"></i>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  name="ps" placeholder="P.S.无论您是小白还是大神，我们都欢迎您。" disabled>
                    <i class="fa fa-bullhorn"></i>
                </div>
                <div class="form-group">
                    <div class="main-checkbox">
                        <input type="checkbox" id="checkbox1" value="None" name="check"/>
                        <label for="checkbox1"></label>
                    </div>
                    <span class="text">已加入科协迎新群</span>
                    <button type="submit" name="submit" class="btn btn-default">报名</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>