<!doctype html>
<html lang="en">
  <head>
    <style>

            /* .fof{
                display: table-cell;
                vertical-align: middle;
            } */

            .fof h1{
                /* font-size: 50px; */
                display: inline-block;
                padding-right: 12px;
                animation: type .5s alternate infinite;
            }

            @keyframes type{
                from{box-shadow: inset -3px 0px 0px #888;}
                to{box-shadow: inset -3px 0px 0px transparent;}
            }

            span a {
                cursor: pointer;
                text-decoration: none;
                color: #434242;
	}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>429</title>
  </head>
  <body class="bg-light p-2 text-dark bg-opacity-25">
    <div id="main" class="position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('img/gif/animation_500_libdpn0f.gif') }}" style="width: 400px"></img>
        </div>
        <div class="fof">
            <h1 class="font-monospace">Error 429 | Too many request</h1>
        </div>
         <span>back to 
            <a href="{{ route('login') }}" class="effect-seven">home</a>
        </span>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>