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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="video-background-wrap" style="height:{$height nofilter}px;overflow:hidden;">
<div class="jms-addon jms-video-background" style="margin-top:-{$margintop nofilter}px;">
{if $src}    
	<iframe width="1920" height="1080" frameborder="0" src="{$src nofilter}{$videoparams nofilter}"></iframe>
{/if}
<div class="background-overlay" style="position:absolute;width:100%;height:100%;z-index:2;left:0px;top:0px;padding-top:{$paddingtop nofilter}px;text-align:{$text_align nofilter};background:#{$overlay_color nofilter};opacity:{$overlay_opacity nofilter};color:#{$text_color nofilter};">
{if $addon_title}
	<h3>{$addon_title nofilter}</h3>
{/if}
{if $addon_desc}
<p>{$addon_desc nofilter}</p>
{/if}
{if $button_text}
<a href="{if $button_link}{$button_link nofilter}{else}#{/if}"{if $target == 'new window'} target="_blank"{/if}>{$button_text nofilter}</a>
{/if}
</div>
</div>
</div>