<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['jquery', 'uikit', 'uikit-sticky']) ?>
    </head>
    <body>

        <!-- Render menu position -->
        <div class="tm-navbar" data-uk-sticky='{"media":767,"showup":true,"animation":"uk-animation-slide-top"}'>
            <nav class="uk-navbar">
                <!-- Render logo or title with site URL -->
                <a class="uk-navbar-brand" href="<?= $view->url()->get() ?>">
                    <?php if ($logo = $params['logo']): ?>
                        <img src="<?= $this->escape($logo) ?>" alt="">
                    <?php else: ?>
                        <?= $params['title'] ?>
                    <?php endif ?>
                </a>
                <?php if ($view->menu()->exists('main')): ?>
                    <?= $view->menu('main', 'menu/navbar.php') ?>
                <?php endif ?>
            </nav>
        </div>

        <div class="uk-block">
            <!-- Render widget position -->
            <?php if ($view->position()->exists('sidebar')): ?>
                <?= $view->position('sidebar') ?>
            <?php endif; ?>

            <!-- Render content -->
            <div class="uk-container uk-container-center">
                <?= $view->render('content') ?>
            </div

            <!-- Insert code before the closing body tag  -->
            <?= $view->render('footer') ?>
        </div>

        <footer class="footer">
            <div class="uk-margin-left uk-margin-right">
                <div class="uk-flex uk-flex-middle uk-flex-space-between uk-flex-wrap" data-uk-grid-margin="">
                    <div class="uk-row-first">
                        <?php if ($logo = $params['logo']) : ?>
                            <img src="<?= $this->escape($logo) ?>" alt="">
                        <?php else : ?>
                            <?= $params['title'] ?>
                        <?php endif ?>
                    </div>
                    <div class="uk-text-right uk-text-left-small">
                        <?= $view->menu('footer', 'menu/footer.php') ?>

                        <p class="uk-margin-bottom-remove uk-margin-small-top">Made by <a href="http://thuan.website">John Nguyen</a>.</p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
