<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Video</title>
    <?php 
        if($_GET['link']) {
            $file_url = exec('python3 script.py '.$_GET['link'], $return);
            try {
                header("Location: ".$file_url);
            } catch(Exception $e) {
                echo "Não foi possível localizar o link".$e->getMessage();
            }
        }
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #283747;
            color: white !important;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="mb-3 mt-4">
            <h1>Download youtube videos with Php and Python</h1>
        </div>
        
        <div style="margin-top:5%;">
            <form method="GET">
                <div class="d-flex gap-3">
                    <h2 for="link">Link</h2>
                    <input id="link" type="text" name="link" class="form-group  ">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
        <p class="mt-4">When the form is submited the python code generate a link wich can be used by php script
            <br> wich will redirect to a other page then you can watch or download the video
        </p>

        <h3> Hope this help you ;) </h3>
    </div>
</body>
</html>