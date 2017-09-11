<head>
    <meta charset="utf-8">
    <title>Intellibase Inc. | php test</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <style type="text/css">
        body{
            background-color: #00111f;
            color: darkgreen;
            padding: 0;
            margin: 0;
        }

        .col-sm-4{
            background-color: chartreuse;
            color: black;
            border: 1px solid white;
            border-radius: 5px;
            padding: 0;
            text-align: center;
            width: 500px;
        }

        .panel-body{
            background-color: white;
            color: black;
            padding: 30px;
        }

        #test .row {
            width: 100px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
  </head>
  <body>

    <div class="container" role="main">

      <div class="jumbotron text-center" style="text-align: center; color: #fff;">
        <h1>[PHP] Test page</h1>
      </div>
      <div class="container">
        <h3>Popover Example</h3>
          <a href="#" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="https://upload.wikimedia.org/wikipedia/commons/5/58/PikiWiki_Israel_16825_akko_from_the_sea_panoramic_picture.JPG">Click me</a>
      </div>

      
    </div> <!-- #/login ./container r/main -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>