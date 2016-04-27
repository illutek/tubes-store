<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 23/01/2016
 * Time: 20:29
 */

$value = field_get_items('node', $node, 'field_set');
$textSet = t("Matching Jewelry");
/**
 * controle of er een set bestaat
 */
if ($value):
    $contentSet = $content['field_set']['#items'][0]['taxonomy_term']->name;
    ?>
    <div class="product-set col-md-5">
        <a href="<?php print base_path() ?>sets/<?php print $contentSet; ?>">
            <button type="button" class="btn btn-default">
                <i class="fa fa-cubes fa-lg"></i><?php print $textSet; ?>
            </button>
        </a>
    </div>
<?php else:
    print '';
endif;
?>