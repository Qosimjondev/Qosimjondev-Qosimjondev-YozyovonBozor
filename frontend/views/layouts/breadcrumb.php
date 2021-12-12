<?php
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Url;
?>
<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1><?=$this->title?></h1>
                    <?= Breadcrumbs::widget([
                        'tag' => 'ol',
                        'navOptions' => ['aria-label' => 'breadcrumb', 'class' => 'banner-breadcrumb'],
                        'options' => [
                            'class' => 'breadcrumb',
                        ],
                        'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
                        'homeLink' => [
                            'label' => 'Bosh sahifa',
                            'url' => Url::to(['/']),
                            'encode' => false,
                            'class' => 'breadcrumb-item'
                        ],
                        'links' => $this->params['breadcrumbs'] ?? []
                    ]) ?>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area  ================= -->
