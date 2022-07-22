<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <title>FUll Rest API</title>
</head>
<body>
    <main style=" padding: 0 2rem;">
        <div class=" title">
            <h1>Full Rest API</h1>
        </div>

        <div class=" title">
            <h3>About</h3>
            <ul>
                <li>Full rest API with all Get,Create,Delete and Update methods, pure PHP code communicating with a mysql database.</li>
                <li>API key system.</li>
                <li>PostMan was used to make all requests.</li>
            </ul>
        </div>

        <div class=" title">
            <h3>Run</h3>
            <ul>
                <li>Update config.php configuration file.</li>
                <li>Import the full-rest-api-db file into your database.</li>
                <li>Run a local server.</li>
            </ul>
        </div>

        <div class=" title">
            <h3>End Points</h3>
            <ul>
                <div style=" border-bottom: 1px solid black; padding: 0.5rem;" >
                    <li><a href="http://localhost/full-rest-api/Api/Post/Get.php?apiKey=YOURAPIKEY" target="_blank">http://localhost/full-rest-api/Api/Post/Get.php?apiKey=YOURAPIKEY</a></li>
                    <p style=" margin-left: 2rem;">Send a GET request here to get all posts</p>
                </div>
                
                <div style=" border-bottom: 1px solid black; padding: 0.5rem;" >
                    <li><a href="http://localhost/full-rest-api/Api/Post/Create.php?apiKey=YOURAPIKEY" target="_blank">http://localhost/full-rest-api/Api/Post/Create.php?apiKey=YOURAPIKEY</a></li>
                    <p style=" margin-left: 2rem;">Send a POST request here to create a new post</p>
                </div>

                <div style=" border-bottom: 1px solid black; padding: 0.5rem;" >
                    <li><a href="http://localhost/full-rest-api/Api/Post/Delete.php?apiKey=YOURAPIKEY" target="_blank">http://localhost/full-rest-api/Api/Post/Delete.php?apiKey=YOURAPIKEY</a></li>
                    <p style=" margin-left: 2rem;">Send a DELETE request here to delete a post</p>
                </div>

                <div style=" border-bottom: 1px solid black; padding: 0.5rem;" >
                    <li><a href="http://localhost/full-rest-api/Api/Post/Update.php?apiKey=YOURAPIKEY" target="_blank">http://localhost/full-rest-api/Api/Post/Update.php?apiKey=YOURAPIKEY</a></li>
                    <p style=" margin-left: 2rem;">Send a PUT request here to update a post</p>
                </div>
            </ul>
        </div>

        <div class=" title">
            <h3>Api Keys</h3>
            <ul>
                <li>ygh236t2u4p6</li>
                <li>3b479ytpbrt2</li>
                <li>3g5ufg53iuegv</li>
            </ul>
        </div>

        <div class=" title">
            <h3>Version</h3>
            <p>
                0.2.0
            </p>
        </div>

        
    </main>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .title {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            border-bottom: 1px solid black;
        }
    </style>
</body>
</html>