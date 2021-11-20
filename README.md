# messageSend

![Image alt](https://github.com/Valentin261/Valentin261.github.io/raw/master/img/1.jpg)

Основная функциональность данного проекта – реализация структуры обратной связи для встраивания в Ваш проект сайта. 
Скрипт, реализующий процесс отправки сообщения «sendMessage.php». На вход «sendMessage.php» получает данные от пользователя при помощи POST запроса, реализованный путем сбора данных формой, описанной в файле «index.php».</br>
Для визуализации страницы «index.php», используется структура таблицы стилей, расположенных в файла «style.css».</br>
_________________________
Что реализовано в проекте:</br>
-Возможность выбора получателя почты (указать ваш почтовый адрес), путем изменения в файле «sendMessage.php», переменной «$toEmail».</br>
-Изменение количество символов для размера почты, изменение параметром в конструкции «if (strlen($toEmail) < 9) { …} »</br>
-Проверка на вредоностные символы введенные злоумышленником, либо пользователем по неосторожности</br>
-Проверка наличия фильтра, не позволющий отправить сообщения, если поля от пользователя остались пустыми.</br>
-Простейший вариант фильтрации спама ботами авто-заполнения, при помощи скрытого поля «login» (если бот его заполняет, значит письмо не отправляется). </br>
___________________
Что должно быть доработано:</br>
Внедрена реальная функциональная защита от спама, использующая дополнительные нестандартные комбинированные инструменты</br>
_________________________
Итого:</br>
index.php – страница с формой (сбор данных)</br>
sendMessage.php – скрипт отправки сообщения</br>
style.css – таблица стилей (вариант визуализации формы)</br>
_____________________

-Для использования в ваших проектах, необходимо наличие на вашем сервере поддержки Php.</br>
-Сервиса отправки сообщения (например postfix).</br>

Для встраивания данной структуры: необходимо скопировать файлы проекта в директорию www, вашего хостинга.  При необходимости использовать код в уже существующей странице - внести данные index.php  (форму) в необходимую страницу вашего проекта.</br>
