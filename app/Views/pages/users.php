<section class="page-banner compact">
    <p class="eyebrow">User accounts</p>
    <h1>The crew behind Maaku POS</h1>
    <p>Five sample staff records supplied by a static PHP array in the Users controller.</p>
</section>

<section class="content-section table-section" aria-labelledby="user-table-title">
    <div class="table-heading">
        <div>
            <p class="eyebrow">Staff directory</p>
            <h2 id="user-table-title">Authorized users</h2>
        </div>
        <span class="record-count"><?= count($users) ?> staff users</span>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><span class="row-number"><?= $index + 1 ?></span></td>
                        <td><code><?= esc($user['username']) ?></code></td>
                        <td><strong><?= esc($user['full_name']) ?></strong></td>
                        <td><span class="role-pill"><?= esc($user['role']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <p class="data-note">These are fictional records created for this classroom activity.</p>
</section>
