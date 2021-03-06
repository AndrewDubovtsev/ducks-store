<?php

$products = \App\DB\Products::getAll($connection);
include_once __DIR__ . '/templates/_header.php';
include_once __DIR__ . '/templates/_top_menu.php';

?>
<section>
<div class="container">
	<div class="row clearfix">
	    <!-- боковое меню -->
        <?php include_once 'templates/_menu.php'; ?>
		<div class="column column9">
			<div class="catalog">
				<!-- хлебные крошки -->
				<div class="breadcrumbs">
					<a href="<?=\App\Utilities\Options::URL ?>/">Магазин</a>
					<p>Мини-утки</p>
				</div>
				<div class="row clearfix">
					<!-- элементы каталога -->
				<?php
                if (!empty($products)) {
                        include_once __DIR__ . '/templates/_pagination.php';
                } else {
                    echo "<h2>Список товаров пуст</h2>";
                    if (!isset($_SESSION['user_id'])) {
                        echo "<a href=".\App\Utilities\Options::URL."/add class='add-item adm-btn'>Добавить товар</a>";
                    }
                }
                ?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php
include_once __DIR__ . '/templates/_footer.php';
