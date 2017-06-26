<!DOCTYPE html>
<html lang="ru-RU">
<?php 
	$title = 'Contacts';
?>
   <?php $this->load->view('Bloks/head_view'); ?>

</html>

<body>
    <div class="wrapper wrapper_sm">
        <header class="header header_contacts">
            <div class="header__top">
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-lg-3 mlyn__column">
                            <ul class="brownlist">
                                <li class="brownlist__item brownlist__item_active">
                                    <a href="contacts" class="brownlist__link">Контакти</a>
                                </li>
                                <li class="brownlist__item">
                                    <a href="#myres" class="brownlist__link">Заклад</a>
                                </li>
                                <li class="brownlist__item">
                                    <a href="#video" class="brownlist__link">3D</a>
                                </li>
                                <li class="brownlist__item">
                                    <a href="menu" class="brownlist__link">Меню</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__left col-xs-12 col-sm-12 col-md-12 col-lg-3 col-lg-offset-1">
                            <div class="logo"><img src="<?php echo base_url(); ?>img/logo_mln.png" alt="" class="logo__img img-responsive"></div>
                        </div>
                        <div class="header__right col-md-12 col-lg-5">
                            <div class="col-md-7 col-lg-7">
                                <ul class="topmenu">
                                    <li class="topmenu__item topmenu__item_numb"><a href="" class="topmenu__link ">+38 352 255 255</a></li>
                                    <li class="topmenu__item topmenu__item_enter"><a href="" class="topmenu__link">УВІЙТИ</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-lg-5">
                                <div class="basket">
                                    <div class="basket__box">
                                        <img src="<?php echo base_url(); ?>img/bag.png" alt="" class="basket__img">
                                        <div class="basket__circle">
                                            <span class="basket__num">9</span>
                                        </div>
                                    </div>
                                    <div class="basket__text">
                                        <p>Ваша корзина <span class="basket__price">3987 грн.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="bredwrap bredwrap_del bredwrap_mlyn">
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Головна</a></li>
                            <li class="active"><a href="#">Cтарий млин</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <main class="oldmlyn">
            <section class="oldmlyn__top">
                <div class="map">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="map-wrap">
                                    <div class="overlay-map" onclick="style.pointerEvents='none'"></div>
                                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=10s56-llEJFjS_mmXD0fkpW91Kuk" width="100%" height="480"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="oldmlyn__bottom">
                <div class="bars">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bars__item">
                                    <a href="#" class="bars__link"><img src="<?php echo base_url(); ?>img/logo_mln.png" alt="Старий млин" class="bars__img img-responsive"></a>
                                    <ul class="bars__list">
                                        <li class="bars__il">
                                            <span class="bars__span">Адреса</span> м.Тернопіль вул.
                                            <br> Живова 51
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Бронювання столиків</span> +38 067 777 77 77
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Доставка страв</span> +38 067 777 77 77
                                        </li>
                                    </ul>
                                    <a href="" class="bars__btn">На карті</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bars__item">
                                    <a href="#" class="bars__link"><img src="<?php echo base_url(); ?>img/сflam.png" alt="Старий млин" class="bars__img img-responsive"></a>
                                    <ul class="bars__list">
                                        <li class="bars__il">
                                            <span class="bars__span">Адреса</span> м.Тернопіль вул.
                                            <br> Живова 51
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Бронювання столиків</span> +38 067 777 77 77
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Доставка страв</span> +38 067 777 77 77
                                        </li>
                                    </ul>
                                    <a href="" class="bars__btn">На карті</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bars__item">
                                    <a href="#" class="bars__link"><img src="<?php echo base_url(); ?>img/ccov.png" alt="Старий млин" class="bars__img img-responsive"></a>
                                    <ul class="bars__list">
                                        <li class="bars__il">
                                            <span class="bars__span">Адреса</span> м.Тернопіль вул.
                                            <br> Живова 51
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Бронювання столиків</span> +38 067 777 77 77
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Доставка страв</span> +38 067 777 77 77
                                        </li>
                                    </ul>
                                    <a href="" class="bars__btn">На карті</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bars__item">
                                    <a href="#" class="bars__link"><img src="<?php echo base_url(); ?>img/ccalam.png" alt="Старий млин" class="bars__img img-responsive"></a>
                                    <ul class="bars__list">
                                        <li class="bars__il">
                                            <span class="bars__span">Адреса</span> м.Тернопіль вул.
                                            <br> Живова 51
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Бронювання столиків</span> +38 067 777 77 77
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Доставка страв</span> +38 067 777 77 77
                                        </li>
                                    </ul>
                                    <a href="" class="bars__btn">На карті</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bars__item">
                                    <a href="#" class="bars__link"><img src="<?php echo base_url(); ?>img/ccov.png" alt="Старий млин" class="bars__img img-responsive"></a>
                                    <ul class="bars__list">
                                        <li class="bars__il">
                                            <span class="bars__span">Адреса</span> м.Тернопіль вул.
                                            <br> Живова 51
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Бронювання столиків</span> +38 067 777 77 77
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Доставка страв</span> +38 067 777 77 77
                                        </li>
                                    </ul>
                                    <a href="" class="bars__btn">На карті</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bars__item">
                                    <a href="#" class="bars__link"><img src="<?php echo base_url(); ?>img/cshop.png" alt="Старий млин" class="bars__img img-responsive"></a>
                                    <ul class="bars__list">
                                        <li class="bars__il">
                                            <span class="bars__span">Адреса</span> м.Тернопіль вул.
                                            <br> Живова 51
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Бронювання столиків</span> +38 067 777 77 77
                                        </li>
                                        <li class="bars__il">
                                            <span class="bars__span">Доставка страв</span> +38 067 777 77 77
                                        </li>
                                    </ul>
                                    <a href="" class="bars__btn">На карті</a>
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
