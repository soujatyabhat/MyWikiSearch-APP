<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title> MyWiki Search </title>
    <?php
            if(isset($_REQUEST['add']))
            {
                $value = htmlspecialchars($_REQUEST['search']);
                header("location:https://en.wikipedia.org/wiki/Special:Search?search=$value");
            }
    ?>
</head>
<body>
<center>
<img src = "globe.gif" width = "200px" height = "200px">
<br>
<br>
<p style = "font-size:25pt"><small style = "color:red">My</small><strong><span style = "font-family:Ink Free; font-size:35pt; text-shadow: 2px 2px pink;color:green">Wiki<span></strong><small style="color:blue">Search</small></p>
</center>
    <div class = "container">
        <form method = "POST" class = "form">
            <div class="input-group mb-2" >
                <input type ="search" name = "search" class = "form-control" style = "padding:20px" required>
                    <div class="input-group-append">
                        <span class="input-group" id="basic-addon2"> <button type ="submit" name = "add" class = "btn btn-success" style = "width:80px"> <i class="fas fa-search-plus"></i> </button>
                    </div>
            </div>
        </form>
    </div>
</body>
</html>