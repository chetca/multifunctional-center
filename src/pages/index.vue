<template>
  <q-page class="flex flex-center">
    <div class="form">
        <form action="#" method="post">
            <div class="form-row">
                <p class="caption">ФИО</p>
                <q-input v-model="family_surname" float-label="Фамилия" />
                <q-input v-model="family_name" float-label="Имя" />
                <q-input v-model="family_middlename" float-label="Отчество" />
            </div>
            <div class="form-row">
                <p class="caption">Документ</p>
                <q-input v-model="doc_serial" float-label="Серия" />
                <q-input v-model="doc_number" float-label="Номер" />
            </div>
            <div class="form-row">
                <p class="caption">Бановская карта</p>
                <q-input v-model="card_number" maxlength="19" type="password" float-label="Номер карты" />
                <q-input v-model="card_date" maxlength="4" type="text" float-label="ММ / ГГ" />
            </div>
            <p class="caption">Сумма скидки: {{ discount }}%</p>
            <q-btn glossy color="primary" label="Вход" />
        </form>
    </div>
  </q-page>
</template>

<style>
  .form {
    width: 350px;
    max-width: 400px;
    margin: 50px auto 0;
    padding: 20px;
    background: #f0eeff;
    border: 10px solid transparent;
    border-image: 10 repeating-linear-gradient(135deg, #2023c4, #2023c4 10px, transparent 10px, transparent 20px, #456ea1 20px, #456ea1 30px, transparent 30px, transparent 40px);
    font-family: 'Playfair Display';
    color: #565760;
  }
</style>



<script>
export default {
  name: 'PageIndex',
  data () {
    return {
      text: '',
      family_surname: '',
      family_name: '',
      family_middlename: '',
      doc_serial: '',
      doc_number: '',
      card_number: '',
      card_date: '',
      discount: 666
    }
  }
}
</script>
