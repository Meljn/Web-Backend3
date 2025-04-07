<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Форма</h1>
        <form action="form.php" method="post">
            <div class="form-group">
                <label for="fio">ФИО:</label>
                <input type="text" id="fio" name="fio" pattern="[A-Za-zА-Яа-яЁё\s]+" required>
            </div>            

            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="tel" id="phone" name="phone" pattern="^\+?[0-9]{10,15}$" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="dob">Дата рождения:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label>Пол:</label>
                <label for="male">
                    <input type="radio" id="male" name="gender" value="male"> Мужской
                </label>
                <label for="female">
                    <input type="radio" id="female" name="gender" value="female"> Женский
                </label>
            </div>

            <div class="form-group">
                <label for="language">Любимый язык программирования:</label>
                <select id="language" name="language[]" multiple required>
                    <option value="Pascal">Pascal</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="Python">Python</option>
                    <option value="Java">Java</option>
                    <option value="Haskell">Haskell</option>
                    <option value="Clojure">Clojure</option>
                    <option value="Prolog">Prolog</option>
                    <option value="Scala">Scala</option>
                    <option value="Go">Go</option>
                </select>
            </div>

            <div class="form-group">
                <label for="bio">Биография:</label>
                <textarea id="bio" name="bio" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="contract">
                    <input type="checkbox" id="contract" name="contract" required> С контрактом ознакомлен(а)
                </label>
            </div>

            <div class="form-group">
                <button type="submit">Сохранить</button>
            </div>
        </form>
    </div>
</body>
</html>
