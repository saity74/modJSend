<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jsend
 *
 * @copyright   Copyright (C) 2012 Saity 74 LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div style="z-index: 1100">
    <a href="#callBackModal" role="button" class="btn btn-warning" data-toggle="modal">Заказать звонок менеджера</a>
    
    <div class="modal hide fade" style="text-align: left; position: fixed" id="callBackModal" tabindex="-1" role="dialog" data-aria-labelledby="ModalLabel" data-aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <?php if ($header = $params->get('header')) : ?>
                <h3 id="myModalLabel"><?php echo $header ?></h3>
            <?php endif; ?>
        </div>
        <form action="index.php" class="form-horizontal" method="post">
          <div class="modal-body">
            <div class="control-group">
              <?php if ($showlist = $params->get('showlist', 0)) : ?>
                <div class="controlls">
                   <?php echo $list_html ?>
                </div>
                <?php endif; ?>
                
                
                <?php if ($showname = $params->get('showname', 0)) : ?>
                <div class="controlls">
                    <input type="text" class="<?php echo $showname == 2 ? 'required' : '' ?> field" value="" name="name" placeholder="Введите ФИО" />
                </div>
                <?php endif; ?>
                
                <?php if ($showfirm = $params->get('showfirm', 0)) : ?>
                <div class="controlls">
                        <input type="text" class="<?php echo $showfirm == 2 ? 'required' : '' ?> field" value="" name="firm" placeholder="Название организации" />
                </div>
                <?php endif; ?>
                
                
                <?php if ($showphone = $params->get('showphone', 0)) : ?>
                <div class="controlls">
                        <input type="text" class="<?php echo $showphone == 2 ? 'required' : '' ?> field" value="" name="phone" placeholder="Контактный телефон" />
                </div>
                <?php endif; ?>
                
                
                <?php if ($showemail = $params->get('showemail', 0)) : ?>
                <div class="controlls">
                    <input type="text" class="<?php echo $showemail == 2 ? 'required' : '' ?> field" value="" name="email" placeholder="Введите Ваш E-Mail" />
                </div>
                <?php endif; ?>
                
                
                <?php if ($showdesc = $params->get('showdesc', 0)) : ?>
                <div class="controlls">
                    <textarea class="<?php echo $showdesc == 2 ? 'required' : '' ?> field" name="desc" placeholder="Можете написать здесь свой вопрос" ></textarea>
                 </div>
                <?php endif; ?>
               
                
                <?php if ($showfileupload = $params->get('showfileupload', 0)) : ?>
                <div class="controlls">
                    <input class="field" name="Filedata" type="file" />
                </div>
                <?php endif; ?>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
            <a href="#" class="btn-jsend-submit btn <?php echo $params->get('btntype', 'btn-success') ?> <?php echo $params->get('btnsize', '') ?>">Отправить</a>
          </div>
          <input type="hidden" name="hash" value="<?php echo base64_encode($module->position) ?>" />
          <?php echo JHtml::_('form.token'); ?>
        </form>
    </div>
</div>