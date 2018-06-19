<?php
require_once 'app/header.php';
require 'db.php';
if ( !isset ($_SESSION['logged_user']) ) {
    echo "<script>window.location.href='/login.php'</script>";
}
$cards = R::findAll('cards');
?>
<div class="card-table">
    <p style="text-align: right; margin: 0;">
    	<a href="/">Главная</a>
        <a href="logout.php">Выход</a>
    </p>
    <div class="">
        <table border="1px" width="100%">
            <thead>
                <tr>
                    <th class="text-center">№</th>
                    <th class="text-center">ФИО</th>
                    <th class="text-center">Документ</th>
                    <th class="text-center">Номер карты</th>
                    <th class="text-center">Дата окончания карты</th>
                    <th class="text-center">Тип скидки</th>
                    <th class="text-center">Скидка</th>
                </tr>
            </thead>
            <tbody>
        	<?php foreach ($cards as $card): ?>
        		<?php $type = $card["discount_type"] ? "Срок по карте" : "Срок по документу" ?>
                <tr class="item">
                    <td class="text-center"><?= $card["id"] ?></td>
		            <td class="text-center"><?= $card["family_name"] ?> <br><?= $card["family_surname"] ?> <br><?= $card["family_middlename"] ?></td>
		            <td class="text-center"><?= $card["doc_serial"] ?><br><?= $card["doc_number"] ?></td>
		            <td class="text-center"><?= $card["card_number"] ?></td>
		            <td class="text-center"><?= $card["card_date"] ?></td>
		            <td class="text-center"><?= $type ?></td>
		            <td class="text-center"><?= $card["discount"] ?>%</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
