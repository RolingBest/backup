<!DOCTYPE html>
<html lang="ru-RU">
<head>
<?php 
	$title = 'Contacts';
?>
   <?php $this->load->view('Bloks/head_view'); ?>
</head>
</html>

<body>
    <div class="wrapper wrapper_sm">
        <header class="header header_contacts">
            <?php $this->load->view('Bloks/header_mlyn_view'); ?>
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
