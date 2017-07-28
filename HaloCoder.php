<?php
    /* Halo Coder — серверный редактор для сайтов и не только
    Editor for sites & servers
    2017 - ∞ © Vlad Merk aka 13i — http://halocoder.ilost.ru

Install:
— Rename this file for security
— Change login, password & security_line
— Copy this file to the root of your website or project
— Minimal monitor resolution: 1024px

Установка:
— Переименуйте этот файл для безопасности
— Поменяйте логин, пароль и секретную фразу
— Скопируйте этот файл в корень вашего сайта или проекта
— Минимальное разрешение монитора: 1024 пикселя
*/

# Логин (Login) ЕЩЕ НЕ РАБОТАЕТ
$login = "login";
$password = "password";
$security_line = "mbn-fmby_5fJKG!FEjgud5asg";

# База данных (Database)
$dbhost = "localhost"; # Хост базы данных (Database host)
$dbuname = "root";     # Имя пользователя базы данных (Database user name)
$dbpass = "root";      # Пароль пользователя базы данных (Database user password)
$dbname = "engine2";   # Имя базы данных (Database name)
$dbtype = "mysql";     # Тип базы данных (Type of database): mysql
    // Не реализовано: mssql, sybase, sqlite, postgresql
$sqpath = "my/database/path/database.db"; # SQLite файл базы (database file) НЕ РАБОТАЕТ
$postgresql_port = "5432"; # PostgreSQL порт (port) НЕ РАБОТАЕТ

# Настройки редактора (Editor Settings)
$language = 'en'; // Варианты языка: ru или en (You can change to 'ru' or 'en')
$just_my_language = false; // Автосжатие, вырезание других языков. (Autoresizing, delete another languages)
//Индия, Филиппины, Украина, Пакистан, Бангладеш, Польша, Беларусь, Португальский, Вьетнам, Индонезия, Франция, Испания, Италия, Чехия
// + другие кодировки
$ver = '0.2alpha'; // Версия IDE (IDE Version)
$animation = true; // Анимация интерфейса (Enable UI animation)
$radio = true; // Радио только русское (Radio is only russian)
$file_folder = 'files'; // Папка для файлов по-умолчанию (Default folder for files)
$image_folder = 'img'; // Папка для фото по-умолчанию (Default folder for images)
$admin_page_url = ''; // Адрес администрирования сайта для кнопки (Admin page url)
$your_site_url = ''; // Адрес сайта для кнопки (Site url)
$rewrite_files = true; // Перезаписывать файлы при копировании папки (Rewrite files then copy folder)
$code_style = "monokai"; // Тема оформления редактора (Theme for code style)
$hide_files = '.DS_Store,.phpintel,Thumbs.db'; // Не показывать файлы и папки (Hiding files & folders)
$later_files = 'cache,cashe,temp,images,img,photo,photos'; // Отложенная загрузка папок, не участвуют в поиске (Lazy loading. This folders not participate in search) НЕ РАБОТАЕТ
$font_size = 16; // Размер шрифта в редакторе (Font size for coding)
$live_autocompletion = 'true'; // Активное автодополнение, если отключено - Ctrl/Alt+Space (if disabled - Ctrl/Alt+Space)
    // Изменение размеров загружаемого фото (Resize uploaded image)
$photos_upload_width = 1920; // Максимальная ширина (Max width)
$photos_upload_height = 1280; // Максимальная высота (Max height)

# Заготовки для новых файлов (Templates for new files)
$php_example = '<?php
/**
 * @package    ...
 *
 * @copyright  Copyright (C) '.date('Y').' ...
 * @license    GNU ...
 */

';
$html_example = '<!DOCTYPE html>
<html lang="'.$language.'">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TITLE</title>

</head>
<body>

</body>
</html>';

# Языки (Languages)
$languages = array(
    'AboutAlias' => array(
        'ru' => 'Это ссылка. Файл не содержит информации.',
        'en' => 'This is an alias, just link file.',
    ),
    'AboutFonts' => array(
        'ru' => 'Для сайтов достаточно использовать шрифты .woff и .eot.',
        'en' => 'For sites you can use just .woff & .eot fonts.',
    ),
    'AboutRecycleBin' => array(
        'ru' => 'Эта папка создана данным редактором и содержит резервные копии измененных и удаленных файлов.',
        'en' => 'This folder created by this editor and contains a backup of modified and deleted files.',
    ),
    'Addfile' => array(
        'ru' => 'Добавить файл',
        'en' => 'Add file',
    ),
    'AddFolder' => array(
        'ru' => 'Добавить папку',
        'en' => 'Add Folder',
    ),
    'AddTable' => array(
        'ru' => 'Добавить таблицу',
        'en' => 'Add Table',
    ),
    'Admin' => array(
        'ru' => 'Открыть администрирование сайта',
        'en' => 'Go to Admin Panel',
    ),
    'AjaxError' => array(
        'ru' => 'Ошибка Ajax. Нет соединения с сервером или отсутствует/поврежден файл редактора.',
        'en' => 'Ajax Error. No server connection or missing/corrupted file of this editor.',
    ),
    'alias' => array(
        'ru' => 'ссылка',
        'en' => 'alias',
    ),
    'Archive' => array(
        'ru' => 'Архивный файл',
        'en' => 'Archive File',
    ),
    'B1' => array(
        'ru' => 'байт',
        'en' => 'byte',
    ),
    'BackupCopy' => array(
        'ru' => 'Резервная копия (старые версии)',
        'en' => 'Backup (old versions)',
    ),
    'Buffer' => array(
        'ru' => 'Буфер',
        'en' => 'Buffer',
    ),
    'C1' => array(
        'ru' => 'К',
        'en' => 'Col',
    ),
    'CantOpen' => array(
        'ru' => 'Не могу открыть этот файл.',
        'en' => 'Can\'t open this file.',
    ),
    'Change' => array(
        'ru' => 'Изменить',
        'en' => 'Change',
    ),
    'ChangeFileName' => array(
        'ru' => 'Менять (генерировать) имя файла',
        'en' => 'Change (generate) File Name',
    ),
    'Classes' => array(
        'ru' => 'Классы',
        'en' => 'Classes',
    ),
    'Close' => array(
        'ru' => 'Закрыть',
        'en' => 'Close',
    ),
    'CodingType' => array(
        'ru' => 'Язык кода',
        'en' => 'Code Language',
    ),
    'CollapseAllFolders' => array(
        'ru' => 'Свернуть все папки',
        'en' => 'Collapse All Folders',
    ),
    'Color' => array(
        'ru' => 'Цвет в ',
        'en' => 'Color in ',
    ),
    'ColorTool' => array(
        'ru' => 'Выбор цвета в HEX и RGB',
        'en' => 'Color Tool (HEX & RGB)',
    ),
    'Column' => array(
        'ru' => 'Кол.',
        'en' => 'Col',
    ),
    'Comments' => array(
        'ru' => 'Комментарии',
        'en' => 'Comments',
    ),
    'Created' => array(
        'ru' => 'Создан',
        'en' => 'Created',
    ),
    'Createnewfile' => array(
        'ru' => 'Создать новый файл',
        'en' => 'Create new file',
    ),
    'Createnewfolder' => array(
        'ru' => 'Создать новую папку',
        'en' => 'Create new folder',
    ),
    'DataBase' => array(
        'ru' => 'База данных',
        'en' => 'DataBase',
    ),
    'Delete' => array(
        'ru' => 'Удалить',
        'en' => 'Delete',
    ),
    'Download' => array(
        'ru' => 'Скачать',
        'en' => 'Download',
    ),
    'Duplicate' => array(
        'ru' => 'Копировать',
        'en' => 'Duplicate',
    ),
    'DuplicateTitle' => array(
        'ru' => '<b>Копирование</b>',
        'en' => '<b>Duplication</b>',
    ),
    'EditorSettings' => array(
        'ru' => 'Настройки редактора',
        'en' => 'Editor Settings',
    ),
    'Enter' => array(
        'ru' => 'Войти',
        'en' => 'Enter',
    ),
    'Enterlinenumber' => array(
        'ru' => 'Введите номер строки',
        'en' => 'Enter line number',
    ),
    'EnterthEditor' => array(
        'ru' => 'Вход в «Halo Coder»',
        'en' => 'Enter “Halo Coder”',
    ),
    'Error' => array(
        'ru' => 'Ошибка',
        'en' => 'Error',
    ),
    'ExitFullscreen' => array(
        'ru' => 'Выйти из полноэкранного режима',
        'en' => 'Exit Fullscreen',
    ),
    'Exist' => array(
        'ru' => 'Существует',
        'en' => 'Exist',
    ),
    'Filename' => array(
        'ru' => 'Имя файла',
        'en' => 'File Name',
    ),
    'FilePath' => array(
        'ru' => 'Путь файла',
        'en' => 'File Path',
    ),
    'Files' => array(
        'ru' => 'Файлы',
        'en' => 'Files',
    ),
    'FilesList' => array(
        'ru' => 'Список связанных файлов',
        'en' => 'List of related files',
    ),
    'Fix' => array(
        'ru' => 'Закрепить',
        'en' => 'Fix it',
    ),
    'Foldername' => array(
        'ru' => 'Имя папки',
        'en' => 'Folder Name',
    ),
    'FontPreview' => array(
        'ru' => 'Съешь ещё этих мягких французских булок, да выпей чаю.<br>Grumpy wizards make toxic brew for the evil Queen and Jack.',
        'en' => 'Grumpy wizards make toxic brew for the evil Queen and Jack.',
    ),
    'Fullscreen' => array(
        'ru' => 'На весь экран',
        'en' => 'Fullscreen',
    ),
    'Functions' => array(
        'ru' => 'Функции',
        'en' => 'Functions',
    ),
    'FunctionsWithOutSort' => array(
        'ru' => 'Функции (без сортировки)',
        'en' => 'Functions (without sorting)',
    ),
    'G1' => array(
        'ru' => 'Гб',
        'en' => 'Gb',
    ),
    'GoToSome' => array(
        'ru' => 'Перейти к...',
        'en' => 'Go to...',
    ),
    'GoToThis' => array(
        'ru' => 'Перейти к этому',
        'en' => 'Go to this',
    ),
    'GradientTool' => array(
        'ru' => 'Градиент',
        'en' => 'Gradient Tool',
    ),
    'InfoActions' => array(
        'ru' => 'Информация и действия',
        'en' => 'Info & Actions',
    ),
    'JSFunctions' => array(
        'ru' => 'JS функции',
        'en' => 'JSFunctions',
    ),
    'K1' => array(
        'ru' => 'Кб',
        'en' => 'Kb',
    ),
    'KeyboardShortcuts' => array(
        'ru' => 'Горячие клавиши',
        'en' => 'Keyboard Shortcuts',
    ),
    'Lastaccess' => array(
        'ru' => 'Последний доступ',
        'en' => 'Last access',
    ),
    'LastModifiedFiles' => array(
        'ru' => 'Последние изменённые файлы',
        'en' => 'Last Modified Files',
    ),
    'Line' => array(
        'ru' => 'Стр.',
        'en' => 'Line',
    ),
    'LineColumn' => array(
        'ru' => 'Строка, Колонка',
        'en' => 'Line, Column',
    ),
    'LineColumn2' => array(
        'ru' => 'Нажмите для перехода к строке...',
        'en' => 'Click to Go to Line...',
    ),
    'Lines' => array(
        'ru' => 'Строки',
        'en' => 'Lines',
    ),
    'Loading' => array(
        'ru' => 'Загрузка...',
        'en' => 'Loading...',
    ),
    'Login' => array(
        'ru' => 'Логин',
        'en' => 'Login',
    ),
    'M1' => array(
        'ru' => 'Мб',
        'en' => 'Mb',
    ),
    'MaxPhotoSize' => array(
        'ru' => 'Макс. размер фото для авто сжатия - 7 Мб',
        'en' => 'Max. Photo Size for Autoresizing - 7 Mb',
    ),
    'Modified' => array(
        'ru' => 'Изменён',
        'en' => 'Modified',
    ),
    'NewName' => array(
        'ru' => 'Напишите новое имя',
        'en' => 'New Name',
    ),
    'Neww' => array(
        'ru' => 'Новый',
        'en' => 'New',
    ),
    'No' => array(
        'ru' => 'Нет',
        'en' => 'No',
    ),
    'NoModifiedFiles' => array(
        'ru' => 'Изменений не было или лог был удалён.',
        'en' => 'No Modified Files or log was deleted.',
    ),
    'not' => array(
        'ru' => 'не ',
        'en' => 'not ',
    ),
    'Notexist' => array(
        'ru' => 'Не существует',
        'en' => 'Not exist',
    ),
    'NotChangeNameAndReplace' => array(
        'ru' => 'Не менять имя файла и заменять',
        'en' => 'Not Change FileName And Replace',
    ),
    'NotChangeNameAndNoReplace' => array(
        'ru' => 'Не менять имя файла и не заменять',
        'en' => 'Not Change FileName And Not Replace',
    ),
    'numFiles' => array(
        'ru' => 'Количество упакованных файлов',
        'en' => 'Number of Packed Files',
    ),
    'OpenLink' => array(
        'ru' => 'Открыть ссылку на сайте',
        'en' => 'Open Link on Site',
    ),
    'Password' => array(
        'ru' => 'Пароль',
        'en' => 'Password',
    ),
    'Pastesometext' => array(
        'ru' => 'Вставьте текст сюда, если нужно (написание текстов или кодинг)',
        'en' => 'Paste some text here if you need (for writing or coding)',
    ),
    'PDOdriver' => array(
        'ru' => 'Требуется драйвер PDO для базы данных',
        'en' => 'Requires the PDO driver for the database',
    ),
    'Plugins' => array(
        'ru' => 'Дополнения',
        'en' => 'Plugins',
    ),
    'Refresh' => array(
        'ru' => 'Обновить',
        'en' => 'Refresh',
    ),
    'Rename' => array(
        'ru' => 'Переименовать',
        'en' => 'Rename',
    ),
    'Replace' => array(
        'ru' => 'Переместить',
        'en' => 'Move this',
    ),
    'Recycle' => array(
        'ru' => 'Удалить в Корзину ($Recycle.Bin)',
        'en' => 'Delete to Recycle Bin',
    ),
    'RecycleBin' => array(
        'ru' => 'Корзина',
        'en' => 'Recycle Bin',
    ),
    'RenameTitle' => array(
        'ru' => '<b>Переименование</b>',
        'en' => '<b>Renaming</b>',
    ),
    'ReplaceTitle' => array(
        'ru' => '<b>Перемещение</b>',
        'en' => '<b>Moving</b>',
    ),
    'RunSQLquery' => array(
        'ru' => 'Выполнить SQL-запрос',
        'en' => 'Run SQL query',
    ),
    'Rights' => array(
        'ru' => 'Права',
        'en' => 'Rights',
    ),
    'root' => array(
        'ru' => 'корень',
        'en' => 'root',
    ),
    'Save' => array(
        'ru' => 'Сохранить',
        'en' => 'Save',
    ),
    'SaveAll' => array(
        'ru' => 'Сохранить все файлы',
        'en' => 'Save All Files',
    ),
    'Savefile' => array(
        'ru' => 'Сохранить файл (Ctrl/Cmd + S)',
        'en' => 'Save file (Ctrl/Cmd + S)',
    ),
    'SearchFiles' => array(
        'ru' => 'Поиск файлов и папок',
        'en' => 'Search Files & Folders',
    ),
    'Searchinfile' => array(
        'ru' => 'Поиск в файле',
        'en' => 'Search in file',
    ),
    'SearchTextinFiles' => array(
        'ru' => 'Поиск текста в файлах',
        'en' => 'Search Text in Files',
    ),
    'SearchUsing' => array(
        'ru' => 'Искать использование этого',
        'en' => 'Search Using this',
    ),
    'Selectfolder' => array(
        'ru' => 'Выбрана папка',
        'en' => 'Selected folder',
    ),
    'SelectFiles' => array(
        'ru' => 'Выберите файлы',
        'en' => 'Select Files',
    ),
    'Site' => array(
        'ru' => 'Открыть сайт',
        'en' => 'Go to Site',
    ),
    'Size' => array(
        'ru' => 'Размер',
        'en' => 'Size',
    ),
    'Symbols' => array(
        'ru' => 'Символы',
        'en' => 'Symbols',
    ),
    'TextCoding' => array(
        'ru' => 'Кодировка текста',
        'en' => 'Character Encoding',
    ),
    'Tested' => array(
        'ru' => 'Протестирован в браузерах',
        'en' => 'Tested in browsers',
    ),
    'thEditor' => array(
        'ru' => 'Halo Coder',
        'en' => 'Halo Coder',
    ),
    'UploadFile' => array(
        'ru' => 'Загрузить файл',
        'en' => 'Upload File',
    ),
    'UploadingFiles' => array(
        'ru' => 'Загрузка файлов<p>Можно сбросить файлы сюда.',
        'en' => 'Uploading files<p>U can drop files here.',
    ),
    'UploadFiles' => array(
        'ru' => 'Загрузить',
        'en' => 'Upload',
    ),
    'Version' => array(
        'ru' => 'Версия',
        'en' => 'Version',
    ),
    'Where' => array(
        'ru' => 'Путь',
        'en' => 'Where',
    ),
    'Words' => array(
        'ru' => 'Слова',
        'en' => 'Words',
    ),
    'Writesomething' => array(
        'ru' => 'Напишите что-нибудь... классное',
        'en' => 'Write something... cool',
    ),
    'Yes' => array(
        'ru' => 'Да',
        'en' => 'Yes',
    ),
    'YouCanSeeFonts' => array(
        'ru' => 'Вы увидите этот шрифт, если ваш браузер — ',
        'en' => 'You can see this font, if your browser is ',
    ),
);
foreach ($languages as $k => $v) {
    define($k, $v[$language]);
}

$is_authorized = false;

if (!isset($_REQUEST['func']) && !isset($_REQUEST['up'])) { // Обращение к аякс
// HTML ШАПКА
header('Cache-Control:none');
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><? echo thEditor; ?></title>
<link href="https://yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAlQTFRF/44E/////7lYZljEGwAAAEVJREFUeNp0j0kSADAEBHX+/+gUYsk2J9MGRWCoCIn7IglCfyAhouEusaA17L4TVp5MKKSWcIB3ou9YM+2KDdhvF5gCDACJaADATEvwhwAAAABJRU5ErkJggg==">
<style>
/* ======================= CSS */
html{height:100%;min-height:100%;min-width:1000px;}
::-webkit-scrollbar{width:15px;height:15px;}::-webkit-scrollbar-button:start:decrement,::-webkit-scrollbar-button:end:increment{height:0;width:15px;display:none;background:#AAA;}::-webkit-scrollbar-track-piece  {background:#111;-webkit-border-radius:5px;}::-webkit-scrollbar-thumb:vertical{height:50px;background:#2b2b2b;border:1px solid #474747;-webkit-border-radius:10px;}::-webkit-scrollbar-thumb:horizontal {height:50px;background-color:#474747;border:1px solid #ccc;-webkit-border-radius:10px;}::-webkit-scrollbar-corner{background:#474747;}
body{height:100%;min-height:100%;width:100%;min-width:1000px;background:#131313;font-size:14px;}
hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0;}
.gray_dark,li{background:#2b2b2b;color:#c9c4bf;}
.gray_light{background:#323232;color:#ebebeb;}
.black,li:hover,li:hover a{background:#131313;color:#d0d0d0;}
.lightgray{color:#99948f;}
.ace_search,.ace_search .ace_button{background:#2b2b2b !important;color:#c9c4bf !important;border-color:#666 !important;}
a{cursor:pointer;}
a,a:visited,a:link{color:#ddd;text-decoration:none;}
a:hover,a:active{color:white;text-decoration:none;}
.tabs{margin:0;background:#131313;overflow:hidden;}
.tabs .tab{display:inline-block;}
.tab{height:60px;padding:7px 9px 0 10px;background:#131313;color:#5c5c5c;font-size:30px;border:0;margin:0;}
.tab a{color:#5c5c5c;}
.tab a:hover{color:#8c8c8c;}
.tab:hover{background:#202020;color:#8c8c8c;cursor:pointer;}
.tab.tree{padding:0;margin-right:5px;margin-left:0px;}
.tab.active,.tab.active:hover{background:#2b2b2b;color:#d4cfc9;cursor:default;}
.left_panel{width:400px;background:#2b2b2b;float:left;padding:10px;color:#8c8c8c;height:calc(100% - 61px);overflow:auto;}
.left_panel.tree{overflow-x:hidden;}
.buttons{display:inline-block;margin-bottom:10px;}
.right{float:right;}
.buttons.right{float:right;display:inline-block;}
.button{height:30px;padding:3px 4px;border-radius:3px;background:#131313;color:#5c5c5c;font-size:17px;border:0;margin:0 2px 0 0;cursor:pointer;display:inline-block;text-align:center;min-width:30px;}
.button.showtab{color:#ababab;padding:0 4px 0 4px;margin:0 0 0 2px;}
.button.fa-thumb-tack,.fa-save.right.button{color:#ccc;background:none;}
.button:hover,.fa-save.right.button:hover{color:#fff;background:#000;}
.folder,.file,.link{list-style:none;line-break:normal;word-break:break-all;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto;}
.folder a,.file a{cursor:pointer;}
.folder span.info,.file span.info,form.info,#upload_file,.upload_file{border:1px solid #666;border-radius:5px;display:block;padding:10px;margin-bottom:20px;}
.info p{padding-bottom:20px !important;}
.folder i.fa-info-circle,.file i.fa-info-circle{display:none}
.folder:hover i.fa-info-circle,.file:hover i.fa-info-circle{display:inline;}
.folder span.info a,.file span.info a{padding:5px 10px;background:#131313;color:#888;font-size:14px;border:1px solid #323232;border-radius:5px;}
.folder span.info a:hover,.file span.info a:hover{background:#202020;color:#ddd;cursor:pointer;}
.folder span.info input,.file span.info input{width:60px;color:#000;text-align:center;}
.folder span.info hr,.file span.info hr{border-top:1px solid #666;}
.folder span.info .about,.file span.info .about{word-break:normal;}
span.info a.link{padding:0 5px 0 0;background:none;color:#ddd;border:0;border-bottom:1px solid gray;border-radius:0;}
.att{margin-top:10px;}
.folder:hover i{color:yellow;}
.file{}
.ml20{margin-left:20px;}
.file:hover i{color:white;}
.file .inf{display:none;}
.file:hover .inf{display:inline;}
.folder i{color:orange;}
.link{color:lightblue;}
.folder_tree{display:none;margin-bottom:2px;padding-bottom:2px;}
#search_files input[type='search'],.rename_file{margin-bottom:10px;width:100%;background:#111;padding:2px 5px;border-radius:3px;border:1px solid #666;color:white !important;}
.info input[type='submit']{width:20%;}
.rename_file{width:79% !important;text-align:left !important;}
#infobox{width:calc(100% - 400px);height:30px;background:#2b2b2b;color:#888;float:right;overflow:hidden;padding:5px 0 0 0;min-width:650px !important;}
#infobox:hover{color:#ddd;cursor:default;}
.windows_tabs{width:calc(100% - 400px);height:30px;float:right;overflow:hidden;border-left:1px solid #323232;background:#111;}
.windows_tabs:hover{height:auto;max-height:600px;min-height:30px;overflow-y:auto;position:fixed;right:0;z-index:5;}
.windows_tabs:hover+#infobox{margin-top:30px;}
.windows_tabs .windows_tab{display:inline-block;}
.white_bg,.green_bg,.red_bg{border-radius:10px;border:1px solid gray;color:white;padding:2px 10px;}
.windows_tab.active .white_bg,.windows_tab.active .green_bg,.windows_tab.active .red_bg{background:white;border-radius:10px;color:black;padding:2px 10px;border:0;}
.green_bg,.red_bg{cursor:pointer;}
.windows_tab.active .green_bg{background:lightgreen;}
.windows_tab.active .red_bg{background:red;color:white;}
.windows_tab{max-width:300px;overflow:hidden;color:#5c5c5c;font-size:14px;line-break:normal;word-break:break-all;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto;border-right:1px solid #323232;border-bottom:1px solid #323232;background:#2d2d2d;background:-moz-linear-gradient(top,#2d2d2d 0,#141414 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#2d2d2d),color-stop(100%,#141414));background:-webkit-linear-gradient(top,#2d2d2d 0,#141414 100%);background:-o-linear-gradient(top,#2d2d2d 0,#141414 100%);background:-ms-linear-gradient(top,#2d2d2d 0,#141414 100%);background:linear-gradient(to bottom,#2d2d2d 0,#141414 100%);margin-top:2px;height:28px;width:auto;position:relative;float:left;border-top-right-radius:20px 60px;border-top-left-radius:20px 60px;margin-right:-10px;padding:5px 10px 0 10px;z-index:1;box-shadow:0 0 8px 0 rgba(0,0,0,.9);}
.windows_tab:hover{background:#202020;color:#8c8c8c;cursor:pointer;}
.windows_tab.active,.windows_tab.active:hover{color:#d4cfc9;cursor:default;background:#474747;background:-moz-linear-gradient(top,#474747 0,#141414 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#474747),color-stop(100%,#141414));background:-webkit-linear-gradient(top,#474747 0,#141414 100%);background:-o-linear-gradient(top,#474747 0,#141414 100%);background:-ms-linear-gradient(top,#474747 0,#141414 100%);background:linear-gradient(to bottom,#474747 0,#141414 100%);z-index:3;border-bottom:1px solid orange;}
.windows_tab i{margin-right:5px;}
#left_panel,.requestfullscreen{border-top-right-radius:0 !important;border-top-left-radius:0 !important;}
#windows{}
pre{margin:0 !important;}
.window{color:white;border:0;width:calc(100% - 400px);min-height:calc(100% - 61px);float:right;padding:0;border:1px solid #323232;background:#222;display:none;}
.window.active{display:block;}
.close_tab{margin-right:10px;margin-top:3px;}
.close_tab:hover{color:red;}
.ace_scrollbar-inner{background:#323232 !important;}
.ace_scrollbar-v{background:#131313 !important;}
.ace_editor.ace_autocomplete{width:600px !important;}
.green{color:lightgreen !important;}
.orange{color:orange;}
.white{color:white;}
.gray{color:#999 !important;}
.red{color:red !important;}
.edit{color:white;margin-right:3px;}
.requestfullscreen,.exitfullscreen{position:fixed;right:0;top:0;z-index:10;border-left:1px solid #323232;}
.viewer{text-align:center;height:100%;}
.viewer img{border:3px solid #666;max-width:50%;}
div#ace_settingsmenu{padding-top:50px;}
.akk,.akkZ{padding:5px 10px;color:gray;border:1px solid gray;margin:0;margin-bottom:10px;}
.akk.active,.akk:hover,.akkZ:hover{color:white;cursor:pointer;border:1px solid white;}
.akk.active{background:#dfdfdf;background: -moz-linear-gradient(left, #dfdfdf 0%, #333 100%);background: -webkit-linear-gradient(left, #dfdfdf 0%,#333 100%);background: linear-gradient(to right, #dfdfdf 0%,#333 100%);border:none;color:black;margin:10px -10px 0;}
.akk.active.fix{margin: -10px -10px 0;cursor:default;}
.akk-content{padding:5px;color:#dfdfdf;display:none;}
.akk-content.active{display:block;margin:0 -10px 10px;}
.akk-content tеxtarea{background:#222;color:#ddd;border:1px solid gray;padding:2px 5px;min-height:100px;}
.f100{font-size:100px;}
.preview{font-size:18px;text-align:left;padding:10px 40px;}
select{-webkit-appearance:menulist-button;font-size:18px;color:black;width:100%;}
.none{display:none;}
.w100{width:100%;}
.h400{height:400px;border:none;}
#search_query_enter{position:absolute;left:335px;margin-top:4px}
#view{height:calc(100% - 60px);}
#radio{width:400px;height:59px;overflow:hidden;margin:-10px 0 0 -10px;}
.b{font-weight:bold;}
.i{font-style:italic;}
.f18{font-size:18px;}
.f24{font-size:24px;}
.normal{font-family:Calibri,Arial;font-size:22px;margin:20px 0 0 0;}
.akk-content.active.fix{height: calc(100% - 30px);padding:5px 0 0 5px;}
.fix #buffer,.fix iframe{height:100% !important;}
#from_lang,#to_lang,#buffer{color:black;padding-left:7px;max-width:100%;}
.fa-thumb-tack.right.button,.fa-save.right.button{margin:-5px -10px 5px 15px;}
/* Стили загрузки файла */
#upload_file,.upload_file{margin:10px 0 !important;display:none;border:2px dashed orange;} */
#upload_file select,.upload_file select{font-size:15px;}
#upload_file #files p,.upload_file #files p{font-size:12px;display:block !important;}
.fileinput-button,.akkbtn{position:relative;overflow:hidden;display:inline-block;padding:5px 10px;background:#131313;color:#888;font-size:14px;border:1px solid #323232;border-radius:5px;}
.fileinput-button:hover,.akkbtn:hover{background:#202020;color:#ddd;cursor:pointer;}
.fileinput-button input{position:absolute;top:0;right:0;margin:0;opacity:0;-ms-filter:'alpha(opacity=0)';font-size:200px !important;direction:ltr;cursor:pointer;}
.progress{height:10px;argin-top:10px;margin:5px 0 0 5px;width:97% !important;background:none;}
.progress-bar{background-color:orange;height:10px;transition:0.3s ease;-ms-transition:0.3s ease;}
#files{margin-top:90px;text-align:left;}
#saveall{position:absolute;top:40px;left:380px;padding:0px 5px;border-radius:15px;}
#saveall:hover{background:gray;}
/* Стили Цветовое колесо */
#color{width:75px;background-color:rgb(134,176,28);color:rgb(255,255,255);}
#picker{width:194px;margin-left:90px;}
/* Стили Логин */
.wrapper-page{width:380px;margin:140px auto;}
.panel-primary{-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.12),0 1px 2px rgba(0,0,0,0.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,0.12),0 1px 2px rgba(0,0,0,0.24);box-shadow:0 1px 3px rgba(0,0,0,0.12),0 1px 2px rgba(0,0,0,0.24);padding:20px 30px;border:none;border-top:1px solid #ddd;margin-bottom:20px;}
.panel-heading{background-color:#483D8B;color:#fff;margin-top:-20px;margin-left:-30px;margin-bottom:20px;margin-right:-30px;padding:20px 30px;border-bottom:0;}
.form-control{border:1px solid gray !important;}
<? if ($animation == true) { ?>
/* Стили анимации */
.animation_close_tab{-webkit-animation:close_tab 400ms linear both;animation:close_tab 400ms linear both;} @-webkit-keyframes close_tab{0%{ -webkit-transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);}100%{ -webkit-transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,25,0,1);transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,25,0,1);}} @keyframes close_tab{0%{ -webkit-transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);}100%{ -webkit-transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,25,0,1);transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,25,0,1);}}
.animation_close_window{-webkit-animation:close_window 1500ms linear both;animation:close_window 1500ms linear both;} @-webkit-keyframes close_window{0%{ -webkit-transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);}22.62%{ -webkit-transform:matrix3d(1,0,0,0,0,-0.053,0,0,0,0,1,0,0,-22.834,0,1);transform:matrix3d(1,0,0,0,0,-0.053,0,0,0,0,1,0,0,-22.834,0,1);}39.44%{ -webkit-transform:matrix3d(1,0,0,0,0,0.016,0,0,0,0,1,0,0,-25.354,0,1);transform:matrix3d(1,0,0,0,0,0.016,0,0,0,0,1,0,0,-25.354,0,1);}100%{ -webkit-transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,-25,0,1);transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,-25,0,1);}} @keyframes close_window{0%{ -webkit-transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1);}22.62%{ -webkit-transform:matrix3d(1,0,0,0,0,-0.053,0,0,0,0,1,0,0,-22.834,0,1);transform:matrix3d(1,0,0,0,0,-0.053,0,0,0,0,1,0,0,-22.834,0,1);}39.44%{ -webkit-transform:matrix3d(1,0,0,0,0,0.016,0,0,0,0,1,0,0,-25.354,0,1);transform:matrix3d(1,0,0,0,0,0.016,0,0,0,0,1,0,0,-25.354,0,1);}100%{ -webkit-transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,-25,0,1);transform:matrix3d(1,0,0,0,0,0.01,0,0,0,0,1,0,0,-25,0,1);}}
.animation_open_tab{-webkit-animation:open_tab 200ms linear both;animation:open_tab 200ms linear both;} @-webkit-keyframes open_tab{0%{ -webkit-transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,-500,0,0,1);transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,-500,0,0,1);}100%{ -webkit-transform:matrix3d(1,0,0,0,-0.007,1,0,0,0,0,1,0,2.886,0,0,1);transform:matrix3d(1,0,0,0,-0.007,1,0,0,0,0,1,0,2.886,0,0,1);}} @keyframes open_tab{0%{ -webkit-transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,-500,0,0,1);transform:matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,-500,0,0,1);}100%{ -webkit-transform:matrix3d(1,0,0,0,-0.007,1,0,0,0,0,1,0,2.886,0,0,1);transform:matrix3d(1,0,0,0,-0.007,1,0,0,0,0,1,0,2.886,0,0,1);}}
.animation_main_tab{}
<? } ?>
#login{color:#797979;background-color:#9370DB;font-family:Helvetica,Arial,sans-serif;padding:0 !important;margin:0 !important;font-size:14px;position:relative;}
/* Стили колеса выбора цвета */
.far {position: relative;}.far * {position: absolute;cursor: crosshair;}.far, .far .wheel {width: 195px;height: 195px;}.far .color, .far .overlay {top: 47px;left: 47px;width: 101px;height: 101px;}.far .wheel {background: url('data:image/png;base64,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') no-repeat;width: 195px;height: 195px;}.far .overlay {background: url('data:image/png;base64,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') no-repeat;}.far .marker {width: 17px;height: 17px;margin: -8px 0 0 -8px;overflow: hidden; background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAAK3RFWHRDcmVhdGlvbiBUaW1lAHZyIDE0IGp1bCAyMDA2IDEzOjMxOjIzICswMTAwHvJDZwAAAAd0SU1FB9YHDgsgJYiZ4bUAAAAJcEhZcwAALiIAAC4iAari3ZIAAAAEZ0FNQQAAsY8L/GEFAAAB5ElEQVR42q2Tz0sqURTH72Qq4mASSAoSIfSDdCEI8qJFLXSjLYSQNoGLINrI8/0ZD9q0KnDlKkIMebmP9xZRCEEiLQLBiMiNJDYq/Zg573vpCkM6CdGBD3Pn3OvXe77nDGPfENKwJBHx/CxYAtNAAVfgXJKk7khVCCyCP6ALVKAJXkEdbINxw5tgM4HHPphSFEUql8usXq8zWZZZKBRiPp+PH3sBx2Br4FbiBg+aplGxWKRgMPiMH1+YTKZDq9V64na7G+l0mprNJo7RG/g94IEoQSsUCuRyue6QToIJYAJWMA/Bo2QySZ1Ohws9gZBeZI570Gq1yO/395BKGJg+ZbFYznK5HAmf9vQiKW5iqVQim832Fyn5E+83Y7EYieAdY2Nig7dRqtVqrNfr3YiWGsVltVrtr2f0IrwEZrfbGeqWhQ9GMeFwOPprRS9SAWo4HGZOp/MH1l4DAS6+HolE+u9Xek9kcK+qKqVSKUL/s0hPDhFY83g8j5VKhcQg7nxs80/w0mg0KB6Pa2az+RTpDbDA3sd/lwvk8/l+Z7iS/FHEAor8H9rtNmWzWYpGo+T1eikQCFAmkyFxAy7AJ255aMHYcIID8d1oNBi8hGuwwkYFDq0CPlG3YsTb4B/4BRwjBb4S/wGzT16tu5THiAAAAABJRU5ErkJggg==') no-repeat;}
</style>
<script src="//yastatic.net/jquery/2.2.4/jquery.min.js"></script>
<script src="https://yastatic.net/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?
$author = true;
// =================== HTML
// Логин
if ($author == false) {
?>
</head><body id='login'>
<form>
<div class="wrapper-page animated fadeInDown"><div class="panel panel-color panel-primary"><div class="panel-heading"><h3 class="text-center m-t-10"><? echo EnterthEditor; ?></h3></div>
        <div class="form-horizontal m-t-40" id="login">
            <div class="form-group">
                <div class="col-xs-12">
                <? echo Login; ?><br>
                    <input class="form-control" name="login" type="text" required="" autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                <? echo Password; ?><br>
                    <input class="form-control" name="pass" type="password" required="">
                </div>
            </div>
            <div class="form-group text-right">
                <div class="col-xs-12">
                    <button class="btn btn-purple w-md" type="submit"><? echo Enter; ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<?
} else {
// Главный экран
?>

<script src='//cdnjs.cloudflare.com/ajax/libs/ace/1.2.7/ace.js'></script>
<script src="//ajaxorg.github.io/ace-builds/src/ext-language_tools.js"></script>
<script src="//ajaxorg.github.io/ace-builds/src/ext-emmet.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=10;IE=edge" />
</head><body>

<!-- Табы окон -->
<div class="windows_tab requestfullscreen" title="<? echo Fullscreen; ?>"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div><div class="windows_tab exitfullscreen none" title="<? echo ExitFullscreen; ?>"><i class="fa fa-times" aria-hidden="true"></i></div>

<div class='windows_tabs'>
<div class="windows_tab" id="left_panel" onclick="hide_left_panel()"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></div>
<div class="windows_tab" id="add_file" onclick="$('.tab.tree').click();new_file('true');">+<i class="fa fa-file-o" aria-hidden="true"></i></div>
</div>
<!-- Полоса статуса -->
<div id='infobox'>
    <div class="col-md-4" id="infobox_filename" title="<? echo FilePath; ?>"><? echo FilePath; ?></div>
    <div class="col-md-2 text-center" id="infobox_text" title="<? echo TextCoding; ?>"></div>
    <div class="col-md-3 text-center" id="infobox_code" title="<? echo CodingType; ?>"></div>
    <div class="col-md-3 text-right" onclick='last_goto_line = parseInt(prompt("<? echo Enterlinenumber; ?>:", last_goto_line), 10);if (!isNaN(last_goto_line)) {win[focuss].gotoLine(last_goto_line);}' id="infobox_line" title="<? echo LineColumn2; ?>"><? echo LineColumn; ?></div>
</div>
<!-- Окна -->
<span id='windows'><div id='view' class='window active'><div class='viewer'>
<br><p class='f18'><? echo Tested; ?>: <i class="fa fa-chrome" aria-hidden="true"></i> <i class="fa fa-firefox" aria-hidden="true"></i> <i class="fa fa-safari" aria-hidden="true"></i>
<h1><? echo thEditor; ?></h1>
<p><? echo Version.": ".$ver; ?>
<p><a target='_blank' href='http://halocoder.ilost.ru/'>halocoder.ilost.ru</a>
    <!-- View License | Terms of Use -->
</div></div>

<span id='spinner' class='window'><div class="text-center"><i class="fa fa-spin fa-spinner f100 " aria-hidden="true"></i></div></span>
</span>
<!-- Табы главных кнопок -->
<div class='tabs'>
    <div class='tab tree active'><img title='<? echo Files; ?>' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADsAAAA8CAMAAADv/jI5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADBQTFRF/5kC//78FBQU/8Fj/9mf+rhTknE9/640/+vMkVwM/qQfVT8e/54O8ZIDzZtP1IIFJEOyWwAAAAN0Uk5T//8A18oNQQAAAelJREFUeNrsltFyhDAIRU1JCsOg/v/fFkJitDXY2T52edhZMUfgkqDLx+u2vNl/wG7lm22/Zjf4advn6yxA+XydrcGn9sgGtv2BhSe24NRKrBXKMjcJ2ILLgzX2JieLyZOQ7t8ru96vyekezlT9q7GTnEpK+c6PKVFn90lmlFKCwG/sNGMznPg5ZKGuoZtKzC0Ri+KrvpXMzal9mLNEgnVdubodBS1myrLlhdTSuxZiqKo1ZS1hYqZr1jUTqHLRnHWl8NqodpVdrSnrndBiyRtyOEu/xVNWoKriUVrJcGSihQRaAS9Ow2BNA3cqWeZxKeVOD6VdBLtTKGFYb6fx0l0n0wNr6+CyLYs1rng2T2yTayg4vIHOmIkojU3JPLZk0ls52FeL6iNSzwO6Srmlk9Utem/OCtnDc3YWe+7WMPVqSlHcUXBZ+i7sOftQmLPlrBW1WcGHk6KzLypH4ZpkZ6U+EAUhE4QzR8cwQvb02rH1w5cBWeJZJ0dt2f+jS3b0PIrrwUB3kjYFMovFJzhmScRqlaTLSXQTgtivDht9ELTtErIIi04sGOIqrOkK+y4N3gu9yQzp1Bkak3MP3ketZDkdC7IL4tM7dI/gfD5SiflA9/Zttq8zw3XNdm6a8Ypc/fv7G/jNBvYlwADNyB/ZURkjqgAAAABJRU5ErkJggg=='></div>

    <a onclick='saveall();' id='saveall' title='<? echo SaveAll; ?>'><i class="fa fa-caret-down" aria-hidden="true"></i></a>
    <div class='tab link right' id='saveme' title="<? echo Savefile; ?>"><i class="fa gray fa-save" aria-hidden="true"></i></div>

    <div class='tab plugins' title="<? echo Plugins; ?>"><i class="fa fa-list-alt" aria-hidden="true"></i></div>
    <div class='tab database' title="<? echo DataBase; ?>"><i class="fa fa-database" aria-hidden="true"></i></div>
    <?
    if ($your_site_url != '') echo "<a target='_blank' class='tab link' href='".$your_site_url."'><i title='".Site."' class='fa fa-desktop' aria-hidden='true'></i></a>";
    if ($admin_page_url != '') echo "<a target='_blank' class='tab link' href='".$admin_page_url."'><i title='".Admin."' class='fa fa-user-circle-o' aria-hidden='true'></i></a>";
    ?>
</div>
<!-- Левая панель -->
<div class='left_panel database none' id='bd_tree'>...</div>

<div class='left_panel plugins none'>

  <div class='akkZ' id='infobox_word'><i class="fa fa-text-width" aria-hidden="true"></i> <? echo Lines.', '.Words.', '.Symbols; ?></div>

  <div class='akk akk0'><i class="fa fa-thumb-tack right button" title='<? echo Fix; ?>' aria-hidden="true"></i><i class="fa fa-file" aria-hidden="true"></i> <? echo FilesList; ?></div>
  <div class='akk-content akk0' id='list_files'>...</div>

  <div class='akk akk1 active'><i class="fa fa-thumb-tack right button" title='<? echo Fix; ?>' aria-hidden="true"></i><i class="fa fa-list" aria-hidden="true"></i> <? echo GoToSome; ?></div>
  <div class='akk-content akk1 active' id='list_functions'>...</div>

  <div class='akk akk4'><i class="fa fa-thumb-tack right button" title='<? echo Fix; ?>' aria-hidden="true"></i><a onclick='save_buffer();$(".akk4").click();'><i title='<? echo Save; ?>' class="fa fa-save right button" aria-hidden="true"></i></a><i class="fa fa-align-justify" aria-hidden="true"></i> <? echo Buffer; ?></div>
  <div class='akk-content akk4'><text<? ?>area onblur="save_buffer()" placeholder="<? echo Pastesometext; ?>" rows=10 class="w100" autofocus id='buffer'><? echo file_get_contents('.//$Recycle.Bin/buffer.halo'); ?></text<? ?>area></div>

  <div class='akk akk5'><i class="fa fa-thumb-tack right button" title='<? echo Fix; ?>' aria-hidden="true"></i><i class="fa fa-keyboard-o" aria-hidden="true"></i> <? echo KeyboardShortcuts; ?></div>
  <div class='akk-content akk5'></div>

<? if ($language == 'ru') { ?>
<!-- Перевод текста через Яндекс.Перевод -->
    <div class='akk akk3'><i class="fa fa-language" aria-hidden="true"></i> Перевод (английский)</div>
    <div class='akk-content akk3'>
    <p><text<? ?>area placeholder="Напишите слова для перевода" id="from_lang" class="col-md-12" autofocus></text<? ?>area>
    <p><text<? ?>area placeholder="Здесь будет перевод" id="to_lang" class="col-md-12" disabled></text<? ?>area>
    <p>Перевести на: <a class="btn akkbtn" onclick="ya_translate('ru','en')" title="">английский</a>, <a class="btn akkbtn" onclick="ya_translate('en','ru')" title="">русский</a>. <a class="btn akkbtn" onclick="$('#from_lang').val('');$('#to_lang').html('');" title="">Очистить</a><script>function ya_translate(lang_from, lang_to) {if ($('#from_lang').val() != '') {$('#to_lang').html('...');functions('translate', '', lang_from + '-' + lang_to + '*@%' + $('#from_lang').val().replace('"', '').replace('"', '').replace('\'', '').replace('\'', ''), 'to_lang', '', true);}}</script></div>
<? } ?>

  <div class='akk akk2'><i class="fa fa-circle-o-notch" aria-hidden="true"></i> <? echo ColorTool; ?></div>
  <div class='akk-content akk2'>

    <?
    if ($language == 'ru') echo '<a href="https://colorscheme.ru/" class="btn akkbtn right" target="_blank">Подбор цвета</a>';
    ?>
    <a href="http://www.colorzilla.com/gradient-editor/" class="btn akkbtn right" target="_blank"><? echo GradientTool; ?></a>

    <div class="form-item"><label for="color"><? echo Color; ?> HEX:</label> <input onkeyup="hexDec($(this).val())" type="text" id="color" name="color" value="#123456"><br>RGB: <span id="rgb">134, 176, 28</span></div>
    <div id="picker"></div>
  <script>
  function hexDec(h){var m=h.slice(1).match(/.{2}/g);m[0]=parseInt(m[0],16);m[1]=parseInt(m[1],16);m[2]=parseInt(m[2],16);$('#rgb').html(m.join(',\n'));};
  jQuery.fn.far=function(a){$.far(this,a);return this};jQuery.far=function(a,b){var a=$(a).get(0);return a.far||(a.far=new jQuery._far(a,b))};jQuery._far=function(a,d){var b=this;$(a).html('<div class="far"><div class="color"></div><div class="wheel"></div><div class="overlay"></div><div class="h-marker marker"></div><div class="sl-marker marker"></div></div>');var c=$(".far",a);b.wheel=$(".wheel",a).get(0);b.radius=84;b.square=100;b.width=194;b.linkTo=function(e){if(typeof b.callback=="object"){$(b.callback).unbind("keyup",b.uV)}b.color=null;if(typeof e=="function"){b.callback=e}else{if(typeof e=="object"||typeof e=="string"){b.callback=$(e);b.callback.bind("keyup",b.uV);if(b.callback.get(0).value){b.setColor(b.callback.get(0).value)}}}return this};b.uV=function(e){if(this.value&&this.value!=b.color){b.setColor(this.value)}};b.setColor=function(e){var f=b.unpack(e);if(b.color!=e&&f){b.color=e;b.rgb=f;b.hsl=b.rth(b.rgb);b.uDi()}return this};b.sH=function(e){b.hsl=e;b.rgb=b.hstr(e);b.color=b.pack(b.rgb);b.uDi();return this};b.wiC=function(i){var g,m;var h=i.target||i.srcElement;var f=b.wheel;if(typeof i.offsetX!="undefined"){var l={x:i.offsetX,y:i.offsetY};var j=h;while(j){j.mouseX=l.x;j.mouseY=l.y;l.x+=j.offsetLeft;l.y+=j.offsetTop;j=j.offsetParent}var j=f;var k={x:0,y:0};while(j){if(typeof j.mouseX!="undefined"){g=j.mouseX-k.x;m=j.mouseY-k.y;break}k.x+=j.offsetLeft;k.y+=j.offsetTop;j=j.offsetParent}j=h;while(j){j.mouseX=undefined;j.mouseY=undefined;j=j.offsetParent}}else{var l=b.abP(f);g=(i.pageX||0*(i.clientX+$("html").get(0).scrollLeft))-l.x;m=(i.pageY||0*(i.clientY+$("html").get(0).scrollTop))-l.y}return{x:g-b.width/2,y:m-b.width/2}};b.mousedown=function(e){if(!document.dragging){$(document).bind("mousemove",b.mousemove).bind("mouseup",b.mouseup);document.dragging=true}var f=b.wiC(e);b.circleDrag=Math.max(Math.abs(f.x),Math.abs(f.y))*2>b.square;b.mousemove(e);return false};b.mousemove=function(h){var i=b.wiC(h);if(b.circleDrag){var g=Math.atan2(i.x,-i.y)/6.28;if(g<0){g+=1}b.sH([g,b.hsl[1],b.hsl[2]])}else{var f=Math.max(0,Math.min(1,-(i.x/b.square)+0.5));var e=Math.max(0,Math.min(1,-(i.y/b.square)+0.5));b.sH([b.hsl[0],f,e])}return false};b.mouseup=function(){$(document).unbind("mousemove",b.mousemove);$(document).unbind("mouseup",b.mouseup);document.dragging=false};b.uDi=function(){var e=b.hsl[0]*6.28;$(".h-marker",c).css({left:Math.round(Math.sin(e)*b.radius+b.width/2)+"px",top:Math.round(-Math.cos(e)*b.radius+b.width/2)+"px"});$(".sl-marker",c).css({left:Math.round(b.square*(0.5-b.hsl[1])+b.width/2)+"px",top:Math.round(b.square*(0.5-b.hsl[2])+b.width/2)+"px"});$(".color",c).css("backgroundColor",b.pack(b.hstr([b.hsl[0],1,0.5])));if(typeof b.callback=="object"){$(b.callback).css({backgroundColor:b.color,color:b.hsl[2]>0.5?"#000":"#fff"});$(b.callback).each(function(){if(this.value&&this.value!=b.color){this.value=b.color;hexDec(b.color)}})}else{if(typeof b.callback=="function"){b.callback.call(b,b.color)}}};b.abP=function(f){var g={x:f.offsetLeft,y:f.offsetTop};if(f.offsetParent){var e=b.abP(f.offsetParent);g.x+=e.x;g.y+=e.y}return g};b.pack=function(f){var i=Math.round(f[0]*255);var h=Math.round(f[1]*255);var e=Math.round(f[2]*255);return"#"+(i<16?"0":"")+i.toString(16)+(h<16?"0":"")+h.toString(16)+(e<16?"0":"")+e.toString(16)};b.unpack=function(e){if(e.length==7){return[parseInt("0x"+e.substring(1,3))/255,parseInt("0x"+e.substring(3,5))/255,parseInt("0x"+e.substring(5,7))/255]}else{if(e.length==4){return[parseInt("0x"+e.substring(1,2))/15,parseInt("0x"+e.substring(2,3))/15,parseInt("0x"+e.substring(3,4))/15]}}};b.hstr=function(m){var o,n,e,j,k;var i=m[0],p=m[1],f=m[2];n=(f<=0.5)?f*(p+1):f+p-f*p;o=f*2-n;return[this.htr(o,n,i+0.33333),this.htr(o,n,i),this.htr(o,n,i-0.33333)]};b.htr=function(f,e,g){g=(g<0)?g+1:((g>1)?g-1:g);if(g*6<1){return f+(e-f)*g*6}if(g*2<1){return e}if(g*3<2){return f+(e-f)*(0.66666-g)*6}return f};b.rth=function(m){var i,o,p,j,q,f;var e=m[0],k=m[1],n=m[2];i=Math.min(e,Math.min(k,n));o=Math.max(e,Math.max(k,n));p=o-i;f=(i+o)/2;q=0;if(f>0&&f<1){q=p/(f<0.5?(2*f):(2-2*f))}j=0;if(p>0){if(o==e&&o!=k){j+=(k-n)/p}if(o==k&&o!=n){j+=(2+(n-e)/p)}if(o==n&&o!=e){j+=(4+(e-k)/p)}j/=6}return[j,q,f]};$("*",c).mousedown(b.mousedown);b.setColor("#000000");if(d){b.linkTo(d)}};
    $(document).ready(function() { jQuery.far('#picker').linkTo('#color');  });
  </script>
  </div>

</div>

<!-- Дерево файлов - Кнопки сверху -->

<div class='left_panel tree'>
<?
    if ($radio == true) echo '<iframe id="radio" class="none" src="//radiorecord.ru/player/tab10-mini/" frameborder="0"></iframe>';
?>
    <div id='new_file' class='none'></div>
<!-- Загрузка файлов -->
    <div id='upload_file' class='none'><a class="right" onclick="$('#upload_file').toggle('fast');"><i class="fa fa-close" aria-hidden="true"></i></a><p class="f18"><? echo UploadingFiles; ?></p><select id="upload_folders_tree" onchange="upload_folder();" class="col-md-12"><option value=".//<? echo $file_folder; ?>"><? echo Selectfolder.": ".$file_folder; ?></option><option value=".//<? echo $image_folder; ?>"><? echo $image_folder; ?></option><option value="./">{<? echo root; ?>}</option></select>
    <p><? echo MaxPhotoSize; ?></p>
    <select id="upload_rename" onchange="upload_folder();" class="col-md-12">
    <option value="0"><? echo NotChangeNameAndReplace; ?></option>
    <option value="1"><? echo NotChangeNameAndNoReplace; ?></option>
    <option value="2"><? echo ChangeFileName; ?></option>
    </select>
        <div class="col-md-5" style='padding:0;'>
            <span class="btn fileinput-button w100"><span><? echo SelectFiles; ?>...</span><input id="fileupload" type="file" name="files[]" multiple=""></span>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-7" style='padding:0;'>
            <div id="progress" class="progress w100"><div class="progress-bar progress-bar-success"></div></div>
        </div>
        <div id="files" class="files"></div><script src="http://blueimp.github.io/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script><script src="http://blueimp.github.io/jQuery-File-Upload/js/jquery.iframe-transport.js"></script><script src="http://blueimp.github.io/jQuery-File-Upload/js/jquery.fileupload.js"></script><script>function upload_folder() {$('#fileupload').fileupload({url: '<? echo basename(__FILE__); ?>?up=' + $('#upload_folders_tree option:selected').val() + '&re=' + $('#upload_rename option:selected').val() + '&s=<? echo $security_line; ?>',dataType: 'json',beforeSend: function() {$('#upload_file').show();},done: function (e, data) {files_tree_update();$.each(data.result.files, function (index, file) {$('<p class="fa fa-check green">').text(file.name).appendTo('#files');});},progressall: function (e, data) {var progress = parseInt(data.loaded / data.total * 100, 10);$('#progress .progress-bar').css('width',progress + '%');}}).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');} $(function () {upload_folder()});</script>
    </div>

    <div id='search_files' class='none'><p><input type='search' name='query' id='search_query' onkeyup='search_files()' placeholder='<? echo SearchFiles; ?>'><br><label for='search_check'><input type='checkbox' id='search_check' value='1'> <? echo SearchTextinFiles; ?></label></p></div>

    <div class="buttons right">
    <a class='button showtab' title='<? echo EditorSettings; ?>' onclick='settings()'><i class="fa fa-cogs" aria-hidden="true"></i></a><a class='button showtab' title='<? echo Searchinfile; ?>' onclick='find()'><i class="fa fa-search" aria-hidden="true"></i></a>
    </div>

    <div class="buttons">
    <a class="button" title="<? echo SearchFiles; ?>" onclick="$('#search_files').toggle('slow');$('#search_query').focus();"><i class="fa fa-search " aria-hidden="true"></i></a><a class="button" title="<? echo Addfile; ?>" onclick="new_file('true')">+<i class="fa fa-file-o" aria-hidden="true"></i></a><a class="button" title="<? echo AddFolder; ?>" onclick="new_file('false')">+<i class="fa fa-folder" aria-hidden="true"></i></a><a class="button" title="<? echo UploadFile; ?>" onclick="$('#upload_file').toggle('slow');functions('folders_tree', '', '', 'upload_folders_tree');"><i class="fa fa-upload" aria-hidden="true"></i></a><a class="button" title="<? echo CollapseAllFolders; ?>" onclick="close_folders()"><i class="fa fa-minus " aria-hidden="true"></i></a><a class="button" title="<? echo Refresh; ?>" onclick="files_tree_update()"><i class="fa fa-refresh " aria-hidden="true"></i></a><a class="button" title="<? echo LastModifiedFiles; ?>" onclick="last_files()"><i class="fa fa-list-alt " aria-hidden="true"></i></a>
<?
    if ($radio == true) echo '<a class="button" title="'.Radio.'" onclick="$(\'#radio\').toggle(\'slow\');"><i class="fa fa-music" aria-hidden="true"></i></a>';
?>

    </div>

    <div id="files_tree"><div class="text-center"><i class="fa fa-spin fa-spinner f100 " aria-hidden="true"></i></div></div>
</div>

<script>
// ======================= JS
focuss = ''; // фокус файла
win = []; // список открытых файлов, массив
files = []; // files[number] = [ shortname ]; number - номер вкладки и окна = shortname - сокращенное имя
search = false; //поиск
files_tree = ''; // дерево файлов для поиска
last_goto_line = ''; // последний запрос перехода к строке

// JS Инициализация при запуске
$(function() {

  $('.showtab').hide();
  tools();
  functions('files_tree', '', '', 'files_tree', '', true);

// Переходы по табам (аккордеон) левой панели
  $('.akk').click(function() {
      if (!$(this).hasClass('fix')) {
        var active_class = $(this).prop('class').replace('akk ','').replace('active ','').replace(' active','').replace(' fix','');
        if (!$('.akk.'+active_class).hasClass('active')) {
          var active_class = $(this).prop('class').replace('akk ','');
          $('.akk-content.'+active_class).addClass('active');
          $(this).addClass('active');
          if (active_class == 'akk0') list_files();
          if (active_class == 'akk1') list_functions_update();
          if (active_class == 'akk5') $('.akk-content.akk5').html('<iframe src="//halocoder.ilost.ru/help.php?lang=<? echo $language; ?>" class="w100 h400"></iframe>');
        } else {
          $('.akk.'+active_class).removeClass('active');
          $('.akk-content.'+active_class).removeClass('active');
        }
      }
  });

// Переходы по главным табам (сверху слева)
  $('.tab').click(function() {
      var active_class = $(this).prop('class').replace('tab ','').replace(' active','').replace(' right','');
      if (active_class != 'link') {
        $('.tab').removeClass('active');
        $('.left_panel').removeClass('animation_main_tab').hide();
        $('.left_panel.'+active_class).show().addClass('animation_main_tab');
        $(this).addClass('active');
      }
      if (active_class == 'database' && $('#bd_tree').html() == '...') bd_tree();
  });

// Закрепление аккордеона в Дополнениях
  $('.fa-thumb-tack.right.button').click(function() {
      if ($(this).hasClass('active')) {
        $('.akk').removeClass('fix');
        $('.akk-content').removeClass('fix');
        $(this).removeClass('active');
        $('.akk').show('fast');
        $('.akkZ').show('fast');
      } else {
        var active_akk = '.'+$(this).parent().prop('class').replace(/\s+/g,'.');
        $(this).addClass('active');
        $('.akkZ').hide('fast');
        $('.akk').each(function (index, element) {
            var active_content = $(element).attr('class').replace(/\s+/g,'.').replace('akk.','akk-content.');
            if ('.'+$(element).attr('class').replace(/\s+/g,'.').replace('.active','') != active_akk.replace('.active','')) {
                $(element).hide('fast').removeClass('active');
                $('.'+active_content).removeClass('active');
            } else {
                if (!$(element).hasClass('active')) $(element).click();
                $('.'+active_content).addClass('active').addClass('fix');
            }
        });
        $(active_akk).addClass('fix');
      }
  });

  $('.requestfullscreen').click(function() {
      $('body').fullscreen();
      return false;
  });
  $('.exitfullscreen').click(function() {
      $.fullscreen.exit();
      return false;
  });
  $(document).bind('fscreenchange', function(e, state, elem) {
      if ($.fullscreen.ifs()) {
          $('.requestfullscreen').hide();
          $('.exitfullscreen').show();
      } else {
          $('.requestfullscreen').show();
          $('.exitfullscreen').hide();
      }
  });

  // При нажатии клавиш показывать позицию курсора
  $(document).keyup(function() { cursor_position() });
  // При клике по активному окну показывать позицию курсора
  $(document).click(function() { cursor_position() });
});

// Загружаем список связанных файлов
function list_files() {
  //functions('list_files', '', '', 'list_files', '', true);
}

// Сохраняем все файлы
function saveall() {
    alert('Пока не работает');
}

// Загружаем список последних файлов
function last_files() {
  $('#files_tree').html('<div class="text-center"><i class="fa fa-spin fa-spinner f100 " aria-hidden="true"></i></div>');
  functions('last_files', '', '', 'files_tree', '', true);
}

// Cписок функций и классов
function list_functions_update() {
  var list = "";
  // Получаем содержание файла
  if ($('.window.active').is('.ace_editor')) {
    var file = $('.windows_tab.active .file_name').html();
    var ras1 = file.split('.');
    var ras = ras1[ras1.length - 1];
    var id = $('.windows_tab.active').prop('id').replace('t','');
    var txt = win[id].getValue();
      if (ras == 'js') {
      }
      if (ras == 'css') {
      }
      if (ras == 'php' || ras == 'js') {
        // Классы
        var list_class = [];
        list_class = list_functions_show(list_class,/(class [А-Яа-яA-Za-z0-9_]+)/g,txt,'','php');
        var count = list_class.length;
        list_class = list_class.sort().join('');
        if (list_class.length != 0) list += "<li class='folder'><a id='Cla' onclick='$(\".folder_tree#tCla\").toggle(\"slow\");change_folder(this);'><i class='fa fa-folder' aria-hidden='true'></i> <b><? echo Classes; ?> ("+count+")</b></li><div class='folder_tree' id='tCla'>"+list_class+"</div>";

        // JS и PHP Функции
        var list_func = [];
        var list_func_without_sort = [];
        list_func = list_functions_show(list_func,/(function\s* [А-Яа-яA-Za-z0-9_]+(\s*|)\()/g,txt,'(','php');
        var count = list_func.length;
        list_func_without_sort = list_func.join('');
        list_func = list_func.sort().join('');
        if (list_func != '') {
            list += "<li class='folder'><a id='Fu' onclick='$(\".folder_tree#tFu\").toggle(\"slow\");change_folder(this);'><i class='fa fa-folder' aria-hidden='true'></i> <b><? echo Functions; ?> ("+count+")</b></li><div class='folder_tree' id='tFu'>"+list_func+"</div>";
            list += "<li class='folder'><a id='Fu2' onclick='$(\".folder_tree#tFu2\").toggle(\"slow\");change_folder(this);'><i class='fa fa-folder' aria-hidden='true'></i> <b><? echo FunctionsWithOutSort; ?> ("+count+")</b></li><div class='folder_tree' id='tFu2'>"+list_func_without_sort+"</div>";
        }

        // JS Функции
        var list_js = [];
        list_js = list_functions_show(list_js,/([А-Яа-яA-Za-z0-9-_]+\s*:\s*function)/g,txt,'','js');
        var count = list_js.length;
        list_js = list_js.sort().join('');
        if (list_js.length != 0) list += "<li class='folder'><a id='JS_F' onclick='$(\".folder_tree#tJS_F\").toggle(\"slow\");change_folder(this);'><i class='fa fa-folder' aria-hidden='true'></i> <b><? echo JSFunctions; ?> ("+count+")</b></li><div class='folder_tree' id='tJS_F'>"+list_js+"</div>";
        // JS События
        // $(document).keyup(function
        // $('.tab').click(
        /*
        var list_js2 = [];
        list_js2 = list_functions_show(list_js2,/\$\('((\.|#)[A-Za-z0-9-_]+)'(\)\.click)/g,txt,'(','js');
        var count = list_js2.length;
        list_js2 = list_js2.sort().join('');
        if (list_js2.length != 0) list += "<li class='folder'><a id='Eve' onclick='$(\".folder_tree#tEve\").toggle(\"slow\");change_folder(this);'><i class='fa fa-folder' aria-hidden='true'></i> <b>JS Events ("+count+")</b></li><div class='folder_tree' id='tEve'>"+list_js2+"</div>";
        */
      }
    // Комментарии
    var list_comm = [];
    var txts = txt.split('\n');
    var lite = '';
    for(var h in txts){
        //.replace('/(:(/s+|/t+  )#)/g','');
        var xxx = txts[h].replace('://','').replace('\'//','').replace('"//','').replace('/{.*}/g','');
        if (xxx.search(/^\/\//g) != -1 ||
        xxx.search(/^<!--/g) != -1 ||
        xxx.search(/^# /g) != -1 ||
        xxx.search(/^\/\*/g) != -1 ) {
            lite = xxx.replace(/^<([a-z]+)([^>]+)*(?:>(.*)<\/\1>|\s+\/>)$/g,'');
            lite = lite.replace('/**','').replace('/*','').replace('*/','').replace('<!--','').replace('-->','').replace(/^\/\//g,'').replace('/^# /g','').replace(/(.*[<!#*>])/g,''); //# \/ [ \/\/
            if (lite.replace(/\s+/g, '') != '') list_comm = list_comm.concat(["<li class='file'><a onclick=\"win["+focuss+"].gotoLine(" + (parseInt(h,10) + 1) + ")\" title='<? echo GoToThis; ?>'><i class='fa fa-comments' aria-hidden='true'></i> "+lite+" ("+(parseInt(h,10) + 1)+")</a>"]);
        }
    }
    var count = list_comm.length;
    list_comm = list_comm.join('');
    if (list_comm.length != 0) list += "<li class='folder'><a id='Comm' onclick='$(\".folder_tree#tComm\").toggle(\"slow\");change_folder(this);'><i class='fa fa-folder' aria-hidden='true'></i> <b><? echo Comments; ?> ("+count+")</b></li><div class='folder_tree ml20' id='tComm'>"+list_comm+"</div>";

  } else list += '';
  if (list == '') list += '...';
  list = "<a class='right button' title='<? echo Refresh; ?>' onclick='list_functions_update()'><i class='fa fa-refresh' aria-hidden='true'></i></a>"+list;
  $('#list_functions').html(list);
  tools();
}

// Вывод списка функций
function list_functions_show(list,number,txt,add,type) {
  var no = ['function_exists','function_defined','function_name','beforesend','success','error'];
  var lites = [];
  while (match = number.exec(txt)) {
    var add2 = '';
    var add3 = ', false'; // RegExp
    if (match[2] && type == 'js') {
        match[1] = match[1].replace(/\./g, '\\.')+".*\\)\\.";
        add3 = ', true';
    }
    var lite = match[1].replace('class ','').replace('function(','').replace(' function','').replace('function ','');
    if (type == 'php') {
        lite = lite.replace('(','');
    }
    if (type == 'js') {
        lite = lite.replace(':function','');
    }
    lite = lite.replace(':','').replace(/\s/g, '');
    if (no.indexOf(lite.toLowerCase()) == -1 && lites.indexOf(lite) == -1) {
        list = list.concat(["<span class='hidden'>"+lite.toLowerCase()+"</span><li class='folder'><a onclick=\"ace_search('"+match[1]+"'"+add3+")\" title='<? echo GoToThis; ?>'><i class='fa fa-code-fork' aria-hidden='true'></i> "+lite+"</a> <a title='<? echo SearchUsing; ?>' onclick='ace_search(\""+lite+add+"\")'><i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a>"]);
    }
    lites = lites.concat([lite]);
  }
  return list;
}

// Поиск в файлах
function search_files() {
    setTimeout(function() {
      if ($('#search_query').val().length > 1) {
        if (search == false) {
            $('.folder_tree').show();
            $('.folder').children('a').children('i.fa-folder').removeClass('fa-folder').addClass('fa-folder-open');
            files_tree = $('#files_tree').html();
        }
        $('#files_tree').html(files_tree);
        search = true;
        // Ищем в файлах введенные символы
        var re = new RegExp($('#search_query').val(),'i');
        $('.file a span').each(function (index, element) {
            //$('#search_query').val()
            if ( $(element).html().search( re ) != -1 ) { //!re.test( $(element).html() )) {
                $(element).addClass('orange');
            } else {
                //$(element).parent().remove();
                var id = $(element).attr('id'); //;
                if (id != undefined) {
                    $('#' + id.replace('n','')).remove();
                    $('#f' + id.replace('n','')).remove();
                }
            }
        });
        $('.file').each(function (index, element) {
            if ( $(element).html() == ' ') {
                $(element).remove();
            }
        });
        $('.folder a').each(function (index, element) {
            if ($(element).html().search( re ) != -1) {
                $(element).addClass('orange');
            }
        });
        for(var c=0;10>c;++c){
            $('.folder').each(function (index, element) {
                if ( $(element).html() == ' ' && !$(element).is('.orange')) {
                    $(element).remove();
                }
            });
            $('.folder_tree a').each(function (index, element) {
                if ($(element).html() == '' && !$(element).is('.orange')) {
                    $(element).remove();
                }
            });
            $('.folder_tree').each(function (index, element) {
                if ($(element).html() == '') {
                    var id = $(element).attr('id');
                    if (id != undefined && !$('#'+id.replace('t','')).is('.orange')) {
                        $('#'+id.replace('t','')).remove();
                        $('#f'+id.replace('t','')).remove();
                    }
                    $(element).remove();
                }
            });
        }
      } else if (search == true) {
        if (files_tree != '') $('#files_tree').html(files_tree);
        files_tree = '';
        search = false;
        close_folders();
      }
    }, 300);
}

// Поиск в редакторе
function ace_search(find, RegExp) {
  id = $('.windows_tab.active').prop('id').replace('t','');
  win[id].find(find, {regExp: RegExp});
}

// Обновление дерева БД
function bd_tree() {
  // Загружаем БД
  $('#bd_tree').html('<div class="text-center"><i class="fa fa-spin fa-spinner f100 " aria-hidden="true"></i></div>');
  functions('bd_tree', '', '', 'bd_tree', '', true);
}

// Обновление дерева файлов
function files_tree_update() {
  $('#files_tree').html('<div class="text-center"><i class="fa fa-spin fa-spinner f100 " aria-hidden="true"></i></div>');
    setTimeout(function() {
        functions('files_tree', '', '', 'files_tree', '', true);
    }, 500);
    setTimeout(function() {
        tools();
    }, 1000);
}

// Показывать позицию курсора в активном окне
function cursor_position() {
    if ($('.window.active').prop('id') != undefined) {
        // Определим id активного окна
        var id = $('.window.active').prop('id').replace('w','');
        if (id != '' && id != undefined && win[id] != undefined) {
          var cursor = win[id].selection.getCursor();
          $('#infobox_line').html('<? echo Line; ?> ' + (cursor.row+1) + ', <? echo Column; ?> ' + (cursor.column+1));
        }
    }
}

// Настройки редактора
function settings() {
    // Определим id активного окна
    var id = $('.window.active').prop('id').replace('w','');
    ace.config.loadModule("ace/ext/settings_menu", function(module) {
        module.init(win[id]);
        win[id].showSettingsMenu();
    });
}

// Поиск в редакторе
function find() {
    // Определим id активного окна
    var id = $('.window.active').prop('id').replace('w','');
    ace.config.loadModule("ace/ext/searchbox", function(module) {
        module.Search(win[id]);
    });
}


// Фокус таба
function windows_tab_active(x) {
    // Пишем имя файла в инфобоксе
    var info = '';
    if ($(x).prop('id') != undefined) {
        var info = files[$(x).prop('id').replace('t','')].replace('.//','');
    }
    if (info == 0) info = '';
    $('#infobox_filename').html(info);
    $('#infobox_text').html('');
    $('#infobox_code').html('');
    $('#infobox_line').html('');
    // Снимаем фокус с табов
    $('.windows_tabs').children('.windows_tab').removeClass('active');
    // Фокус таба
    $(x).addClass('active');
    // Скрываем остальные окна
    $('#windows').children('.window').removeClass('active');
    // Показываем выбранное окно
    focuss = x.replace('#t','');
    $("#w"+focuss).addClass('active');
    // Если вкладка не сохранялась - меняем иконку для сохранения
    if ($("div").is("#t"+focuss)) {
        if (!$('.edit'+focuss).hasClass('hidden')) {
          $('.tab#saveme').removeClass('active');
          change_icon('save white', '.tab#saveme');
        } else {
          $('.tab#saveme').addClass('active');
          change_icon('save gray', '.tab#saveme');
        }
    }
    // Информация - колонка и строка (только для текстовых)
    setTimeout(function() {
        // Если это редактор
        if ($('.active').is($('.ace_editor'))) {
          // Показываем кнопки управления
          $('.showtab').show();
          // Показываем номер строки и колонки — 1,1
          $('#infobox_line').html('<? echo Line; ?> 1, <? echo Column; ?> 1');
          $('#infobox_text').html($('#encoding'+focuss).html());
          $('#infobox_code').html('');
            // Обновляем список функций
          list_functions_update();
        } else {
          // Если это просмотр
          $('#infobox_line').html('');
          $('#infobox_text').html('');
          $('#infobox_code').html('');
          $('.showtab').hide();
        }
    }, 1000);
    // Включаем всплывающие подсказки
    tools();
}

function close_file(number) {
    // Проверка на сохранение
    if (!$('.edit'+number).is('.hidden') && $('#t'+number+' .edit').is('.edit'+number)) {
      $('#t'+number+' .close_tab').remove();
      $('.edit'+number).remove();
      $('#t'+number+' .file_name').html('<? echo Save; ?>? <a class="green_bg" onclick="saveFile();close_file('+number+');"><? echo Yes; ?></a> <a class="red_bg" onclick="close_file('+number+');"><? echo No; ?></a>');
    } else {
      // Добавляем анимацию таба
      $('#t'+number).removeClass('animation_open_tab').addClass('animation_close_tab');
      $('#w'+number).addClass('animation_close_window');
      
      // Прячем все остальные окна
      $('#windows').children('.window').removeClass('active');
      // Определяем файл в списке и меняем его иконку
      $('#'+tree_files2[tree_files.indexOf(files[number])]).children('i').addClass('fa-file-o').removeClass('fa-file');

      setTimeout(function() {
        // Снимаем фокус с табов
        $('.windows_tabs').children('.windows_tab').removeClass('active');
        // Удаляем таб
        $('#t'+number).remove();
        // Закрываем вкладку, удаляем окно и скрипты
        $('#w'+number).remove();
        $('#cod'+number).remove();
        $('#s'+number).remove();
        // Проверяем количество вкладок...
        if ($('.windows_tabs').children('.windows_tab').length < 3) {
            // и убираем кнопки управления, если вкладок нет
            $('.showtab').hide();
        }
        // Переносим фокус таба
        var num = 0;
        if (files[number-1] != undefined) num = number-1;
        else if (files[number+1] != undefined) num = number+1;
        else {
            $.each(files, function( key, value ) {
                if (value != undefined) {num = key;return false;}
            });
        }
        // Удаляем элемент из массива файлов (замена значения на undefined)
        delete files[number];

        setTimeout(function() {
            $('#infobox_line').html('');
            $('#infobox_text').html('');
            $('#infobox_code').html('');
            windows_tab_active('#t' + String(num));
            $('#w' + String(num)).addClass('active');
            //$('#w' + String(num),this).stop().animate({top:'-300px',},{queue:false,duration:400});
        }, 100);
      }, 500);

      // Меняем иконку сохранения
      $('.tab#saveme').fadeOut('1000').addClass('active').fadeIn('1000');
      change_icon('save gray', '.tab#saveme');

    }
}

// Смена иконки папки при открытии
function change_folder(a,type) {
    var close='fa-folder', open='fa-folder-open';
    if (type=='last') { close='fa-file'; open='fa-file-open'; }
    if ( $(a).children('i').hasClass(close)) {$(a).children('i').removeClass(close).addClass(open);} else {$(a).children('i').addClass(close).removeClass(open);}
}

// Загрузка файла
function functions(func, id, advanced, data_id, hide_id, change) {
    /*
    func        — имя аякс-функции
    id          — передаваемый параметр, в id
    advanced    — передаваемый параметр, в string
    data_id     — id элемента, в который добавляется информация из аякс-функции, если не обозначен = id
    hide_id     - id элемента, который нужно спрятать
     */
    $.ajax({
        url: '<? echo basename(__FILE__); ?>',
        cache: false,
        type: 'POST',
        dataType: 'text',
        data: {
            'func': func,
            'id': id,
            'string': advanced
        },
        beforeSend: function() {
            if (data_id == 'windows') {
              $('#windows').children('.window').removeClass('active');
              // запускаем спин
              $('#spinner').addClass('active');
            } else {
              if (hide_id != undefined) $('#' + hide_id).hide('slow');
            }
        },
        success: function(data) {
            // прячем спин
            $('#spinner').removeClass('active');
            var viewer = false;
            if (data_id == undefined) data_id = id;
            if (data == undefined) {}
            else {
              if (change == undefined) {
                  if (data.indexOf("class='viewer") == 5) {
                      // Просмотр
                      viewer = true;
                      $('.window').removeClass('active');
                      $('#view').html(data).addClass('active');
                  } else {
                      // Редактор кода
                      $('#' + data_id).append(data);
                  }
              }
              else $('#' + data_id).html(data);
            }
            if (func == 'load' && viewer == false) $('#w' + id).addClass('active');
            if (data_id == 'windows' && viewer == false) {
              // Переключаем таб
              windows_tab_active("#t"+files.indexOf(hide_id));
            }
            tools();
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                //msg = '<? echo AjaxError; ?>: Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = '<? echo AjaxError; ?>: Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = '<? echo AjaxError; ?>: Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = '<? echo AjaxError; ?>: Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = '<? echo AjaxError; ?>: Time out error.';
            } else if (exception === 'abort') {
                msg = '<? echo AjaxError; ?>: Ajax request aborted.';
            } else {
                msg = '<? echo AjaxError; ?>: Uncaught Error.\n' + jqXHR.responseText;
            }
            if (msg != '') alert(msg);
        }
    });
}

/* Всплывающие подсказки */
function tools() {
    $("[title]").tooltip('hide');
    $("div").tooltip('hide');
    $("[title]").tooltip({placement: 'bottom'});
    $("div").tooltip({placement: 'bottom'});
}

// Новый файл
function new_file(file) {
  if ($('#new_file').is(":visible") && $('.info').is('.'+file) ) {
    $('#new_file').hide('slow');
  } else {
    if (file == 'true') {
        // Файл
        var title = '<span class="f18"><? echo Createnewfile; ?></span>';
        var place = '<? echo Filename; ?>:';
    } else {
        // Папка
        var title = '<span class="f18"><? echo Createnewfolder; ?></span>';
        var place = '<? echo Foldername; ?>:';
    }
    $('#new_file').html('<form class="info '+file+'" onsubmit="if ($(\'#modal_filename\').val() != \'\') { functions(\'new_file\', $(\'#folders_tree\').val() + \'/\' + $(\'#modal_filename\').val(),'+file+', \'new_file\', \'new_file\'); files_tree_update(); }"><a class="right" onclick="new_file('+file+');"><i class="fa fa-close" aria-hidden="true"></i></a>'+title+'<p><select id="folders_tree" class="col-md-12"><option value="./"><? echo Selectfolder.": {".root; ?>}</option></select><p><input autofocus type="text" placeholder="'+place+'" id="modal_filename" value="" class="rename_file"><input type="submit" value="Enter"></form>');
    functions('folders_tree', '', '', 'folders_tree');
    $('#new_file').show('slow');
  }
}

    // js-аналог basename из PHP
function basename(path, suffix) {
  var b = path.replace(/^.*[\/\\]/g, '');
  if (typeof(suffix) == 'string' && b.substr(b.length-suffix.length) == suffix) {
    b = b.substr(0, b.length-suffix.length);
  }
  return b;
}

// Переименовать файл (форма)
function teleport(x, type, func) {
  var add = '';
  var add2 = '';
  var path = $(x).prop('class');
  var file = basename(path);
  var id = tree_files2[tree_files.indexOf(path)];
  //if (type == 'folder') {}
  var title = '<? echo RenameTitle; ?>';
  if (func == 'replace') { title = '<? echo ReplaceTitle; ?>'; }
  if (func == 'duplicate') { title = '<? echo DuplicateTitle; ?>'; }
  if (func == 'replace' || func == 'duplicate') {
    add = '<select id="folders_tree'+id+'" class="col-md-12"><option value=".//"><? echo Selectfolder.": {".root; ?>}</option></select></p><p>';
    add2 = '$(\'#folders_tree'+id+'\').val()+\'/\'+';
  }
  $('#infof'+id).html('<div class="close" onclick="$(\'#infof'+id+'\').replaceWith(\'<a id=f'+id+' onclick=i(this)></a>\');change_icon(\'info-circle\',\'#\'+\'f'+id+'\');" data-original-title="" title=""><i class="fa fa-close" aria-hidden="true"></i></div><p>'+title+'<p><form onsubmit="if ($(\'#r'+id+'\').val() != \'\') { functions(\''+func+'\', \''+path+'\', '+add2+'$(\'#r'+id+'\').val(), \'\', \'infof'+id+'\'); files_tree_update(); return false; } else { return false; }">'+add+'<input class="rename_file" id="r'+id+'" placeholder="<? echo NewName; ?>" value="'+file+'" autofocus><input type="submit" value="Enter"></form>');
  if (func == 'replace' || func == 'duplicate') {
    functions('folders_tree', '', '', 'folders_tree'+id);
  }
  tools();
}

// Открываем файл
function open_file(x) {
    // Получаем адрес файла
    if (x == undefined) {
        var file_adres = '0';
        var file_name = '<? echo Neww; ?>';
        var txt = '';
    } else {
        var file_id = $(x).prop('id');
        var file_adres = tree_files[tree_files2.indexOf(file_id.split('___')[file_id.split('___').length - 1])];
        var file_name = file_adres.replace(/^.*[\\\/=]/, '');
        var txt = "<? echo Loading; ?>";
    }
    // Получаем расширение
    var parts, ext = ( parts = file_name.split("/").pop().split(".") ).length > 1 ? parts.pop().toLowerCase() : "";
    if (ext == 'jpg' || ext == 'jpeg' || ext == 'gif' || ext == 'png' || ext == 'zip' || ext == 'swf' || ext == 'svg' || ext == 'tif' || ext == 'tiff' || ext == 'bmp' || ext == 'ico' || ext == 'woff' || ext == 'ttf' || ext == 'otf' || ext == 'eot') {
        // Грузим файл для просмотра
        functions('load', number, file_adres, 'windows', file_adres);
        // Снимаем фокус с табов
        $('.windows_tabs').children('.windows_tab').removeClass('active');
    } else {
        // Проверка - если открыт ли этот файл
        if (files.indexOf(file_adres) != -1 && file_adres != 0) {
            // Файл открыт - открываем эту вкладку
            windows_tab_active("#t"+files.indexOf(file_adres));
            // ... и анимируем её таб
        } else {
            // Создаем вкладку
            var number = files.length;
            //if (file_adres != 0)
            //else var number = 100000 + Math.floor(Math.random() * 100000);
            // Запоминаем последний фокус
            focuss = number;
            // Добавляем таб
            $('.windows_tabs').append("<div class='windows_tab active animation_open_tab' id='t" + number + "' onclick='windows_tab_active(\"#t" + number + "\")'><a class='close_tab fa fa-times' onclick='close_file(\"" + number + "\")'></a><span class='hidden edit edit" + number + "'><i class='fa fa-floppy-o' aria-hidden='true'></i></span><span class='file_name'>"+file_name+"</span></div>");
            // Добавляем файл в список
            files[number] = file_adres;
            // Грузим файл
            functions('load', number, file_adres, 'windows', file_adres);
            // Меняем иконку файла
            $(x).children('i').removeClass('fa-file-o').addClass('fa-file');
        }
    }
}

/* Сохраняем буфер */
function save_buffer() {
    functions('save_buffer', $('#buffer').val());
}

/* Закрываем открытие папки */
function close_folders() {
    $('.folder_tree').hide('slow');
    $('.folder').children('a').children('i.fa-folder-open').addClass('fa-folder').removeClass('fa-folder-open');
}

/* Информация о файле и действия с ним */
function i(x) {
    // crc32 файла/папки (номер в дереве файлов)
    var id = $(x).prop('id');
    // путь файла
    var path = tree_files[tree_files2.indexOf(id.replace('f',''))];
    $("#"+id).replaceWith('<span class="info" id="info'+id+'"><div class="close" onclick="$(\'#info'+id+'\').replaceWith(\'<a id='+id+' onclick=i(this)></a>\');change_icon(\'info-circle\',\'#\'+\''+id+'\');"><i class="fa fa-close" aria-hidden="true"></i></div></span>');
    // Загружаем данные о файле
    functions('attributes', path, '', 'info'+id);
}

// Смена иконки
function change_icon(icon, id) {
    $(id).html('<i class="fa fa-'+icon+'" aria-hidden="true"></i>');
}

// Смена атрибутов файла
function change_file_attributes(id, path, attributes) {
    $('#info'+id+' .close').mouseover();
    functions('change_file_attributes', path, attributes, '');
}

// Удаление файла
function delete_file(path, id, recycle_bin) {
    // Свернем дерево, если такое есть
    $('.folder_tree#'+id.replace('f','t')).hide('slow');
    // Удалим из дерева
    $('#'+id.replace('f','')).parent().remove();
    // Начнем крошить
    functions('delete_file', $(path).prop('class'), recycle_bin, '');
}

// Скрытие левой панели
function hide_left_panel() {
    $('.tabs').toggle();
    $('.tree').toggle('fast');
    if ($('.tabs').is(":visible")) {
        change_icon('chevron-circle-left','#left_panel');
        $('.windows_tabs').css('width','calc(100% - 400px)');
        $('#infobox').css('width','calc(100% - 400px)');
        $('.window').css('width','calc(100% - 400px)');
    } else {
        change_icon('chevron-circle-right','#left_panel');
        $('.windows_tabs').css('width','100%');
        $('#infobox').css('width','100%');
        $('.window').css('width','100%');
    }
}

// Раскрытие на весь экран
(function(w){function B(a){return a!==void 0}function j(c,f,a){var e=function(){};e.prototype=f.prototype,c.prototype=new e,c.prototype.constructor=c,f.prototype.constructor=f,c._super=f.prototype,a&&w.extend(c.prototype,a)}function k(f,p){var a;"string"==typeof f&&(p=f,f=document);for(var c=0;b.length>c;++c){p=p.replace(b[c][0],b[c][1]);for(var h=0;C.length>h;++h){if(a=C[h],a+=0===h?p:p.charAt(0).toUpperCase()+p.substr(1),B(f[a])){return f[a]}}}return void 0}var b=[["",""],["exit","cancel"],["screen","Screen"]],C=["","o","ms","moz","webkit","webkitCurrent"],m=navigator.userAgent,g=k("fullscreenEnabled"),A=-1!==m.indexOf("Android")&&-1!==m.indexOf("Chrome"),x=!A&&B(k("fullscreenElement"))&&(!B(g)||g===!0),z=w.fn.jquery.split("."),q=2>parseInt(z[0])&&7>parseInt(z[1]),v=function(){this._opt=null,this._fSE=null,this._sS={}};v.prototype={_DO:{styles:{boxSizing:"border-box",MozBoxSizing:"border-box",WebkitBoxSizing:"border-box"},toggleClass:null},__documentOverflow:"",__htmlOverflow:"",_pds:function(){this.__documentOverflow=w("body")[0].style.overflow,this.__htmlOverflow=w("html")[0].style.overflow,w("body, html").css("overflow","hidden")},_aDS:function(){w("body")[0].style.overflow=this.__documentOverflow,w("html")[0].style.overflow=this.__htmlOverflow},_fSC:function(){this.ifs()?(this._pds(),this._tE()):(this._aDS(),this._rS(),this._tE(),this._fSE=null)},_fullScreenError:function(a){this._rS(),this._fSE=null,a&&w(document).trigger("fscreenerror",[a])},_tE:function(){w(this._fSE).trigger(this.ifs()?"fscreenopen":"fscreenclose"),w(document).trigger("fscreenchange",[this.ifs(),this._fSE])},_saas:function(){var a=w(this._fSE);this._sS={};for(var c in this._opt.styles){this._sS[c]=this._fSE.style[c],this._fSE.style[c]=this._opt.styles[c]}this._opt.toggleClass&&a.addClass(this._opt.toggleClass)},_rS:function(){var a=w(this._fSE);for(var c in this._opt.styles){this._fSE.style[c]=this._sS[c]}this._opt.toggleClass&&a.removeClass(this._opt.toggleClass)},open:function(a,c){a!==this._fSE&&(this.ifs()&&this.exit(),this._fSE=a,this._opt=w.extend(!0,{},this._DO,c),this._saas())},exit:null,ifs:null,isNativelySupported:function(){return x}};var d=function(){d._super.constructor.apply(this,arguments),this.exit=w.proxy(k("exitFullscreen"),document),this._DO=w.extend(!0,{},this._DO,{styles:{width:"100%",height:"100%"}}),w(document).bind(this._prS("fullscreenchange")+" MSFullscreenChange",w.proxy(this._fSC,this)).bind(this._prS("fullscreenerror")+" MSFullscreenError",w.proxy(this._fullScreenError,this))};j(d,v,{V_P:["","o","moz","webkit"],_prS:function(a){return w.map(this.V_P,function(c){return c+a}).join(" ")},open:function(c){d._super.open.apply(this,arguments);var a=k(c,"requestFullscreen");a.call(c)},exit:w.noop,ifs:function(){return null!==k("fullscreenElement")},element:function(){return k("fullscreenElement")}});var y=function(){y._super.constructor.apply(this,arguments),this._DO=w.extend({},this._DO,{styles:{position:"fixed",zIndex:"2147483647",left:0,top:0,bottom:0,right:0}}),this._dKH()};j(y,v,{__ifs:!1,_dKH:function(){var c=w(document);c.delegate("*","keydown.fullscreen",w.proxy(this._kH,this));var e=q?c.data("events"):w._data(document).events,a=e.keydown;q?e.live.unshift(e.live.pop()):a.splice(0,0,a.splice(a.delegateCount-1,1)[0])},_kH:function(a){return this.ifs()&&27===a.which?(this.exit(),!1):!0},_rS:function(){y._super._rS.apply(this,arguments),this._fSE.offsetHeight},open:function(){y._super.open.apply(this,arguments),this.__ifs=!0,this._fSC()},exit:function(){this.__ifs=!1,this._fSC()},ifs:function(){return this.__ifs},element:function(){return this.__ifs?this._fSE:null}}),w.fullscreen=x?new d:new y,w.fn.fullscreen=function(a){var c=this[0];return a=w.extend({toggleClass:null,overflow:"hidden"},a),a.styles={overflow:a.overflow},delete a.overflow,c&&w.fullscreen.open(c,a),this}})(jQuery);
</script>

<? } // главный экран закончился ?>

</body>
</html>
<?

} elseif (!isset($_REQUEST['up'])) {

header('Cache-Control:none');
header("Pragma: no-cache");
// ======================= AJAX
  // Получение куки

    $func = filter_var($_REQUEST['func'], FILTER_SANITIZE_SPECIAL_CHARS);

// Скачивание файла
  if ($func == 'download' && $security_line == $_GET['s']) {
    if (file_exists(".//".$_GET['f'])) {
      $extension = strtolower(substr(strrchr($_GET['f'],"."),1));
      $ctype = "application/force-download";
      $ctypes = array("aac"=>"audio/aac","css"=>"text/css","csv"=>"text/csv","doc"=>"application/msword","docx"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document","eml"=>"message/rfc822","engine"=>"text/php","eslintrc"=>"application/json","exe"=>"application/octet-stream","gif"=>"image/gif","gzip"=>"application/gzip","htm"=>"text/html","html"=>"text/html","ico"=>"image/vnd.microsoft.icon","inc"=>"text/php","install"=>"text/php","jpeg"=>"image/jpeg","jpg"=>"image/jpeg","js"=>"text/javascript","json"=>"application/json","less"=>"text/css","lock"=>"application/json","mht"=>"message/rfc822","mp3"=>"audio/mp3","mp4"=>"video/mp4","mysql"=>"text/plain","ogg"=>"audio/ogg","pdf"=>"application/pdf","pdf"=>"application/pdf","php"=>"text/php","php"=>"text/php","php3"=>"text/php","php4"=>"text/php","php5"=>"text/php","phtm"=>"text/php","phtml"=>"text/php","png"=>"image/png","ppt"=>"application/vnd.ms-powerpoint","pptx"=>"application/vnd.openxmlformats-officedocument.presentationml.presentation","profile"=>"text/php","rar"=>"x-rar-compressed","sass"=>"text/css","sql"=>"text/plain","svg"=>"image/svg+xml","swf"=>"x-shockwave-flash","theme"=>"text/php","tif"=>"image/tiff","tiff"=>"image/tiff","torrent"=>"application/x-bittorrent","tpl"=>"text/php","ttf"=>"application/x-font-ttf","txt"=>"text/plain","w32"=>"text/javascript","wav"=>"audio/vnd.wave","webm"=>"audio/webm","woff"=>"application/font-woff","xls"=>"application/vnd.ms-excel","xlsx"=>"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","xml"=>"text/xml","zip"=>"application/zip",);
      if(isset($ctypes[$extension])) {
        $ctype = $ctypes[$extension];
      }
      header('Content-Type: '.$ctype.'; charset=utf-8');
      header("Content-Disposition: attachment; filename=\"".basename($_GET['f'])."\"");
      ob_clean();
      readfile(".//".$_GET['f']);
      exit();
    } else {
      echo CantOpen;
      exit();
    }
  }

    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }
    if (isset($_REQUEST['string'])) {
        $string = $_REQUEST['string'];
    }
    if (isset($_REQUEST['add'])) {
        $add = $_REQUEST['add'];
    }
    if (isset($_REQUEST['user'])) {
      $user = $_REQUEST['user'];
    }
    if (isset($_REQUEST['pass'])) {
      $pass = $_REQUEST['pass'];
    }

  // Сравнение куки и переданного пароля с паролем из файла

// Сохранение файла
  if ($func == 'save') {
      if ($add == 'Windows-1251') {
          $string=iconv("UTF-8", "Windows-1251", $string);
      }
      $day = date("Y-m-d", time());
      $time = date("H:i:s", time());
      // Копируем резервную копию
      $recycle_bin = './/$Recycle.Bin/'.$day;
      // Создадим папку Корзины и дня (если нет)
      @mkdir($recycle_bin,0700,true);
      $backup = $recycle_bin.'/backup_'.basename($id).'.'.$time;
      // Записываем об изменении в лог
      $fp = fopen('.//$Recycle.Bin/modified_files.halo', "a");
      fwrite($fp, $id."||".$day." ".$time."\n");
      fclose($fp);
      // Бекап оригинала
      if (!file_exists($backup)) copy($id, $backup);
      // Сохранение
      file_put_contents($id, $string);
      exit();
  }

// Последние измененные файлы
  if ($func == 'last_files') {
      if (!file_exists('.//$Recycle.Bin/modified_files.halo')) {
          echo NoModifiedFiles;
      } else {
          echo '<a class="button right" onclick="files_tree_update()" title="'.Close.'"><i class="fa fa-close " aria-hidden="true"></i></a><h4>'.LastModifiedFiles.'</h4>';
          // Читаем и разбираем построчно лог
          $log = file('.//$Recycle.Bin/modified_files.halo');
          $files = $times = array();
          foreach ($log as $value) {
              list($files[],$times[]) = explode('||',$value);
          }
          $just_files = array_unique($files);
          foreach ($just_files as $value) {
              $id = crc32($value);
              $path = str_replace(basename($value),'',str_replace('.//','',$value));
              echo '<li class="file"><a id="'.$id.'" onclick="open_file(this);"><i class="fa fa-file-o" aria-hidden="true"></i> <span id="n'.$id.'"><span class="gray">'.$path.'</span>'.basename($value).'</span></a></li>
              <li class="folder"><span class="gray"> . </span><a onclick="$(\'.folder_tree#t'.$id.'\').toggle(\'slow\');change_folder(this);"><i class="fa fa-folder" aria-hidden="true"></i> '.BackupCopy.'</a></li>
              <div class="folder_tree" id="t'.$id.'">
              ';
              foreach ($files as $key => $file) {
                if ($file == $value) {
                $id = crc32('.//$Recycle.Bin/'.str_replace(' ','/backup_'.basename($value).'.',$times[$key]));
                echo '<li class="file"><span class="gray"> . </span><a id="'.$id.'" onclick="open_file(this);"><span class="gray"> . </span><i class="fa fa-file-o" aria-hidden="true"></i> <span id="n'.$id.'">'.$times[$key].'</span></a></li>';
                }
              }
              echo '</div>';
          }
      }
      exit();
  }

// Дерево папок
  if ($func == 'folders_tree') {
    echo folders_tree("./", "");
    exit();
  }

// Дерево файлов
  if ($func == 'files_tree') {
      list($list,$list2) = tree_files("./");
      echo show_tree("./", "")."
      <script>
      $(function() {
      tree_files = [".$list."];
      tree_files2 = [".$list2."];
      });
      </script>";
      exit();
  }

// Дерево базы данных
  if ($func == 'bd_tree') {

    if (!in_array($dbtype, PDO::getAvailableDrivers())) {
      echo '<p class="red">'.Error.': '.PDOdriver.': '.$dbtype;
    } else {
      // Подключение
      try {
        switch ($dbtype) {
          case "mssql":$DBH = new PDO("mssql:host=$dbhost;dbname=$dbname", $dbuname, $dbpass);break;
          case "sybase":$DBH = new PDO("sybase:host=$dbhost;dbname=$dbname", $dbuname, $dbpass);break;
          case "mysql":$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuname, $dbpass);break;
          case "sqlite":$DBH = new PDO("sqlite:".$sqpath);break;
          case "postgresql":$DBH = new PDO("pgsql:host=$dbhost;port=$postgresql_port;dbname=$dbname;user=$dbuname;password=$dbpass");break;
        }

        $showall = $DBH->query('SHOW TABLES');

        echo '<div class="buttons"><a class="button" onclick="new_bd_table()" title="'.AddTable.'">+<i class="fa fa-table" aria-hidden="true"></i></a><a class="button" onclick="new_bd_table()" title="'.RunSQLquery.'"><i class="fa fa-database" aria-hidden="true"></i> SQL</a><a class="button" title="'.Refresh.'" onclick="bd_tree()"><i class="fa fa-refresh " aria-hidden="true"></i></a></div>';

        foreach ($showall as $key => $value) {
            $xx = explode('_',$value[0]);
            $xx = '<span class="lightgray">'.$xx[0]."_</span>".str_replace(" ".$xx[0]."_", "", " ".$value[0]);
            echo "<li class='folder'><a onclick='show_bd_table(\"$value[0]\")'><i class='fa fa-table' aria-hidden='true'></i> ".$xx."</a> <a id='f".$fold."' onclick='i(this)' title='".InfoActions."'><i class='fa fa-info-circle' aria-hidden='true'></i></li>";
        }

        //$DBH->prepare('SELECT name FROM people')->execute();

        //$STH = $DBH->prepare("INSERT INTO folks ( first_name ) values ( 'Cathy' )");
        //$STH->execute();

        /*
        $STH->bindParam(':name', $name);
        $data = array( 'name' => 'Cathy', 'addr' => '9 Dark and Twisty', 'city' => 'Cardiff' );
        $STH = $DBH->prepare("INSERT INTO folks (name, addr, city) values (:name, :addr, :city)");
        $STH->execute($data);
        */
      }
      catch(PDOException $e) {
          echo '<p class="red">'.$e->getMessage();
      }
      // Режим ошибок БД
      //$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
      $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      # закрывает подключение
      $DBH = null;
    }
    exit();
  }

// Отображение атрибутов файла
  if ($func == 'attributes') {
      if (file_exists($id) || _is_link($id)) {
          $created = $modified = $lastaccess = 'unknown';
          $short = str_replace('.//','',$id);
          if (!_is_link($id)) {
            $stat = stat($id);
            $tree_id = 'f'.crc32($id);
            $size = human_filesize($stat['size'],0);
            if ($stat['ctime'] != '') $created = date_show($stat['ctime']);
            if ($stat['mtime'] != '') $modified = date_show($stat['mtime']);
            if ($stat['atime'] != '') $lastaccess = date_show($stat['atime']);
            $access = explode(" / ",allfileperms($id));
            $type = 'file';
            if (is_dir($id)) {
              $type = 'folder';
            }
            echo '<a class="'.$id.'" onclick="teleport(this,\''.$type.'\',\'rename\')" title="'.Rename.'"><i class="fa fa-file-text" aria-hidden="true"></i></a><a class="'.$id.'" onclick="teleport(this,\''.$type.'\',\'replace\')" title="'.Replace.'"><i class="fa fa-arrows" aria-hidden="true"></i></a><a class="'.$id.'" onclick="teleport(this,\''.$type.'\',\'duplicate\')" title="'.Duplicate.'"><i class="fa fa-files-o" aria-hidden="true"></i></a>';
            // Если это файл
            if (!is_dir($id)) {
                echo '<a class="'.$id.'" target="_blank" href="?func=download&s='.$security_line.'&f='.$short.'" title="'.Download.'"><i class="fa fa-download" aria-hidden="true"></i></a>';
            // Если это папка
            } else {
                // Узнаем ее размер
                $size = human_filesize(dir_size($id),0);
            }
          }
          echo '<a class="'.$id.'" onclick="delete_file(this, \''.$tree_id.'\',\'1\')" title="'.Recycle.'"><i class="fa fa-trash-o" aria-hidden="true"></i></a><a class="'.$id.'" onclick="delete_file(this, \''.$tree_id.'\')" title="'.Delete.'"><i class="fa fa-ban red" aria-hidden="true"></i></a>';
          if ($id == './/$Recycle.Bin') echo "<hr><div class='about'>".AboutRecycleBin."</div>";
          if (_is_link($id)) {
            echo "<hr><div class='about'>".AboutAlias."</div>";
          } else {
            echo "<hr><b>".Where.":</b> <a title='".OpenLink."' class='link' href='".$short."' target='_blank'>".$id."</a><i title='".Exist."' class='fa fa-check-circle green' aria-hidden='true'></i><br><b>".Size.":</b> ".$size."<br><b>".Modified.":</b> ".$created."<br><b>".Created.":</b> ".$modified."<br><b>".Lastaccess.":</b> ".$lastaccess."<br><b>".Rights.":</b> ".$access[0]." <input value=\"".$access[1]."\" id=\"att".$tree_id."\" type=\"text\"> <a onclick=\"change_file_attributes('".$tree_id."', '".$id."', $('#att".$tree_id."').val())\">".Change."</a><div class='att'><a onclick=\"$('#att".$tree_id."').val('0600')\">600</a><a onclick=\"$('#att".$tree_id."').val('0644')\">644</a><a onclick=\"$('#att".$tree_id."').val('0666')\">666</a><a onclick=\"$('#att".$tree_id."').val('0750')\">750</a><a onclick=\"$('#att".$tree_id."').val('0755')\">755</a><a onclick=\"$('#att".$tree_id."').val('0777')\">777</a></div>";
          }
      } else {
          echo '<i class="fa fa-exclamation-circle red" aria-hidden="true"> '.Notexist.'</i>';
      }
      exit;
  }

// Сохранение буфера
  if ($func == 'save_buffer') {
    $recycle_bin = './/$Recycle.Bin';
    if (!file_exists($recycle_bin)) @mkdir($recycle_bin,0700,true);
    $fp = fopen($recycle_bin.'/buffer.halo', "w");
    fwrite($fp, $id);
    fclose($fp);
    exit();
  }

// Создание файла или папки
  if ($func == 'new_file') {
      if ($string == 'false') {
        // Создадим папку
        if (!file_exists($id)) @mkdir($id,0700,true);
      } else {
        // Создадим файл
        if (!file_exists($id)) {
          $txt = '';
          $ras = getExtension(basename(str_replace('.//','',$id)));
          if ($ras == 'txt') $txt = Writesomething;
          if ($ras == 'php') $txt = $php_example;
          if ($ras == 'htm' || $ras == 'html') $txt = $html_example;
          $fp = fopen($id, "w");
          fwrite($fp, $txt);
          fclose($fp);
        }
      }
      exit();
  }

// Переименование/Перенос файла/папки
  if ($func == 'rename' || $func == 'replace') {
    $id = str_replace('///','//',$id);
    if ($func == 'rename') {
      if (is_dir($id)) {
        $string = str_replace(basename($id),'',$id).$string;
      } else {
        $string = dirname($id).'/'.$string;
      }
    }
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows')) sleep(1);
    if (!file_exists($string)) rename($id, $string);
    exit();
  }

// Копирование файла/папки
  if ($func == 'duplicate') {
    if (is_dir($id)) {
      my_copy_all($id, $string, $rewrite_files); // Заменять файлы
    } else {
      if (!file_exists($string)) copy($id, $string);
    }
    exit();
  }

// Перевод текста через Яндекс.Перевод
if ($func == 'translate') {
    if (!function_exists('curl_init')) {
        echo "Библиотека curl не установлена";
    } else {
        list($language, $text) = explode("*@%", $string);
        $data = array(
            'key' => 'trnsl.1.1.20150724T185907Z.ae2555d15459a61e.de01086c42dfad1b35a68a7595ab112e85c173d5',
            'text' => $text,
            'lang' => $language,
            'format' => 'plain',
        );
        $curlObject = curl_init();
        curl_setopt($curlObject, CURLOPT_URL, 'https://translate.yandex.net/api/v1.5/tr.json/translate');
        curl_setopt($curlObject, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlObject, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curlObject, CURLOPT_POST, true);
        curl_setopt($curlObject, CURLOPT_POSTFIELDS, http_build_query($data, '', '&'));
        curl_setopt($curlObject, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($curlObject);
        curl_close($curlObject);
        if ($responseData == false) {
            throw new Exception('Response false');
        }
        $json = json_decode($responseData, true);
        echo $json["text"][0];
    }
    exit();
}

// Удаление файла
  if ($func == 'delete_file') {
      // Переместим файл в Корзину
      if ($string == '1') {
        $recycle_bin = './/$Recycle.Bin/'.date("Y-m-d", time());
        // Создадим папку Корзины и дня (если нет)
        @mkdir($recycle_bin,0700,true);
        rename($id, $recycle_bin.'/deleted_'.basename($id));
      } else {
        if (is_dir($id)) {
          // Удаляем дерево папки
          foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($id),
                       RecursiveIteratorIterator::CHILD_FIRST) as $file) {
            //  && !_is_link($file)
              if ($file->getFilename() === '.' || $file->getFilename() === '..') {
                  continue;
              }
              if (_is_link($file)) {
                unlink($file);
              } elseif($file->isDir()) {
                rmdir($file);
              } else {
                unlink($file);
              }
          }
          rmdir($id);

        } else {
          // Удаление файла
          unlink($id);
        }
      }
      exit();
  }

// Смена атрибутов файла
  if ($func == 'change_file_attributes') {
      chmod($id, octdec($string));
      exit();
  }

// Выход пользователя
  if ($func == 'logout') {
      if (!empty($_SESSION["user_id"])) {
          unset($_SESSION["user_id"]);
      }
      header('Location: '.basename(__FILE__));
      exit;
  }

// Открытие текстового файла
    if ($func == 'load') {
        $fil = 'Loading error.';
        $path = str_replace("___", "/", str_replace(" ", " ", str_replace('_-_', '.', $string)));
        // Определяем расширение файла
        if ($string == '0') {
            $file_name = '';
            $type = '';
            $style = 'php';
        } else {
            $file_name = explode("___", $string);
            $file_name = $file_name[count($file_name) - 1];
            $type = explode(".", $string);
            $type = mb_strtolower($type[count($type) - 1]);

            switch ($type) {
                case "coffee":$style = 'coffee';break;
                case "css":$style = 'css';break;
                case "gitignore":case "eslintignore":case "gitattributes":$style = 'gitignore';break;
                case "html":case "htm":case "twig":$style = 'html';break;
                case "ini":case "editorconfig":case "properties":$style = 'ini';break;
                case "hpp":case "h":case "cpp":case "c":$style = 'c_cpp';break;
                case "jade":$style = 'jade';break;
                case "js":case "w32":$style = 'javascript';break;
                case "json":case "eslintrc":case "lock":$style = 'json';break;
                case "less":$style = 'less';break;
                case "makefile":case "yml":case ".gnumakefile":$style = 'makefile';break;
                case "markdown":case "markdn":case "mdown":case "md":$style = 'markdown';break;
                case "mysql":case "sql":$style = 'mysql';break;
                case "pl":case "pm":case "perl":$style = 'perl';break;
                case "php":case "php3":case "php4":case "php5":case "phtm":case "phtml":case "tpl":case "engine":case "theme":case "inc":case "profile":case "install":$style = 'php';break;
                case "ps1":case "ps1xml":case "psc1":case "psd1":case "psm1":$style = 'powershell';break;
                case "p":case "pickle":case "pxd":case "py":case "pyc":case "pyd":case "pyo":case "pyw":case "pyx":$style = 'python';break;
                case "rb":case "ruby":$style = 'ruby';break;
                case "rst":$style = 'rst';break;
                case "sass":$style = 'sass';break;
                case "scss":$style = 'scss';break;
                case "scheme":$style = 'scheme';break;
                case "sh":$style = 'sh';break;
                case "smarty":$style = 'smarty';break;
                case "snippets":$style = 'snippets';break;
                case "sql":$style = 'sql';break;
                case "vm":$style = 'velocity';break;
                case "xml":case "dist":case "config":$style = 'xml';break;
                // Фото
                case "svg":case "jpg":case "jpeg":case "gif":case "png":case "tif":case "tiff":case "bmp":case "ico":$style = 'photo';break;
                // Архивы
                case "gz":case "zip":case "rar":case "7z":case "jar":case "cbz":case "cbr":$style = 'archive';break;
                // Шрифты
                case "woff":case "ttf":case "otf":case "eot":$style = 'font';break;
                // Flash
                case "swf":$style = 'flash';break;
                // По-умолчанию
                default:$style = 'text';break;
            }
            // Системные файлы
            $short_path = mb_strtolower(basename($path));
            if ($short_path == 'phpunit') $style = 'php';
            if ($short_path == 'robots.txt') $style = 'makefile';
            if ($short_path == 'gemfile') $style = 'gobstones';
            if ($short_path == '.htaccess' || $short_path == '.htpasswd') $style = 'apache_conf';
        }

        switch ($style) {
            case "flash":
            // Запускаем просмотр flash
            $path = str_replace(".//","",$path);
            echo "<div class='viewer flash'><object width='100%' height='100%' align='middle'><param name='movie' value='".$path."'><embed src='".$path."' width='100%' height='100%'></embed></object></div>";
            break;

            case "archive":
            // Запускаем просмотр архивов
            echo "<div class='viewer preview'>
            <p>".Archive;
            if ($type == "zip" || $type == "cbz" || $type == "jar") {
              $zip = new ZipArchive;
              if ($zip->open($path) !== TRUE) {
                echo(Error.": $zip\n");
              } else {
                //$zip->extractTo('./'); // распаковка
                echo "<p>".numFiles.": ".$zip->numFiles."</p>";
                echo "<ul>";
                $count = $zip->numFiles;
                for ($i = 0; $i < $count; $i++) {
                    $stat = $zip->statIndex($i);
                    if (!mb_stripos($stat['name'], '_MACOSX') && !mb_stripos($stat['name'], '.DS_Store')) {
                      $nam = basename($stat['name']);
                      $path = str_replace($nam,'',$stat['name']);
                      $nu = count(explode('/',$stat['name']))-2;
                      $dot = '';
                      for ($i1=0; $i1 < $nu; $i1++) {
                        $dot .= "<i class='fa fa-ellipsis-h' aria-hidden='true'></i>";
                      }
                      if (substr($stat['name'], -1) == '/') {
                        // папка
                        echo "<li class='folder'>".$dot."<i class='fa fa-folder' aria-hidden='true'></i> ".$nam."</li>";
                      } else {
                        // файл
                        $dot .= "<i class='fa fa-code-fork' aria-hidden='true'></i><i class='fa fa-ellipsis-v' aria-hidden='true'></i>";
                        echo "<li class='file'>".$dot."<i class='fa fa-file-o' aria-hidden='true'></i> ".$nam." <span class='inf'>— ".human_filesize($stat['size'])." — ".$path."</span></li>";
                      }
                    }
                }
                echo "</ul>";
                $zip->close ();
              }
            } else {
              echo CantOpen;
            }

            echo "</div>";
            break;

            case "photo":
            // Запускаем просмотр фото
            $path = str_replace(".//","",$path);
            echo "<div class='viewer'><img src='".$path."'></div><script id='s".$id."'></script>";
            break;

            case "font":
            // Запускаем просмотр шрифта
            $path = str_replace(".//","",$path);
            $font_add = $about_font = "";
            if ($type == 'otf') {
              $font_add = " format('opentype')";
            }
            if ($type == 'eot') {
              $font_add = " format('eot')";
              $about_font = "Internet Explorer <= 8";
            }
            if ($type == 'woff') {
              $font_add = " format('woff')";
              $about_font = "Firefox, Internet Explorer >=9 & webkit (Chrome, Safari...)";
            }
            if ($type == 'ttf') {
              $font_add = " format('truetype')";
              $about_font = not."Internet Explorer";
            }
            if ($about_font != '') $about_font = YouCanSeeFonts.$about_font;
            $about_font = AboutFonts."<br>".$about_font;
            echo "<div class='viewer'>
            <style>
            @font-face{font-family: font_preview".$id.";src: url('".$path."')".$font_add.";}
            .font_preview".$id."{font-family: font_preview".$id.";text-align:left;padding:10px 40px;}
            </style>
            ".$about_font."
            <div class='font_preview".$id." preview'>
            <p class='normal'>18px
            <p>".FontPreview."
            <p class='normal'>24px
            <p class='f24'>".FontPreview."
            <p class='normal'>24px, italic
            <p class='f24 i'>".FontPreview."
            <p class='normal'>24px, bold
            <p class='f24 b'>".FontPreview."
            </div></div><script id='s".$id."'></script>";
            break;

            default:
            // Запускаем просмотр текстового файла
            if ($string != '0') {
                // грузим файл CURL
                $fil = str_replace("text"."area","tеxt"."area",file_get_contents($path));
                $encoding = 'UTF-8';
                if(!mb_detect_encoding($fil, array('UTF-8','Windows-1251'), TRUE)){
                    $fil=iconv("Windows-1251", "UTF-8", $fil);
                    $encoding = 'Windows-1251';
                }

            }
            echo "<text"."area id='cod".$id."' class='code hidden'>" .$fil. "</text"."area>
            <pre id='w".$id."' class='window'></pre>
            <span id='encoding".$id."' class='hidden'>".$encoding."</span>
            <script id='s".$id."'>
              var config = ace.require('ace/config');
              // использовать массив!!!
              win[".$id."] = ace.edit('w".$id."');
              win[".$id."].\$blockScrolling = Infinity;
              win[".$id."].setTheme('ace/theme/".$code_style."');
              win[".$id."].getSession().setValue( $('#cod".$id."').val() );
              win[".$id."].getSession().setMode('ace/mode/".$style."');
              win[".$id."].getSession().setUseWrapMode(true);
              win[".$id."].getSession().setWrapLimitRange();
              win[".$id."].setBehavioursEnabled(true);
              win[".$id."].setShowPrintMargin(false);
              win[".$id."].session.setUseSoftTabs(true);
              win[".$id."].session.setTabSize(4);
              win[".$id."].setHighlightActiveLine(true);
              win[".$id."].setShowInvisibles(false);
              win[".$id."].setAnimatedScroll(false);
              win[".$id."].renderer.setShowGutter(true);
              win[".$id."].setHighlightSelectedWord(false);
              win[".$id."].setFontSize(".$font_size.");
              win[".$id."].setKeyboardHandler('ace/keyboard/keybinding/emacs');
              win[".$id."].focus();

            // Информация о символах
            $('#infobox_word').html('<i class=\"fa fa-text-width\" aria-hidden=\"true\"></i> ".Lines.": ' + win[".$id."].getSession().getLength() + ', ".Words.": ' + win[".$id."].getSession().getValue().replace(/  +/g, ' ').split(' ').length + ', ".Symbols.": ' + win[".$id."].getSession().getValue().length);
            $('#infobox_text').html('".$encoding."');
            tools();


              ace.config.loadModule('ace/ext/language_tools', function () {
                win[".$id."].setOptions({
                    enableSnippets: true,
                    enableBasicAutocompletion: true,
                    enableEmmet: true,
                    useWorker: false,
                    showFoldWidgets: true,
                    enableLiveAutocompletion: ".$live_autocompletion."
                })
                ace.config.loadModule(\"ace/snippets/".$style."\");
              });

                win[".$id."].commands.addCommand({
                    name: \"indent\",
                    bindKey: {win: \"Tab\", mac: \"Tab\"},
                    exec: function(editor) { win[".$id."].indent(); },
                    multiSelectAction: \"forEach\",
                    scrollIntoView: \"selectionPart\"
                });


                win[".$id."].commands.addCommand({
                    name: \"show_next\",
                    bindKey: {win: \"Ctrl-E\", mac: \"Command-E\"},
                    exec: function(editor) {
                    var sel = win[".$id."].session.doc.getTextRange(win[".$id."].selection.getRange());
                    win[".$id."].find(sel);
                    //alert('close');
                    },
                    scrollIntoView: \"center\",
                    multiSelectAction: \"forEach\"
                });


               win[".$id."].commands.addCommand({
                    name: \"save\",
                    bindKey: {win: \"Ctrl-S\", mac: \"Command-S\"},
                    exec: saveFile
                });
                // Сохраняем файл
                function saveFile() {
                    $.ajax({
                        url: \"".basename(__FILE__)."\",
                        method: \"POST\",
                        data: {
                            \"id\": files['".$id."'],
                            \"func\": \"save\",
                            \"add\": $('#encoding'+".$id.").html(),
                            /* \"user\": user,
                            \"pass\": pass, */
                            \"string\": win[".$id."].getValue()
                        },
                        dataType: \"html\"
                    }).done(function(data, status) {
                        if (status == \"success\") {
                            // Кнопка сохранения
                            $('.tab#saveme').fadeOut('1000').html('<i class=\"fa green fa-save\" aria-hidden=\"true\"></i>').addClass('active').fadeIn('1000');
                            // Убираем * в заголовке таба
                            $('.edit'+focuss).addClass('hidden');
                        } else {
                            $('.tab#saveme').fadeOut('1000').html('<i class=\"fa red fa-bomb\" aria-hidden=\"true\"></i>').addClass('active').fadeIn('1000');
                        }
                        tools();
                    })
                }
                window.saveFile = saveFile;

              win[".$id."].getSession().on('change', function(e) {
                // Показываем иконку сохранения
                $('.tab#saveme').removeClass('active').html('<div onclick=\"saveFile()\"><i class=\"fa white fa-save\" aria-hidden=\"true\"></i></div>');
                // Ставим * в заголовке таба
                $('.edit".$id."').removeClass('hidden');

                // Информация о символах
                $('#infobox_word').html('<i class=\"fa fa-text-width\" aria-hidden=\"true\"></i> ".Lines.": ' + win[".$id."].getSession().getLength() + ', ".Words.": ' + win[".$id."].getSession().getValue().replace(/  +/g, ' ').split(' ').length + ', ".Symbols.": ' + win[".$id."].getSession().getValue().length);
                tools();
              });
            </script>";
            break;
        }
    }
    exit;
}

// Загрузка файлов
if (isset($_REQUEST['up']) && $_REQUEST['s'] == $security_line) {
    $re = intval($_REQUEST['re']);
    error_reporting(E_ALL | E_STRICT);
    $upload = $_SERVER['DOCUMENT_ROOT'].'/'.$image_folder.'/';
    if (file_exists($_REQUEST['up'])) {
        $upload = $_REQUEST['up'].'/';
    }
    $url = str_replace('./','',str_replace('.//','',$upload));
    $replace_file = ($re == 1 ? false : true);
    $image_change_name = ($re == 2 ? true : false);
    $param = array(
        'upload_dir' => $upload,
        'upload_url' => $url,
        'replace_file' => $replace_file,
        'image_change_name' => $image_change_name,
        'image_file_types' => '/\.(gif|jpe?g|png)$/i',
        'image_versions' => array(
            '' => array(
                'max_width' => $photos_upload_width,
                'max_height' => $photos_upload_height,
                'auto_orient' => true,
                'jpeg_quality' => 80,
            ),
        ),
    );
    $upload_handler = new UploadHandler($param);
    exit();
}

// ===================== PHP

// Создание списка файлов в дереве
function tree_files($folder) {
    $files = scandir($folder);
    $list=$list2='';
    foreach ($files as $file) {
        if (($file == '.') || ($file == '..')) {continue;}
        $f0 = $folder.'/'.$file;
        $list .= "'".str_replace("'","\'",$f0)."',";
        $list2 .= "'".crc32($f0)."',";
        if (!_is_link($file) && is_dir($f0)) {
            list($list_,$list_2) = tree_files($f0);
            $list.=$list_;
            $list2.=$list_2;
        }
    }
    return array($list, $list2);
}

// Копирование папки
function my_copy_all($from, $to, $rewrite = true) {
  if (is_dir($from)) {
    @mkdir($to);
    $d = dir($from);
    while (false !== ($entry = $d->read())) {
      if ($entry == "." || $entry == "..") continue;
      my_copy_all("$from/$entry", "$to/$entry", $rewrite);
    }
    $d->close();
  } else {
    if (!file_exists($to) || $rewrite)
    copy($from, $to);
  }
}

// Показываем русскую дату
function date_show($dat) {
    global $language;
    if ($language=="ru") {
        $months = explode(",", "?,января,февраля,марта,апреля,мая,июня,июля,августа,сентября,октября,ноября,декабря");
        $datX = date("d m Y", $dat);
        if (date("d m Y") == $datX) {
            $data = "Сегодня в";
        } elseif (date("d m Y", time() - 86400) == $datX) {
            $data = "Вчера в";
        } elseif (date("d m Y", time() - 172800) == $datX) {
            $data = "Позавчера в";
        } else {
            $data = intval(date("d", $dat)).' '.$months[intval(date("m", $dat))].date(" Y в", $dat);;
        }
        return $data.date(" H:i:s.", $dat);
    } else {
        return date("F d Y H:i:s.", $dat);
    }
}

// Расширение файла
function getExtension($filename) {
    return array_pop(explode(".", $filename));
}

// Создание дерева папок
function folders_tree($folder, $space) {
  global $hide_files;
  $files = scandir($folder);
    $first=$second='';
    $hide_file = explode(",",$hide_files);
  foreach ($files as $file) {
    if (($file == '.') || ($file == '..') || ($file == '$Recycle.Bin') || in_array($file, $hide_file) ) {
      continue;
    }
    $f0 = $folder.'/'.$file; //Получаем полный путь к файлу
      if (!_is_link($file)) {
        if (is_dir($f0)) {
          if ($space == '')
            $first .= '<optgroup><option value="'.$f0.'">'.str_replace('/',' / ',str_replace('.//','',$f0)).'</option>'.folders_tree($f0, $space."—").'</optgroup> ';
          else $first .= '<option value="'.$f0.'">'.str_replace('/',' / ',str_replace('.//','',$f0)).'</option>'.folders_tree($f0, $space."—");
      }
    }
  }
  return $first;
}

// Создание дерева файлов
function show_tree($folder, $space) {
  global $hide_files;
    $files = scandir($folder);
    $first=$second='';
    $hide_file = explode(",",$hide_files);
    foreach ($files as $file) {
        if (($file == '.') || ($file == '..') || in_array($file, $hide_file) ) {
            continue;
        }
        $f0 = $folder.'/'.$file; //Получаем полный путь к файлу
        $fold = crc32($f0);
        /* ссылка */
        if (_is_link($file)) {
            $first .= '<li class="link">'.$space.'<i class="fa fa-link" aria-hidden="true"></i> '.$file.' ('.alias.')</li>';
        /* папка */
        } elseif (is_dir($f0)) {
            if ($file == '$Recycle.Bin') $file = RecycleBin;
            $first .= '<li class="folder"><a id="'.$fold.'" onclick="$(\'.folder_tree#t'.$fold.'\').toggle(\'slow\');change_folder(this);">'.$space.'<i class="fa fa-folder" aria-hidden="true"></i> '.$file.'</a> <a id="f'.$fold.'" onclick="i(this)" title="'.InfoActions.'"><i class="fa fa-info-circle" aria-hidden="true"></i></li><div class="folder_tree" id="t'.$fold.'">';
            $first .= show_tree($f0, $space."<span class='gray'> . </span>");
            $first .= '</div>';
        }
        /* файл */
        else {
            $second .=  '<li class="file"><a id="'.$fold.'" onclick="open_file(this);">'.$space.'<i class="fa fa-file-o" aria-hidden="true"></i> <span id="n'.$fold.'">'.$file.'</span></a> <a id="f'.$fold.'" onclick="i(this)" title="'.InfoActions.'"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>';
        }
    }
  if ($first.$second == '') $first = '';
  return $first.$second;
}

// Размер папки
function dir_size($dir) {
    $size = 0;
    foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir)) as $file){
        if (($file != $dir.'/.') && ($file != $dir.'/..') && !_is_link($file)) {
            $size+=$file->getSize();
        }
    }
    return $size;
}

// Определяем ссылки среди файлов
function _is_link($filename) {
    if(is_link($filename)) return true;
    $ext = substr(strrchr($filename, '.'), 1);
    if(strtolower($ext) == 'lnk') return (_readlink($filename) ? true : false);
    return false;
}

// Все параметры доступа к файлу
function allfileperms($path) {
    $perms = fileperms($path);
    switch ($perms & 0xF000) {
        case 0xC000: // сокет
            $info = 's';
            break;
        case 0xA000: // символическая ссылка
            $info = 'l';
            break;
        case 0x8000: // обычный
            $info = 'r';
            break;
        case 0x6000: // файл блочного устройства
            $info = 'b';
            break;
        case 0x4000: // каталог
            $info = 'd';
            break;
        case 0x2000: // файл символьного устройства
            $info = 'c';
            break;
        case 0x1000: // FIFO канал
            $info = 'p';
            break;
        default: // неизвестный
            $info = 'u';
    }
    // Владелец
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
                (($perms & 0x0800) ? 's' : 'x' ) :
                (($perms & 0x0800) ? 'S' : '-'));
    // Группа
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
                (($perms & 0x0400) ? 's' : 'x' ) :
                (($perms & 0x0400) ? 'S' : '-'));
    // Мир
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
                (($perms & 0x0200) ? 't' : 'x' ) :
                (($perms & 0x0200) ? 'T' : '-'));
    return $info." / ".substr(sprintf('%o', $perms), -4);
}

// Размер файла, приведение к понятному виду
function human_filesize($bytes, $decimals = 2) {
  $sz = array(B1,K1,M1,G1);
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor))." ". @$sz[$factor];
}

// jQuery File Upload 8.1.0
class UploadHandler {
    # Copyright 2010, Sebastian Tschan
    protected $options;
    protected $error_messages = array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk',
        8 => 'A PHP extension stopped the file upload',
        'post_max_size' => 'The uploaded file exceeds the post_max_size directive in php.ini',
        'max_file_size' => 'File is too big',
        'min_file_size' => 'File is too small',
        'max_width' => 'Image exceeds maximum width',
        'min_width' => 'Image requires a minimum width',
        'max_height' => 'Image exceeds maximum height',
        'min_height' => 'Image requires a minimum height',
        'abort' => 'File upload aborted',
        'image_resize' => 'Failed to resize image',
    );

    protected $image_objects = array();

    function __construct($options = null, $initialize = true, $error_messages = null) {
        $this->options = array(
            'script_url' => $this->get_full_url().'/',
            'upload_dir' => $_SERVER['DOCUMENT_ROOT'].'/img/',
            'upload_url' => 'img/',
            'user_dirs' => false,
            'mkdir_mode' => 0755,
            'param_name' => 'files',
            'access_control_allow_origin' => '*',
            'access_control_allow_credentials' => false,
            'access_control_allow_methods' => array('POST'),
            'access_control_allow_headers' => array('Content-Type','Content-Range','Content-Disposition'),
            // Enable to provide file downloads via GET requests to the PHP script:
            //     1. Set to 1 to download files via readfile method through PHP
            //     2. Set to 2 to send a X-Sendfile header for lighttpd/Apache
            //     3. Set to 3 to send a X-Accel-Redirect header for nginx
            // If set to 2 or 3, adjust the upload_url option to the base path of
            // the redirect parameter, e.g. '/files/'.
            'download_via_php' => false,
            'readfile_chunk_size' => 5 * 1024 * 1024, // 5 MiB
            'max_file_size' => null,
            'image_file_types' => '/\.(gif|jpe?g|png)$/i',
            'correct_image_extensions' => false,
            'max_width' => null,
            'max_height' => null,
            'min_width' => 1,
            'min_height' => 1,
            'replace_file' => true,
            'image_change_name' => true,
            'discard_aborted_uploads' => true,
            'image_versions' => array('' => array(
                'max_width' => null,'max_height' => null,
                'auto_orient' => true,'jpeg_quality' => 80,
            ),),
        );
        if ($options) {
            $this->options = $options + $this->options;
        }
        if ($error_messages) {
            $this->error_messages = $error_messages + $this->error_messages;
        }
        if ($initialize) {
            $this->initialize();
        }
    }

    protected function initialize() {
        switch ($this->get_server_var('REQUEST_METHOD')) {
        case 'POST':
            $this->post();
            break;
        default:
            header('HTTP/1.1 405 Method Not Allowed');
        }
    }

    protected function get_full_url() {
        $https = !empty($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'on') === 0 ||
        !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
        return
        ($https ? 'https://' : 'http://') .
        (!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '') .
        (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'] .
            ($https && $_SERVER['SERVER_PORT'] === 443 ||
                $_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))) .
        substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
    }


    protected function get_upload_path($file_name = null, $version = null) {
        $file_name = $file_name ? $file_name : '';
        if (empty($version)) {
            $version_path = '';
        } else {
            $version_dir = @$this->options['image_versions'][$version]['upload_dir'];
            if ($version_dir) {
                return $version_dir.$file_name;
            }
            $version_path = $version.'/';
        }
        return $this->options['upload_dir'].$version_path.$file_name;
    }

    protected function get_query_separator($url) {
        return strpos($url, '?') === false ? '?' : '&';
    }

    protected function get_download_url($file_name, $version = null, $direct = false) {
        if (!$direct && $this->options['download_via_php']) {
            $url = $this->options['script_url']
           .$this->get_query_separator($this->options['script_url'])
           .$this->get_singular_param_name()
           .'='.rawurlencode($file_name);
            if ($version) {
                $url .= '&version='.rawurlencode($version);
            }
            return $url.'&download=1';
        }
        if (empty($version)) {
            $version_path = '';
        } else {
            $version_url = @$this->options['image_versions'][$version]['upload_url'];
            if ($version_url) {
                return $version_url.rawurlencode($file_name);
            }
            $version_path = rawurlencode($version).'/';
        }
        return $this->options['upload_url'].$version_path.rawurlencode($file_name);
    }

    protected function fix_integer_overflow($size) {
        if ($size < 0) {
            $size += 2.0 * (PHP_INT_MAX + 1);
        }
        return $size;
    }

    protected function get_file_size($file_path, $clear_stat_cache = false) {
        if ($clear_stat_cache) {
            clearstatcache(true, $file_path);
        }
        return $this->fix_integer_overflow(filesize($file_path));
    }

    protected function is_valid_file_object($file_name) {
        $file_path = $this->get_upload_path($file_name);
        if (is_file($file_path) && $file_name[0] !== '.') {
            return true;
        }
        return false;
    }

    protected function get_file_objects($iteration_method = 'get_file_object') {
        $upload_dir = $this->get_upload_path();
        if (!is_dir($upload_dir)) {
            return array();
        }
        return array_values(array_filter(array_map(
            array($this, $iteration_method),
            scandir($upload_dir)
        )));
    }

    protected function count_file_objects() {
        return count($this->get_file_objects('is_valid_file_object'));
    }

    protected function get_error_message($error) {
        return array_key_exists($error, $this->error_messages) ?
        $this->error_messages[$error] : $error;
    }

    function get_config_bytes($val) {
        $val = trim($val);
        $last = strtolower($val[strlen($val) - 1]);
        switch ($last) {
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
        }
        return $this->fix_integer_overflow($val);
    }

    protected function validate($uploaded_file, $file, $error, $index) {
        if ($error) {
            $file->error = $this->get_error_message($error);
            return false;
        }
        $content_length = $this->fix_integer_overflow(intval(
            $this->get_server_var('CONTENT_LENGTH')
        ));
        $post_max_size = $this->get_config_bytes(ini_get('post_max_size'));
        if ($post_max_size && ($content_length > $post_max_size)) {
            $file->error = $this->get_error_message('post_max_size');
            return false;
        }
        if ($uploaded_file && is_uploaded_file($uploaded_file)) {
            $file_size = $this->get_file_size($uploaded_file);
        } else {
            $file_size = $content_length;
        }
        if ($this->options['max_file_size'] && (
            $file_size > $this->options['max_file_size'] ||
            $file->size > $this->options['max_file_size'])
        ) {
            $file->error = $this->get_error_message('max_file_size');
            return false;
        }
        if ($file_size < 1) {
            $file->error = $this->get_error_message('min_file_size');
            return false;
        }
        $max_width = @$this->options['max_width'];
        $max_height = @$this->options['max_height'];
        $min_width = @$this->options['min_width'];
        $min_height = @$this->options['min_height'];
        if (($max_width || $max_height || $min_width || $min_height)
            && preg_match($this->options['image_file_types'], $file->name)) {
            list($img_width, $img_height) = $this->get_image_size($uploaded_file);
        }
        if (!empty($img_width)) {
            if ($max_width && $img_width > $max_width) {
                $file->error = $this->get_error_message('max_width');
                return false;
            }
            if ($max_height && $img_height > $max_height) {
                $file->error = $this->get_error_message('max_height');
                return false;
            }
            if ($min_width && $img_width < $min_width) {
                $file->error = $this->get_error_message('min_width');
                return false;
            }
            if ($min_height && $img_height < $min_height) {
                $file->error = $this->get_error_message('min_height');
                return false;
            }
        }
        return true;
    }

    protected function upcount_name_callback($matches) {
        $index = isset($matches[1]) ? intval($matches[1]) + 1 : 1;
        $ext = isset($matches[2]) ? $matches[2] : '';
        return ' ('.$index.')'.$ext;
    }

    protected function upcount_name($name) {
        return preg_replace_callback(
            '/(?:(?: \(([\d]+)\))?(\.[^.]+))?$/',
            array($this, 'upcount_name_callback'),
            $name,
            1
        );
    }

    protected function get_unique_filename($file_path, $name, $size, $type, $error,
        $index, $content_range) {
        while (is_dir($this->get_upload_path($name))) {
            $name = $this->upcount_name($name);
        }
        $uploaded_bytes = $this->fix_integer_overflow(intval($content_range[1]));
        while (is_file($this->get_upload_path($name))) {
            if ($uploaded_bytes === $this->get_file_size(
                $this->get_upload_path($name))) {
                break;
            }
            $name = $this->upcount_name($name);
        }
        return $name;
    }

    protected function fix_file_extension($file_path, $name, $size, $type, $error,
        $index, $content_range) {
        if (strpos($name, '.') === false &&
            preg_match('/^image\/(gif|jpe?g|png)/', $type, $matches)) {
            $name .= '.'.$matches[1];
        }
        if ($this->options['correct_image_extensions'] &&
            function_exists('exif_imagetype')) {
            switch (@exif_imagetype($file_path)) {
            case IMAGETYPE_JPEG:
                $extensions = array('jpg', 'jpeg');
                break;
            case IMAGETYPE_PNG:
                $extensions = array('png');
                break;
            case IMAGETYPE_GIF:
                $extensions = array('gif');
                break;
            }
            if (!empty($extensions)) {
                $parts = explode('.', $name);
                $extIndex = count($parts) - 1;
                $ext = strtolower(@$parts[$extIndex]);
                if (!in_array($ext, $extensions)) {
                    $parts[$extIndex] = $extensions[0];
                    $name = implode('.', $parts);
                }
            }
        }
        return $name;
    }

    protected function trim_file_name($file_path, $name, $size, $type, $error,
        $index, $content_range) {
        $name = trim(basename(stripslashes($name)), ".\x00..\x20");
        if (!$name) {
            $name = str_replace('.', '-', microtime(true));
        }
        return $name;
    }

    protected function get_file_name($file_path, $name, $size, $type, $error,
        $index, $content_range) {
        $name = $this->trim_file_name($file_path, $name, $size, $type, $error,
            $index, $content_range);
        return $this->get_unique_filename(
            $file_path,
            $this->fix_file_extension($file_path, $name, $size, $type, $error,
                $index, $content_range),
            $size,
            $type,
            $error,
            $index,
            $content_range
        );
    }

    protected function get_scaled_image_file_paths($file_name, $version) {
        $file_path = $this->get_upload_path($file_name);
        if (!empty($version)) {
            $version_dir = $this->get_upload_path(null, $version);
            if (!is_dir($version_dir)) {
                mkdir($version_dir, $this->options['mkdir_mode'], true);
            }
            $new_file_path = $version_dir.'/'.$file_name;
        } else {
            $new_file_path = $file_path;
        }
        return array($file_path, $new_file_path);
    }

    protected function gd_get_image_object($file_path, $func, $no_cache = false) {
        if (empty($this->image_objects[$file_path]) || $no_cache) {
            $this->gd_destroy_image_object($file_path);
            $this->image_objects[$file_path] = $func($file_path);
        }
        return $this->image_objects[$file_path];
    }

    protected function gd_set_image_object($file_path, $image) {
        $this->gd_destroy_image_object($file_path);
        $this->image_objects[$file_path] = $image;
    }

    protected function gd_destroy_image_object($file_path) {
        $image = (isset($this->image_objects[$file_path])) ? $this->image_objects[$file_path] : null;
        return $image && imagedestroy($image);
    }

    protected function gd_imageflip($image, $mode) {
        if (function_exists('imageflip')) {
            return imageflip($image, $mode);
        }
        $new_width = $src_width = imagesx($image);
        $new_height = $src_height = imagesy($image);
        $new_img = imagecreatetruecolor($new_width, $new_height);
        $src_x = 0;
        $src_y = 0;
        switch ($mode) {
        case '1':
            $src_y = $new_height - 1;
            $src_height = -$new_height;
            break;
        case '2':
            $src_x = $new_width - 1;
            $src_width = -$new_width;
            break;
        case '3':
            $src_y = $new_height - 1;
            $src_height = -$new_height;
            $src_x = $new_width - 1;
            $src_width = -$new_width;
            break;
        default:
            return $image;
        }
        imagecopyresampled(
            $new_img,
            $image,
            0,
            0,
            $src_x,
            $src_y,
            $new_width,
            $new_height,
            $src_width,
            $src_height
        );
        return $new_img;
    }

    protected function gd_orient_image($file_path, $src_img) {
        if (!function_exists('exif_read_data')) {
            return false;
        }
        $exif = @exif_read_data($file_path);
        if ($exif === false) {
            return false;
        }
        $orientation = intval(@$exif['Orientation']);
        if ($orientation < 2 || $orientation > 8) {
            return false;
        }
        switch ($orientation) {
        case 2:
            $new_img = $this->gd_imageflip(
                $src_img,
                defined('IMG_FLIP_VERTICAL') ? IMG_FLIP_VERTICAL : 2
            );
            break;
        case 3:
            $new_img = imagerotate($src_img, 180, 0);
            break;
        case 4:
            $new_img = $this->gd_imageflip(
                $src_img,
                defined('IMG_FLIP_HORIZONTAL') ? IMG_FLIP_HORIZONTAL : 1
            );
            break;
        case 5:
            $tmp_img = $this->gd_imageflip(
                $src_img,
                defined('IMG_FLIP_HORIZONTAL') ? IMG_FLIP_HORIZONTAL : 1
            );
            $new_img = imagerotate($tmp_img, 270, 0);
            imagedestroy($tmp_img);
            break;
        case 6:
            $new_img = imagerotate($src_img, 270, 0);
            break;
        case 7:
            $tmp_img = $this->gd_imageflip(
                $src_img,
                defined('IMG_FLIP_VERTICAL') ? IMG_FLIP_VERTICAL : 2
            );
            $new_img = imagerotate($tmp_img, 270, 0);
            imagedestroy($tmp_img);
            break;
        case 8:
            $new_img = imagerotate($src_img, 90, 0);
            break;
        default:
            return false;
        }
        $this->gd_set_image_object($file_path, $new_img);
        return true;
    }

    protected function create_scaled_image($file_name, $version, $options) {
        if (!function_exists('imagecreatetruecolor')) {
            error_log('Function not found: imagecreatetruecolor');
            return false;
        }
        list($file_path, $new_file_path) =
        $this->get_scaled_image_file_paths($file_name, $version);
        $type = strtolower(substr(strrchr($file_name, '.'), 1));
        switch ($type) {
        case 'jpg':
        case 'jpeg':
            $src_func = 'imagecreatefromjpeg';
            $write_func = 'imagejpeg';
            $image_quality = isset($options['jpeg_quality']) ?
            $options['jpeg_quality'] : 75;
            break;
        case 'gif':
            $src_func = 'imagecreatefromgif';
            $write_func = 'imagegif';
            $image_quality = null;
            break;
        case 'png':
            $src_func = 'imagecreatefrompng';
            $write_func = 'imagepng';
            $image_quality = isset($options['png_quality']) ?
            $options['png_quality'] : 9;
            break;
        default:
            return false;
        }
        $src_img = $this->gd_get_image_object(
            $file_path,
            $src_func,
            !empty($options['no_cache'])
        );
        $image_oriented = false;
        if (!empty($options['auto_orient']) && $this->gd_orient_image(
            $file_path,
            $src_img
        )) {
            $image_oriented = true;
            $src_img = $this->gd_get_image_object(
                $file_path,
                $src_func
            );
        }
        $max_width = $img_width = imagesx($src_img);
        $max_height = $img_height = imagesy($src_img);
        if (!empty($options['max_width'])) {
            $max_width = $options['max_width'];
        }
        if (!empty($options['max_height'])) {
            $max_height = $options['max_height'];
        }
        $scale = min(
            $max_width / $img_width,
            $max_height / $img_height
        );
        if ($scale >= 1) {
            if ($image_oriented) {
                return $write_func($src_img, $new_file_path, $image_quality);
            }
            if ($file_path !== $new_file_path) {
                return copy($file_path, $new_file_path);
            }
            return true;
        }
        if (empty($options['crop'])) {
            $new_width = $img_width * $scale;
            $new_height = $img_height * $scale;
            $dst_x = 0;
            $dst_y = 0;
            $new_img = imagecreatetruecolor($new_width, $new_height);
        } else {
            if (($img_width / $img_height) >= ($max_width / $max_height)) {
                $new_width = $img_width / ($img_height / $max_height);
                $new_height = $max_height;
            } else {
                $new_width = $max_width;
                $new_height = $img_height / ($img_width / $max_width);
            }
            $dst_x = 0 - ($new_width - $max_width) / 2;
            $dst_y = 0 - ($new_height - $max_height) / 2;
            $new_img = imagecreatetruecolor($max_width, $max_height);
        }
        switch ($type) {
        case 'gif':
        case 'png':
            imagecolortransparent($new_img, imagecolorallocate($new_img, 0, 0, 0));
        case 'png':
            imagealphablending($new_img, false);
            imagesavealpha($new_img, true);
            break;
        }
        $success = imagecopyresampled(
            $new_img,
            $src_img,
            $dst_x,
            $dst_y,
            0,
            0,
            $new_width,
            $new_height,
            $img_width,
            $img_height
        ) && $write_func($new_img, $new_file_path, $image_quality);
        $this->gd_set_image_object($file_path, $new_img);
        return $success;
    }

    protected function get_image_size($file_path) {
        if (!function_exists('getimagesize')) {
            error_log('Function not found: getimagesize');
            return false;
        }
        return @getimagesize($file_path);
    }

    protected function is_valid_image_file($file_path) {
        if (!preg_match($this->options['image_file_types'], $file_path)) {
            return false;
        }
        if (function_exists('exif_imagetype')) {
            return @exif_imagetype($file_path);
        }
        $image_info = $this->get_image_size($file_path);
        return $image_info && $image_info[0] && $image_info[1];
    }

    protected function handle_image_file($file_path, $file) {
        $failed_versions = array();
        foreach ($this->options['image_versions'] as $version => $options) {
            if ($this->create_scaled_image($file->name, $version, $options)) {
                if (!empty($version)) {
                    $file->{$version.'Url'} = $this->get_download_url(
                        $file->name,
                        $version
                    );
                } else {
                    $file->size = $this->get_file_size($file_path, true);
                }
            } else {
                $failed_versions[] = $version ? $version : 'original';
            }
        }
        if (count($failed_versions)) {
            $file->error = $this->get_error_message('image_resize')
           .' ('.implode($failed_versions, ', ').')';
        }
        $this->gd_destroy_image_object($file_path);
    }

    protected function handle_file_upload($uploaded_file, $name, $size, $type, $error,
        $index = null, $content_range = null) {
        $file = new \stdClass();

        $file->name = $this->get_file_name($uploaded_file, $name, $size, $type, $error,
            $index, $content_range);

        if ($this->options['image_change_name']) {
            $extension = str_ireplace("jpeg", "jpg", strrchr($file->name, '.'));
            $file_name_only = explode($extension, $file->name);
            $changed_name = md5(time().$file_name_only[0]).$extension;
            $file->name = $changed_name;
        } else {
            $file->name = str_replace(" ", "_", str_replace("  ", " ", $file->name));
        }
        $file->size = $this->fix_integer_overflow(intval($size));
        $file->type = $type;
        if ($this->validate($uploaded_file, $file, $error, $index)) {
            $upload_dir = $this->get_upload_path();
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, $this->options['mkdir_mode'], true);
            }
            $file_path = $this->get_upload_path($file->name);
            $append_file = $content_range && is_file($file_path) &&
            $file->size > $this->get_file_size($file_path);
            if ($uploaded_file && is_uploaded_file($uploaded_file)) {
                if ($append_file) {
                    file_put_contents(
                        $file_path,
                        fopen($uploaded_file, 'r'),
                        FILE_APPEND
                    );
                } else {
                    move_uploaded_file($uploaded_file, $file_path);
                }
            } else {
                file_put_contents(
                    $file_path,
                    fopen('php://input', 'r'),
                    $append_file ? FILE_APPEND : 0
                );
            }
            $file_size = $this->get_file_size($file_path, $append_file);
            if ($file_size === $file->size) {
                $file->url = $this->get_download_url($file->name);
                if ($this->is_valid_image_file($file_path)) {
                    $this->handle_image_file($file_path, $file);
                }
            } else {
                $file->size = $file_size;
                if (!$content_range && $this->options['discard_aborted_uploads']) {
                    unlink($file_path);
                    $file->error = $this->get_error_message('abort');
                }
            }
        }
        return $file;
    }

    protected function get_server_var($id) {
        return isset($_SERVER[$id]) ? $_SERVER[$id] : '';
    }

    protected function generate_response($content, $print_response = true) {
        if ($print_response) {
            $json = json_encode($content);
            $redirect = isset($_REQUEST['redirect']) ?
            stripslashes($_REQUEST['redirect']) : null;
            if ($redirect) {
                header('Location: '.sprintf($redirect, rawurlencode($json)));
                return;
            }
            $this->head();
            if ($this->get_server_var('HTTP_CONTENT_RANGE')) {
                $files = isset($content[$this->options['param_name']]) ?
                $content[$this->options['param_name']] : null;
                if ($files && is_array($files) && is_object($files[0]) && $files[0]->size) {
                    header('Range: 0-'.(
                        $this->fix_integer_overflow(intval($files[0]->size)) - 1
                    ));
                }
            }
            echo $json;
        }
        return $content;
    }

    protected function get_singular_param_name() {
        return substr($this->options['param_name'], 0, -1);
    }

    public function head() {
        header('Pragma: no-cache');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Content-Disposition: inline; filename="files.json"');
        header('X-Content-Type-Options: nosniff');
        if ($this->options['access_control_allow_origin']) {
            header('Access-Control-Allow-Origin: '.$this->options['access_control_allow_origin']);
            header('Access-Control-Allow-Credentials: '
               .($this->options['access_control_allow_credentials'] ? 'true' : 'false'));
            header('Access-Control-Allow-Methods: '
               .implode(', ', $this->options['access_control_allow_methods']));
            header('Access-Control-Allow-Headers: '
               .implode(', ', $this->options['access_control_allow_headers']));
        }
        header('Vary: Accept');
        if (strpos($this->get_server_var('HTTP_ACCEPT'), 'application/json') !== false) {
            header('Content-type: application/json');
        } else {
            header('Content-type: text/plain');
        }
    }

    public function post($print_response = true) {
        $upload = isset($_FILES[$this->options['param_name']]) ?
        $_FILES[$this->options['param_name']] : null;
        $file_name = $this->get_server_var('HTTP_CONTENT_DISPOSITION') ?
        rawurldecode(preg_replace(
            '/(^[^"]+")|("$)/',
            '',
            $this->get_server_var('HTTP_CONTENT_DISPOSITION')
        )) : null;
        $content_range = $this->get_server_var('HTTP_CONTENT_RANGE') ?
        preg_split('/[^0-9]+/', $this->get_server_var('HTTP_CONTENT_RANGE')) : null;
        $size = $content_range ? $content_range[3] : null;
        $files = array();
        if ($upload && is_array($upload['tmp_name'])) {
            foreach ($upload['tmp_name'] as $index => $value) {
                $files[] = $this->handle_file_upload(
                    $upload['tmp_name'][$index],
                    $file_name ? $file_name : $upload['name'][$index],
                    $size ? $size : $upload['size'][$index],
                    $upload['type'][$index],
                    $upload['error'][$index],
                    $index,
                    $content_range
                );
            }
        } else {
            $files[] = $this->handle_file_upload(
                isset($upload['tmp_name']) ? $upload['tmp_name'] : null,
                $file_name ? $file_name : (isset($upload['name']) ?
                    $upload['name'] : null),
                $size ? $size : (isset($upload['size']) ?
                    $upload['size'] : $this->get_server_var('CONTENT_LENGTH')),
                isset($upload['type']) ?
                $upload['type'] : $this->get_server_var('CONTENT_TYPE'),
                isset($upload['error']) ? $upload['error'] : null,
                null,
                $content_range
            );
        }
        return $this->generate_response(
            array($this->options['param_name'] => $files),
            $print_response
        );
    }

}
