<template>
  <q-page class="flex flex-center">
    <div class="form">
        <form action="#" method="post">
            <div class="form-row">
                <label for="name-family-input">ФИО</label><br/>
                <input type="text" id="surname" name="surname" placeholder="Фамилия" required>
                <input type="text" id="name" name="name" placeholder="Имя" required>
                <input type="text" id="middlename" name="middlename" placeholder="Отчество" required>
            </div>
            <div class="form-row">
                <label for="document-input">Документ</label><br/>
                <input type="text" id="doc-serial" name="doc-serial" placeholder="Серия">
                <input type="text" id="doc-number" name="doc-number" placeholder="Номер">
            </div>
            <div class="form-row">
                <label for="creditcard-input">Бановская карта</label><br/>
                <input type="text" id="doc-number" name="doc-number" placeholder="Номер карты">
            </div>
            <input type="submit" value="Вход" name="submit" class="input">
        </form>
    </div>
  </q-page>
</template>

<style>
  .form {
    max-width: 350px;
    margin: 50px auto 0;
    padding: 20px;
    background: #f0eeff;
    border: 10px solid transparent;
    border-image: 10 repeating-linear-gradient(135deg, #2023c4, #2023c4 10px, transparent 10px, transparent 20px, #456ea1 20px, #456ea1 30px, transparent 30px, transparent 40px);
    font-family: 'Playfair Display';
    color: #565760;
  }

  .form-row {
    margin-bottom: 15px;
  }

  .form-row input[type="text"],
  .form-row input[type="email"],
  .form-row textarea {
    width: 100%;
    padding: 0 10px;
    line-height: 35px;
    border-width: 0;
    outline: none;
    background: transparent url(https://html5book.ru/wp-content/uploads/2016/12/bg-form.png) bottom left repeat-x;
    background-size: 8px 35px;
    font-family: 'Playfair Display';
  }

  .form-row textarea {
    background-attachment: local;
    background-repeat: repeat;
    resize: none;
  }

  .form-row input[type="submit"] {
    padding: 10px 20px;
    margin-top: 10px;
    background: #887cf6;
    border-width: 0;
    cursor: pointer;
    outline: none;
    font-family: 'Playfair Display';
    font-size: 13px;
    letter-spacing: 1px;
    color: #eeeeff;
    text-transform: uppercase;
    transition: 1s cubic-bezier(.165, .84, .44, 1);
  }

  .form-row input[type=submit]:hover {
    background: #c42020;
  }

</style>



<script>
export default {
  name: 'PageIndex'
}
</script>
