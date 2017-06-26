<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <?php $title = 'Delivery';
    $this->load->view('Bloks/head_view'); ?>

	<!-- підключка віджета-->
	<link type="text/css" href="//deliverywiget.iiko.ru/v2_0/assets/css/style.css">
	<script type="text/javascript">
		window.restaurant = "06bca46b-65b9-11e5-80d2-d8d38565926f"
	</script>
	<script data-main="//deliverywiget.iiko.ru/v2_0/app/config" src="//deliverywiget.iiko.ru/v2_0/libs/require.js"></script>

</head>

</html>

<body>
    <div class="wrapper wrapper_sm">
        <header class="header">
            <?php $this->load->view('Bloks/header_view'); ?>
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