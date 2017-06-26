<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <?php $title = 'Item';
    $this->load->view('Bloks/head_view'); ?>
</head>

</html>

<body>
    <div class="wrapper wrapper_sm">
        <header class="header">
            <?php $this->load->view('Bloks/header_view'); ?>
        </header>
        <main class="main">
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bredwrap">
                            <ol class="breadcrumb">
                                <li><a href="#">Головна</a></li>
                                <li><a href="#">Cтарий млин</a></li>
                                <li class="active">Капричоза</li>
                            </ol>
                        </div>
                    </div>
                    <div class="main__l col-md-4">
                        <div class="preview">
                            <div id="carousel-bounding-box">
                                <div class="carousel slide carousel-fade" id="myCarousel" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="../img/pp.png" alt="" class="preview__img img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="1">
                                            <img src="../img/del_1.png" alt="" class="preview__img img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="slider-thumbs">
                                <a id="carousel-selector-0" class="preview__block1">
                                    <img src="../img/smallpiz.png" alt="">
                                </a>
                                <a id="carousel-selector-1" class="preview__block2">
                                    <img src="../img/cab_1.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main__r col-md-7 col-md-offset-1">
                        <div class="dish">
                            <h1 class="main__title">КАПРИЧОЗА</h1>
                            <ul class="add">
                                <li class="add__i">шинка,</li>
                                <li class="add__i">гриби печериці,</li>
                                <li class="add__i">перець гострий,</li>
                            </ul>
                            <div class="dish__txt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt vero odit odio aliquid illo suscipit. Voluptate magni odio amet autem, quia dolore nostrum iste, est distinctio. Illum, ipsum laudantium!</p>
                            </div>
                            <div class="btn-group mainbutt" role="group" aria-label="...">
                                <button type="button" class="btn mainbutt__btn">Замовити <span class="dish__sp"></span></button>
                                <ul class="mainbutt__list">
                                    <li class="mainbutt__i">450 г. /</li>
                                    <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="plus">
                            <div class="row">
                                <div class="col-md-12 plus__title">
                                    <h2 class="main__title">Додатки до піци:</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="plsslider owl-carousel owl-theme">
                                    <div class="plus__item">
                                        <img src="../img/piz1.png" alt="" class="plus__img img-responsive">
                                        <h2 class="plus__smtitle">Капричоза</h2>
                                        <div class="plus__txt">
                                            <p>шинка, гриби печериці, перець гострий, томатна паста</p>
                                        </div>
                                        <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                            <button type="button" class="btn mainbutt__btn plus__btn">Замовити <span class="dish__sp"></span></button>
                                            <ul class="mainbutt__list">
                                                <li class="mainbutt__i">450 г. /</li>
                                                <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="plus__item">
                                        <img src="../img/piz2.png" alt="" class="plus__img img-responsive">
                                        <h2 class="plus__smtitle">Капричоза</h2>
                                        <div class="plus__txt">
                                            <p>шинка, гриби печериці, перець гострий, томатна паста</p>
                                        </div>
                                        <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                            <button type="button" class="btn mainbutt__btn plus__btn">Замовити <span class="dish__sp"></span></button>
                                            <ul class="mainbutt__list">
                                                <li class="mainbutt__i">450 г. /</li>
                                                <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="plus__item">
                                        <img src="../img/piz1.png" alt="" class="plus__img img-responsive">
                                        <h2 class="plus__smtitle">Капричоза</h2>
                                        <div class="plus__txt">
                                            <p>шинка, гриби печериці, перець гострий, томатна паста</p>
                                        </div>
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
                            <div class="controls">
                                <a href="#" class="controls__link controls__btn_prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a href="#" class="controls__link controls__btn_next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <div class="plus plus_dod">
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-md-12 plus__title">
                        <h2 class="main__title text-center">Смакує з:</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="secslider owl-carousel owl-theme">
                            <div class="plus__item">
                                <img src="../img/piz1.png" alt="" class="plus__img img-responsive">
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <div class="plus__txt">
                                    <p>шинка, гриби печериці, перець гострий, томатна паста</p>
                                </div>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="plus__item">
                                <img src="../img/piz2.png" alt="" class="plus__img img-responsive">
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <div class="plus__txt">
                                    <p>шинка, гриби печериці, перець гострий, томатна паста</p>
                                </div>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="plus__item">
                                <img src="../img/piz1.png" alt="" class="plus__img img-responsive">
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <div class="plus__txt">
                                    <p>шинка, гриби печериці, перець гострий, томатна паста</p>
                                </div>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="plus__item">
                                <img src="../img/piz1.png" alt="" class="plus__img img-responsive">
                                <h2 class="plus__smtitle">Капричоза</h2>
                                <div class="plus__txt">
                                    <p>шинка, гриби печериці, перець гострий, томатна паста</p>
                                </div>
                                <div class="btn-group mainbutt mainbutt_sm" role="group" aria-label="...">
                                    <button type="button" class="btn mainbutt__btn">Замовити <span class="dish__sp"></span></button>
                                    <ul class="mainbutt__list">
                                        <li class="mainbutt__i">450 г. /</li>
                                        <li class="mainbutt__i"><span class="price"> 54</span> грн.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="controls">
                <a href="#" class="controls__link secslider__btn_prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#" class="controls__link secslider__btn_next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        </div>
        <?php $this->load->view('Bloks/footer_view'); ?>
</body>
