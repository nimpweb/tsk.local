<div class="row page-titles">
    <div class="col p-0">
        <h4>Полный<span> список пользователей</span></h4>
    </div>
    <div class="col p-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Безопасность</a>
            </li>
            <li class="breadcrumb-item active">Список пользователей</li>
        </ol>
    </div>
</div>
<?php if ($userList):  ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Список пользователей</h4>

        <div class="button-group">
            <div class="btn-group">
                <div class="btn-group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">действие</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=ADMIN?>/user/add">Добавить нового</a>
                        <a class="dropdown-item" href="#">Dropdown link</a>
                    </div>
                </div>
                <button type="button" class="btn btn-primary">1</button>
                <button type="button" class="btn btn-primary">2</button>

            </div>
        </div>

        <br>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">login</th>
                    <th scope="col">email</th>
                    <th scope="col">Role</th>
                    <th scope="col">vk_code</th>
                    <th scope="col">ФИО</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($userList as $user): ?>
                <tr role="row" onclick="window.location.href='<?=ADMIN?>/user/edit?id=<?=$user['id']?>'">
                    <td><?=$user['login']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=\app\models\User::getRoleName($user['role'])?></td>
                    <td><?=$user['vk_code']?></td>
                    <td>
                        <?=$user['f_name'] . ' '. $user['n_name'].' '. $user['o_name'] ?>
                    </td>
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php else: ?>
<p>Пользователей не обнаружено!</p>
<?php endif; ?>