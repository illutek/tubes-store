<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/12/2015
 * Time: 14:15
 */
?>
<!-- User region -->
<?php include 'partials/navbar.inc.php'; ?>
<div class="container">
    <!-- Header region -->
    <?php include 'partials/header.inc.php'; ?>
    <section class="col-md-12 section-wrap">
        <div class="row">
            <?php if ($page['sidebar_first']): ?>
                <aside class="<?php print $sidebarfirst; ?>">
                    <?php print render($page['sidebar_first']); ?>
                </aside>
            <?php endif; ?>
            <main class="<?php print $contentlayout; ?>">
                <div class="row">
                    <?php if ($page['news']): ?>
                        <div class="col-md-12 news">
                            <?php print render($page['news']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="col-md-12 content-wrap">
                        <?php print render($title_prefix); ?>

                        <?php if ($title): ?>
                            <h1 class="title" id="page-title">
                                <?php print $title; ?>
                            </h1>
                        <?php endif; ?>

                        <?php print render($title_suffix); ?>

                        <?php if ($tabs): ?>
                            <div class="tabs">
                                <?php print render($tabs); ?>
                            </div>
                        <?php endif; ?>
                        <?php print $messages; ?>
                        <?php print render($page['help']); ?>

                        <?php if ($action_links): ?>
                            <ul class="action-links">
                                <?php print render($action_links); ?>
                            </ul>
                        <?php endif; ?>

                        <?php print render($page['content']); ?>
                    </div>
                </div>
            </main>
        </div>
    </section>
    <!-- Most watched articles region -->
    <?php if ($page['watched']): ?>
        <section class="col-md-12 section-wrap">
            <?php print render($page['watched']); ?>
        </section>
    <?php endif; ?>
</div>
<!-- Footer region-->
<?php include 'partials/footer.inc.php'; ?>

<a href="#0" class="cd-top">Top</a>