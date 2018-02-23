{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block Newsletter module-->
	<div id="newsletter_block_left" class="block">	
		<div class="block_content">
		
				<div class="textnews_h1 addon-title">
				<h3>{l s='The News Letter' d='Shop.Theme'}</h3>
				<!-- <span>{l s='Subscribe now to get 15 percent off on any product' d='Shop.Theme'}</span> -->
				</div>
			
				<div class="textnews_h4">
				<h3>{l s='Newsletter' d='Shop.Theme'}</h3>
				<span>{l s='Get all the best deals, sales and offers from shop the best.' d='Shop.Theme'}</span>
				</div>
				
				<div class="textnews_h3">
				<h3>{l s='Get Our Latest Update In Your Email' d='Shop.Theme'}</h3>
				<span>{l s='Subscribe now to get 15 percent off on any product' d='Shop.Theme'}</span>
				</div>
			
			{if $jpb_homepage == 1}
					<div class="textnews_popup addon-title">
						<h2>
							{l s='Sign Up Our Newsletter' d='Shop.Theme'}
						</h2>
						<span>
							{l s='For receive and never miss the latest products, news, events, promotion and many more' d='Shop.Theme'}
						</span>
					</div>
		{/if}
			<div class="news_content">
	         <div  class="block_content block_c_right">
			<form action="{$urls.pages.index}#footer" method="post">
					<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
					   <button type="submit" name="submitNewsletter" class="newsletter-btn button">
							{l s='Subscribe' d='Shop.Theme'}
						</button>
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Your email...' d='Shop.Forms.Labels'}" />
						
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh2 ">
							
						</button>
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh1  btn-default btn-active btn-effect">
							{l s='Subscribe' d='Shop.Theme'}
						</button>
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
				</div>
	       </div>
		</div>
	</div>
	{if $msg}
        <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
            {$msg}
        </div>
    {/if}
