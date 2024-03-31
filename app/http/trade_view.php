
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
						31.03.2024 19:31 (время московское)
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
                                    <td class='block_menu_stat_cont'><span class='label'>Участников</span><span class='value'>76 325</span></td>
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

                                <div class='agent_outer' id='agent_outer'>
                                    <div class='agent_overlay' id='agent_overlay'> </div>
                                    <div class='agent_inner' id='agent_inner'>
                                        <div class='object' style='text-align:left;'>
                                            <h1 class='node_header' style='color:#43A6BE !important;'>Купить лот через агента</h1>
                                            <a id='agent_phone_link' href='tel:88002004586'><button type='button' class='art-button'>Позвонить агенту 8 (800) 200-45-86</button></a><br>
                                            <a href='https://wa.me/79017500062'><button type='button' class='art-button'>Написать в whatsapp</button></a><br>
                                            <a href='https://investtorgi.ru/services/?utm_source=nis&utm_medium=cpa&utm_campaign=nisagents&utm_content=button'><button type='button' class='art-button'>Перейти на сайт</button></a><br>
                                        </div>
                                    </div>
                                </div>

                                <h1 class='node_header'>Муниципальное унитарное предприятие «Жилищное ремонтно- эксплуатационное предприятие» (Заказчик)<br>
                                    <span class='text-muted'>Идентификационный номер </span>41375-ОАОФ<br>
                                    <span class='text-muted'>Текущий статус </span>Торги объявлены</h1>

                                <table class='node_view'>
                                    <thead>
                                    <tr>
                                        <th colspan='2'>Информация об организаторе</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td class='label'>Наименование</td>
                                        <td>Щербаков Дмитрий Александрович</td>
                                    </tr>

                                    <tr>
                                        <td class='label'>E-mail</td>
                                        <td>dmitryshcherbakov@mail.ru</td>
                                    </tr>

                                    <tr>
                                        <td class='label'>Телефон</td>
                                        <td>+7-903-881-81-82</td>
                                    </tr>

                                    <tr>
                                        <td class='label'>ИНН</td>
                                        <td>575306315990</td>
                                    </tr></tbody>
                                </table><table class='node_view' style='margin-bottom:10px;'>
                                    <tr><th colspan=2>Информация о ходе торгов </th></tr><tr><td class='label'>Тип торгов</td><td>Аукцион с открытой формой представления цены</td></tr><tr><td class='label'>Дата начала представления заявок на участие</td><td>01.04.2024 00:01:00</td></tr><tr><td class='label'>Дата окончания представления заявок на участие</td><td>07.05.2024 23:59:00</td></tr><tr><td class='label'>Дата проведения</td><td>08.05.2024 11:00:00</td></tr></table><table class='node_view' style='margin-bottom:10px;'>
                                    <tr><th colspan=2>Информация о должнике </th></tr><tr><td class='label'>Тип должника</td><td>Юридическое лицо</td></tr><tr><td class='label'>Полное наименование</td><td>Муниципальное унитарное предприятие «Жилищное ремонтно- эксплуатационное предприятие» (Заказчик)</td></tr><tr><td class='label'>Сокращенное наименование</td><td>МУП ЖРЭП (З)</td></tr><tr><td class='label'>ИНН</td><td>5752030473</td></tr><tr><td class='label'>ОГРН</td><td>1025700783162</td></tr><tr><td class='label'>Регион</td><td>Орловская область</td></tr><tr><td class='label'>Адрес</td><td>г. Орел, ул. Тургенева, д. 37А, лит. Д</td></tr><tr><td class='label'>Наименование суда </td><td>Арбитражный суд Орловской области</td></tr><tr><td class='label'>Номер дела о банкротстве</td><td>А48-11855/2021</td></tr><tr><td class='label'>Основание для проведения торгов</td><td>Протокол собрания кредиторов от 28.03.2023г.</td></tr></table><table class='node_view' style='margin-bottom:10px;'>
                                    <tr><th colspan=2>Информация об арбитражном управляющем </th></tr><tr><td class='label'>Фамилия</td><td>Щербаков</td></tr><tr><td class='label'>Имя</td><td>Дмитрий</td></tr><tr><td class='label'>Отчество</td><td>Александрович</td></tr><tr><td class='label'>ИНН</td><td>575306315990</td></tr><tr><td class='label'>Наименование СРО</td><td>Ассоциация РСОПАУ</td></tr></table><table class='node_view' style='margin-bottom:10px;'>
                                    <tr><th colspan=2>Информация о проведении торгов </th></tr><tr><td class='label'>Номер объявления о проведении торгов на fedresurs.ru</td><td>14035497</td></tr><tr><td class='label'>Порядок представления заявок на участие в торгах</td><td>Для участия в торгах заявителю необходимо представить Организатору торгов в электронном виде заявку на участие в торгах, которая должна содержать следующие сведения: наименование, организационно-правовую форму, место нахождения, почтовый адрес (для юридического лица) заявителя; фамилию, имя, отчество, паспортные данные, сведения о месте жительства (для физического лица) заявителя; номер контактного телефона, адрес электронной почты заявителя. Заявка на участие в торгах должна содержать также сведения о наличии или об отсутствии заинтересованности заявителя по отношению к должнику, кредиторам, конкурсному управляющему и о характере этой заинтересованности, сведения об участии в капитале заявителя конкурсного управляющего, а также сведения о заявителе, саморегулируемой организации арбитражных управляющих, членом или руководителем которой является конкурсный управляющий.</td></tr><tr><td class='label'>Сроки и порядок внесения и возврата задатка, реквизиты счетов, на которые вносится задаток</td><td>Указанный в лоте размер задатка должен быть внесен в срок до момента определения участников торгов на банковский счет АО «НИС» (ИНН 7725752265, р/с 40702810800000024981 в Филиал «Центральный» Банка ВТБ (ПАО), к/с 30101810145250000411, БИК 044525411). Датой внесения задатка считается дата зачисления суммы задатка на банковский счет АО «НИС». В графе «Назначения платежа» платежного поручения о внесении задатка указываются: «Задаток за участие в торгах__ (код торгов), _____________ (наименование должника), номер лота__». Претенденты, чьи задатки не поступили на счет до указанного срока, к участию в торгах не допускаются. Суммы внесенных заявителями задатков возвращаются всем заявителям, за исключением победителя торгов, в течение пяти рабочих дней со дня подписания протокола о результатах проведения торгов.</td></tr><tr><td class='label'>Порядок и критерии определения победителя торгов</td><td>Победителем открытых торгов признается участник торгов, предложивший максимальную цену.</td></tr><tr><td class='label'>Порядок ознакомления с имуществом</td><td>В рабочее время по предварительному согласованию.</td></tr><tr><td class='label'>Место подведения результатов торгов</td><td>В сети Интернет на сайте по адресу http://nistp.ru</td></tr><tr><td class='label'>Порядок и срок заключения договора купли-продажи</td><td>Договор купли-продажи заключается в течение 5 рабочих дней с даты получения Победителем торгов письма с предложением заключения договора купли-продажи.</td></tr><tr><td class='label'>Сроки платежей, реквизиты счетов, на которые вносятся платежи</td><td>Оплата за имущество производится не позднее 30 дней со дня подписания договора по реквизитам: МУП ЖРЭП (З), ИНН: 5752030473, КПП: 575201001, р/сч 40702810547000000951, к/сч 30101810300000000601, БИК 045402601 в Орловском отделении №8595 ПАО Сбербанк г. Орел.</td></tr></table><table class='node_view' style='margin-bottom:10px;'>
                                    <tr><th colspan=2>Дополнительные сведения </th></tr><tr><td class='label'>Дата публикации сообщения о проведении открытых торгов в официальном издании</td><td>30.03.2024</td></tr><tr><td class='label'>Дата размещения сообщения в Едином федеральном реестре сведений о банкротстве</td><td>30.03.2024</td></tr></table><table class='node_view'>
                                    <tr><td class='label'>Подано заявок</td><td>0</td></tr>
                                    <tr><td class='label' colspan='2'>
                                            Сведения об общем количестве представленных (поданных и не отозванных) заявок на участие в торгах отображаются в течение одного часа после поступления оператору электронной площадки указанных сведений.<br>
                                            <strong>Приказ Минэкономразвития России от 23 июля 2015 г. N 495 п.8.1. пп.Д</strong>
                                        </td></tr>
                                </table>
                                <a name='docs_list'></a>
                                <table class='node_view ' id='print_docs'>
                                    <thead>
                                    <tr>
                                        <th colspan=2 class='table_header' >Документы</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class='label'>Проект договора задатка</td>
                                        <td class='file_container'>
                                            <div style='margin: 2px;font-size:13px;'><img src='https://nistp.ru/inc/images/icons/doc.gif' style='vertical-align: middle' width='16' height='16' border='0'> <a class='file_link' href='https://nistp.ru/files/360422/1084214.doc' target='_blank' name='1084214' download='1. Договор о задатке ВТБ (проект)- НОВЫЙ-2.doc'>1. Договор о задатке ВТБ (проект)- НОВЫЙ-2.doc</a> [60.50 Кбайт]</div><div style='padding-top: 7px; font-size:13px;'><img src='https://nistp.ru/inc/images/icons/lock.gif' style='vertical-align: middle' width='16' height='16' border='0'> Подписано ЭП: ЩЕРБАКОВ ДМИТРИЙ АЛЕКСАНДРОВИЧ</div></td></tr><tr>
                                        <td class='label'>Основание для проведения торгов</td>
                                        <td class='file_container'>
                                            <div style='margin: 2px;font-size:13px;'><img src='https://nistp.ru/inc/images/icons/pdf.gif' style='vertical-align: middle' width='16' height='16' border='0'> <a class='file_link' href='https://nistp.ru/files/360422/1084215.pdf' target='_blank' name='1084215' download='Протокол собрания кредиторов от 28.03.2023.pdf'>Протокол собрания кредиторов от 28.03.2023.pdf</a> [310.17 Кбайт]</div><div style='padding-top: 7px; font-size:13px;'><img src='https://nistp.ru/inc/images/icons/lock.gif' style='vertical-align: middle' width='16' height='16' border='0'> Подписано ЭП: ЩЕРБАКОВ ДМИТРИЙ АЛЕКСАНДРОВИЧ</div></td></tr><tr>
                                        <td class='label'>Проект договора купли-продажи</td>
                                        <td class='file_container'>
                                            <div style='margin: 2px;font-size:13px;'><img src='https://nistp.ru/inc/images/icons/doc.gif' style='vertical-align: middle' width='16' height='16' border='0'> <a class='file_link' href='https://nistp.ru/files/360422/1084216.doc' target='_blank' name='1084216' download='Договор к-п (проект).doc'>Договор к-п (проект).doc</a> [47.00 Кбайт]</div><div style='padding-top: 7px; font-size:13px;'><img src='https://nistp.ru/inc/images/icons/lock.gif' style='vertical-align: middle' width='16' height='16' border='0'> Подписано ЭП: ЩЕРБАКОВ ДМИТРИЙ АЛЕКСАНДРОВИЧ</div></td></tr></tbody></table><a name='lots_list' id='lot_list_anc'></a><table class='node_view ' id='table_lot_1'>
                                    <thead>
                                    <tr>
                                        <th colspan=2 class='table_header'>
                                            <a name='lot1'></a>
                                            <a name='lot360423'></a>
                                            Лот № 1</th></tr></thead><tbody><tr><td class='label'>Номер лота</td><td>1</td></tr><tr class='alw' ><td class='label'>Наименование имущества</td><td>Недвижимое имущество</td></tr><tr class='alw' ><td class='label'>Cведения об имуществе (предприятии) должника, выставляемом на торги, его составе, характеристиках, описание</td><td>Подвал (г. Орел, ул. Комсомольская, д. 235а, кадастровый №57:25:0020708:216, площадью 56,2кв.м.).</td></tr><tr><td class='label'>Является объектом недвижимости</td><td>Да</td></tr><tr><td class='label'>Начальная цена</td><td>562590.00</td></tr><tr><td class='label'>Шаг аукциона</td><td>56259.00</td></tr><tr><td class='label'>Размер задатка</td><td>56259.00</td></tr><tr class='alw'><td class='label'>Категории лота</td><td>Коммерческая недвижимость</td></tr><tr class='alw'><td class='label'>Статус торгов</td><td><span style='color:#f00;'>Торги объявлены</span></td></tr><tr class='alw'><td colspan=2 class='label'><button class='art-button' onclick='show_agent_contacts();'>Купить лот через агента</button></td></tr><tr><td colspan=2 class='label'>Протоколы отсутствуют</td></tr></tbody></table>
                                <table class='node_view'>
                                    <tr>
                                        <th colspan=2 class='table_header' style='text-align:left;'>Сведения об ЭП</th>
                                    </tr>
                                    <tr>
                                        <td colspan=2 class='label'><img src='https://nistp.ru/inc/images/icons/lock.gif' style='vertical-align: middle' width='16' height='16' border='0'>
                                            Подписано ЭП: ЩЕРБАКОВ ДМИТРИЙ АЛЕКСАНДРОВИЧ
                                        </td>
                                    </tr>
                                </table>

                                <table class='node_view collapse' id='print_forms'>
                                    <thead>
                                    <tr>
                                        <th onclick='table_shower("print_forms");' class='table_header'><span class='lot_header'>Извещения о торгах в печатной форме</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class='label'>
                                            <a href='https://nistp.ru/files/prints/41375/41375_539999306.doc' download='Извещение о торгах № 41375-ОАОФ от 30.03.2024 14:23:22.doc'>Извещение о торгах № 41375-ОАОФ от 30.03.2024 14:23:22</a>
                                            <div style='padding-top: 7px; font-size:11px;'>
                                                <img id='' src='https://nistp.ru/inc/images/icons/lock.gif' style='vertical-align: middle' width='16' height='16' border='0'>
                                                Подписано ЭП: ЩЕРБАКОВ ДМИТРИЙ АЛЕКСАНДРОВИЧ
                                            </div>
                                        </td>
                                    </tr></tbody></table>
                                <script>
                                    $(function(lot_header){
                                        $('section.lot_section').each(function(){
                                            lot_header='';
                                            lot_header=$(this).find('.lot_header').text();
                                            if (lot_header.indexOf('(Прием заявок)')==-1) {
                                                //$(this).find('div.content').hide();
                                            }
                                            else {
                                                $(this).find('.lot_header span').css('color','#090');
                                            }
                                        });
                                        $('section.lot_section').click(function(){
                                            //$(this).find('.content').show(400);
                                        });
                                    });
                                </script>
                                <script>
                                    table_com=$('#trade_comments');
                                    table_com_offset=table_com.offset();


                                    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent))
                                    {
                                        $('#agent_phone_link').attr('href','tel:88002004586');
                                    }
                                    else {
                                        $('#agent_phone_link').attr('href','#');
                                    }
                                </script>
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

</div><script src='https://nistp.ru/inc/js/base64.js'></script>	<style>
    .popup_container {
        position: fixed;
        height: 100%;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        display: none;
        z-index: 500;
    }

    .popup_overlay {
        position: fixed;
        z-index: 999;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: #000;
        opacity: 0.5;
        overflow: hidden;
    }

    .popup {
        display: inline-block;
        position: relative;
        z-index: 1000;
        margin: 0 auto;
        overflow: hidden;
        text-align: center;
    }
</style>

<div class='popup_container'>
    <div class='popup_overlay'>&nbsp;</div>
    <div class='popup' id='popup1'>
        <table class='cert_container'>
            <thead>
            <tr>
                <th>Выберите сертификат</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <select size='6' name='CertListBox' id='CertListBox'></select>
                </td>
            </tr>
            <tr>
                <td id='sign_buttons' style='text-align:left;'>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<script language='javascript' src='https://nistp.ru/inc/js/sign/cadesplugin_api.js'></script>

<script>
    function unhide_certlist() {
        $('#popup1').show();
        $('.popup_overlay').show();
        $('.popup_container').show();

        disableScrolling();
        max_height = $('.popup_container').height();
        top_popup = Math.round(($('.popup_container').height() - $('#popup1').height()) / 2) + 'px';

        max_width = $('.popup_container').width();
        left_popup = Math.round(($('.popup_container').width() - $('#popup1').width()) / 2) + 'px';

        $('#popup1').css({
            'top': top_popup,
            'left': left_popup
        });
    }

    function hide_certlist() {
        $('.popup_overlay, .popup').hide();
        $('.popup_container').hide();
        enableScrolling();
    }

    function disableScrolling() {
        var x = window.scrollX;
        var y = window.scrollY;
        window.onmousewheel = function(event) {
            event.preventDefault();
        };
        window.onscroll = function() {
            window.scrollTo(x, y);
        };
    }

    function enableScrolling() {
        window.onmousewheel = function() {};
        window.onscroll = function() {};
    }

    function check_async(){
        var canAsync = !!cadesplugin.CreateObjectAsync;
        if(canAsync)
        {
            return "async";
        }else
        {
            return "npapi";
        }
    }
    brows_type=check_async();

    var CADESCOM_CADES_BES = 1;
    var CAPICOM_CURRENT_USER_STORE = 2;
    var CAPICOM_MY_STORE = "My";
    var CAPICOM_STORE_OPEN_MAXIMUM_ALLOWED = 2;
    var CAPICOM_CERTIFICATE_FIND_SUBJECT_NAME = 1;
    var CADESCOM_BASE64_TO_BINARY = 1;
    var CAPICOM_CERTIFICATE_FIND_SHA1_HASH=0;

    if (brows_type=="async") {
        var fileref = document.createElement('script');
        fileref.setAttribute("type", "text/javascript");
        fileref.setAttribute("src", "https://nistp.ru/inc/js/sign/my_async.js");
        document.getElementsByTagName("head")[0].appendChild(fileref);
    }
    else if (brows_type=="npapi") {
        var fileref = document.createElement('script');
        fileref.setAttribute("type", "text/javascript");
        fileref.setAttribute("src", "https://nistp.ru/inc/js/sign/my_npapi.js");
        document.getElementsByTagName("head")[0].appendChild(fileref);
    }

    function show_cert_list(action) {
        sign_buttons_text="<input type='button' onclick='select_cert(\""+action+"\");' id='cert_sign_button' value='Выбрать сертификат' disabled><input type='button' onclick='close_certlist();' value='Отмена'>";
        $("td#sign_buttons").html(sign_buttons_text);

        FillCertList('CertListBox');
        unhide_certlist();
    }

    function close_certlist() {
        $("#cert_sign_button").prop("disabled",true);
        hide_certlist();
    }

    function select_cert(action) {
        var e = document.getElementById("CertListBox");
        var selectedCertID = e.selectedIndex;
        if (selectedCertID == -1) {
            alert("Выберите сертификат");
            return;
        }
        var thumbprint = e.options[selectedCertID].value.split(" ").reverse().join("").replace(/\s/g, "").toUpperCase();
        hide_certlist();



        if (action.indexOf("file_sign")!=-1) {
            fid = action.replace("file_sign_", "");
            sign_data_selector="#sign_data\\["+fid+"\\]";
            sign_data=$(sign_data_selector).val();
            create_sign(thumbprint,sign_data,true,action);
        }
        else if (action=="edo_file_op_sign") {
            sign_data_selector="#sign_data_upload";
            sign_data=$(sign_data_selector).val();
            create_sign(thumbprint,sign_data,true,action);
        }
        else if (action=="user_fill") {
            sign_data = Base64.encode("any_text");
            create_sign(thumbprint,sign_data,false,'user_fill');
        }
        else if (action=="prot_sign") {
            sign_data = $("#prot_base64").html();
            create_sign(thumbprint,sign_data,true,"prot_sign");
        }
        else if (action=="prot_mass_sign") {
            sign_data = Base64.encode($("#prot_mass_sign_text").val());
            create_sign(thumbprint,sign_data,true,"prot_mass_sign");
        }
        else if (action=="node_sign") {
            sign_data = Base64.encode($("#signed_text").val());
            create_sign(thumbprint,sign_data,true,'node_sign');
        }
        else if (action=="app_revoke_sign") {
            sign_data = Base64.encode($("#revoke_signed_text").val());
            create_sign(thumbprint,sign_data,true,'app_revoke_sign');
        }
        else if (action=="user_sign") {
            sign_data = Base64.encode($("#signed_text").html());
            create_sign(thumbprint,sign_data,true,'user_sign');
        }
        else if (action=="vote_sign") {
            sign_data = Base64.encode($("#total_vote_text").html());
            create_sign(thumbprint,sign_data,true,'vote_sign');
        }
        else if (action=="reg_list_sign") {
            sign_data = $("#reg_list_base64").html();
            create_sign(thumbprint,sign_data,true,'reg_list_sign');
        }
        else if (action=="protocol_sign") {
            sign_data = $("#protocol_base64").html();
            create_sign(thumbprint,sign_data,true,'protocol_sign');
        }
    }

    $("#CertListBox").change(function(){
        $("#cert_sign_button").removeAttr("disabled");
    });
</script>

<script>
    function show_form_notification(lot_nid) {
        var div_id="#lot_notification" + lot_nid;
        $(div_id).toggle(300);
    }

    function create_app_template(lot_nid) {
        formres=true;
        form_id="#form_app_template_" + lot_nid;
        price_id="#price_" + lot_nid;
        button_id="#button_app_template_" + lot_nid;
        $(price_id).each(function() {
            if (!($.isNumeric($(price_id).val()))) {
                $(price_id).css('box-shadow', 'inset 0 0 8px rgba(255,0,0,0.6)');
                $("<br><span class=error> В ценовом предложении допускаются только цифры и точка;</span>").insertAfter($(button_id));
                formres = false;
            } else {
                formres = true;
            }
        });


        if (formres==false) {
            return formres;
        }
        else {
            $(form_id).submit();
        }
    }
</script>

<script>
    function show_subscription_form(lot_nid) {
        subscription_outer_id="#subscription_outer_" + lot_nid;
        subscription_overlay_id="#subscription_overlay_" + lot_nid;
        subscription_inner_id="#subscription_inner_" + lot_nid;

        $(subscription_outer_id).show();
        $(subscription_overlay_id).show();
        $(subscription_inner_id).show();

//		$('#service').val(service_name);
//		if (service_price==\"custom\") {
//			text_sum=\"<b>Стоимость:</b> <input class='form_required pay_form' id='sum' name='sum' type='text' value='1' style='width:150px;'> руб.\";
//		}
//		else {
//			text_sum=\"<b>Стоимость:</b> <input class='form_required' id='sum' name='sum' type='hidden' value='\"+ service_price +\"'>\"+ service_price +\" руб.\";
//		}
//		$('#sum_print').html(text_sum);
//		$('#service_print').html(\"<b>Заказанная услуга:</b> \" + service_name);


        disableScrolling();
        max_height = $(subscription_outer_id).height();
        top_popup = Math.round(($(subscription_outer_id).height() - $(subscription_inner_id).height()) / 2) + "px";

        max_width = $(subscription_outer_id).width();
        left_popup = Math.round((($(subscription_outer_id).width() - $(subscription_inner_id).width()) / 2) + 150) + "px";

        $(subscription_inner_id).css({
            'top': top_popup,
            'left': left_popup
        });
    }


    $(".subscription_overlay").click(function() {
        $(".subscription_inner").hide();
        $(".subscription_outer").hide();
        enableScrolling();
    });


    function show_agent_contacts() {
        outer_id="#agent_outer";
        overlay_id="#agent_overlay";
        inner_id="#agent_inner";

        $(outer_id).show();
        $(overlay_id).show();
        $(inner_id).show();



        disableScrolling();
        max_height = $(outer_id).height();
        top_popup = Math.round(($(outer_id).height() - $(inner_id).height()) / 2) + "px";

        max_width = $(outer_id).width();
        left_popup = Math.round((($(outer_id).width() - $(inner_id).width()) / 2)) + "px";

        $(inner_id).css({
            'top': top_popup,
            'left': left_popup
        });
    }

    $(".agent_overlay").click(function() {
        $(".agent_inner").hide();
        $(".agent_outer").hide();
        enableScrolling();
    });
</script>


<style type="text/css">
    div.center {
        text-align: center;
    }

    .subscription_outer {
        position: fixed;
        height: 100%;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        display: none;
        z-index: 500;
    }

    .subscription_overlay {
        position: fixed;
        z-index: 999;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: #000;
        opacity: 0.5;
        overflow: hidden;
    }

    .subscription_inner {
        display: inline-block;
        position: relative;
        z-index: 1000;
        margin: 0 auto;
    //width: 660px;
    //top:220px;
        overflow: hidden;
        text-align: center;
        line-height:25px;
    }

    .subscription_inner .object {
        background-color: #eee;
        padding: 30px;
        border-radius: 30px;
        font-size: 16px;
        color: #43A6BE;
    }

    .subscription_inner .object a.art-button{
        font-weight:bold;
    }

    .subscription_inner li,
    .subscription_inner span.ul_label{
        line-height:25px;
    }





    .agent_outer {
        position: fixed;
        height: 100%;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        display: none;
        z-index: 500;
    }

    .agent_overlay {
        position: fixed;
        z-index: 999;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: #000;
        opacity: 0.5;
        overflow: hidden;
    }

    .agent_inner {
        display: inline-block;
        position: relative;
        z-index: 1000;
        margin: 0 auto;
    //width: 660px;
    //top:220px;
        overflow: hidden;
        text-align: center;
    }

    .agent_inner .object {
        background-color: #eee;
        padding: 15px 30px;
        border-radius: 30px;
        font-size: 16px;
        color: #43A6BE;
    }



    .pay_form {
        border: 1px solid #ccc;
        box-shadow: 0 0 8px 0 rgba(181, 181, 181, 0.91) inset;
        color: #4D4D4D;
        font-size: 16px;
        width: 100%;
        border-radius: 7px;
    }

    input.pay_form {
        height: 25px;
    }
</style>