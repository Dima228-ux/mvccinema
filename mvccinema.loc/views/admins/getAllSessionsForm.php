<table class="table">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Genre</th>
        <th scope="col">Sessions Start</th>
    </tr>
    </thead>

    <tbody>
    <?php
      $data = 1;
    foreach ($data as $sessions){
       echo "
        <tr scope='row'>
            <td>
                <form method='POST' action='/admins/deleteSessions'>
                    <input type='text' value='" . $sessions->Id . "hidden='hidden' name='id'>
                    <input type='submit'  value='Delete'>
                </form>
            </td>
            <td>
                <form method='post' action='/admins/editSessionsForm'>
                    <input type='text' value=" . $sessions->Id . "hidden='hidden' name='id'>
                    <input type='submit'  value='Edit'>
                </form>
            </td>
        </tr>";
    }?>

    </tbody>
</table>
<form method='post' action='/admins/addSessionsForm'>
    <input style="color:Green" type='submit' value='Add Movie'>
</form>

<form method='post' action='/sessions/getAll'>
    <input style="color:Red" type='submit' value='Выйти'>
</form>







