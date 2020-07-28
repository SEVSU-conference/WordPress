
<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href=<?= get_template_directory_uri() . "/assets/css/registration.css" ?>

    <link href=<?= get_template_directory_uri() . "/assets/css/fonts.css" ?> rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="icon" href=<?= get_template_directory_uri() . "/assets/img/favicon.ico" ?> type="image/x-icon">
    <meta charset="utf-8">

</head>
<body>

<div class="bg" ></div>
<div class="registration">
    <div class="reg-content">
        <h2 style="color: #0089a9;font-size: 3.1rem;
    font-weight: 900;
    margin-top: 40px;">Регистрация</h2>
        <h4 style="color: #0089a9">участника конференции</h4>
        <form id="form1" action="#" onsubmit="return validate();">
            <div class="box-input-wrapper">
                <div class="box-input">
                    <!-- autofocus -->
                    <input class="input" type="text" name="subname">
                    <label>Фамилия*</label>
                    <p class="error-message-empty">Поле не заполнено!</p>
                </div>
                <div class="box-input-row">
                    <div class="box-input">
                        <input class="input" type="text" name="name">
                        <label>Имя*</label>
                        <p class="error-message-empty">Поле не заполнено!</p>
                    </div>
                    <div class="box-input">
                        <input class="input" type="text" name="secondName">
                        <label>Отчество*</label>
                        <p class="error-message-empty">Поле не заполнено!</p>
                    </div>
                </div>
                <div class="box-input">
                    <input class="input" name="tel-number" type="text">
                    <label>Номер телефона</label>
                </div>
                <div class="box-input">
                    <input class="input" type="text" name="email">
                    <label>E-mail*</label>
                    <p class="error-message error-message-empty">Введите E-mail!</p>
                    <p class="error-message error-message-novalid">Введите существующий E-mail!</p>
                </div>
                <div class="box-input">
                    <input class="input" name="work" type="text">
                    <label>Место работы</label>
                </div>
                <div class="box-input">
                    <input class="input" name="activity" type="text">
                    <label>Должность</label>
                </div>
            </div>


            <div class="select-box">
                <div class="options-container">
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="category"
                                id="category1"
                                value="category1"
                        />
                        <label for="category1">Онлайн-обучение</label>
                    </div>
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="category"
                                id="category2"
                                value="category2"
                        />
                        <label for="category2">Технологическое предпринимательство</label>
                    </div>
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="category"
                                id="category3"
                                value="category3"
                        />
                        <label for="category3">Управление проектами на основе данных CDO</label>
                    </div>
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="category"
                                id="category4"
                                value="category4"
                        />
                        <label for="category4">Управление образовательными процессами на основе данных</label>
                    </div>
                </div>
                <div class="selected" id="select-category">
                    <p>Интересующая тематика*</p>

                    <p class="error-message">Выберите тематику!</p>
                </div>
            </div>

            <div class="select-box">
                <div class="options-container">
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="ticket"
                                id="ticket1"
                                value="ticket1"
                        />
                        <label for="ticket1">Бесплатное участие</label>
                    </div>
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="ticket"
                                id="ticket2"
                                value="ticket2"
                        />
                        <label for="ticket2">Econom</label>
                    </div>
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="ticket"
                                id="ticket3"
                                value="ticket3"
                        />
                        <label for="ticket3">Standart</label>
                    </div>
                    <div class="option">
                        <input
                                type="radio"
                                class="radio"
                                name="ticket"
                                id="ticket4"
                                value="ticket4"
                        />
                        <label for="ticket4">VIP</label>
                    </div>
                </div>
                <div class="selected" id="select-ticket">
                    <p>Выберите билет*</p>


                    <p class="error-message">Выберите билет!</p>
                </div>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="agreement" name="agreement" value="true">
                <label for="agreement">Я согласен на <a href="">обработку персональных данных</a>*</label>


                <p class="error-message">Необходимо Ваше согласие на обработку персональных данных!</p>
            </div>

            <div class="button-wrapper">
                <a href="/index.php">
                    <button class="button return-button" type="button">
                        Вернуться на главную
                    </button>
                </a>

                <button class="button confirm-button" type="submit">
                    Оформить
                </button>
            </div>
        </form>
    </div>
</div>
<script src=<?= get_template_directory_uri() . "/assets/scripts/registration.js" ?>></script>
</body>
</html>