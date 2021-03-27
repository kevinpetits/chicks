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
    <a href="indexfile.php" class="text-light text-xl p-4">Go to File Extension Test with Files HTML</a>
    <a href="extensiontest.php" class="text-light text-xl p-4">Go to File Extension Test</a>
    <a href="objecttest.php" class="text-light text-xl p-4">Go to Object Test</a>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger" style="display: none;" id="validate"></div>
                        <form id="fizzform">
                            <div class="form-group">
                            <label for="">Number for FizzBuzz Test:</label>
                                <input type="number" id="fizznumber" placeholder="0" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" id="fizzbutton">Test</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="fizzresp" class="text-light"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>