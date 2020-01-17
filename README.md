
# Исправить!!!

1. Исправить ошибки в консоле. Разобраться с подключением шрифтов. Убрать ссылку с логотипа на домашней странице. Подогнать стили виджетов категорий и поиска. А также добавить виджет галереи.

2. Сделать коректирование шаблонов: page-portfolio.php, single-portfolio.php, taxonomy-skills.php. А именно: ввывод контента, динамическое подхватывание и вывод.
---
---
---

# Sparrow

wordpress-theme

---

[StyleShout](https://www.styleshout.com);

[Sparrow](https://www.styleshout.com/free-templates/sparrow);

---

+ [WordPress](https://wordpress.org);

+ [Theme Customization API](https://codex.wordpress.org/Theme_Customization_API);

+ [Developer Resources: Dashicons](https://developer.wordpress.org/resource/dashicons/#welcome-widgets-menus);

+ [UNDERSCORES BASED THEME](https://underscores.me);

+ [Advanced Custom Fields](https://www.advancedcustomfields.com);

+ [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields);

+ [TGM Plugin Activation](http://tgmpluginactivation.com);

---

+ [WP-KAMA](https://wp-kama.ru);

+ [Иерархия файлов темы (шаблона)](https://wp-kama.ru/id_7654/ierarhiya-fajlov-temy-shablona.html);

+ [Заголовки style.css](https://wp-kama.ru/handbook/theme/style-css);

+ [Шпаргалка](https://wp-kama.ru/handbook/cheatsheet);

---

### 1. Создаем файли:

1.1. [style.css](https://wp-kama.ru/handbook/theme/style-css);

1.2. index.php;

1.3. screenshot.png(1200px x 900px).

---

### 2. Подключаем:

Подключает файл шаблона header.php (шапку).

+ [get_header()](https://wp-kama.ru/function/get_header);

Подключает файл шаблона sidebar.php (сайдбар).

+ [get_sidebar()](https://wp-kama.ru/function/get_sidebar);

Подключает файл footer.php из шаблона (темы).

+ [get_footer()](https://wp-kama.ru/function/get_footer);

---

+ [wp_head()](https://wp-kama.ru/function/wp_head);

Запускает хук-событие [wp_head](https://wp-kama.ru/hook/wp_head). Вызывается в шапке сайта в файле: header.php

wp_head() - это Тег шаблона, который нужно вставлять перед </head>, в файлах темы: header.php или index.php, если header.php не используется.

+ [wp_footer()](https://wp-kama.ru/function/wp_footer);

Запускает хук [wp_footer](https://wp-kama.ru/hook/wp_footer) — один из основных хуков, без которого не будут работать многие плагины. Вызывается в подвале темы, в файле footer.php.

Этот тег шаблона должен располагаться прямо перед закрывающим HTML тегом </body>.

---
---

### 3. Подключаем js и css файлы:

+ [language_attributes()](https://wp-kama.ru/function/language_attributes);

Выводит атрибуты для HTML тега <html> со значениями текущего языка: lang="ru-RU"

Строит набор атрибутов для HTML тега <html> HTML, содержащих название языка сайта и направление чтения для страницы.

+ [bloginfo()](https://wp-kama.ru/function/bloginfo);

Выводит информацию о сайте (блоге). Почти вся получаемая информация хранится в опциях сайта.

Функция относится к тегам шаблона и может быть использована в любом месте шаблона.

+ [body_class()](https://wp-kama.ru/function/body_class);

Выводит css классы относящиеся к текущей странице. Предназначен для использования в теге <body>.

---

+ [wp_enqueue_scripts()](https://wp-kama.ru/hook/wp_enqueue_scripts);

Срабатывает в момент подключения в очередь на вывод файлов стилей и скриптов.

На этот хук принято вешать функции, которые подключают стили и скрипты темы. Т.е. через этот хук принято подключать файлы стилей и скриптов: смотрите [wp_enqueue_script()]() и [wp_enqueue_style()]().

+ [wp_enqueue_style()](https://wp-kama.ru/function/wp_enqueue_style);

Правильно добавляет файл CSS стилей. Регистрирует файл стилей, если он еще не был зарегистрирован.

+ [wp_enqueue_script()](https://wp-kama.ru/function/wp_enqueue_script);

Правильно подключает скрипт (JavaScript файл) на страницу.

---

+ [get_stylesheet_uri()](https://wp-kama.ru/function/get_stylesheet_uri);

Получает ссылку (URL) на файл стилей style.css текущей темы.

[get_template_directory_uri()](https://wp-kama.ru/function/get_template_directory_uri);

Получает URL текущей темы. Не учитывает наличие дочерней темы. Не содержит закрывающий слэш.

---

### 4. Проверяем и по необходимости подключаем дополнительные возможности темы:

+ [after_setup_theme()](https://wp-kama.ru/hook/after_setup_theme);

Вызывается каждый раз при загрузке страницы, сразу после того, как тема инициализирована. Обычно используется для того, чтобы установить базовые возможности темы: см. add_theme_support().

+ [add_theme_support()](https://wp-kama.ru/function/add_theme_support);

Регистрирует поддержку новых возможностей темы в WordPress (поддержка миниатюр, форматов записей и т.д.).

+[load_theme_textdomain()](https://wp-kama.ru/function/load_theme_textdomain);

Загружает файл перевода темы (.mo) в память, для дальнейшей работы с ним.

---

### 5. Регистрация Меню:

+ [register_nav_menus()](https://wp-kama.ru/function/register_nav_menus);

Регистрируется одно расположение/место меню, к которому затем в админке прикрепляются меню.

+ [wp_nav_menu()](https://wp-kama.ru/function/wp_nav_menu)

Выводит произвольное меню, созданное в панели: "внешний вид > меню" (Appearance > Menus).

---

### 6. Регистрация Сайдбара:

+ [register_sidebar()](https://wp-kama.ru/function/register_sidebar);

Регистрирует панель виджетов (место, куда размещаются виджеты в админ-панели, чтобы потом вывести их в лицевой части).

+ [is_active_sidebar()](https://wp-kama.ru/function/is_active_sidebar);

Проверяет используется ли указанная панель виджетов (область для виджетов, сайдбар). Сработает если в области для виджетов есть хоть один виджет. Условный тег.

+ [dynamic_sidebar()](https://wp-kama.ru/function/dynamic_sidebar);

Выводит на экран первую активную панель виджетов (сайдбар - панель в которой есть хотя бы один виджет). Можно указать ID или номер панели, какую именно выводить, если на сайте большее одной панели виджетов.

---

+[wp_widgets_init()](https://wp-kama.ru/function/wp_widgets_init);

Регистрирует все стандартные виджеты WordPress при запуске.

---

### 7. Вывод постов:

[Что такое Цикл WordPress — The Loop](https://wp-kama.ru/id_119/the-loop.html);

+ [the_title()](https://wp-kama.ru/function/the_title) - Выводит на экран заголовок записи. Принято использовать внутри цикла.

+ [the_permalink()](https://wp-kama.ru/function/the_permalink) - Выводит УРЛ поста.

+ [the_author()](https://wp-kama.ru/function/the_author) - Выводит имя автора поста.

+ [the_author_posts_link()](https://wp-kama.ru/function/the_author_posts_link) - Выводит ссылку (A тег) на архивную страницу постов автора записи. Текстом ссылки будет "отображаемое" имя автора.

+ [the_date()](https://wp-kama.ru/function/the_date) - Выводит на экран или получает дату публикации поста или группы постов (опубликованные в один день). Используется в цикле WordPress.

+ [the_time()](https://wp-kama.ru/function/the_time) - Выводит на экран время (дату) публикации текущей записи в Цикле WordPress.

[Форматы даты и времени в WordPress](https://wp-kama.ru/id_7433/formaty-daty-i-vremeni-v-wordpress.html);

+ [the_category()](https://wp-kama.ru/function/the_category) - Выводит ссылки на рубрики, к которым принадлежит пост в виде HTML li списка или в произвольном формате.

+ [the_content()](https://wp-kama.ru/hook/the_content) - Выводит контент текущего поста (записи).

+ [the_excerpt()](https://wp-kama.ru/function/the_excerpt) - Выводит "отрывок" (цитату) поста или первые 55 слов контента, со вставкой в конец [...].

 
+ [get_posts()](https://wp-kama.ru/function/get_posts) - Получает записи (посты, страницы, вложения) из базы данных по указанным критериям. Можно выбрать любые посты и отсортировать их как угодно.

---

+ [get_posts()](https://wp-kama.ru/function/get_posts) - Получает записи (посты, страницы, вложения) из базы данных по указанным критериям. Можно выбрать любые посты и отсортировать их как угодно.

---

+ [the_posts_pagination()](https://wp-kama.ru/function/the_posts_pagination) - Выводит на экран ссылки пагинации на след./пред. сет постов. Используется на страницах архивов (рубрики, метки, ...).

### 5. Соднание своего типа записей:

+ [register_post_type()](https://wp-kama.ru/function/register_post_type) - Создает новый тип записи или изменяет имеющийся.

+ [get_posts()](https://wp-kama.ru/function/get_posts) - Получает записи (посты, страницы, вложения) из базы данных по указанным критериям. Можно выбрать любые посты и отсортировать их как угодно.

+ [init](https://wp-kama.ru/hook/init)

### 6. Создаем опции в customize темы с помощью Theme Customization API:

cusromizer.php

+ [Theme Customization API](https://codex.wordpress.org/Theme_Customization_API);

[Class Reference/WP Customize Manager/add control](https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_control);

### 7. Добавляем произвольные поля с помощью Advanced Custom Fields:

the_field();

+ [Advanced Custom Fields](https://www.advancedcustomfields.com);

+ [Documentation ACF](https://www.advancedcustomfields.com/resources);

### 8. Регистрируруем свой тип таксономии: 

+ [register_taxonomy()](https://wp-kama.ru/function/register_taxonomy);

Добавляет (регистрирует) новую (пользовательскую) таксономию. Можно перезаписать существующую таксономию.

Функцию желательно вызывать во время события [init](https://wp-kama.ru/hook/init).

+ [the_terms()](https://wp-kama.ru/function/the_terms) - Выводит список ссылок на термины (элементы таксономии), относящиеся к указанному посту.

+[register_taxonomy_for_object_type()](https://wp-kama.ru/function/register_taxonomy_for_object_type) - Привязывает (добавляет) указанную таксономию к указанному типу записи (поста).

Используется, чтобы к типу поста добавить таксономию, например добавить метки к постоянным страницам. 