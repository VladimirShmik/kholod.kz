<?php
/**
 * Template Name: Главная
 */
?>

<?php get_header(); ?>

<main class="main">
    <!--slider-section-->
    <div class="container-fluid">
        <div class="slider-container">
            <?php echo do_shortcode('[slide-anything id="6"]'); ?>
        </div>
    </div>
    <!--product-section-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-wrapper">
                    <h2 class="product-wrapper__title">
                        Наша продукция
                    </h2>
                    <div class="product-grid">
                        <?php $terms = get_terms(array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            'exclude' => '15',
                            'depth' => 1,
                            'number' => 8,
                            'parent' => 0,
                        )); ?>
                        <?php if ($terms) : ?><?php foreach ($terms as $term) : ?>
                            <a href="<?php echo get_term_link($term->term_id); ?>" class="product-item">
                                <div class="product-img">
                                    <?php woocommerce_subcategory_thumbnail($term); ?>
                                </div>
                                <div class="product-title">
                                    <h3 class="product-title__title"><?php echo $term->name; ?></h3>
                                </div>
                            </a>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <a href="catalog/" class="button-more mt-4">Вся продукция</a>
                </div>
            </div>
        </div>
    </div>
    <!--about-company-section-->
    <div class="container-fluid">
        <div class="about-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-grid">
                            <div class="about-img">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/bg-about.jpg" alt="" class="about-img__img">
                            </div>
                            <div class="about-wrapper">
                                <h2 class="product-wrapper__title">
                                    О компании
                                </h2>
                                <div class="about-block">
                                    <p class="about-block__text">Мы предлагаем вам комплекс работ, товаров и услуг по
                                        оснащению объектов торговли и производства:
                                    </p>
                                    <p class="about-block__text">
                                        - поставка и обслуживание торгового холодильного оборудования (витрины,
                                        холодильные шкафы, морозильные лари, бонеты, кондитерские витрины) лучших
                                        производителей;
                                    </p>
                                    <p class="about-block__text">
                                        - поставка холодильных камер ЛЮБОГО размера для ЛЮБОЙ продукции (от капризных
                                        цветов до натуральных шуб) с установкой как на улице, так и в помещении под
                                        ключ;
                                    </p>
                                    <p class="about-block__text about-block__text--bold">
                                        - поставка материалов для монтажа и обслуживания действующего и нового
                                        оборудования (агрегаты холодильных камер, шоковой заморозки, чиллеры,
                                        центральное холодоснабжение, комплектующие холодильного оборудования: фреон,
                                        медные трубы, фитинги, компрессоры, конденсаторы, испарители и многое другое);
                                    </p>
                                    <p class="about-block__text about-block__text--bold">
                                        - проектировка, подбор оборудования, монтажные и пуско-наладочные работы;
                                    </p>
                                    <p class="about-block__text about-block__text--bold">
                                        - послегарантийное обслуживание оборудования;
                                    </p>
                                    <a href="about/" class="button-more button-more--about">Подробнее</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="company-slider">
                    <?php echo do_shortcode('[slide-anything id="219"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <section class="section-form">
        <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-grid">
                            <div class="form-wrapper">
                                <?php echo do_shortcode('[contact-form-7 id="f9cc2b6" title="Форма обратной связи"]'); ?>
                            </div>
                            <div class="form-block">
                                <h2 class="product-wrapper__title">
                                    Остались вопросы?
                                </h2>
                                <p class="form-block__subtitle">Свяжитесь с нами с помощью формы обратной связи, или по телефонам:</p>
                                <a href="tel:77015353849" class="form-block__link">+7 701 535-38-49</a>
                                <a href="tel:77781180764" class="form-block__link">+7 778 118-07-64</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>



