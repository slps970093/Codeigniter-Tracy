<h1>Session</h1>

<div class="tracy-inner">
    <div class="tracy-inner-container">
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>content</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION as $key => $val) { ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?php var_dump($val); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
