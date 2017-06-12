<?php

return array(
    'plural' => function($n) {return $n%10==1&&$n%100!=11?0:($n%10>=2&&$n%10<=4&&($n%100<10||$n%100>=20)?1:2);},
    'attachment' => 'вложение',
    'When there is nothing to read, redirect me to this page' => 'Когда нет непрочитанных статей, то перенаправлять на страницу',
    'There is nothing new to read, enjoy your favorites articles!' => 'Ничего нового пока нет, наслаждайтесь чтением ваших избранных статей!',
    'There is nothing new to read, enjoy your previous readings!' => 'Ничего нового пока нет, наслаждайтесь чтением ранее прочитанного!',
    'Immediately' => 'Сразу',
    'The feed id is required' => 'Требуется идентификатор канала',
    'The title is required' => 'Требуется заголовок',
    'The site url is required' => 'Требуется адрес сайта',
    'The feed url is required' => 'Требуется адрес канала',
    'or' => 'или',
    'edit' => 'изменить',
    'cancel' => 'отменить',
    'Feed URL' => 'URL канала',
    'Website URL' => 'URL сайта',
    'Title' => 'Заголовок',
    'Edit subscription' => 'Редактирование подписки',
    'Unable to edit your subscription.' => 'Невозможно отредактировать подписку.',
    'Your subscription has been updated.' => 'Подписка обновлена.',
    'Older items first' => 'Сначала старые',
    'Most recent first' => 'Сначала новые',
    'Default sorting order for items' => 'Сортировка статей по-умолчанию',
    'This subscription is empty, %sgo back to unread items%s' => 'Эта подписка пуста, %sвернуться обратно к непрочитанным статьям%s',
    'sort by date %s(%s)%s' => 'сортировать по дате %s(%s)%s',
    'most recent first' => 'сначала новые',
    'older first' => 'сначала старые',
    'Show only this subscription' => 'Показывать только эту подписку',
    'Go to unread' => 'Перейти в непрочитанное',
    'Go to bookmarks' => 'Перейти в закладки',
    'Go to history' => 'Перейти в историю',
    'Go to subscriptions' => 'Перейти в подписки',
    'Go to preferences' => 'Перейти в настройки',
    'Bookmarklet' => 'Букмарклет',
    'Subscribe with Miniflux' => 'Подписаться с помощью Miniflux',
    'Drag and drop this link to your bookmarks' => 'Перетащите эту ссылку в свои закладки',
    'Download full content' => 'Загружать весь контент',
    'Downloading full content is slower because Miniflux grab the content from the original website. You should use that for subscriptions that display only a summary. This feature doesn\'t work with all websites.' => 'Загрузка всего контента замедляет работу, потому что Miniflux извлекает контент из страницы оригинала. Лучше это использовать для подписок, которые отображают только аннотации. Эта функция работает не со всеми сайтами.',
    'API endpoint:' => 'Конечная точка (endpoint): ',
    'API username:' => 'Имя пользователя: ',
    'API token:' => 'Токен: ',
    'Generate new tokens' => 'Генерировать новый токен',
    'Bookmark RSS Feed' => 'Добавить RSS канал в закладки',
    'updated just now' => 'обновлено сейчас',
    'checked at' => 'обновлено',
    'never updated after creation' => 'никогда не обновлялась после создания',
    'Subscription disabled' => 'Подписка деактивирована',
    'content downloaded' => 'контент загружен',
    'in progress...' => 'в процессе...',
    'unable to fetch content' => 'невозможно скачать контент',
    'Download content' => 'Загрузить контент статьи',
    'download content' => 'загрузить контент',
    'Help' => 'Помощь',
    'Theme' => 'Тема оформления',
    'Items per page' => 'Количество статей на страницу',
    'Previous page' => 'Предыдущая страница',
    'Next page' => 'Следующая страница',
    'Do not fetch the content of articles' => 'Не извлекать контент статей',
    'Remove automatically read items' => 'Автоматически удалять прочитанные статьи',
    'Never' => 'Никогда',
    'After %d day' => array('Через %d день', 'Через %d дня', 'Через %d дней'),
    'unread' => 'непрочитанное',
    'Unread' => 'Непрочитанное',
    'bookmark' => 'добавить закладку',
    'remove bookmark' => 'удалить закладку',
    'bookmarks' => 'закладки',
    'Bookmarks' => 'Закладки',
    'Bookmark item' => 'Добавить статью в закладки',
    'No bookmark' => 'Закладок нет',
    'history' => 'история',
    'subscriptions' => 'подписки',
    'Subscriptions' => 'Подписки',
    'preferences' => 'настройки',
    'Preferences' => 'Настройки',
    'logout' => 'выход',
    'Username' => 'Логин',
    'Password' => 'Пароль',
    'Confirmation' => 'Подтверждение',
    'Language' => 'Язык',
    'Save' => 'Сохранить',
    'Database size:' => 'Размер базы данных:',
    'Optimize the database' => 'Оптимизировать базу данных',
    '(VACUUM command)' => '(SQL комманда VACUUM)',
    'Download the entire database' => 'Целиком скачать базу данных',
    '(Gzip compressed Sqlite file)' => '(сжать Sqlite файл с помощью Gzip)',
    'Keyboard shortcuts' => 'Клавиатурные сокращения',
    'Previous item' => 'Предыдущая статья',
    'Next item' => 'Следующая статья',
    'Mark as read or unread' => 'Отменить как прочитанное или непрочитанное',
    'Open original link' => 'Открыть оригинал',
    'Open item' => 'Открыть статью',
    'About' => 'О программе',
    'Miniflux version:' => 'Версия Miniflux:',
    'Nothing to read' => 'Читать нечего',
    'mark all as read' => 'отметить все как прочитанное',
    'original link' => 'открыть оригинал',
    'mark as read' => 'отменить как прочитанное',
    'No history' => 'Истории нет',
    'mark as unread' => 'отменить как непрочитанное',
    'History' => 'История',
    'flush all items' => 'очистить историю',
    'Item not found' => 'Статья не найдена',
    'Next' => 'Далее',
    'Previous' => 'Назад',
    'Sign in' => 'Войти',
    'feeds' => 'каналы',
    'add' => 'добавить',
    'import' => 'импорт',
    'export' => 'экспорт',
    'OPML Import' => 'Импорт OPML',
    'OPML file' => 'OPML файл',
    'Import' => 'Импортировать',
    'refresh all' => 'обновить все',
    'No subscription' => 'Подписок нет',
    'remove' => 'удалить',
    'Remove' => 'Удалить',
    'refresh' => 'обновить',
    'New subscription' => 'Новая подписка',
    'Website or Feed URL' => 'URL сайта или канала',
    'Add' => 'Добавить',
    'http://website/' => 'http://website/',
    'Official website:' => 'Официальный сайт:',
    'Bad username or password' => 'Неверный логин или пароль.',
    'Unable to update your preferences.' => 'Невозможно обновить настройки.',
    'Your preferences are updated.' => 'Настройки обновлены.',
    'Unable to import your OPML file.' => 'Невозможно импортировать OPML файл',
    'Your feeds have been imported.' => 'Ваши каналы импортированы.',
    'Unable to find a subscription.' => 'Невозможно найти подписку.',
    'Subscription added successfully.' => 'Подписка успешно добавлена.',
    'Your subscriptions are updated' => 'Ваши подписки обновлены',
    'Unable to remove this subscription.' => 'Невозможно удалить эту подписку.',
    'This subscription has been removed successfully.' => 'Подписка успешно удалена.',
    'The user name is required' => 'Требуется имя пользователя',
    'The maximum length is 50 characters' => 'Максимальная длина 50 символов',
    'The password is required' => 'Требуется пароль',
    'The minimum length is 6 characters' => 'Минимальная длина 6 символов',
    'The confirmation is required' => 'Требуется подтверждение',
    'Passwords don\'t match' => 'Пароли не совпадают',
    'Do you really want to remove these items from your history?' => 'Вы действительно хотите очистить историю?',
    'Do you really want to remove this subscription: "%s"?' => 'Вы действительно хотите удалить подписку: «%s»?',
    'Nothing to read, do you want to %supdate your subscriptions%s?' => 'Ничего нового пока нет, хотите %sобновить ваши подписки%s?',
    'Show help' => 'Показать справку',
    'Close help' => 'Закрыть справку',
    '%d second ago' => array('%d секунда назад', '%d секунды назад', '%d секунд назад'),
    '%d minute ago' => array('%d минут назад', '%d минуты назад', '%d минут назад'),
    '%d hour ago' => array('%d час назад', '%d часа назад', '%d часов назад'),
    '%d day ago' => array('%d день назад', '%d дня назад', '%d дней назад'),
    '%d week ago' => array('%d неделя назад', '%d недели назад', '%d недель назад'),
    '%d month ago' => array('%d месяц назад', '%d месяца назад', '%d месяцев назад'),
    'Timezone' => 'Временная зона',
    'Update all subscriptions' => 'Обновить все подписки',
    'Remember Me' => 'Запомнить меня',
    'Display items on lists' => 'Показывать в режиме списка',
    'Summaries' => 'Сокращенный текст',
    'Full contents' => 'Полный текст',
    'Force RTL mode (Right-to-left language)' => 'Принудительный RTL режим (режим письма "справа-налево")',
    'Activated' => 'Активировано',
    'Remove this feed' => 'Удалить этот канал',
    'Miniflux' => 'Miniflux',
    'mini%sflux%s' => 'mini%sflux%s',
    'Advanced' => 'Дополнительно',
    'Documentation' => 'Документация',
    'Installation instructions' => 'Установка',
    'Upgrade to a new version' => 'Обновление до новой версии',
    'Cronjob' => 'Планировщик задач',
    'Advanced configuration' => 'Расширенные настройки',
    'Full article download' => 'Полная загрузка статьи',
    'Themes' => 'Темы оформления',
    'Json-RPC API' => 'Json-RPC API',
    'Fever API' => 'Fever API',
    'Translations' => 'Переводы',
    'Run Miniflux with Docker' => 'Запуск Miniflux в Docker',
    'FAQ' => 'FAQ',
    'help' => 'помощь',
    'api' => 'api',
    'about' => 'о программе',
    'database' => 'база данных',
    'Miniflux API' => 'Miniflux API',
    'menu' => 'меню',
    'Default' => 'По-умолчанию',
    'Value required' => 'Требуется значение',
    'Must be an integer' => 'Должно быть целым числом',
    'Remove automatically unread items' => 'Автоматически удалять непрочитанные статьи',
    'Toggle RTL mode' => 'Переключить TRL режим',
    'external services' => 'внешние сервисы',
    'Send bookmarks to Pinboard' => 'Отправлять закладки в Pinboard',
    'Pinboard API token' => 'API токен Pinboard',
    'Pinboard tags' => 'Pinboard тэги',
    'Instapaper username' => 'Имя пользователя Instapaper',
    'Instapaper password' => 'Пароль Instapaper',
    'Instapaper' => 'Instapaper',
    'Pinboard' => 'Pinboard',
    'Send bookmarks to Instapaper' => 'Отправлять закладки в Instapaper',
    'Authentication' => 'Аутентификация',
    'Reading' => 'Чтение',
    'Application' => 'Приложение',
    'Enable image proxy' => 'Включить проксирование изображений',
    'Avoid mixed content warnings with HTTPS' => 'Предотвращает предупреждения о смешанном содержимом в HTTPS',
    'Download favicons' => 'Скачивать иконки сайтов',
    'general' => 'общие',
    'Refresh interval in minutes for unread counter' => 'Интервал обновления счетчика непрочитанных статей в минутах',
    'Original link marks article as read' => 'При переходе на оригинал отмечать статью как прочитанную',
    'Cloak the image referrer' => 'Проксировать загрузку изображений',
    'This subscription already exists.' => 'Эта подписка уже существует.',
    'Connection timeout.' => 'Время соединения истекло.',
    'Feed is malformed.' => 'Некорректный канал',
    'Invalid SSL certificate.' => 'Неверный SSL сертификат.',
    'Maximum number of HTTP redirection exceeded.' => 'Достигнуто максимальное количество HTTP редиректов.',
    'The content size exceeds to maximum allowed size.' => 'Превышен максимально допустимый размер контента',
    'Unable to detect the feed format.' => 'Невозможно определить формат канала.',
    'add a new group' => 'добавить новую группу',
    'Groups' => 'Группы',
    'Back to the group' => 'Назад в группу',
    'view' => 'смотреть',
    'Item title links to' => 'Заголовок статьи ведет на',
    'Original' => 'Оригинал',
    'Last Login' => 'Последний вход',
    'Search' => 'Поиск',
    'There are no results for your search' => 'По вашему запросу ничего не нашлось',
    'Send bookmarks to Wallabag' => 'Отправлять закладки в Wallabag',
    'Wallabag username' => 'Имя пользователя Wallabag',
    'Wallabag password' => 'Пароль Wallabag',
    'An error occurred during the last check: "%s".' => 'В процессе последней проверки возникла ошибка: "%s".',
    'User Profile' => 'Профиль пользователя',
    'Users' => 'Пользователи',
    'New User' => 'Новый пользователь',
    'New user created successfully.' => 'Новый пользователь успешно создан.',
    'Unable to create this user.' => 'Невозможно создать этого пользователя.',
    'Edit User' => 'Изменить данные пользователя',
    'User modified successfully.' => 'Данные пользователя успешно изменены.',
    'Unable to edit this user.' => 'Невозможно изменить данные этого пользователя.',
    'Remove User' => 'Удалить пользователя',
    'Not allowed to fetch feed.' => 'Невозможно загрузить канал',
    'Unable to save this subscription in the database.' => 'Невозможно сохранить эту подписку в базу данных.',
    'Titles' => 'Заголовки',
    'profile' => 'профиль',
    'users' => 'пользователи',
    'Cronjob URL' => 'URL cron-задачи',
    'Do you really want to remove this user: "%s"?' => 'Вы действительно хотите удалить этого пользователя: "%s"?',
    'Administrator' => 'Администратор',
    '%e %B %Y %k:%M' => '%e %B %Y %k:%M',
    'Wallabag' => 'Wallabag',
    'Wallabag URL' => 'Wallabag URL',
    'Wallabag Client ID' => 'Wallabag Client ID',
    'Wallabag Client Secret' => 'Wallabag Client Secret',
    'Action' => 'Действие',
    'Yes' => 'Да',
    'No' => 'Нет',
    'Edit' => 'Изменить',
    'The user id required' => 'Необходим id пользователя',
    'The username must be unique' => 'Логин должен быть уникальным',
    'Current Password' => 'Текущий пароль',
    'New Password' => 'Новый пароль',
    'Wrong password' => 'Неверный пароль',
    'Duplicated feed' => 'Дублирующийся канал',
    'This group has been removed successfully.' => 'Группа была успешно удалена.',
    'Unable to remove this group.' => 'Невозможно удалить группу.',
    'Edit group' => 'Изменить группу',
    'Group updated successfully.' => 'Группа успешно обновлена.',
    'Unable to edit this group.' => 'Невозможно изменить группу.',
    'groups' => 'группы',
    'There is no group.' => 'Групп пока нет.',
    'Do you really want to remove this group: "%s"?' => 'Вы действительно хотите удалить группу: "%s"?',
    'This field is required' => 'Это поле обязательно для заполнения',
    'This value must be an integer' => 'Значение должно быть целым числом',
    'This text is too long (max. %d)' => 'Слишком длинный текст (макс. %d)',
    'Mark all unread items as read' => 'Отменить как прочитанное все непрочитанные статьи',
    'Do not redirect me' => 'Не перенаправлять меня',
    'Last checked: ' => 'Последняя проверка: ',
    'Last modified: ' => 'Последнее изменение: ',
    'Expiration date: ' => 'Окончание срока действия: ',
    'ETag: ' => 'ETag: ',
    'None' => 'Нет',
    'Last parsing error: ' => 'Последняя ошибка парсинга: ',
    'Ignore expiration date' => 'Игнорировать срок действия',
    // 'Mark bookmarks as unread' => '',
    // 'Shaarli' => '',
    // 'Send bookmarks to Shaarli' => '',
    // 'Shaarli URL' => '',
    // 'Shaarli secret' => '',
    // 'Shaarli tags' => '',
    // 'Private Bookmarks' => '',
);
