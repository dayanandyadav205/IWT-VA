<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Selectors</title>
    <style>
        img {
            width: 700px;
            height: 200px;
        }
    </style>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>
        <h1>Cascading Style Sheets</h1>
        <pre>
            What is CSS?
              1. CSS stands for Cascading Style Sheets.
              2. CSS is the language we use to style an HTML document.
              3. CSS describes how HTML elements should be displayed.
              4. Used to override the default styles of HTML
              5. Inline / Block (Internal) / File Modes (External)
              6. Developed by Håkon Wium Lie and Bert Bos in 1994
        </pre>

        <h1>CSS Syntex</h1>
        <pre>
        body{
            color:navy;
        }

        where
             Selector: body
             Property: color
             Value: navy 
       </pre>


        <h1>Types of CSS Selectors</h1>
            <pre>
             1. Element Selector
                h1, h2, h3 {
                     color: #FFFFFF;
                   }


            2. Id Selector 
                #menu {
                    display: none;
                }


            3. Class Selector 
                .dropdown {
                    display: inline-block;
                    position: relative;
                }


            4. Attribute Selector
            label[for="menu"] {
                display: none;
            }
            

            5. Pseudo Selector
                nav ul a:hover {
                    background-color: #06B6D4;
                }


            6. complex selector
                 #menu:checked~nav {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        padding: 10px; } 

            </pre>

            <h1>All above selectors we have already used in our style.css file   <mark>C:\xampp\htdocs\css\style.css</h1></mark>
            <br>
    </main>

    <?php include '../include/footer.php'; ?>
</body>

</html>