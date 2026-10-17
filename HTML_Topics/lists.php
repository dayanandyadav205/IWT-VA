<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists</title>
    <link rel="stylesheet" href="/style.css">

    <style>
        .List-container {
            padding: 50px;
            margin: 20PX;
    </style>

    }



</head>

<body>
    <?php include '../include/header.php'; ?>

    <div class="List-container">


        <h1>Lists</h1>

        <h5>Ordered List</h5>
        <ol>
            <li>fsfdgf</li>
        </ol>
        <ol>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ol>

        <h5>Unordered List</h5>
        <ul>
            <li>pen</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>


        <h5>Nested List</h5>
        <ul>
            <li>pen</li>
            <ul>
                <li>Montex</li>
                <li>Reynolds</li>

            </ul>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>



    </div>
</body>

</html>