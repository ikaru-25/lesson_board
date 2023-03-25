<html>
<head>
    <title>PHP 掲示板</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-info mx-auto text-light">掲示板</nav>
    <div class="mx-auto " style="width: 500px;">
        <form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>" class="mt-5">
            <div>
                <input type="text" name="personal_name" placeholder="作成者"><br><br>
            </div>
            <div>
                <textarea name="contents" rows="8" cols="40" placeholder="内容"></textarea>
            </div>

            <div>
                <input type="submit" class="btn btn-info mt-5" name="btn1" value="投稿する">
            </div>
        </form>

        <?php
        $personal_name = $_POST['personal_name'];
        $contents = $_POST['contents'];
        $contents = nl2br($contents);

        print('<p>投稿者:'.$personal_name.'</p>');
        print('<p>内容:</p>');
        print('<p>'.$contents.'</p>');
        ?>
    </div>
</body>
</html>