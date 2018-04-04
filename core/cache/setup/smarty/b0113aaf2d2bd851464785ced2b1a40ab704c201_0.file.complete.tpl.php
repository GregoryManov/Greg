<?php /* Smarty version 3.1.27, created on 2018-01-05 17:53:15
         compiled from "/Applications/MAMP/htdocs/greg/setup/templates/complete.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18718639645a4fad7bb98042_94865963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0113aaf2d2bd851464785ced2b1a40ab704c201' => 
    array (
      0 => '/Applications/MAMP/htdocs/greg/setup/templates/complete.tpl',
      1 => 1513255214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18718639645a4fad7bb98042_94865963',
  'variables' => 
  array (
    '_lang' => 0,
    'app_name' => 0,
    'errors' => 0,
    'error' => 0,
    'cleanup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4fad7bbfdb09_75591925',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4fad7bbfdb09_75591925')) {
function content_5a4fad7bbfdb09_75591925 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18718639645a4fad7bb98042_94865963';
?>
<form id="install" action="?action=complete" method="post">
<div>
	<h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['thank_installing'];
echo $_smarty_tpl->tpl_vars['app_name']->value;?>
.</h2>

    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <div class="note">
    <h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['cleanup_errors_title'];?>
</h3>
        <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><hr />
        <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
    </div>
    <br />
    <?php }?>
	<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['please_select_login'];?>
</p>
</div>
<br />

<div class="setup_navbar">
    <label><input type="submit" id="modx-next" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['login'];?>
" autofocus="autofocus" /></label>
    <br /><br />
    <span class="cleanup">
        <label><input type="checkbox" value="1" id="cleanup" name="cleanup"<?php if ($_smarty_tpl->tpl_vars['cleanup']->value) {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['_lang']->value['delete_setup_dir'];?>
</label>
    </span>
</div>
</form><?php }
}
?>