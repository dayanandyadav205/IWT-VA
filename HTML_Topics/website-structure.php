<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website structure</title>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>
        <h1>Website structure</h1>
        <pre>
    1. A website structure is the way a website’s content and pages are organized and interconnected.
    2. It involves the hierarchical arrangement of web pages and their relationships to one another.
    3. Website structure helps visitors and search engines navigate and understand the website’s content.
    4. There are four types of website architectures: hierarchical, sequential, matrix, database.
    </pre>

        <h1>Four types of website architectures</h1>
        <pre>
    1. Hierarchical (Tree): Organizes pages top-down from a homepage into categories and subcategories, which suits business and corporate sites.
    2. Sequential (Linear): Guides users step-by-step in a fixed order, which fits tutorials, courses, or checkouts.
    3. Matrix (Webbed): Connects pages with flexible cross-links so users choose their own path, which works well for wikis or reference hubs.
    4. Database (Dynamic): Generates pages from structured data using search and filters, which powers large catalogs or job boards
    </pre>

        <h1>Standard website directory structure</h1>
        <pre>
        my-website/ — The root project folder that holds all files for the site.
1. index.html & about.html — Top-level web pages. index.html acts as the default homepage when visitors open the site, while about.html is a secondary page.
2. css/style.css — Contains the Cascading Style Sheets (CSS) responsible for the visual layout, colors, and typography across the site.
3. js/main.js — Stores JavaScript files that add interactive features and dynamic client-side behavior.
4. images/ — Holds visual media assets, such as logo.svg for site branding and hero.jpg for main banner graphics.
5. includes/ — Stores reusable server-side PHP fragments (header.php and footer.php). Instead of rewriting the navigation bar or footer on every page, these files can be injected wherever needed.
    
Because the includes/ folder uses .php files (header.php and footer.php), your top-level pages (index.html and about.html) would normally need to be saved with a .php extension (e.g., index.php, about.php) and run on a PHP-enabled server for include statements to execute properly

</pre>

        <h3>For more details please download PPT of Unit-II from <a href="/downloads.php">Downloads</a> </h3>


    </main>

    <?php include '../include/footer.php'; ?>

</body>

</html>