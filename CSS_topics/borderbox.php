<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Border Box</title>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>
        <h1>Borders and Boxes</h1>


        <h2>The CSS Box Model</h2>
        <pre>
            1. In CSS, the term "box model" is used when talking about web design and layout.
            2. The CSS box model is essentially a box that wraps around every HTML element.
            3. Every box consists of four parts: content, padding, borders and margins.
            4. The image illustrates the CSS box model:
            <div>
            <img src="/images/borderbox1.jpg" alt="borderbox">
        </div>
        </pre>

        <h2>CSS Margins</h2>
        <pre>
            The CSS margin properties are used to create space around elements, outside of any defined borders.
            Margins define the distance between an element's border and the surrounding elements.
            CSS has properties for specifying the margin for each side of an element:
           
                1 margin-top - sets the top margin of an element
                2 margin-right - sets the right margin of an element
                3 margin-bottom - sets the bottom margin of an element
                4 margin-left - sets the left margin of an element

            All the margin properties can have the following values:
            auto - the browser calculates the margin
            length - specifies a margin in px, pt, cm, etc.
            % - specifies a margin in % of the width of the containing element
            inherit - specifies that the margin should be inherited from the parent element
                    </pre>

        <h2>CSS Padding</h2>
        <pre>
    The CSS padding properties are used to generate space around an element's content, inside of any defined borders.
        CSS has properties for specifying the padding for each side of an element:
        padding-top - sets the top padding of an element
        padding-right - sets the right padding of an element
        padding-bottom - sets the bottom padding of an element
        padding-left - sets the left padding of an element

        <b>All the padding properties can have the following values:</b>
        length - specifies a padding in px, pt, cm, etc.
        % - specifies a padding in % of the width of the containing element
        inherit - specifies that the padding should be inherited from the parent element
        Note: Negative values are not allowed.

</pre>
<h2>CSS Margins/Padding/Border Source code example</h2>
        <pre>
            
                /*=========== Aside main CSS========= */
                    aside {
                        background-color: #0B3C5D;
                        flex: 30%;
                    }

                    .myprofile {
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        text-align: center;
                        padding-left: 20px;
                        padding-right: 20px;
                        padding-bottom: 20px;
                        padding-top: 20px;
                        /* padding: 20px; */
                        /* border-left: 5px solid red;
                        border-right: 20px solid white;
                        border-top: 20px solid orange;
                        border-bottom: 20px solid yellow; */
                        border: 5px solid white;

                        /* margin-left: 20px;
                        margin-right: 20px;
                        margin-top: 20px;
                        margin-bottom: 20px; */

                        margin: 20px;

                        text-align: justify;
                    }

                    .myimage {
                        text-align: center;
                    }


                    aside img {
                        width: 100px;
                        height: 100px;
                        border-radius: 50%;
                    }

                    aside p {
                        color: white;
                    }

                    main {
                        background-color: #ffffff;
                        flex: 80%;
                        padding: 20px;
                    }

                    .cdgi-img {
                        text-align: center;
                    }

                    .article1,
                    .article2,
                    .article3,
                    .article4,
                    .article5,
                    .article6 {
                        padding: 20px;
                        border: 2px solid black;
                        margin: 20px;
                    }

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
        <h3>Please also refer index.php page and style.css where we used Borders and Boxes properties in classroom session</h3>
    </main>
    <br>
    <?php include '../include/footer.php'; ?>

</body>

</html>