<?php /* Smarty version 3.1.27, created on 2018-01-05 17:54:08
         compiled from "/Applications/MAMP/htdocs/greg/system/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12229861745a4fadb0339426_84580246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a33dd128e9792f708c37d211709653b39635013' => 
    array (
      0 => '/Applications/MAMP/htdocs/greg/system/templates/default/workspaces/index.tpl',
      1 => 1515171191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12229861745a4fadb0339426_84580246',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4fadb0340904_58765510',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4fadb0340904_58765510')) {
function content_5a4fadb0340904_58765510 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12229861745a4fadb0339426_84580246';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>