<?php /* Smarty version 3.1.27, created on 2018-01-05 17:53:23
         compiled from "/Applications/MAMP/htdocs/greg/system/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19493722975a4fad83841021_02682892%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e6ab37a1393734305022b2af7aa685db4d6e34' => 
    array (
      0 => '/Applications/MAMP/htdocs/greg/system/templates/default/welcome.tpl',
      1 => 1515171191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19493722975a4fad83841021_02682892',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4fad838450c3_91960462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4fad838450c3_91960462')) {
function content_5a4fad838450c3_91960462 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19493722975a4fad83841021_02682892';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>