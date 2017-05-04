<?php require __DIR__ . '/header.php' ?>
<div class="container">
    <table class="table">
        <caption><?php if ($today) {echo 'Просмотры сегодня';} else {echo 'Просмотры вчера';} ?></caption>
        <thead>
            <tr>
                <th>ID</th><th>IP</th><th>URL</th><th>ОС, браузер</th><th>Referer</th><th>Время</th><th>Местоположение</th><th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                if ($today) {
                    $sql = 'SELECT * FROM `visitor` WHERE `time` >= CURDATE() ORDER BY `id` DESC LIMIT 20';
                } else {
                    $sql = 'SELECT * FROM `visitor` WHERE `time` >= (CURDATE()-1) AND `time` < CURDATE() ORDER BY `id` DESC LIMIT 20';
                }
                foreach ($db->query($sql) as $row) {
                    echo '<tr>';
                    echo html($row['id']);
                    echo html($row['ip']);
                    echo html($row['uri']);
                    echo htmlAgent($row['agent']);
                    echo html($row['referer']);
                    echo htmlTime($row['time']);
                    echo html($row['location']);
                    echo '<td><a class="btn btn-xs right btn-default delete" data-id="' . $row['id'] . '">x</a></td>';
                    echo '<tr>';
                }
            } catch (Exception $e) {
                logWrite($e->getMessage());
            }
            ?>
        </tbody>
    </table>
    <!--<a class="btn btn-xs right btn-default">x</a>-->
</div>
<!-- jQuery -->
<script src="/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
<!-- GetLocation -->
<script>
    $(document).ready(function () {
        $("#getlocation").click(function (e) {
            e.preventDefault();
            $.ajax({
                url: "/admin/getlocation.php",
                async: true
            }).done(function () {
                window.location.reload();
            });
        });

        $(".delete").click(function (e) {
            e.preventDefault();
            var id = $(this).data("id");
            if (confirm("Удалить строку " + id)) {
                $.ajax({
                    data: {
                        id: id,
                        token: "JAjG4ubDX3"
                    },
                    type: "POST",
                    url: "/admin/delete.php",
                    async: true
                }).done(function () {
                    window.location.reload();
                });
            }
        });
    });
</script>
</body>
</html>
