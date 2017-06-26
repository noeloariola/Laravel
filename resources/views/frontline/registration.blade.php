<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <script src="/js/jquery-3.2.1.js"></script>

</head>
<body>
<!---->
<!--<div class="container">-->
<!--    <div class="login-container">-->
<!--        <div class="vertical-align">-->
<!--            <h1>Front line</h1>-->
<!--            <form class="">-->
<!--                <div><input type="text" class="" name="username" id="username"></div>-->
<!--                <div><input type="password" class="" name="password" id="password"></div>-->
<!--                <input type="submit" value="login" class="btn" id="btnLogin">-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->





<div class="container">
    <form>
        <h1>Front line</h1>

        <div class="form-group">
            <input type="text" required="required"/>
            <label class="control-label" for="input">First Name</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="text" required="required"/>
            <label class="control-label" for="input">Last Name</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="text" required="required"/>
            <label class="control-label" for="input">Middle Name</label><i class="bar"></i>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" checked="checked" name="gender"/><i class="helper"></i>Male
            </label>
            <label>
                <input type="checkbox" name="gender"/><i class="helper"></i>Female
            </label>
        </div>
        <div class="form-group">
            <input type="number" required="required"/>
            <label class="control-label" for="input">Contact Number</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="password" required="required"/>
            <label class="control-label" for="textarea">Branch</label><i class="bar"></i>
        </div>

    </form>
    <div class="button-container">
        <button class="button" type="button"><span>Submit</span></button>
    </div>
</div>




<script>
    $(function () {
        $("#btnLogin").on("click", function () {
            alert("login button test..");
        });
    });
</script>
</body>
</html>