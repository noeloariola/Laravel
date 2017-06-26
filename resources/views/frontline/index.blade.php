<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/css/frontline/index.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome470/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">


<!---->

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">-->
<!--    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
<!---->

</head>
<body>
<div class="container-fluid main-container">

    <div class="row">
       <div class="col-md-12">













           <div class="visitor-table">
               <h1>{{$title}}</h1>

                   <table class="table table-sm table-hover">
                       <thead class="">
                       <tr>
                           <th>#</th><th>Lastname</th><th>Firstname</th><th>Middlename</th><th>Gender</th>
                           <th>Contact#</th><th>Department</th><th>Purpose</th><th>Address</th><th>T-In</th>
                           <th>T-Out</th><th>E</th><th>L</th>
                       </tr>
                       </thead>
                       <tbody>

                       @foreach($visitors as $visitor)
                       <tr>
                           <th scope="row">{{$visitor->id}}</th><td>{{$visitor->lastname}}</td><td>{{$visitor->firstname}}</td>
                           <td>{{$visitor->middlename}}</td><td>{{$visitor->gender}}</td><td>{{$visitor->contact}}</td>
                           <td>{{$visitor->department}}</td><td>{{$visitor->purpose}}</td><td>{{$visitor->address}}</td>
                           <td>{{$visitor->tin}}</td><td>{{$visitor->tout}}</td>
                           <td><a href="{{'/frontline/'.$visitor->id.'/edit'}}" class="text-warning" name="{{$visitor->id}}">
                                   <i class="fa fa-pencil fa-fw "></i>
                               </a></td>
                           <form action="{{'/frontline/'.$visitor->id}}" method="post">
                             {{csrf_field()}}
                             {{method_field('DELETE')}}
                                <td><button class="btn-secondary" type="submit" style="border: none;">
                                        <i class="fa fa-arrow-right text-danger" aria-hidden="true"></i>
                                    </button></td>
                           </form>
                       </tr>
                       @endforeach

                   </table>
           </div>












<button type="button" class="add" data-toggle="modal" data-target="#exampleModalLong">
    <i class="fa fa-plus text-white"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add new visitor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/frontline" method="post">
                <div class="modal-body">

                    {{ csrf_field() }}
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="firstname"  name="firstname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="lastname" name="lastname" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="middlename" name="middlename" required>
                    </div>

                    <div class="checkbox">

                        Male<input type="checkbox" class="col-md-2" checked="checked" name="gender" value="male">
                        Female<input type="checkbox" class="col-md-2" name="gender" value="female"/>

                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="contact#" name="contact" required="required">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="department" name="department" required="required">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="purpose" name="purpose" required="required"/>
                    </div>

                    <div class="form-group">
                        <textarea name="address" placeholder="address" required="required"></textarea>
                    </div>

                    @if(count($errors) > 0)
                    @foreach($errors as $error)
                    {{$error}}
                    @endforeach
                    @endif
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>





















           <script src="/js/jquery-3.2.1.js"></script>
           <script src="/bootstrap/js/tether.min.js"></script>
           <script src="/bootstrap/js/bootstrap.min.js"></script>

<script>
    $(function () {
        $("#btnAdd").on("click", function () {
            $(".visitor-form-container").slideToggle();
        });

        $(".btn-close-form").on("click", function () {
            $(".visitor-form-container").slideUp()
        });



        $(".add").on("mousedown", function (e) {
            $(".add").on("mousemove", function (e) {
                console.log("clicked");
                mouseX = e.pageX - 20;
                mouseY = e.pageY -20;

                $(".add").animate({left : mouseX, top: mouseY});

            });
        });




    });
</script>


</body>
</html>