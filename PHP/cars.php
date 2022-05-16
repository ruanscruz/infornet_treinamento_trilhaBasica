<?php
require 'config/connectionBD.php'

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="./assets/icon-title.png">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/cars.css">
  <title>Veículos | Cadastro</title>
</head>
<body>
  <div id="container">
    <a id="house" href="index.php"><img id="house-img" src="./assets/house.svg" alt=""></a>
    <div id="background-container">
      <img src="./assets/background.png" alt="">
    </div>
    <div id="form">
      <div id="form-titles__container">
        <h1>Cadastro de Veículos</h1>
        <h3>Informe os dados do veículo a ser assegurado</h3>
      </div>
      <form id="register-container" action="">
        <div class="registers-input__container">
          <img id="lupa" src="./assets/lupa.svg" alt="">
          <input data-type="cpf" type="text" class="input-registers" id="cpf"
                 placeholder="Informe o CPF do beneficiário" pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" required>
          <div class="span-container">
            <img class="display-none" src="./assets/warning.svg" alt="">
            <span data-error="cpf" class="erros-registers display-none"></span>
          </div>
        </div>
        <div class="registers-input__container">
          <input data-type="name" type="text" class="input-registers" id="name" placeholder="Nome do beneficiário" required>
          <div class="span-container">
            <img class="display-none" src="./assets/warning.svg" alt="">
            <span data-error="name" class="erros-registers display-none"></span>
          </div>
        </div>
        <div class="diviser"></div>
        <div class="cars-input__container">
          <div class="registers-input__container">
              <input data-type="automaker" type="text" class="input-registers" id="automaker" placeholder="Montadora" required>
            <div class="span-container">
              <img class="display-none" src="./assets/warning.svg" alt="">
              <span data-error="automaker" class="erros-registers display-none"></span>
            </div>
          </div>

          <div class="registers-input__container">
            <input data-type="model" type="text" class="input-registers" id="model" placeholder="Modelo" required>
            <div class="span-container">
              <img class="display-none" src="./assets/warning.svg" alt="">
              <span data-error="model" class="erros-registers display-none"></span>
            </div>
          </div>

          <div class="registers-input__container">
            <input data-type="year_manufacturing" type="text" class="input-registers" id="year_manufacturing" placeholder="Ano de fabricação" required>
            <div class="span-container">
              <img class="display-none" src="./assets/warning.svg" alt="">
              <span data-error="year_manufacturing" class="erros-registers display-none"></span>
            </div>
          </div>

          <div class="registers-input__container">
            <input data-type="year_model" type="text" class="input-registers" id="year_model" placeholder="Ano do modelo" required>
            <div class="span-container">
              <img class="display-none" src="./assets/warning.svg" alt="">
              <span data-error="year_model" class="erros-registers display-none"></span>
            </div>
          </div>

          <div class="registers-input__container">
            <input data-type="plate" type="text" class="input-registers" id="plate" placeholder="Placa" required>
            <div class="span-container">
              <img class="display-none" src="./assets/warning.svg" alt="">
              <span data-error="plate" class="erros-registers display-none"></span>
            </div>
          </div>

          <div class="registers-input__container">
            <input data-type="chassi" type="text" class="input-registers" id="chassi" placeholder="Número do chassi" required>
            <div class="span-container">
              <img class="display-none" src="./assets/warning.svg" alt="">
              <span data-error="chassi" class="erros-registers display-none"></span>
            </div>
          </div>
        </div>

        <div class="diviser"></div>

        <div id="button-container">
          <button type="submit">Registrar</button>
        </div>
      </form>
    </div>
  </div>
  <script src="js/cars.js" type="module"></script>
</body>
</html>