<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <?php $title = 'Cabinet';
    $this->load->view('Bloks/head_view'); ?>
</head>

</html>

<body>
    <div class="wrapper wrapper_sm">
        <header class="header">
            <?php  $this->load->view('Bloks/header_view'); ?>
        </header>
        <section class="bredwrap bredwrap_del">
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Головна</a></li>
                            <li><a href="#">Cтарий млин</a></li>
                            <li class="active">Кабінет</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <main class="cabinet">
            <section class="proces">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="cabinet__title text-left">Ваше замовлення</h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid how-to">
                    <div class="row">
                        <div class="col-md-9 col-md-offset-2">
                            <div class="col-sm-4 col-md-4 how-to__item">
                                <div class="how-to__wrap">
                                </div>
                                <p class="how-to__txt">ПРИЙНЯТЕ</p>
                                <div class="circle">
                                    <span class="how-to__num"> 1</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 how-to__item how-to__item_b">
                                <div class="how-to__wrap">
                                </div>
                                <p class="how-to__txt">ГОТУЄТЬСЯ З ЛЮБОВЮ</p>
                                <div class="circle">
                                    <span class="how-to__num"> 1</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 how-to__item how-to__item_m">
                                <div class="how-to__wrap">
                                </div>
                                <p class="how-to__txt">ОЧІКУЙТЕ ДОСТАВКУ</p>
                                <div class="circle">
                                    <span class="how-to__num"> 1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="lovest">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="cabinet__title text-left">УЛЮБЛЕНІ ЗАВОВЛЕННЯ</h2>
                            <p class="lovest__txt text-left">ІСТОРІЯ ЗАМОВЛЕНЬ</p>
                        </div>
                        <div class="col-md-10 col-md-offset-2 times">
                            <time class="lovest__time">26/01/12</time>
                        </div>
                    </div>
                </div>
                <div class="container-fluid lovest__bottom">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <div class="greybl greybl_cab">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 greybl__piza">
                                        <div class="greybl__item">
                                            <img src="../img/cab_1.png" class="greybl__img"></img>
                                            <h2 class="greybl__imgtitle">Капричоза</h2>
                                        </div>
                                        <div class="greybl__item">
                                            <img src="../img/cab_1.png" class="greybl__img"></img>
                                            <h2 class="greybl__imgtitle">Українська</h2>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-6 col-lg-offset-1 greybl__adr">
                                        <address class="greybl__address">КРУШЕЛЬНИЦЬКАКОЇ 51/39</address>
                                        <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                            <button type="button" class="btn mainbutt__btn plus__btn">Замовити повторно<span class="dish__sp"></span></button>
                                            <ul class="mainbutt__list">
                                                <!-- <li class="mainbutt__i">450 г. /</li> -->
                                                <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                            </ul>
                                        </div>
                                        <a class="greybl__link" href="#">видалити</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2 times">
                            <time class="lovest__time">26/01/12</time>
                        </div>
                    </div>
                </div>
                <div class="container-fluid lovest__bottom _items">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <div class="greybl greybl_cab greybl_items">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-5 greybl__piza">
                                        <div class="greybl__item">
                                            <img src="../img/cab_1.png" class="greybl__img"></img>
                                            <h2 class="greybl__imgtitle">Капричоза</h2>
                                        </div>
                                        <div class="greybl__item">
                                            <img src="../img/cab_1.png" class="greybl__img"></img>
                                            <h2 class="greybl__imgtitle">Українська</h2>
                                        </div>
                                        <div class="greybl__item">
                                            <img src="../img/cab_1.png" class="greybl__img"></img>
                                            <h2 class="greybl__imgtitle">Капричоза</h2>
                                        </div>
                                        <div class="greybl__item">
                                            <img src="../img/cab_1.png" class="greybl__img"></img>
                                            <h2 class="greybl__imgtitle">Українська</h2>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 col-lg-offset-1 greybl__adr">
                                        <address class="greybl__address">КРУШЕЛЬНИЦЬКАКОЇ 51/39</address>
                                        <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                            <button type="button" class="btn mainbutt__btn plus__btn">Замовити повторно<span class="dish__sp"></span></button>
                                            <ul class="mainbutt__list">
                                                <!-- <li class="mainbutt__i">450 г. /</li> -->
                                                <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                            </ul>
                                        </div>
                                        <a class="greybl__link" href="#">видалити</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="adrdel">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <h2 class="cabinet__title text-left">АНДРЕСИ ДОСТАВКИ</h2>
                        </div>
                        <div class="col-md-11 col-md-offset-1">
                            <div class="greybl greybl_cab">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="circle circle_sm">
                                            <span class="how-to__num"> 1</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <p>вул. Крушельницької будинок 57 квартира / офіс 71 поверх 9 підїзд 1</p>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="tel">
                                            <li class="tel__item">097 351 09 55</li>
                                            <li class="tel__item"> <a class="greybl__link" href="#">видалити</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11 col-md-offset-1">
                            <div class="greybl greybl_cab">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="circle circle_sm">
                                            <span class="how-to__num"> 1</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <!-- <ul class="adrdel__list">
                                            <li class="adrdel__item">вул. Крушельницької</li>
                                            <li class="adrdel__item">будинок 57</li>
                                            <li class="adrdel__item">квартира / офіс</li>
                                            <li class="adrdel__item">71</li>
                                            <li class="adrdel__item">поверх 9 </li>
                                            <li class="adrdel__item">підїзд 1</li>
                                        </ul> -->
                                        <p>вул. Крушельницької будинок 57 квартира / офіс 71 поверх 9 підїзд 1</p>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="tel">
                                            <li class="tel__item">097 351 09 55</li>
                                            <li class="tel__item"> <a class="greybl__link" href="#">видалити</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11 col-md-offset-1">
                            <div class="btn-group mainbutt mainbutt_check mainbutt_check-noneimage" role="group" aria-label="...">
                                <button type="button" class="btn mainbutt__btn">ДОДАТИ АДРЕС ДОСТАВКИ<span class="dish__sp"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="owndata">
                        <div class="row">
                            <div class="col-md-2">
                                <h2 class="cabinet__title text-left">ОСОБИСТІ ДАНІ</h2>
                            </div>
                            <div class="col-md-9 col-md-offset-1">
                                <div class="mainform">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="col-md-1">
                                                <div class="mainform__txt">
                                                    Ім'я
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="icon-addon addon-lg">
                                                    <input type="text" placeholder="" class="form-control mainform__input" id="client">
                                                    <label for="client" class="fa fa-pencil" rel="tooltip" title="Ім'я"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="mainform__txt">
                                                    Телефон
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="icon-addon addon-lg">
                                                    <input type="phone" placeholder="" class="form-control mainform__input" id="phone">
                                                    <label for="phone" class="fa fa-pencil" rel="tooltip" title="Телефон"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-md-offset-1">
                                                <div class="icon-addon addon-lg">
                                                    <input type="reset" placeholder="" class="form-control mainform__input mainform__input_sub" id="client">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php $this->load->view('Bloks/footer_view'); ?>
</body>
