<html>
    <head>
        <link rel="stylesheet" href="pixie/styles.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <pixie-editor>Hola</pixie-editor>
   
        <script src="scripts.min.js"></script>
   
        <script>
            var pixie = new Pixie({
                onLoad: function() {
                    console.log('Pixie is ready');
                }
            });
        </script>
    </body>
</html>