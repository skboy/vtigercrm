<?php /* Smarty version Smarty-3.1.7, created on 2018-10-12 02:36:09
         compiled from "/data/wwwroot/default/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/BooleanFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14651402065bc008992102f3-50922230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93cc893e486d763b42df7b67127b8fd9b4cb83fc' => 
    array (
      0 => '/data/wwwroot/default/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/BooleanFieldSearchView.tpl',
      1 => 1517972196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14651402065bc008992102f3-50922230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
    'SEARCH_VALUES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bc008992182f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc008992182f')) {function content_5bc008992182f($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars['SEARCH_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'], null, 0);?><div class=""><select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" style="width:90px;" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value==1){?> selected<?php }?>><?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="0" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value=='0'){?> selected<?php }?>><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div><?php }} ?>