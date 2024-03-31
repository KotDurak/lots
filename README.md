Выполнить команды
docker-compose up -d
docker-compose exec php composer dump-autoload
docker-compose exec php bash
Для созданя таблицы запустить консольный скрипт init.php из под докер окружения
При парсинге страниц могут возникнуть проблемы с 403 ошибкой (тогда можно использовать локальные страницы). 
В app/components/SiteParser.php раскомментировать 29 и 47 строки
