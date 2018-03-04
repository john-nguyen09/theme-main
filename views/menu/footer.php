<?php if ($root->getDepth() === 0) : ?>
    <ul class="uk-subnav uk-margin-bottom-remove">

    <?php foreach ($root->getChildren() as $node) : ?>
        <?php
        $classes = [];
        if ($node->get('active')) {
            $classes[] = 'uk-active';
        }
        ?>
        <li class="<?= implode(' ', $classes) ?>">
            <a href="<?= $node->getUrl() ?>"><?= $node->title ?></a>
        </li>
    <?php endforeach ?>

    </ul>
<?php endif ?>