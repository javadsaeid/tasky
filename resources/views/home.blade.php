<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .grid{
        display: grid;
        grid-template-rows: 100px 1fr;
        grid-template-columns: repeat(3, 1fr);
        grid-template-areas: "header header header" "aside main ads";
    }
    .header {
        grid-area: header;
        background-color: #9ca3af;
    }
    h1 {
        font-size: 1.6rem;
    }
</style>
<body>
    <div class="grid">
        <div class="header"><h1>header</h1></div>
        <div class="aside">
            Aside
        </div>
        <div class="main">
            Main
        </div>
        <div class="ads">
            Ads
        </div>
    </div>
</body>
</html>
