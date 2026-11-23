<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors</title>
    <style>
        body {
            background-color: #F8F9FA;
        }

        main {
            display: flex;
        }

        .div1 {
            width: 100px;
            height: 100px;
            background-color: orange;
        }

        .div2 {
            width: 100px;
            height: 100px;
            background-color: lemonchiffon;
        }
    </style>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <h1>CSS colors</h1>
    <pre>
    <h2>Syntex</h2>
    .div1 {
            width: 100px;
            height: 100px;
            background-color: orange;
        }


     .div2{
            width: 100px;
            height: 100px;
            background-color: lemonchiffon;
        }
    </pre>
    <main>
        <div class="div1">
            <p>Orange</p>
        </div>

        <div class="div2">
            <p>Lemon</p>
        </div>


    </main>

    <?php include '../include/footer.php'; ?>

</body>

</html>