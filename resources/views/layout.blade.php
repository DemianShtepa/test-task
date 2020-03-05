<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .p-2 {
            background-repeat:no-repeat;
            background-position:center;
            background-size:contain;
            height:400px;
            width:600px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            position: relative;
        }
        .content {
            width:500px;
            position: absolute;
            top: 250px;
            flex-wrap: wrap;
        }
        body {
            font-family: 'Rubik', sans-serif;
            color: white;
        }
    </style>
</head>
<body>
<div class="d-flex flex-column bd-highlight mb-3 text-center">
    @yield("content")
</div>
</body>
</html>
