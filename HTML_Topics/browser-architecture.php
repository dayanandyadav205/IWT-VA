<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Browser Architecture</title>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>
        <h1>Web Browser Architecture</h1>
        <h2>Web Browser </h2>
    <pre>
    A web browser is a software application used to access, retrieve, and view websites on the World Wide Web. 
    Popular Web Browsers
    1 Google Chrome: The most popular browser worldwide, known for its speed, simplicity, and deep integration with Google services, though it uses a lot of memory (RAM). 
    2 Apple Safari: The default and most efficient browser for Apple devices like Macs, iPhones, and iPads. 
    3 Microsoft Edge: The default Windows browser that includes built-in AI tools like Copilot and good power efficiency. 
    4 Mozilla Firefox: A privacy-first, open-source browser that does not use the standard Chromium engine. 
    5 Brave: A security-focused browser that blocks third-party ads and trackers by default
    </pre>

    <pre>
    The browser's main components are:
    1 The user interface: this includes the address bar, back/forward button, bookmarking menu, etc. Every part of the browser display except the window where you see the requested page.
    2 The browser engine: marshals actions between the UI and the rendering engine.
    3 The rendering engine: responsible for displaying requested content. For example if the requested content is HTML, the rendering engine parses HTML and CSS, and displays the parsed content on the screen.
    4 Networking: for network calls such as HTTP requests, using different implementations for different platform behind a platform-independent interface.
    5 UI backend: used for drawing basic widgets like combo boxes and windows. This backend exposes a generic interface that is not platform specific. Underneath it uses operating system user interface methods.
    6 JavaScript interpreter. Used to parse and execute JavaScript code.
    7 Data storage. This is a persistence layer. The browser may need to save all sorts of data locally, such as cookies. Browsers also support storage mechanisms such as localStorage, IndexedDB, WebSQL and FileSystem.
    </pre>

    <img src="/images/browser-architecture.jpg" alt="browser-architecture">

        <pre>
The browser's main components are:
    1 The user interface: this includes the address bar, back/forward button, bookmarking menu, etc. Every part of the browser display except the window where you see the requested page.
    2 The browser engine: marshals actions between the UI and the rendering engine.
    3 The rendering engine: responsible for displaying requested content. For example if the requested content is HTML, the rendering engine parses HTML and CSS, and displays the parsed content on the screen.
    4 Networking: for network calls such as HTTP requests, using different implementations for different platform behind a platform-independent interface.
    5 UI backend: used for drawing basic widgets like combo boxes and windows. This backend exposes a generic interface that is not platform specific. Underneath it uses operating system user interface methods.
    6 JavaScript interpreter. Used to parse and execute JavaScript code.
    7 Data storage. This is a persistence layer. The browser may need to save all sorts of data locally, such as cookies. Browsers also support storage mechanisms such as localStorage, IndexedDB, WebSQL and FileSystem.

        </pre>

        <h3>For more details please download PPT of Unit-II from <a href="/downloads.php">Downloads</a> </h3>

    </main>


    <?php include '../include/footer.php'; ?>

</body>

</html>