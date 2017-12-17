<form method="post">
    <input type="text" name="title" value="<?php echo $x['title'];?>" />
    <br/><br/>
    <textarea name="text" cols="30" rows="10" id="add_text"><?php echo $x['text'];?></textarea><br/><br/>

    <input type="submit"/>
</form>
<script>
    CKEDITOR.replace("add_text");
</script>
