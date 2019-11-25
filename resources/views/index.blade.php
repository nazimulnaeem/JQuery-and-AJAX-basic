<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JQuery and AJAX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('jquery-3.4.1.min.js') }}"></script>
</head>
<body>
 


    <div class="container">
    <div class="row mt-5">
    <a href="#" class="btn btn-md btn-primary " id="button1">Button 1</a>
    <a href="#" class="btn btn-md btn-success ml-2" id="button2">Button 2</a>
    <a href="#" class="btn btn-md btn-danger ml-2" id="button3">Button 3</a>
    <a href="#" class="btn btn-sm btn-primary ml-2" id="button4">Button 4</a>
    </div>
    </div>

    <div class="container mt-5">
    <div class="row">
    <div class="col-md-6">
    <div class="form-controll mb-2">
    <input type="text"  id="textbox">
    <button class="btn btn-sm btn-primary" id="submit">Submit</button>
    </div>
    <div class="form-controll">
    <textarea name="" id="display" cols="30" rows="5"></textarea>
    </div>
    </div>
    </div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!-- <script type="text/javascript">
///// if i user it up it do not work becauser js loaded after html
$(".btn-success").hide();
</script> -->


<script type="text/javascript">
    $(function(){
        $("#button1").css("border-radius"," 0px 10px 0px 10px");
        // $(".btn-primary").css("font-size","30px");

        $("#button1").click(function(){
            $("a:not(#button1)").hide();
            $(this).css("font-size","12px");
            $(this).css("color","black");
        });

        

    });
    </script>

    <!-- ========= text box ======= -->
    <script type="text/javascript">
    $(function(){

        $("#submit").click(function(){
            var text = $("#textbox").val();
            $("#display").html(text);
            $("#textbox").val("");
        });
    });
    </script>

</body>
</html>