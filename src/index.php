<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Humble php graveyard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #444;
        }
        h2 {
            text-align: center;
            color: #444;
        }

        h2 a {
            text-decoration: none;
            color: #16537e;
            font-weight: bold;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: center;
        }
        .panel {
            background-color: #fff;
            border-radius: 8px;
            border-left: 8px solid #4CAF50;
            padding: 20px;
            width: calc(25% - 20px);
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .panel:hover {
            transform: scale(1.02);
        }
        .panel a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        @media (max-width: 1000px) {
            .panel {
                width: calc(50% - 20px);
            }
        }
        @media (max-width: 600px) {
            .panel {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Humble php graveyard</h1>
    <h2>By <a href="https://github.com/laluka">@TheLaluka</a></h2>
    <div class="grid">
        <?php
        $files = glob("*.php");
        foreach ($files as $file) {
            $filename = basename($file);
            if ($filename === 'index.php') continue;
            echo "<div class='panel'><a href=\"$file\">$filename</a></div>";
        }
        ?>
    </div>
</body>
</html>
