<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 18/02/2016
 * Time: 22:42
 */
if (in_array('editor', array_values($user->roles))) { ?>
    <li>
        <a href="<?php print base_path() ?>admin/dashboard">Dashboard</a>
    </li>
    <li>
        <a href="<?php print base_path() ?>node/add/product">Add product</a>
    </li>
<?php } ?>