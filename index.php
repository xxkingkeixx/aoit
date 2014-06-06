<?php
 require "connection.php";
 
                   


// escape variables for security
$a = mysql_real_escape_string ($_POST['a']);
$b = mysql_real_escape_string ($_POST['b']);
$c = mysql_real_escape_string ($_POST['c']);

$sql="INSERT INTO test (a,b,c) VALUES ('$a', '$b', '$c')";

mysql_query("INSERT INTO test (a,b,c) 
VALUES ('$a', '$b', '$c')");

 ?>


 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio</title>
        <link href="asset/jquery.minicolors.css" rel="stylesheet">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <style>
            body {
                background: url("asset/clouds.jpg");
            }

            .form-control {
                border:0;
                border-radius: 0;
                margin-bottom: 20px;
            }

            .download_color {
                border:0;
                padding: 10px 15px;
                background:#F2660D;
                color:#fff;
            }

            .frame {
                width: 300px;
                margin: auto;
                text-align: center;
                position: relative;
                z-index: 9;
            }

            h4 {
                color:#fff;
            }
            img {
                max-width: 100%;
            }

            h1 {
                font-size: 54px;
                color:#fff;
                font-weight: 900;
                text-align: center;
                margin-bottom: 60px;
                font-family: 'Ubuntu', sans-serif;
            }

            .color {
                color:#00000;
                font-size: 80px;
                display: block;
                margin-bottom: 20px;
            }
            
            .text-center {
                text-align: center;
            }
            
            .wrapper {
                position: fixed;
                background:url('asset/bg.png');
                width: 100%;
                height: 100%;
            }

        </style>
    </head>
    <body>
        <div class='wrapper'></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1><span class="color">Suko.Tv</span></h1>
                </div>
            </div>
            <div class="center">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <a href='dashboard/index.php'><img src="asset/dark.png" alt="dark"></a>
                </div>
            </div>
        
        </div>

        <!-- script -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="asset/jquery.minicolors.js"></script>
        <script type="text/javascript" src="asset/less.min.js"></script>
        <script type="text/javascript" src="asset/jszip.min.js"></script>
        <script type="text/javascript" src="asset/FileSaver.js"></script>
        <script>

            (function($) {
                $(document).ready(function() {
                    var parser = new (less.Parser), lessFiles = {};
                    var zip = new JSZip();

                    $.get('base.less', function(data) {
                        lessFiles.core = data;
                    });

                    $("#form-download-css").on('submit', function() {
                        var mod = '@base: ' + $(".minicolor").val() + ';';
                        var style_css = {css: "", cssmin: ""};

                        parser.parse(mod + lessFiles.core, function(err, tree) {
                            if (err) {
                                return console.error(err)
                            }
                            style_css.css = tree.toCSS({compress: false});
                            style_css.cssmin = tree.toCSS({compress: true});
                        });

                      
                    $(".minicolor").minicolors({
                        control: $(this).attr('data-control') || 'hue',
                        defaultValue: $(this).attr('data-defaultValue') || '',
                        inline: $(this).attr('data-inline') === 'true',
                        letterCase: $(this).attr('data-letterCase') || 'lowercase',
                        opacity: $(this).attr('data-opacity'),
                        position: $(this).attr('data-position') || 'bottom left',
                        change: function(hex, opacity) {
                            if (!hex)
                                return;
                            if (opacity)
                                hex += ', ' + opacity;
                            try {
                                console.log(hex);
                            } catch (e) {
                            }
                        },
                        theme: 'bootstrap'
                    });


                });

            })(this.jQuery);

        </script>
    </body>
</html>