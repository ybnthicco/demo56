<?php
/*
ВАЖНЫЕ ПРАВИЛА!
1. Админ должен быть зарегистрирован на проекте первым.
2. С проектного паера не депать, скрипт сам себе платить не умеет.
*/

$host = 'localhost'; //Хост базы данных (обычно по умолчанию)
$db = 'vh236925_demkilogin'; // Имя базы данных
$user = 'vh236925_bfeifjb'; // Логин пользователя от базы данных
$pass = 'T5hhshMWAXrI7dX'; // Пароль от базы данных
$charset = 'UTF8';//Кодировка файлов (не менять)

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC );

$pdo = new PDO($dsn, $user, $pass, $opt);
$pdo->exec("set names utf8");
$db = new SafeMySQL(array('user' => $user, 'pass' => $pass, 'db' => $db, 'charset' => 'utf8'));

//НАСТРОЙКА ПРОЕКТА
$ssl_connect="https";//Ваше соединение http или https (Для реф ссылок и баннера)
$itworks=1; //Режим работы сайта. 1 - сайт работает, 0 - регистрация закрыта
$sitename="DEMO #56"; //Название проекта
$timeprofit="24 часа"; //Время вклада в часах для шапки и faq
$banner_468="/boots1.gif"; //Ссылка на баннер проекта 468x60
$banner_728="/boots2.gif"; //Ссылка на баннер проекта 720x90
$koshelek_admina=''; //Кошелек админа
$adminsecretcode='IQx1C5DCLjip'; //Пароль от админки (Менять обязательно)

//МАРКЕТИНГ
$mindep=10; //Минимальный размер депозита
$maxdep=5000; //Максимальный размер депозита
$refpercent=10; //Реферальный процент
$admpercent=10; //Админский процент
$timex_dep=24; //Общее время работы депозита
$depperiod=1; //выплаты каждые * часов в течении установленного срока
$percent_u=10;  //На сколько процентов увеличиваем депозит (тело депозита включено)

//НАКРУТКА СТАТИСТИКИ
$user_feik=0; //Добавляем фейковых юзеров
$depmoney_feik=0; //Добавляем сумму ко вкладам
$wthmoneyall_feik=0; //Добавляем сумму к выплатам

//ПРИЕМ СРЕДСТВ (мерчант):
$m_shop = ''; //ID магазина в мерчанте Payeer
$m_desc = 'Открытие депозита в '.$sitename; //Текст комментария к пополнению
$m_key = ''; //Секретный ключ от мерчанта

//ВЫПЛАТА (api):
$accountNumber = ''; //Счет, с которого будут происходить выплаты
$apiId = ''; //ID API для массовых выплат
$apiKey = ''; //Секретный ключ API
$m_curr='RUB'; //Валюта проекта


//НАСТРОЙКИ НЕ МЕНЯТЬ, ОНИ НА БЕЗОПАСНОСТЬ СКРИПТА НЕ ВЛИЯЮТ
$adminname="wngo8934ng";
$adminadress="admin";
$admintoken="wgwgwsbvgsd7wourh9gnweg0jg";
$admintoken=md5($admintoken.date("d.m.Y"));
$use_kapcha=0;
$nocron=0;
$http_s="http";
?>