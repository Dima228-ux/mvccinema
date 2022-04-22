<?php $session = $data; ?>

<h1 align="center">Edit Session form</h1>
<form method="post" action="/admins/editSessions" >
    <input type='text' value="<?=$session->Id?>" hidden="hidden" name='id'>
    <div ><label style="size:4px">Title movie:<input  type="text" name="title" value="<?=$session->Title?>"></label></div>
    <div><label>Genre:<input type="text" name="genre" value="<?=$session->Genre?>"></label></div>
    <div><label>Start session:<input type="date" name="start" value="<?=$session->Start?>"></label></div>
    <div><input style="color: cadetblue" type="submit" value="Edit Session"></div>
</form>
