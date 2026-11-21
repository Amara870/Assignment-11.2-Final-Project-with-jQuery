<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Fetch Data</title>
</head>
<body>
    <div id="divData"></div>

    <script>
        // function to get our json data from data.php
        async function fetchData(){
            try{
                // set up a response variable
                let response = await fetch("data.php");

                // there was a problem with fetching the data
                if (!response.ok){
                    // throw an error that we will then handle
                    throw new Error(`Error: ${response.status}`);
                }

                // if we get here, everything is good to go - get the data
                let data = await response.json();
                // send the data to a function to display the data
                displayData(data);
            }
            catch (error){
                // this is just for testing - don't display this kind of info in the console in a live website
                console.error("Error with getting the data", error);
            }
        }

        // display the data on the page
        function displayData(data){
            // build a string of HTML characters
            let html = '';

            // loop through the data
            for (let i=0; i<data.length; i++){
                html += `<p>${data[i].name}: ${data[i].value}</p>`;
            }

            // add the string of formatted HTML to the div
            document.getElementById("divData").innerHTML = html;
        }

        // let's fetch the data - after the DOM has loaded
        window.addEventListener('DOMContentLoaded', fetchData);
    </script>
</body>
</html>