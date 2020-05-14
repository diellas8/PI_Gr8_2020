<!DOCTYPE html>
<html>
    <head>
        <title>Kerkesa 1 ajax</title>
        <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
        <script>
            function showSuggestion(str){
                console.log(str);
            }
        </script>
        <body>
        <div class="container">
            <h1>Kerko userat</h1>
            <form>
                Kerko: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
            </form>
        </div>

        </body>

    </head>
</html>
