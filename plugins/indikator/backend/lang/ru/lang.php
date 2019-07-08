<?php

return [
    'plugin' => [
        'name' => 'Бэкенд Плюс',
        'description' => 'Новые полезные функции и виджеты для бэкэнда.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Внешний вид',
        'avatar_label' => 'Сделать аватар круглым вместо квадратного',
        'avatar_comment' => 'Аватар изменится только в верхнем меню.',
        'topmenu_label' => 'Скрыть метку в верхнем меню',
        'topmenu_comment' => 'Работает со всеми стилями меню.',
        'sidebar_desc_label' => 'Скрыть описания пунктов меню в боковом меню',
        'sidebar_desc_comment' => 'Работает только на страницах раздела Настройки.',
        'sidebar_search_label' => 'Скрыть поле поиска в боковом меню',
        'sidebar_search_comment' => 'Работает только на страницах раздела Настройки.',
        'tab_behavior' => 'Поведение',
        'search_label' => 'Автоматический фокус на поле поиска',
        'search_comment' => 'Сначала в списках, потом в боковом меню.',
        'context_menu_label' => 'Включить контекстное меню',
        'context_menu_comment' => 'Щелкните правой кнопкой мыши, чтобы показать меню быстрого доступа.',
        'keyboard_label' => 'Показать виртуальную клавиатуру с помощью форм (бета-версия)',
        'keyboard_comment' => 'Работает только с простыми полями ввода.'
    ],
    'trash' => [
        'title' => 'Неиспользуемые файлы и папки',
        'description' => 'Удалить неиспользуемые файлы и папки.',
        'permission' => 'Управление неиспользуемыми элементами',
        'type' => 'Тип',
        'path' => 'Путь',
        'size' => 'Размер',
        'file' => 'Файл',
        'folder' => 'Папка',
        'database' => 'База данных',
        'items' => 'Элементов',
        'hint' => 'После того, как вы обновите OctoberCMS, нажмите на поиск ещё раз. Если вы хотите очистить кэш вашей страницы, добавьте виджет "Бэкенд - Кэш" на Панель управления. Пожалуйста, <b>оцените этот плагин</b>, если он оказался вам полезен',
        'search' => 'Поиск',
        'success' => 'Сканирование успешно завершено.',
        'no_items' => 'Поздравляем, у вам нет неиспользуемых файлов!',
        'remove_all' => 'Удалить всё',
        'delete' => 'Вы хотите удалить эти элементы?',
        'remove' => 'Данные элементы успешно удалены.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Бэкенд - Состояние системы Плюс',
            'label' => 'Состояние системы Плюс',
            'webpage' => 'Веб-страница',
            'updates' => 'Обновления',
            'plugins' => 'Плагины',
            'themes' => 'Темы'
        ],
        'version' => [
            'title' => 'Бэкенд - Версии',
            'label' => 'Версии',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Бэкенд - Логи',
            'label' => 'Логи',
            'access' => 'Доступ',
            'event' => 'События',
            'request' => 'Запросы',
            'total' => 'Всего'
        ],
        'admins' => [
            'title' => 'Бэкенд - Администраторы',
            'label' => 'Администраторы',
            'users' => 'Пользователи',
            'groups' => 'Группы',
            'login' => 'Последний вход'
        ],
        'logins' => [
            'title' => 'Бэкенд - Последние входы в систему',
            'label' => 'Последние входы в систему'
        ],
        'server' => [
            'title' => 'Бэкенд - Информация о сервере',
            'label' => 'Информация о сервере',
            'host' => 'Хост',
            'ip' => 'IP-адрес',
            'os' => 'Операционная система'
        ],
        'php' => [
            'title' => 'Бэкенд - Настройки PHP',
            'label' => 'Настройки PHP',
            'upload_limit' => 'Ограничение загрузки файлов',
            'memory_limit' => 'Ограничение памяти',
            'timezone' => 'Часовой пояс'
        ],
        'rss' => [
            'title' => 'Бэкенд - Средство просмотра RSS',
            'label' => 'Средство просмотра RSS',
            'error' => 'Адрес URL некорректный или',
            'refresh' => 'перезагрузите страницу'
        ],
        'images' => [
            'title' => 'Бэкенд - Случайные изображения',
            'label' => 'Случайные изображения',
            'error' => 'Поле может содержать только цифры.',
            'simple' => 'Простой',
            'slideshow' => 'Слайд-шоу'
        ],
        'cache' => [
            'title' => 'Бэкенд - Кэш',
            'label' => 'Использование кэша',
            'clear' => 'Очистить кэш'
        ]
    ],
    'properties' => [
        'webpage' => 'Показывать веб-страницу',
        'updates' => 'Показывать обновления',
        'plugins' => 'Показывать плагины',
        'themes' => 'Показывать темы',
        'cms' => 'Показывать версию CMS',
        'php' => 'Показывать версию PHP',
        'gd' => 'Показывать версию GD',
        'access' => 'Показывать доступ',
        'event' => 'Показывать событие',
        'request' => 'Показывать запрос',
        'total' => 'Показывать общее количество',
        'users' => 'Показывать пользователей',
        'groups' => 'Показывать группы',
        'login' => 'Показывать время последнего входа',
        'logins' => 'Показывать количество входов в систему',
        'url' => 'Показывать адрес URL',
        'ip' => 'Показывать IP-адрес',
        'os' => 'Показывать операционную систему',
        'upload_limit' => 'Показывать ограничение по загрузке файлов',
        'memory_limit' => 'Показывать ограничение по объему памяти',
        'timezone' => 'Показывать часовой пояс',
        'rss_title' => 'RSS URL',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Количество новостей',
        'date' => 'Показывать дату',
        'description' => 'Показывать описание',
        'category' => 'Категория',
        'type' => 'Тип',
        'number' => 'Количество изображение в слайд-шоу',
        'width' => 'Ширина (в пикселях)',
        'height' => 'Высота (в пикселях)',
        'text' => 'Текст'
    ],
    'category' => [
        'all' => 'Все',
        'abstract' => 'Абстрактные',
        'animals' => 'Животные',
        'business' => 'Бизнес',
        'cats' => 'Кошки',
        'city' => 'Город',
        'food' => 'Еда',
        'nightlife' => 'Ночная жизнь',
        'fashion' => 'Мода',
        'people' => 'Люди',
        'nature' => 'Природа',
        'sports' => 'Спорт',
        'technics' => 'Техника',
        'transport' => 'Транспорт'
    ]
];