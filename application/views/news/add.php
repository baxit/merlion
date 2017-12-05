<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    <input type="text" name="title"/><br/><br/>
    <textarea name="text" cols="30" rows="10" id="add_text"></textarea><br/><br/>
    <input type="datetime" name="datetime"/><br/><br/>
    <input type="submit"/>
</form>
<script>
    CKEDITOR.replace("add_text");
</script>
</body>
</html>