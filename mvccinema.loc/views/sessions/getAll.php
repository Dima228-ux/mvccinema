<div class="mb-3">
    <a class="btn btn-primary" href="/admins/registrationForm">Админ</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Genre</th>
        <th scope="col">Sessions Start</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $sessions): ?>
        <tr scope="row">
            <td><?= $sessions->Title ?></td>
            <td><?= $sessions->Genre ?></td>
            <td><?= $sessions->Start ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
