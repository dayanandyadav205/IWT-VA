<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>


        <h1>Borders and Boxes</h1>

        <div>
            <img src="/images/borderbox1.jpeg" alt="">
        </div>

        <div>
            <img src="/images/borderbox2.jpeg" alt="">

        </div>


        <div>
            <img src="/images/borderbox3.jpeg" alt="">

        </div>

        <pre>
            CSS Margins/Padding/Border Source code example
                .myprofile {
                display: flex;
                flex-direction: column;
                justify-content: center;
                border-bottom: 10px solid red;
                border-top: 10px solid green;
                border-left: 10px solid blue;
                border-right: 10px solid yellow;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 20px;
                padding-bottom: 20px;
                text-align: justify;
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: 20px;
                margin-right: 20px;
                }
        </pre>

        <h3>Please also refer index.php page and style.css where we used Borders and Boxes properties in classroom session</h3>

    </main>
    <br><br>


    <?php include '../include/footer.php'; ?>

</body>

</html>