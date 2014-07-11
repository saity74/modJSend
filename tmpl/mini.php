<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jsend
 *
 * @copyright   Copyright (C) 2012 Saity 74 LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$metrika_btn_code = '';
if ($params->get('btn_code', 0))
$metrika_btn_code = 'onclick="'.$params->get('btn_code').'"';
                    
?>
<form class="mail-form form-validate" method="post" action="index.php" enctype="multipart/form-data">
<div class="input-append">
    <input type="text"  class="field span2" value="" name="phone" placeholder="Телефон" />
    <a href="#" <?php echo $metrika_btn_code; ?> class="btn-jsend-submit btn <?php echo $params->get('btntype', 'btn-success') ?> <?php echo $params->get('btnsize', '') ?>">Обратный звонок</a>
</div>
    <input type="hidden" name="hash" value="<?php echo base64_encode($module->position) ?>" />
    <?php echo JHtml::_( 'form.token' ); ?>
</form>