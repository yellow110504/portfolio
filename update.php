<!DOCTYPE html>
<html lang="kr">
<head>
    <!-- <script>export const htmlToText = (html) => {
    const newHtml = html.replace(/<\/?[^>]+(>|$)/g, '');
    return newHtml;
}
document.getElementById("des").innerHTML = htmlToText(<?php echo file_get_contents("data/".$_GET['id']);?>);
</script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
    <p><input type="text" name="title" id="title" placeholder="제목"value="<?php echo $_GET['id'];?>"></p>

    <p><Textarea name="des" id='des'><?php echo file_get_contents("data/".$_GET['id']);?></Textarea></p>
    <p><input type="submit"></p></form>
</body>
</html>