{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="_desktop_user_info">
  {if $jpb_homepage == 4 || $jpb_homepage == 7}
   <div class="user-info btn-group compact-hidden  ">
    {if $logged} 
	  <a  class="account2 btn-xs dropdown-toggle" data-toggle="dropdown" href="{$my_account_url}"  title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" rel="nofollow">    
        
        <span class="hidden-sm-down">{$customerName} </span>
      </a><ul role="menu" class="dropdown-menu">
		<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Account' d='Shop.Theme.CustomerAccount'} </a></li>		
		<li><a href="{$link->getPageLink('order', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
		
	</ul>
	  <a
        class="btn-name" href="{$logout_url}" rel="nofollow" >
        {l s='/Log out' d='Shop.Theme.Actions'}
      </a>
    {else}   
	  <a
        href="{$my_account_url}"
        title="{l s='Log in to your customer account' d='Shop.Theme.CustomerAccount'}"
        rel="nofollow"  class="logout2 hidden-sm-down  btn-xs dropdown-toggle" data-toggle="dropdown">
      
        <span class="hidden-sm-down">{l s='Login / Register' d='Shop.Theme.Actions'}</span>
      </a>
	  <ul role="menu" class="dropdown-menu">
		<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Account'  d='Shop.Theme.CustomerAccount'} </a></li>		
		<li><a href="{$link->getPageLink('order', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
		</ul> 
	
	
	
    {/if}
  </div>
{else}
    <div class="user-info btn-group compact-hidden  ">
    {if $logged} 
	  <a  class="btn-name dropdown-toggle" data-toggle="dropdown" href="{$my_account_url}"  title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" target="_blank">      
       {$customerName}
      </a>
	  <a
        class="btn-name" href="{$logout_url}" rel="nofollow" >
        {l s='/Log out' d='Shop.Theme.Actions'}
      </a>
	  <ul>
		<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Account' d='Shop.Theme.CustomerAccount'} </a></li>		
		<li><a href="{$link->getPageLink('order', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
		
	</ul>
    {else}   
	 <a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">
      
       {l s='Login / Register' d='Shop.Theme.Actions'}
      </a>
	  <ul>
		<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Account'  d='Shop.Theme.CustomerAccount'} </a></li>		
		<li><a href="{$link->getPageLink('order', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
		</ul> 
	
	
	
    {/if}
  </div>
{/if}
</div>
