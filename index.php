<?php
   
    require_once "helpers.php";
    require_once "db.php";

    $config = require_once "config.php";

    $pdo = connect($config['dns'], $config['db_username'], $config['db_password']);

    $request = parse_url($_SERVER['REQUEST_URI']);
    $path = explode('/', trim($request["path"], '/'));
  
    if($path[0]) {
        $url = getUrl($pdo, $path[0]);

        if($url) {
            header("Location: ".$url['full_url']);
        } else {
            die('url not found');
        }
    }

    if($_POST['url']) {
        $shortUrl = '';
        $shortUrl = createUrl($pdo, $_POST['url'], getRandString($config['code_length']));
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .main {
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .url-input {
            height: 30px;
            width: 400px;
        }

        .primary-button {
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="main">
        <form method="POST">
            <div class="form-group">
                <input type="text" name="url" class="url-input" required>
                <button type="submit" class="primary-button">convert</button>
            </div>
            <?php if($shortUrl) : ?>
                <div><?php echo 'Your short url: <a href="'.$shortUrl.'" target="_blank">'.$shortUrl.'</a>';?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>