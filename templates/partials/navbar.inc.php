<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 29/12/2015
 * Time: 18:16
 */
?>

<div class="user-region">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                        <i class="fa fa-home fa-lg"></i>Home
                    </a>
                </li>
                <!-- de inlog button en user print -->
                <li><?php global $user;
                    if ($user->uid != 0) {
                        /**
                         * Ingelogde user
                         */
                        print '<li class="first dropdown">' . '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'
                            . '<i class="fa fa-user fa-lg"></i>' . 'My account' . '<span class="caret"></span></a>' .
                            '<ul class="dropdown-menu">' .
                            '<li>' . '<a href="' . url('user/' . $user->uid) . '">' . t('My Chartage account') . '</a></li>' .
                            '<li>' . '<a href="' . url('user/' . $user->uid . '/edit') . '">' . '<i class="fa fa-pencil fa-fw"></i>' . t('Edit') . '</a></li>' .
                            '<li>' . '<a href="' . url('user/' . $user->uid . '/addresses') . '">' . '<i class="fa fa-truck fa-fw"></i>' . t('My addresses') . '</a>' . '</li>' .
                            '<li>' . '<a href="' . url('user/' . $user->uid . '/orders') . '">' . '<i class="fa fa-book fa-fw"></i>' . t('My orders') . '</a></li>' .
                            '<li>' . '<a href="' . url('user/logout') . '">' . '<i class="fa fa-sign-out fa-fw"></i>' . t('Logout') . '</a></li>' .
                            '</ul>' .
                            '</li>';
                        include 'dashboard.inc.php';
                        print '<li>' . '<a href="' . url('user/logout') . '">' . '<i class="fa fa-sign-out fa-lg"></i>' . t('Logout') . '</a>' . '</li>';

                    } else {
                        /**
                         * Niet ingelogd 'Login en registeer link worden getoond
                         */
                        print '<li class="first">
                        <a href="' . url('user') . '">' . t('Login') . '</a>
                        </li>';
                        print '<li>
                        <a href="' . url('user/register') . '">' . t('Register') . '</a>
                        </li>';
                    } ?>
                    <!-- link naar alle producten -->
                    <?php print '<li>' . '<a href=' . base_path() . 'all-products>' . '<i class="fa fa-circle-o fa-lg"></i>' . t('All products') . '</a></li>'; ?>

            </ul>
            <!-- cart icon met aantal items -->
            <?php include 'cart-icon-nav-right.inc.php'; ?>
        </div>
    </div>
</div>