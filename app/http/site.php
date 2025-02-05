
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru" dir="ltr" class="js chrome win">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://nistp.ru/inc/images/icons/nistp_favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://nistp.ru/inc/css/style.css?v=10">

    <title>
        Новые информационные сервисы	</title>

    <script src="https://nistp.ru/inc/js/jquery-3.5.1.min.js"></script>
    <script src="https://nistp.ru/inc/js/script.js"></script>
    <script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=ed24a6ef-4d26-4341-b524-ad545aacff5a&suggest_apikey=9454ad0f-1c8e-4e8a-8d32-0c38a174e668' type='text/javascript'></script>

    <script>
        function redirector(new_url) {
            window.location.href=new_url;
        }

        function table_shower(id) {
            table_id="#"+id;
            $(table_id).toggleClass('collapse');
        }
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(53841571, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/53841571" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>

<body class="front not-logged-in page-trades one-sidebar sidebar-left">
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-body">
            <div class="art-header">
                <div class="art-header-center">
                    <div class="art-header-jpeg"></div>
                </div>
                <div class="currentdate">
					<span id="currentdate">
					<span id="topdate">
						31.03.2024 18:21 (время московское)
					</span>
					</span>
                </div>

                <div class="art-logo">
                </div>

            </div>
            <div class="art-nav">
                <ul class="links">
                    <li class=""><a href="https://nistp.ru/common/page.php?id=1">Новости</a></li>
                    <li class=""><a href="https://nistp.ru/bankrot/trade_list.php">Торги</a></li>

                    <li class=""><a href="https://nistp.ru/common/page.php?id=2">Подключение к системе</a></li>
                    <li class=""><a href="https://nistp.ru/common/page.php?id=3">Регламент</a></li>
                    <li class=""><a href="https://nistp.ru/common/page.php?id=4">Тарифы</a></li>
                    <li class=""><a href="https://nistp.ru/common/page.php?id=5">Контакты</a></li>
                    <li class=""><a href="https://nistp.ru/common/page.php?id=6">Услуги</a></li>
                    <li class=""><a href="https://nistp.ru/common/bank_trade.php">Продажа имущества банков</a></li>
                    <li class=""><a href="https://nistp.ru/common/page.php?id=13">О нас</a></li>
                    <li class=""><a href="https://nistp.ru/common/page.php?id=14">Партнеры</a></li>
                    <li class=""><a href="https://trade.nistp.ru" style="text-decoration:underline;">Перейти в коммерческие торги</a></li>
                </ul>
            </div>
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
                        <div class="art-block clear-block block block-user" id="block-user-0">
                            <div class="art-block-body">
                                <div class="art-blockcontent content">

                                    <table class="block_table">
                                        <tbody>
                                        <tr>
                                            <td class="block_header_no_ico" rowspan="1" colspan="1">Вход для участников системы</td>
                                        </tr>
                                        <tr>
                                            <td class="corner-box-style1" style="padding: 10px 10px 5px 0" rowspan="1" colspan="1">
                                                <form action="https://nistp.ru/common/login.php" method="post">
                                                    <table class="login-block" width="95%">
                                                        <tbody>
                                                        <tr>
                                                            <td class="logform_label">E-mail: </td>
                                                            <td class="logform_container">
                                                                <input type="email" class="logform_input" id="lfEmail" placeholder="E-mail" name='user_mail'>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="logform_label">Пароль: </td>
                                                            <td class="logform_container">
                                                                <input type="password" class="logform_input" id="lfPassword" placeholder="Пароль" name='user_password'>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="login-block" style="margin-top: 5px" width="95%">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <a class="logform_link" href="https://nistp.ru/common/passwd_remainer.php">Забыли пароль?</a>
                                                                <br>
                                                                <a class="logform_link" href="https://nistp.ru/common/reg.php">Регистрация</a>
                                                            </td>
                                                            <td valign="center" align="center">
                                                                <input value="Войти" class="art-button" name="submit" type="submit">
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table class='block_table'>
                                        <tbody>
                                        <tr valign='top'>
                                            <td class='block_header'>СПРАВОЧНАЯ ИНФОРМАЦИЯ</td>
                                        </tr><tr valign='top'>
                                            <td class='block_menu_link_cont'><a href='http://nistp.ru/common/page.php?id=7'>Законодательство</a></td>
                                        </tr><tr valign='top'>
                                            <td class='block_menu_link_cont'><a href='http://nistp.ru/common/page.php?id=9'>Центр поддержки пользователей</a></td>
                                        </tr><tr valign='top'>
                                            <td class='block_menu_link_cont'><a href='http://nistp.ru/common/page.php?id=10'>Аккредитация в СРО</a></td>
                                        </tr></tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                        <div class="art-vmenublock">
                            <p class='rtecenter'><br>
                                <a class='link' href='https://ca.tensor.ru/petition.html?agent_code=1009' title='Получить ЭЦП' target='_blank'>
                                    <img src='https://nistp.ru//inc/images/get-ecp.jpg' style='width: 130px; height: 74px;' /><br />
                                    <span style='color: #5a5a5a;font-weight:normal;font-size:16px;font-face:Arial;text-align: center;text-transform: uppercase;'>Получить ЭЦП</span></a>
                            </p>						</div>



                        <div class="art-vmenublock">
                            <table class='block_table'>
                                <tr valign='top'>
                                    <td class='block_header'>СТАТИСТИКА<br></td>
                                </tr>
                                <tr>
                                    <td class='block_menu_stat_cont'><span class='label'>Участников</span><span class='value'>76 324</span></td>
                                </tr>
                                <tr>
                                    <td class='block_menu_stat_cont'><span class='label'>Всего</span><span class='value'>118 451</span> <span class='label'>лотов</span></td>
                                </tr>
                                <tr>
                                    <td class='block_menu_stat_cont'><span class='label'>На сумму</span><span class='value'>2 904 370 847 765</span> <span class='label'>руб.</span></td>
                                </tr>
                                <tr>
                                    <td class='block_menu_stat_cont'><span class='label'>Проведено</span><span class='value'>107 952</span> <span class='label'>лотов</span></td>
                                </tr>
                                <tr>
                                    <td class='block_menu_stat_cont'><span class='label'>На сумму</span><span class='value'>2 594 948 635 774</span> <span class='label'>руб.</span></td>
                                </tr>
                            </table>
                        </div>




                        <div class="art-vmenublock">

                            <p class='rtecenter'>
                                <a href='https://investtorgi.ru/services/?utm_source=nis&utm_medium=banner&utm_campaign=bannernis' target='_blank' title='ООО Инвестторги'>
                                    <img src='https://nistp.ru/sites/default/files/banners/investtorgi_2022_01_11.gif'>
                                </a>
                            </p>
                            <p class='rtecenter'>
                                <a href='https://www.diadoc.ru/lp-nistp?p=w01834' target='_blank' title=''>
                                    <img src='https://nistp.ru/sites/default/files/banners/diadok.png'>
                                </a>
                            </p>
                            <p class='rtecenter'>
                                <a href='https://fedresurs.ru/?attempt=1' target='_blank' title=''>
                                    <img src='https://nistp.ru/sites/default/files/banners/efrsb.jpg'>
                                </a>
                            </p>

                        </div>
                    </div>




                    <div class="art-layout-cell art-content">
                        <div class="art-post">
                            <div class="art-post-body">

                                <form action='' method='GET' id='nodesearch'>
                                    <table class='table_search'>
                                        <tbody>
                                        <tr>
                                            <td class='td_search_header' colspan='2'>Поиск торгов</td>
                                        </tr>
                                        <tr>
                                            <td>Предмет торгов</td>
                                            <td><input class='form-control' id='' placeholder='' type='text' name='lot_description'></td>
                                        </tr>
                                        <tr>
                                            <td class='search_label'>Номер торгов</td>
                                            <td><input class='form-control search_full' id='' placeholder='' type='text' name='trade_number' value='41375-ОАОФ'></td>
                                        </tr>
                                        <tr>
                                            <td class='search_label'>Номер лота</td>
                                            <td><input class='form-control search_full' id='' placeholder='' type='text' name='lot_number' value='1'></td>
                                        </tr>

                                        <tr>
                                            <td class='search_label'>Должник</td>
                                            <td><input class='form-control search_full' id='' placeholder='Наименование, фамилия, инн, огрн' type='text' name='debtor_info'></td>
                                        </tr><tr>
                                            <td class='search_label'>Арбитражный управляющий</td>
                                            <td><input class='form-control search_full' id='' placeholder='Фамилия, инн, рег. номер' type='text'  name='arbitr_info'></td>
                                        </tr>
                                        <tr>
                                            <td class='search_label'>Дата начала приема заявок</td>
                                            <td>
                                                <input class='form-control search_short' id='' placeholder='С' type='datetime_short' name='app_start_from' value='29.01.2024'>&nbsp;&nbsp;&nbsp;
                                                <input class='form-control search_short' id='' placeholder='ПО' type='datetime_short' name='app_start_to'>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='search_label'>Дата окончания приема заявок</td>
                                            <td>
                                                <input class='form-control search_short' id='' placeholder='С' type='datetime_short' name='app_end_from'>&nbsp;&nbsp;&nbsp;
                                                <input class='form-control search_short' id='' placeholder='ПО' type='datetime_short' name='app_end_to'>

                                            </td>
                                        </tr><tr>
                                            <td class='search_label'>Способ торгов</td>
                                            <td>
                                                <select class='form-control search_full' id='t1-123' name='trade_type'><option selected>Любой</option><option>Аукцион с открытой формой представления цены</option><option>Аукцион с закрытой формой представления цены</option><option>Конкурс с открытой формой представления цены</option><option>Конкурс с закрытой формой представления цены</option><option>Публичное предложение</option><option>Закрытый аукцион с открытой формой представления цены</option><option>Закрытый аукцион с закрытой формой представления цены</option><option>Закрытый конкурс с открытой формой представления цены</option><option>Закрытый конкурс с закрытой формой представления цены</option><option>Закрытое публичное предложение</option></select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='search_label'>Состояние</td>
                                            <td>
                                                <select class='form-control search_full' id='t1-5' name='trade_state'><option selected>Любой</option><option>Торги объявлены</option><option>Прием заявок</option><option>Прием заявок завершен</option><option>Идут торги</option><option>Подведение итогов</option><option>Торги завершены</option><option>Торги не состоялись</option><option>Торги приостановлены</option><option>Торги отменены</option></select>

                                            </td>
                                        </tr><tr>
                                            <td>Организатор торгов</td>
                                            <td><input class='form-control' id='' placeholder='ИНН, ФИО (через пробел, ФЛ,ИП), Наименование (ЮЛ)' type='text' name='trade_org'></td>
                                        </tr><tr>
                                            <td class='search_label'>Категории имущества</td>
                                            <td>Доступно для премиум аккаунта</td>
                                        </tr><tr>
                                            <td class='search_label'>Стоимость</td>
                                            <td>Доступно для премиум аккаунта</td>
                                        </tr>
                                        <tr>
                                            <td class='search_label'>Регион должника</td>
                                            <td>Доступно для премиум аккаунта</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <button type='submit' class='art-button'>Поиск</button>
                                                <button type='button' class='art-button' onclick='nodelist_reload()'>Очистить</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <input type='hidden' name='pagenum' id='pagenum'>
                                </form>
                                <div class='estate_map'><a class='estate_map' href='https://nistp.ru/common/ym.php'>Карта Недвижимости</a></div>
                                <nav class='pagnav' aria-label='Постраничная навигация'>
                                    <div class='header' >Страница:</div>
                                    <ul class='pagination'><li class='active'><a onclick='pagenum_send(1)'>1</a></li>
                                    </ul>
                                </nav>

                                <table class='data'>
                                    <thead>
                                    <tr>
                                        <th>Код торгов</th>
                                        <th>Организатор</th>
                                        <th>Должник, предмет торгов</th>
                                        <th>Состояние</th>
                                        <th>Начало приема заявок</th>
                                        <th>Конец приема заявок</th>
                                    </tr>
                                    </thead>

                                    <tbody><tr style='cursor: pointer' onclick="if (event.ctrlKey || event.button == 1) { window.open('/trade_view.php?trade_nid=360422','_blank'); } else { window.location='/trade_view.php?trade_nid=360422'; }"><td>41375-ОАОФ</td>
                                        <td>Щербаков Дмитрий Александрович</td><td><span style='font-weight:bold;'>Муниципальное унитарное предприятие «Жилищное ремонтно- эксплуатационное предприятие» (Заказчик)</span><br><a href='https://nistp.ru/bankrot/trade_view.php?trade_nid=360422'><span style='font-weight:bold;'>Всего лотов: 1</span></a><br><span style='font-weight:bold;'>Лот № 1: </span>Недвижимое имущество<br></td>
                                        <td>Торги объявлены</td>
                                        <td>01.04.2024 00:01</td>
                                        <td>07.05.2024 23:59</td>
                                    </tr></tbody></table><nav class='pagnav' aria-label='Постраничная навигация'>
                                    <div class='header' >Страница:</div>
                                    <ul class='pagination'><li class='active'><a onclick='pagenum_send(1)'>1</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="cleared"></div>

            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                    <div class="art-footer-text">
                    </div>
                    <div class="cleared"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"></p>

</div><script>
    function pagenum_send(pagenum) {
        $('#pagenum').val(pagenum);
        $('#nodesearch').submit();
    }
    function nodelist_reload(){
        window.location='https://nistp.ru/bankrot/trade_list.php';
    }
    function node_delete(nid) {
        $('#nid_delete').val(nid);
        $('#nodedelete_form').submit();
    }
</script>
<script src='https://nistp.ru/inc/js/jquery.datetimepicker.js'></script>
<link href='https://nistp.ru/inc/css/jquery.datetimepicker.css' rel='stylesheet'>
<script>
    $('input[type=datetime_full]').datetimepicker({dayOfWeekStart : 1,format:'d.m.Y H:i',lang:'ru'});
    $('input[type=datetime_short]').datetimepicker({timepicker:false,dayOfWeekStart : 1,format:'d.m.Y',lang:'ru',closeOnDateSelect:true});
</script>
<script>
    function view_search_cat() {
        $("#cat_search_container").toggle();
    }
</script>