<?php /* Smarty version 3.1.27, created on 2018-01-05 18:06:09
         compiled from "/Applications/MAMP/htdocs/greg/system/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5501961175a4fb081042ab6_95367304%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91749fd2ecb1eb30560db010f15a450d3e35c936' => 
    array (
      0 => '/Applications/MAMP/htdocs/greg/system/templates/default/element/snippet/create.tpl',
      1 => 1515171191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5501961175a4fb081042ab6_95367304',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4fb081044e35_52892447',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4fb081044e35_52892447')) {
function content_5a4fb081044e35_52892447 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5501961175a4fb081042ab6_95367304';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>