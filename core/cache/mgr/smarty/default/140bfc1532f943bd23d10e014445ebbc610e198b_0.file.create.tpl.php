<?php /* Smarty version 3.1.27, created on 2018-01-11 16:18:51
         compiled from "/Applications/MAMP/htdocs/greg/system/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7694553285a57805b706136_86369305%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140bfc1532f943bd23d10e014445ebbc610e198b' => 
    array (
      0 => '/Applications/MAMP/htdocs/greg/system/templates/default/element/chunk/create.tpl',
      1 => 1515171191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7694553285a57805b706136_86369305',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a57805b70a652_40621818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a57805b70a652_40621818')) {
function content_5a57805b70a652_40621818 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7694553285a57805b706136_86369305';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>