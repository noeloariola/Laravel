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

<div class="container">
    <form action="/frontline" method="post">
        {{ csrf_field() }}
        <h1>{{$title}}</h1>
        <div class="form-group">
            <input type="text" required="required" name="firstname"/>
            <label class="control-label" for="input">First Name</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="text" required="required" name="lastname"/>
            <label class="control-label" for="input">Last Name</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="text" required="required" name="middlename"/>
            <label class="control-label" for="input">Middle Name</label><i class="bar"></i>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" checked="checked" name="gender" value="male" /><i class="helper"></i>Male
            </label>
            <label>
                <input type="checkbox" name="gender" value="female"/><i class="helper"></i>Female
            </label>
        </div>
        <div class="form-group">
            <input type="number" name="contact" required="required"/>
            <label class="control-label" for="input">Contact Number</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="text" name="department" required="required"/>
            <label class="control-label" for="input">Department</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <input type="text" name="purpose" required="required"/>
            <label class="control-label" for="input">Purpose</label><i class="bar"></i>
        </div>
        <div class="form-group">
            <textarea name="address" required="required"></textarea>
            <label class="control-label" for="textarea">Address</label><i class="bar"></i>
        </div>
        <div class="button-container">
            <button class="button" type="submit"><span>Submit</span></button>
        </div>
        @if(count($errors) > 0)
            @foreach($errors as $error)
                {{$error}}
            @endforeach
        @endif
    </form>

</div>


<script>
    $(function () {

    });
</script>
</body>
</html>