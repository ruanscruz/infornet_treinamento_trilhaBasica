<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./assets/icon-title.png">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/beneficiaries.css">
    <title>Beneficiários | Cadastro</title>
</head>
<body>
    <div id="container">
        <a id="house" href="index.php"><img id="house-img" src="./assets/house.svg" alt=""></a>
        <div id="background-container">
            <img src="./assets/background.png" alt="">
        </div>
        <div id="form">
            <div id="form-titles__container">
                <h1>Cadastro de Beneficiários</h1>
                <h3>Informe seus dados e se torne um dos nossos beneficiários</h3>
            </div>
            <form id="register-container" action="">
                <div class="registers-input__container">
                    <input data-type="name" type="text" class="input-registers" id="name" placeholder="Nome Completo" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="name" class="erros-registers display-none"></span>
                    </div>
                </div>
                <div class="registers-input__container">
                    <input data-type="cpf" type="text" class="input-registers" id="cpf"
                           pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" placeholder="CPF" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="cpf" class="erros-registers display-none"></span>
                    </div>
                </div>

                <div class="diviser"></div>

                <div class="registers-input__container">
                    <input data-type="cep" type="text" class="input-registers" id="cep"
                           pattern="^[0-9]{5}-?[0-9]{3}$" placeholder="CEP" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="cep" class="erros-registers display-none"></span>
                    </div>
                </div>

                <div class="registers-input__container">
                    <input data-type="number" type="text" class="input-registers" id="number" placeholder="Número" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="number" class="erros-registers display-none"></span>
                    </div>
                </div>

                <div class="registers-input__container">
                    <input data-type="street" type="text" class="input-registers" id="street" placeholder="Logradouro" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="street" class="erros-registers display-none"></span>
                    </div>
                </div>

                <div class="registers-input__container">
                    <input data-type="district" type="text" class="input-registers" id="district" placeholder="Bairro" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="district" class="erros-registers display-none"></span>
                    </div>
                </div>

                <div class="registers-input__container">
                    <input data-type="city" type="text" class="input-registers" id="city" placeholder="Cidade" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="city" class="erros-registers display-none"></span>
                    </div>
                </div>

                <div class="registers-input__container">
                    <input data-type="state" type="text" class="input-registers" id="state" placeholder="Estado" required>
                    <div class="span-container">
                        <img class="display-none" src="./assets/warning.svg" alt="">
                        <span data-error="state" class="erros-registers display-none"></span>
                    </div>
                </div>

                <div class="diviser"></div>

                <div id="registers-contact__container">
                    <div class="registers-input__container">
                        <input data-type="phone" type="text" class="input-registers" id="phone" placeholder="Telefone">
                        <div class="span-container">
                            <img class="display-none" src="./assets/warning.svg" alt="">
                            <span data-error="phone" class="erros-registers display-none"></span>
                        </div>
                    </div>

                    <div class="registers-input__container">
                        <input data-type="cell" type="text" class="input-registers" id="cell" placeholder="Celular">
                        <div class="span-container">
                            <img class="display-none" src="./assets/warning.svg" alt="">
                            <span data-error="cell" class="erros-registers display-none"></span>
                        </div>
                    </div>
                </div>
                <div id="button-container">
                    <button type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/beneficiaries.js" type="module"></script>
</body>
</html>