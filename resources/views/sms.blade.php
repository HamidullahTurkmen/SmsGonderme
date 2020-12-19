<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel SMS Gonderme</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">

    <div class="row" style="margin-top: 120px;">

        <div class="col-md-offset-3 col-md-6">
            @if(Session::has('success'))
                <div class="alert alert-sucess alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
                    <h4 style="...."><i class="icon fa fa-ban"></i>{{Session('success')}}</h4>

                </div>



            <form action="{{url('sms')}}" method="post">
                 {{csrf_field()}}
                <div class="form-group">
                    <label for="mobile"> Mobile Number </label>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="mobile number">
                </div>
                <button type="submit" class="btn btn-primary">Gonder</button>

            </form>


        </div>

    </div>


</div>










<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
