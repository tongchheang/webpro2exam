<!DOCTYPE html>
<html lang="ja">
<body>
    <ul>
    <?php
        foreach ($model_data as $sale) {
            echo "<li>${sale.id}</li>";
        }
    ?>
    </ul>
</body>
</html>