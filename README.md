Задача:
Создать расписание поездок курьеров в регионы.


Описание:
Задача реализована с помощью процедурного программирования на PHP,
логина работы с бд реализованно частично в запросах в файле courier.sql, частично
в виде использования API MySQL - mysqli,
Для работы с AJAX - запросами была использованана библиотка JQuery,

Также был использован composer, с помощью кофигурационного файла определены некоторые требования к среде исполнения скриптов
также был использован dump-autoload, так как скорее всего скрипт может вырасти в целое ООП-приложение,
эту задачу возьмет на себя автозагрузчик.

Если код планируется поддерживать - необходимо будет разбить его по классам по PSR-стандартам, использовать интерфейсы и абстракные классы для переиспользования кода, а также для того, что правки в текущий функционал не приводили к ошибками, или к меньшему их числу.
