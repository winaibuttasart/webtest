<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create an autocomplete input box with typeahead.js</title>

        <!-- Bootstrap CSS Toolkit styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <div class="container">
            <p class="example-description"> ค้นหาชื่อประเทศ : </p>
            <input id="my-input" class="typeahead" type="text" placeholder="พิมพ์ชื่อประเทศที่ต้องการค้นหา (EN)">
        </div>
        <!-- Load jQuery and the typeahead JS files -->
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="js/typeahead.min.js"></script>

        <script type="text/javascript">
            // Waiting for the DOM ready...
            $(function () {

                // applied typeahead to the text input box
                $('#my-input').typeahead({
                    name: 'countries',

                    // data source
                    prefetch: 'data/countries.json',

                    // max item numbers list in the dropdown
                    limit: 10
                });

            });
        </script>

        <p> 
        <br> <br>  <br>  <br>  <br>  <br>  <br>  <br>  
        <br> <br>  <br>  <br>  <br>  <br>   <br>  <br>  
        </p>

        <div class="container">
            <p class="example-description"> ค้นหาผักผลไม้ : </p>
            <input id="my-input1" class="typeahead" type="text" placeholder="พิมพ์ชื่อผักหรือผลไม้ที่ต้องการค้นหา (ไทย)">
        </div>
        <script type="text/javascript">
            // Waiting for the DOM ready...
            $(function () {

                // applied typeahead to the text input box
                $('#my-input1').typeahead({
                    name: 'list',

                    // data source
                    prefetch: 'data/list.json',

                    // max item numbers list in the dropdown
                    limit: 10
                });

            });
        </script>


    </body> 
</html>