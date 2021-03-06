<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <?php $title = 'Checkout';
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
                            <li class="active">Замовлення</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <main class="check">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="check__title">ВАШЕ ЗАМОВЛЕННЯ</h1>
                    </div>
                </div>
            </div>
            <section class="check__top">
                <div class="container-fluid">
                    <div class="greybl">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 col-lg-3 greybl__piza">
                                <div class="greybl__item">
                                    <img src="../img/ch_1.png" class="greybl__img"></img>
                                    <h2 class="greybl__imgtitle">Капричоза</h2>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="count__wrap">
                                    <div class="greybl__count">
                                        <div class="count">
                                            <form>
                                                <div class="form-group">
                                                    <input id="num1" class="form-control number" type="number" min="1" value="1" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="greybl__price">149 грн</div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-3 greybl__dish">
                                <div class="btn-group mainbutt mainbutt_check" role="group" aria-label="...">
                                    <button id="show1" type="button" class="btn mainbutt__btn">ДОДАТКИ ДО СТРАВИ <span class="dish__sp"></span></button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-3">
                                <a class="greybl__link" href="#">видалити</a>
                            </div>
                        </div>
                    </div>
                    <!--   <div class="greybl greybl_sm">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 greybl__is">
                                <img src="../img/ch2.png" class="greybl__img"></img>
                                <h2 class="greybl__imgtitle">РУКОЛА</h2>
                                <div class="greybl__count">
                                    <div class="count">
                                        <form>
                                            <div class="form-group">
                                                <input id="num2" class="form-control number" type="number" min="1" value="1" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5 greybl__ib">
                                <img src="../img/ch3.png" class="greybl__img"></img>
                                <h2 class="greybl__imgtitle">САЛЯМИ ГОСТРА</h2>
                                <div class="greybl__count">
                                    <div class="count">
                                        <form>
                                            <div class="form-group">
                                                <input id="num3" class="form-control number" type="number" min="1" value="1" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="greybl__price">24 грн</div>
                            </div>
                        </div>
                    </div> -->
                    <div class="dodatok" id="dod">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/3_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Філе копченої курки</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                              <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/41_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Ковбаски з м’яса індички</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/92_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Рукола</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/91_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Томати чері</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="greybl">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 col-lg-3 greybl__piza">
                                <div class="greybl__item">
                                    <img src="../img/ch_1.png" class="greybl__img"></img>
                                    <h2 class="greybl__imgtitle">Капричоза</h2>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="count__wrap">
                                    <div class="greybl__count">
                                        <div class="count">
                                            <form>
                                                <div class="form-group">
                                                    <input id="num4" class="form-control number" type="number" min="1" value="1" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="greybl__price">149 грн</div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-3 greybl__dish">
                                <div class="btn-group mainbutt mainbutt_check mainbutt_check-noneimage" role="group" aria-label="...">
                                    <button id="show2" type="button" class="btn mainbutt__btn">ДОДАТКИ ДО СТРАВИ <span class="dish__sp"></span></button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-3">
                                <a class="greybl__link" href="#">видалити</a>
                            </div>
                        </div>
                    </div>
                     <div class="dodatok" id="dod1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/3_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Філе копченої курки</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                              <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/41_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Ковбаски з м’яса індички</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/92_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Рукола</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="ingr_bl">
                                        <div class="add_bl">
                                            <a href="#" class="plus_ingr js-btn-ingr-plus"></a>
                                        </div>
                                        <img src="../img/91_main.png" alt="">
                                    </div>
                                    <div class="ingr_txt">
                                        <p class="name_ingr">Томати чері</p>
                                        <p class="price_ingr">33.00 грн / 70 <span>г</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="check__title">НАШІ ГОСТІ ТАКОЖ ЗАМОВЛЯЮТЬ</h2>
                    </div>
                </div>
            </div>
            <section class="check__middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="plus__item">
                                <div class="plus-img__wrap">
                                    <img src="../img/del_1.png" alt="" class="plus__img img-responsive">
                                </div>
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <ul class="add add_s">
                                    <li class="add__i">шинка,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i add__i_margin">перець гострий,</li>
                                    <li class="add__i add__i_margin">томатна паста</li>
                                </ul>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn plus__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="plus__item">
                                <div class="plus-img__wrap">
                                    <img src="../img/del_1.png" alt="" class="plus__img img-responsive">
                                </div>
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <ul class="add add_s">
                                    <li class="add__i">шинка,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i add__i_margin">перець гострий,</li>
                                    <li class="add__i add__i_margin">томатна паста</li>
                                </ul>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn plus__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="plus__item">
                                <div class="plus-img__wrap">
                                    <img src="../img/del_1.png" alt="" class="plus__img img-responsive">
                                </div>
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <ul class="add add_s">
                                    <li class="add__i">шинка,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i add__i_margin">перець гострий,</li>
                                    <li class="add__i add__i_margin">томатна паста</li>
                                </ul>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn plus__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="plus__item">
                                <div class="plus-img__wrap">
                                    <img src="../img/del_1.png" alt="" class="plus__img img-responsive">
                                </div>
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <ul class="add add_s">
                                    <li class="add__i">шинка,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i">гриби печериці,</li>
                                    <li class="add__i add__i_margin">перець гострий,</li>
                                    <li class="add__i add__i_margin">томатна паста</li>
                                </ul>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn plus__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="check__bot">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="check__bot-title">Доставка</h2>
                        </div>
                        <div class="col-md-9">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#newclient" aria-controls="newclient" role="tab" data-toggle="tab">Я Новий Клієнт <i class="nav-tabs__icon fa fa-pencil"></i></a></li>
                                <li role="presentation"><a href="#client" aria-controls="client" role="tab" data-toggle="tab">Я Постійний Клієнт <i class="nav-tabs__icon fa fa-pencil"></i></a></li>
                                <li role="presentation"><a href="#sam" aria-controls="sam" role="tab" data-toggle="tab">Самовивіз <i class="nav-tabs__icon fa fa-pencil"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mainform">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="newclient">
                                <form class="form-horizontal" role="form" action="" method="post">
                                    <div class="form-group">
                                        <label for="home" class="col-sm-3 col-sm-offset-1 control-label mainform__control-label">Вулиця</label>
                                        <div class="col-sm-7">
                                            <input type="text" id="home" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hause" class="col-sm-3 col-sm-offset-1 control-label">Будинок</label>
                                        <div class="col-sm-3">
                                            <input type="number" id="hause" class="form-control mainform__input">
                                        </div>
                                        <label for="apartment" class="col-sm-1 control-label">Квартира</label>
                                        <div class="col-sm-3">
                                            <input type="number" id="apartment" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 col-sm-offset-1 control-label">Ім'я</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="name" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel" class="col-sm-3 col-sm-offset-1 control-label">Телефон</label>
                                        <div class="col-sm-3">
                                            <input type="tel" id="tel" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 col-sm-offset-4">
                                            <input type="submit" value="Замовити" id="date" class="form-control mainform__input mainform__input_sub">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="client">
                                <form class="form-horizontal" role="form" action="" method="post">
                                    <div class="form-group">
                                        <label for="tel" class="col-sm-3 col-sm-offset-1 control-label">Телефон</label>
                                        <div class="col-sm-3">
                                            <input type="tel" id="tel" class="form-control mainform__input">
                                        </div>
                                        <label for="password" class="col-sm-1 control-label">Пароль</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="password" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 col-sm-offset-4">
                                            <input type="submit" value="Замовити" id="date" class="form-control mainform__input mainform__input_sub">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="sam">
                                <form class="form-horizontal" role="form" action="" method="post">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 col-sm-offset-1 control-label">Ім'я</label>
                                        <div class="col-sm-3">
                                            <input type="text" id="name" class="form-control mainform__input">
                                        </div>
                                        <label for="tel" class="col-sm-1 control-label">Телефон</label>
                                        <div class="col-sm-3">
                                            <input type="tel" id="tel" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="time" class="col-sm-3 col-sm-offset-1 control-label">Виберіть час заїзду</label>
                                        <div class="col-sm-3">
                                            <input type="time" id="time" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="date" class="col-sm-3 col-sm-offset-1 control-label">Виберіть дату заїзду</label>
                                        <div class="col-sm-3">
                                            <input type="date" id="date" class="form-control mainform__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 col-sm-offset-4">
                                            <input type="submit" value="Замовити" id="date" class="form-control mainform__input mainform__input_sub">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /form -->
                </div>
    </div>
    </section>
    </main>
    </div>
    <?php $this->load->view('Bloks/footer_view'); ?>
</body>
