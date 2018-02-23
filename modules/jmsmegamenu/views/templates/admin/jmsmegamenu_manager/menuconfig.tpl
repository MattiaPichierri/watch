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
<form action="{$link->getAdminLink('AdminJmsmegamenuManager')|escape:'html':'UTF-8'}&configure=jmsmegamenu" method="post">
<div class="menu-config">
<h3>Menu Configuration</h3>
<ul>
    <li>
		<label data-placement="top" data-original-title="Mouse Event Trigger" class="label-tooltip">Menu Trigger</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" {if $JMSMM_MOUSEEVENT == 'hover'}checked="checked"{/if} value="hover" id="mouseevent_on" name="JMSMM_MOUSEEVENT">
			<label for="mouseevent_on">Hover</label>
			<input type="radio" {if $JMSMM_MOUSEEVENT == 'click'}checked="checked"{/if} value="click" id="mouseevent_off" name="JMSMM_MOUSEEVENT">
			<label for="mouseevent_off">Click</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Time for open and close dropdown(milisecond)" class="label-tooltip"> Duration</label>	
		<fieldset class="btn-group">
		<input type="text" name="JMSMM_DURATION" value="{$JMSMM_DURATION nofilter}" id="open-speed" />
		</fieldset>
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Load Bootstrap Css File" class="label-tooltip">Load Bootstrap Css</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" {if $JMSMM_LOADBOOTSTRAPCSS == 1}checked="checked"{/if} value="1" id="loadbootstrap_on" name="JMSMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_on">Yes</label>
			<input type="radio" {if $JMSMM_LOADBOOTSTRAPCSS == 0}checked="checked"{/if} value="0" id="loadbootstrap_off" name="JMSMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_off">No</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>			
<ul>
    <li>
		<label>&nbsp;</label>	
		<fieldset class="btn-group">
		<button class="btn btn-success" name="submitConfig" id="btn-save-config" value="1" type="submit">
			Save Config
		</button>		
		</fieldset>
	</li>
</ul>
			
</div>
</form>