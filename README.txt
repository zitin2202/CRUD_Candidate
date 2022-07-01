В папке Candidate находиться проект.
В candidate.dump дамб базы данных.


Создания Базы данных:
	В консоли OpenServer или там, с помощью чего запущен проект создайте новую базу данных командой:
		createdb.exe --username=postgres ИМЯ_БАЗЫ
	Затем импортируйте из данные из candidate.dump командой:
		psql --dbname=ИМЯ_БАЗЫ --quiet --file="ПУТЬ_К_ФАЙЛУ" --username=postgres >nul

Настройка:
	Введите в composer:
		 cd ПУТЬ ПРОЕКТА
		 composer update
	В проекте в config/db.php имя базы данных указано как 'candidate', а пользователь 'postgres'. Поменяйте при необходимости.
	Если используете OpenServer в доменах укажите Домен:candidate, Папка домена:\candidate\web.

Adminlte3:
	Было использовано расширение adminlte3, которая занимает 120МБ. 
	Если нужно удалить adminlte3 введите в composer:
		Введите в composer cd ПУТЬ ПРОЕКТА
		composer remove hail812/yii2-adminlte3". 
	После в view/layoute нужно поменять имя main__.php на main.php или создать свой шаблон, подключив стили по аналогии main__.php.
