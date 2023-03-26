<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Assíncrono</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="title m-b-md">
               <h1>Laravel Assíncrono</h1>
            </div>
            <div class="links">
                <form method="post" action="/upload" enctype="multipart/form-data">
                    @csrf
                    <label for="arquivo" type="button" class="btn btn-warning" aria-label="Left Align">
                        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                    </label>
                    <input type="file" name="arquivo" id="arquivo" class="hide">
                    <button type="submit" class="btn btn-success" aria-label="Left Align">
                        <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>
