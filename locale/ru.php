<?php

require_once __DIR__ . '/../classes/Sprint/Migration/Module.php';

\Sprint\Migration\Module::loadLocale(array(
    "SPRINT_MIGRATION_SETTINGS" => "Настройка",
    "SPRINT_MIGRATION_MIGRATION_DIR" => "Директория для миграций",
    "SPRINT_MIGRATION_SAVE" => "Сохранить",
    "SPRINT_MIGRATION_MODULE_NAME" => "Миграции для разработчиков",
    "SPRINT_MIGRATION_MODULE_DESCRIPTION" => "Модуль для управления миграциями бд, создание, установка, откат миграций",
    "SPRINT_MIGRATION_PARTNER_NAME" => "Андрей Рябин",
    "SPRINT_MIGRATION_PARTNER_URI" => "http://dev.1c-bitrix.ru/community/webdev/user/39653/blog/",
    "SPRINT_MIGRATION_MENU_SPRINT" => "Спринт",
    "SPRINT_MIGRATION_MENU_MIGRATIONS" => "Миграции",
    "SPRINT_MIGRATIONS" => "Миграции",
    "SPRINT_MIGRATION_EMPTY_DESCR" => "нет описания",
    "SPRINT_MIGRATION_DESCR1" => "описание миграции",
    "SPRINT_MIGRATION_DESCR2" => "Описание миграции",
    "SPRINT_MIGRATION_PREFIX" => "Название миграции",
    "SPRINT_MIGRATION_TAB1_TITLE" => "Список миграций",
    "SPRINT_MIGRATION_LIST2" => "Список",
    "SPRINT_MIGRATION_TAB1" => "Миграции",
    "SPRINT_MIGRATION_HELP_CREATE" => "Создать миграцию",
    "SPRINT_MIGRATION_LIST_EMPTY" => "нет",
    "SPRINT_MIGRATION_UP" => "Установить",
    "SPRINT_MIGRATION_DOWN" => "Откатить",
    "SPRINT_MIGRATION_UP_START" => "Установить новые",
    "SPRINT_MIGRATION_DOWN_START" => "Откатить",
    "SPRINT_MIGRATION_UP_CONFIRM" => "Установить новые миграции?",
    "SPRINT_MIGRATION_DOWN_CONFIRM" => "Откатить все установленные миграции?",
    "SPRINT_MIGRATION_GENERATE" => "Создать",
    "SPRINT_MIGRATION_REFRESH" => "Обновить",
    "SPRINT_MIGRATION_TOGGLE_LIST" => "Все",
    "SPRINT_MIGRATION_TOGGLE_NEW" => "Новые",
    "SPRINT_MIGRATION_TOGGLE_STATUS" => "Суммарно",
    "SPRINT_MIGRATION_IS_NEW" => "Новые миграции",
    "SPRINT_MIGRATION_IS_INSTALLED" => "Установленные",
    "SPRINT_MIGRATION_IS_UNKNOWN" => "Неизвестные",
    "SPRINT_MIGRATION_VIEW" => "просмотр файла",
    "SPRINT_MIGRATION_UPGRADE_RELOAD" => "Пересоздание служебных таблиц модуля",
    "SPRINT_MIGRATION_UPGRADE_VERSION" => "Версия бд",
    "SPRINT_MIGRATION_TEXT2" => "Подробнее о модуле",
    "SPRINT_MIGRATION_HELP_LEGEND" => "Легенда",
    "SPRINT_MIGRATION_HELP_DOC" => "Документация",
    "SPRINT_MIGRATION_LEGEND_NEW" => "Новые миграции (только файл)",
    "SPRINT_MIGRATION_LEGEND_INSTALLED" => "Установленные миграции (файл + запись об установке)",
    "SPRINT_MIGRATION_LEGEND_UNKNOWN" => "Неизвестные миграции (только запись об установке)",
));