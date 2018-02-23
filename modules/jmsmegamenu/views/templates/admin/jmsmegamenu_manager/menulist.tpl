{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="note row">
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Drap &amp; Drop Menu Item to Change Order.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use Collapse tool to Collapse Menu. It will be easy when change order.</p>	
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Use Checkbox and Tools On right Side when want to Change State/Remove more items.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use <strong>Collapse All</strong> and <strong>Check All</strong> When you want Collapse all item and check to all checkbox.</p>	
</div>
<div class="panel">
<h3>
  <i class="icon-list-ul"></i> {l s='Menu List' d='.Modules.JmsMegamenu'}
	<span class="pull-right check-all">
		<input type="checkbox" onclick="checkAll(this)" title="Check All" value="" name="checkall-toggle">&nbsp;&nbsp;Check / UnCheck All
	</span>
	<span class="collapse-expand-all pull-right">
		<i class="icon-caret-down"></i>&nbsp;&nbsp;Collapse / Expand All
	</span>
</h3>
	<form name="adminForm" action="{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu" method="post">
		<div id="jms-toolbar">				
				<a class="jms-tool btn-success" onclick="submitform('add','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu&addMenu');" title="Add New Menu">
					<i class="icon-plus"></i>
				</a>
				<a class="jms-tool btn-info" onclick="submitform('edit','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu');" title="Edit Menu">
					<i class="icon-edit"></i>
				</a>
				<a class="jms-tool btn-warning" onclick="submitform('deleteMenu','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu');" title="Delete Menus">
					<i class="icon-trash"></i>	
				</a>
				<a class="jms-tool btn-success" onclick="submitform('cStatus','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu&cStatus&status=1');" title="Enabled">
					<i class="icon-check"></i>
				</a>
				<a class="jms-tool btn-danger" onclick="submitform('cStatus','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu&cStatus&status=0');" title="Disabled">
					<i class="icon-remove"></i>
				</a>			 	
		</div>
		<div class="menus_container">
		<div id="menus">						
			{foreach from=$menus item=menu key=k}																
				{$n = $k|intval + 1}				
				{if $n >=  $menus|@count}		
					{$nextmenu = NULL}
					
				{else}	
					{$nextmenu = $menus[$n]}
				{/if}
				<div id="menus_{$menu.mitem_id nofilter}" >					
					<div class="panel lvl{$menu.level}">
						<div class="row">
							<div class="col-lg-2">
								<input type="checkbox" class="jms-checkbox" title="Checkbox" onclick="isChecked(this);" value="{$menu.mitem_id nofilter}" name="cid[]" id="cb{$k nofilter}">
							</div>
							<div class="col-md-5">				
								{$menu.name nofilter}
							</div>
							<div class="col-md-2">	
								{$menu.type nofilter}
							</div>						
							<div class="col-md-3">							
								<div class="btn-group-action pull-right">			
									{if $menu.level < $nextmenu.level}
									<a class="btn btn-default collapse-expand" title="Collapse / Expand">
										<i class="icon-caret-down"></i>
									</a>
									{/if}	
									<a class="btn {if $menu.active}btn-success{else}btn-danger{/if}" onclick="cStatus('cb{$k nofilter}','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu',{if $menu.active}0{else}1{/if})" title="{if $menu.active}Enabled{else}Disabled{/if}">
										<i class="{if $menu.active}icon-check{else}icon-remove{/if}"></i>
									</a>		
									<a class="btn btn-default"
										href="{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu&editMenu&mitem_id={$menu.mitem_id nofilter}" title="Edit">
										<i class="icon-edit"></i>									
									</a>
									<a class="btn btn-default"
										onclick="cRemove('cb{$k nofilter}','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu')">
										<i class="icon-trash"></i>									
									</a>
								</div>
							</div>
						</div>
					</div>
				{if $menu.level < $nextmenu.level}
					<div class="jms-submenu jms-submenu{$nextmenu.level nofilter}">				
				{elseif $menu.level > $nextmenu.level}
					{if $menu.level - $nextmenu.level == 1}
						</div></div></div>
					{elseif $menu.level - $nextmenu.level == 2}	
						</div></div></div></div></div>
					{elseif $menu.level - $nextmenu.level == 3}		
						</div></div></div></div></div></div></div>
					{/if}
				{else}	
					</div>		
				{/if}					
			{/foreach}
		</div>
		</div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" value="" name="boxchecked">
	</form>
</div>
<script type="text/javascript">
$('#menus').sortable( {
	connectWith: '#menus',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl0",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}				
});
$('.jms-submenu1').sortable( {
	connectWith: '.jms-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl1",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url nofilter}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.jms-submenu2').sortable( {
	connectWith: '.jms-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl2",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url nofilter}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.jms-submenu3').sortable( {
	connectWith: '.jms-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl3",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url nofilter}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
</script>