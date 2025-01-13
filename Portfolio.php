<!DOCTYPE html>
<html lang="kr">
<head>
    <link rel="stylesheet" href="design.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
    
    <div class="cr">
    <a class="crud" href="create.php" style="color: gray; text-decoration: none; font-size: 20px;">새로 만들기</a>
    <?php if(isset($_GET['id'])) { ?>
    <a class="crud" href="update.php?id=<?php echo $_GET['id'];?>" style="color: gray; text-decoration: none; font-size: 20px;">수정</a>
    <?php } ?>
    <?php if(isset($_GET['id'])) { ?>
    <a class="crud" href="delete_process.php?id=<?php echo $_GET['id'];?>" style="color: gray; text-decoration: none; font-size: 20px;">삭제</a>
    <?php } ?></div>
    <ol>
        <?php
            
            $list = scandir('./data');
            $i = 0;
            while($i < count($list)){
                if($list[$i] != '.'){
                    if($list[$i] != '..'){
                echo "<li><a class=\"li\" href=\"portfolio.php?id=$list[$i]\" style=\"color: gray; text-decoration: none; font-size: 30px;\">$list[$i]</a></li>\n";
                
            }
        }
        $i = $i + 1;
    }
                
        ?>
    </ol>
    <div class="box">
    <h1>
    <?php
        if(isset($_GET['id'])){
        echo $_GET['id'];
    } else {
        echo "";
    }
    ?>
    </h1>
    <?php
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "";
    }
    ?></div>
</body>
</html>