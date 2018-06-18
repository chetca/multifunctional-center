<?php
require_once 'app/header.php';
require 'db.php';
if ( !isset ($_SESSION['logged_user']) ) {
    header('Location: /login.php');
} 
?>
    <div class="form">
        <p style="text-align: right; margin: 0;">
            <a href="logout.php">Выход</a>
        </p>        
        <form method="post">
            <div class="form-row">
                <label for="name-family-input">ФИО</label><br/>
                <input type="text" id="surname" name="family_surname" placeholder="Фамилия" required>
                <input type="text" id="name" name="family_name" placeholder="Имя" required>
                <input type="text" id="middlename" name="family_middlename" placeholder="Отчество" required>
            </div>
            <div class="form-row">
                <label for="document-input">Документ</label><br/>
                <input type="text" id="doc-serial" name="doc_serial" placeholder="Серия">
                <input type="text" id="doc-number" name="doc_number" placeholder="Номер">
            </div>
            <div class="form-row">
                <label for="creditcard-input">Банковская карта</label><br/>
                <input maxlength="30" pattern="\d*" type="tel" id="card_number" name="card_number" placeholder="Номер карты">
                <input maxlength="4" pattern="\d*" type="tel" id="card_date" name="card_date" placeholder="ММ / ГГ">
            </div>
            <p><input name="discount_type" type="radio" value="0" checked>Скидка по документу</p>
            <p><input name="discount_type" type="radio" value="1">Скидка по карте</p>
            <input type="submit" value="Вход" name="submit" class="input">
        </form>
    </div>
    </body>

    </html>

<?php
if( isset( $_POST["submit"] ) ) {
    $new_user = R::dispense('cards'); 
    $new_user->family_surname = $_POST["family_surname"];
    $new_user->family_name = $_POST["family_name"];
    $new_user->family_middlename = $_POST["family_middlename"];
    $new_user->doc_serial = $_POST["doc_serial"];
    $new_user->doc_number = $_POST["doc_number"];
    $new_user->card_number = $_POST["card_number"];
    $new_user->card_date = $_POST["card_date"];
    $new_user->discount_type = $_POST["discount_type"];
    R::store($new_user);
    echo "<script>alert('Спасибо, Ваши данные сохранены');</script>";
    echo "<script>window.location.href='/'</script>";
}
