<div class="container">
    <table class="table">
        <caption>Письма</caption>
        <thead>
            <tr>
                <th>ID</th><th>Дата</th><th>Email</th><th>Имя</th><th>Сообщение</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                $sql = 'SELECT * FROM `email` ORDER BY `id` DESC LIMIT 20';
                foreach ($db->query($sql) as $row) {
                    echo '<tr>';
                    //echo html($row['id']);
                    echo '<td><a href="/admin/email.php?id=' . $row['id'] . '">' . $row['id'] . '</a></td>';
                    echo htmlDate($row['time']);
                    echo html($row['email']);
                    echo html($row['name']);
                    echo html($row['body']);
                    echo '<tr>';
                }
            } catch (Exception $e) {
                logWrite($e->getMessage());
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
