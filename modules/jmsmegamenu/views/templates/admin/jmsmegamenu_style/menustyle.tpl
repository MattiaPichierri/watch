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
<div class="info-config jms-config">
	<h3>Megamenu</h3>
	This toolbox use for style megamenu.There are 3 objects need style : Menu item, dropdown(submenu), Column.
	<br />1 - Click to menu item to style for menu item.   2 - Click to dropdown to style for dropdown or add row.   3 - and click to column to add/remove column and style for column.
	<br />Hover option label on toolbox to show desc of them.
</div>	

<div class="submenu-config jms-config">
<h3>Submenu Configuration</h3>
<ul>
    <li>
        <label data-placement="top" data-original-title="Add New Row for selected Submenu" class="label-tooltip">Add Row</label>
		<fieldset class="btn-group">
           <a data-action="addRow" class="btn toolcol-addcol toolbox-action"><i class="icon-plus"></i></a>           
        </fieldset>
    </li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Set for submenu fullwidth" class="label-tooltip">Full Width</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" value="1" id="fullwidth_on" name="fullwidth">
			<label for="fullwidth_on">Yes</label>
			<input type="radio" checked="checked" value="0" id="fullwidth_off" name="fullwidth">
			<label for="fullwidth_off">No</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Width of submenu dropdown" class="label-tooltip"> Submenu Width(px)</label>	
		<fieldset class="btn-group">
		<input type="text" name="width"	value="" id="subwidth" />
		</fieldset>
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Add Extra Class to style menu" class="label-tooltip"> Submenu Extra Class</label>	
		<fieldset class="btn-group">
		<input type="text" name="submenuclass" value="" id="submenu-class" />
		</fieldset>
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Alignment Dropdown Menu" class="label-tooltip"> Submenu Align</label>	
		<fieldset class="toolsub-alignment">
        <div class="btn-group">
            <a title="Left" data-align="left" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-left"><i class="icon-align-left"></i></a>
            <a title="Right" data-align="right" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-right"><i class="icon-align-right"></i></a>
            <a title="Center" data-align="center" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-center"><i class="icon-align-center"></i></a>
            <a title="Justify" data-align="justify" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-justify"><i class="icon-align-justify"></i></a>
        </div>
        </fieldset>
	</li>
</ul>			
</div>
<div class="column-config jms-config">
<h3>Column Configuration</h3>
<ul>
    <li>
        <label data-placement="top" data-original-title="Add Column after selected column/ Remove selected Column" class="label-tooltip">Add/remove Column</label>
		<fieldset class="btn-group">
           <a data-action="addColumn" class="btn toolcol-addcol toolbox-action"><i class="icon-plus"></i></a>
           <a data-action="removeColumn" class="btn toolcol-removecol toolbox-action"><i class="icon-minus"></i></a>
        </fieldset>
    </li>
</ul>
<ul>
	<li>
		<label title="" class="hasTip" data-original-title="">Width (1-12)</label>
        <fieldset class="btn-group">
        <select data-name="width" name="col-width" class="col-width" id="col-width">
			<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>		
        </fieldset>
    </li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Add Extra Class to style Menu" class="label-tooltip"> Column Extra Class</label>	
		<fieldset class="btn-group">
		<input type="text" name="col-class" value="" id="col-class" />
		</fieldset>
	</li>
</ul>
</div>
<div class="menuitem-config jms-config">
<h3>Menu Item Configuration</h3>
<ul>
    <li>
		<label data-placement="top" data-original-title="Show/Hide Menu Title (hide when menu is module assign or custom html)" class="label-tooltip">Show Title</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" checked="checked" value="1" id="showtitle_on" name="showtitle">
			<label for="showtitle_on">Yes</label>
			<input type="radio" value="0" id="showtitle_off" name="showtitle">
			<label for="showtitle_off">No</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Set Menu to Group If you want it to be heading of column" class="label-tooltip">Group</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" value="1" id="group_on" name="group">
			<label for="group_on">Yes</label>
			<input type="radio" checked="checked" value="0" id="group_off" name="group">
			<label for="group_off">No</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Add Extra Class to style Menu" class="label-tooltip"> Item Extra Class</label>	
		<fieldset class="btn-group">
		<input type="text" name="itemclass" value="" id="item-class" />
		</fieldset>
	</li>
</ul>		
<ul>
    <li>
		<label data-placement="top" data-original-title="Icon Class(awesome or other font icon), eg : fa fa-user, fa fa-home,... " class="label-tooltip">Icon Class</label>	
		<fieldset class="btn-group">
		<input type="text" name="iconclass" value="" id="icon-class" />
		</fieldset>
	</li>
</ul>
<ul>
    <li>
        <label data-placement="top" data-original-title="Reset Mega Menu Style of Selected Menu Item" class="label-tooltip">Reset Mega Style</label>
		<fieldset class="btn-group">
           <a data-action="resetStyle" class="btn btn-warning tool-reset toolbox-action"><i class="icon-rotate-left"></i></a>           
        </fieldset>
    </li>
</ul>		
</div>
{$menuhtml nofilter}
<div class="save-btn">
	<a class="btn-success" id="save-menu-config" title="Save Menu Config"><i class="icon-save"></i></a>
	<a class="btn-warning" id="reset-menu-config" title="Reset All Menu Mega Style"><i class="icon-rotate-left"></i></a>
</div>
<input type="hidden" name="basedir" value="{$base_url nofilter}" id="basedir" />