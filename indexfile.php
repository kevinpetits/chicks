<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <a href="index.php" class="text-light text-xl float-right p-4">Go to FizzBuzz Test</a>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger" style="display: none;" id="validate"></div>
                        <form id="fileform" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">File for File extension Test:</label>
                                <input type="file" id="filetest" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" id="filebutton">Test</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-light">
            <div class="row p-4"> <h6 class="col-md-3"> Name</h6>
                    <h6 class="col-md-2"> Extension </h6></div>
           
                <div class="row p-4">
                    
                    <div class="col-md-3" id="path"></div>
                    <div class="col-md-2" id="extension"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>