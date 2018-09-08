<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Weather Scraper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script type="text/javascript"  src="jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css" />

</head>
<body>
    <div class="container" id="backg">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 id = "head">WEATHER SCRAPPER<h1>
                <p class="desc space">This app can tell you the weather at any city you choose!</p>
                <p class="desc space">Hope You Enjoy!</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control"  id = "city_name"name = "city" placeholder="Enter the name of the city: Eg. London, Tokyo..."/>
                    </div>
                    <button class="btn btn-success btn-lg" id ="weatherbutton">Find The Weather</button>
                </form>
            </div>
            <div class="col-md-6 col-md-offset-3 center big_space" >
                <div class="alert alert-success" id="weather_alert" role="alert">
                    <p id="message">Warning! Better check yourself, you're not looking too good.</p>
                </div>  
                <div class="alert alert-danger" id="fail_alert" role="alert">
                    <p id="message">Warning! Better check yourself, you're not looking too good.</p>
                </div>      
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>


