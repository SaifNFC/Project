<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 16:34:23
         compiled from "/home/www/site2/themes/prestashop/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3669712354eba9d7f456868-18642372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b71a669c71473c8b584731efa4c44e4a82f90a92' => 
    array (
      0 => '/home/www/site2/themes/prestashop/store_infos.tpl',
      1 => 1320848198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3669712354eba9d7f456868-18642372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'Hours:'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days_datas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php }} ?>
</table>
