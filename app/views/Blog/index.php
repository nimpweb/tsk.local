<h1>Блог</h1>
<?php if (isset($posts)): ?>
    <div class="article-related-posts">
        <div class="container">
            <div class="crp_related">
                <div class="block-title">Все посты</div>
                <div class="crp_related_list">
                    <?php foreach ($posts as $post): ?>
                        <div class="crp_related_list_item">
                            <a href="https://in-scale.ru/blog/pochemu-lyudi-pokupayut">
                                <img src="https://in-scale.ru/wp-content/uploads/2016/01/kak-zastavit-klienta-kupit-u-vas.jpg"
                                     alt="Почему люди покупают: 6 смертельных причин"
                                     title="Почему люди покупают: 6 смертельных причин" width="615" height="615"
                                     class="crp_thumb crp_featured">
                                <span class="crp_title"><?=$post['title']?></span>
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
<?php elseif (isset($post)): ?>
    <div class="page-content single-article" itemscope itemtype="http://schema.org/Article">
        <meta itemprop="dateModified" content="2020-05-29">
        <meta itemscope="" itemprop="mainEntityOfPage" itemtype="http://schema.org/WebPage" itemid="https://in-scale.ru/blog/magazin-v-yandeks-market" content="Магазин в Яндекс.Маркет: как он поможет Вашему бизнесу">
        <!-- publisher -->
        <div itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
            <meta itemprop="address" content="Иркутск">
            <meta itemprop="telephone" content="8 800 100 1355">
            <div itemprop="logo" itemscope="" itemtype="http://schema.org/ImageObject">
                <img itemprop="url image" src="//in-scale.ru/wp-content/themes/inscale/img/logo.png" style="display:none;">
                <meta itemprop="width" content="107">
                <meta itemprop="height" content="56">
            </div>
            <meta itemprop="name" content="In-Scale">
        </div>
        <div class="article-content-wrapper">
            <div class="container">
                <div class="article-content" itemprop="articleBody">
                    <div class="article-header">
                        <div class="topper-info">
                            <h1 class="articles-list-item_title" itemprop="headline"><?=$post['title']?></h1>
                        </div>
                    </div>
                    <?= $post['content']; ?>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
<p class="text-center">Данные не найдены</p>
<?php endif; ?>
