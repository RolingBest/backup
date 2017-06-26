<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Delivery</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/favicon.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- підключка віджета-->
	<link type="text/css" href="//deliverywiget.iiko.ru/v2_0/assets/css/style.css">
	<script type="text/javascript">
		window.restaurant = "06bca46b-65b9-11e5-80d2-d8d38565926f"
	</script>
	<script data-main="//deliverywiget.iiko.ru/v2_0/app/config" src="//deliverywiget.iiko.ru/v2_0/libs/require.js"></script>
	   
   <link rel="stylesheet" type="text/css" href="http://localhost/samogon/css/vendor.min.css" media="screen, projection, print">
    <link rel="stylesheet" type="text/css" href="http://localhost/samogon/css/main.min.css" media="screen, projection, print">
</head>

</html>

<body>
    <div class="wrapper wrapper_sm">
        <header class="header">
            <div class="header__top">
                <div class=" container-fluid">
                    <div class="row">
                        <div class="header__left col-xs-12 col-sm-12 col-md-2 col-lg-3">
                            <div class="logo"><img src="<?php echo base_url(); ?>img/logo.png" alt="" class="logo__img"></div>
                        </div>
                        <div class="header__right col-md-10 col-lg-9">
                            <ul class="topmenu">
                                <li class="topmenu__item topmenu__item_go"><a href="" class="topmenu__link">ДОСТАВКА І ОПЛАТА</a></li>
                                <li class="topmenu__item topmenu__item_numb"><a href="" class="topmenu__link ">+38 352 255 255</a></li>
                                <li class="topmenu__item topmenu__item_enter"><a href="" class="topmenu__link">УВІЙТИ</a></li>
                            </ul>
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
            <div class="header__bottom">
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="restore__link" href="#"><span class="restore__or">Усі</span> заклади</a>
                            <div class="restore__controls">
                                <a href="#" class="restore__btn_next restore__btn"><i class="fa fa-angle-right"></i></a>
                                <a href="#" class="restore__btn_prev restore__btn"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <ul class="restore owl-carousel owl-theme">
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/cov.png" alt="" class="restor__img"></a>
                                </li>
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/mln.png" alt="" class="restor__img"></a>
                                </li>
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/cov.png" alt="" class="restor__img"></a>
                                </li>
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/mln.png" alt="" class="restor__img"></a>
                                </li>
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/cov.png" alt="" class="restor__img"></a>
                                </li>
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/mln.png" alt="" class="restor__img"></a>
                                </li>
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/cov.png" alt="" class="restor__img"></a>
                                </li>
                                <li class="restore__i">
                                    <a href="#"><img src="<?php echo base_url(); ?>img/mln.png" alt="" class="restor__img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="bredwrap bredwrap_del">
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Головна</a></li>
                            <li><a href="mlyn">Cтарий млин</a></li>
                            <li class="active">Доставка</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <main class="delivery">
            <div class="container-fluid">
                <div class="delivery__menu" id="menu1">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>img/del_s.png" alt="" class="delivery__img">
                            <h1 class="delivery__title delivery__title_top">МЕНЮ ШВИДКОЇ ДОСТАВКИ</h1>
                        </div>
                        <div class="col-md-12">
                            <ul class="bottom-menu bottom-menu_del">
                                <li class="bottom-menu__item">
                                    <a href="" class="bottom-menu__link">ПІЦА</a>
                                </li>
                                <li class="bottom-menu__item">
                                    <a href="" class="bottom-menu__link">САЛАТИ</a>
                                </li>
                                <li class="bottom-menu__item">
                                    <a href="" class="bottom-menu__link">ЗАКУСКИ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="delivery__top">
                    <div class="row">
						<div id='jstore-css'>
							<!--<div id="lsp-block-cart" class="lsp-block-cart"></div>-->
							<div id="lsp-block-content" class="lsp-block-content jstore-block"></div>
						</div>
                    </div>
                </section>
                <section class="delivery__mid">
                    <div class="delivery__menu" id="menu2">
                       
                    </div>
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        
                    </div>
                </section>
                <section class="delivery__bot">
                    <div class="row">
                        
                    </div>
                </section>
            </div>
        </main>
    </div>
	<?php $this->load->view('Bloks/footer_view'); ?>
</body>
</html>