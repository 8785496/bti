<div class="container">
    <table class="table">
        <caption>Заявки</caption>
        <thead>
            <tr>
                <th>ID</th><th>Дата</th><th>Цель</th><th>Имя</th><th>Телефон</th><th>Тип объекта</th><th>Тип работ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                $sql = 'SELECT * FROM `request` ORDER BY `id` DESC LIMIT 20';
                foreach ($db->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td><a href="/admin/request.php?id=' . $row['id'] . '">' . $row['id'] . '</a></td>';
                    echo htmlDate($row['time']);
                    echo html($row['target']);
                    echo html($row['name']);
                    echo html($row['phone']);
                    echo html($row['type_object']);
                    echo html($row['type_work']);
                    echo '</tr>';
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
