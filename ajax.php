<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AJAX JSON Example</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="mars.css">
    </head>

    <body>
        <header>
            <?php
                include "menu.php";
            ?>
            <h1>AJAX JSON Example</h1>
        </header>

        <main>
            <h2>Tasks for walking your cat</h2>

            <ul id="ulTasks"></ul>
        </main>

        <script>
            $(document).ready(function() {
                $.ajax({
                    url: "task.json",
                    method: "GET",
                    dataType: "json",
                    success: function(data){
                        data.forEach(task =>  addTaskToUL(task.done));
                    },
                    error: function() {
                        console.log("Could not load file");
                    }
                })

                function addTaskToUL(task, done){
                    let li = $("<li></li>").text(task + " " + done);

                    $("#ulTasks").append(li);
                }
            });
        </script>
    </body>
</html>