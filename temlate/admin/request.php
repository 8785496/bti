<div class="container">
    <pre><?php
        $sql = 'SELECT * FROM `request` WHERE `id`=' . $id;
        $row = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        print_r($row)
        ?></pre>
</div>
</body>
</html>
