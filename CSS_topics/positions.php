<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS The position Property</title>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>
        <h1>CSS The position Property</h1>
        
        <pre>
        * CSS positioning is about controlling the placement of elements within a web page.
        * With CSS positioning, you can override the normal document flow.

        The position property specifies the positioning type for an element.
        This property can have one of the following values:
        1 Sticky
        2 relative
        3 absolute
        
        Elements are then positioned to their final location with the top, bottom, left, and right properties.

    </pre>

        <h2>Sticky Positioning</h2>
        <pre>
        nav {
            background-color: #0B3C5D;
            padding: 20px;
            position: sticky;
            top: 0;
        }
    </pre>

        <h2>Relative and Absolute Positioning</h2>
        <pre>
    .article2 {
            position: relative;
        }

        .article2-child {
            position: absolute;
            left: 1280px;
            top: -10px;
            background-color: red;
            color: white;
            border: 2px solid black;
            border-radius: 10px;
        }
</pre>
<br/>
        <h3>Please also refer index.php page and style.css where we used position properties in classroom session</h3>

    </main>

    <?php include '../include/footer.php'; ?>
</body>

</html>