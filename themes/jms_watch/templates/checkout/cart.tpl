{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file=$layout}

{block name='content'}

  <section id="main">
	 <div class="cart-block">
            <h1>{l s='Your Shopping Cart' d='Shop.Theme.Checkout'}</h1>
          </div>
    <div class="cart-grid">
		<div class="row first">
      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">
		<div class="cart-box">
			<!-- cart products detailed -->
			<div class="cart cart-container">
			  {block name='cart_overview'}
				{include file='checkout/_partials/cart-detailed.tpl' cart=$cart}
			  {/block}
			</div>

			{block name='continue_shopping'}
			  <a class="btn-default btn-shopping button-small btn-effect" href="{$urls.pages.index}">
				{l s='Continue shopping' d='Shop.Theme.Actions'}
			  </a>
			{/block}

			<!-- shipping informations -->
			<div>
			  {hook h='displayShoppingCartFooter'}
			</div>
		</div>
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">
		<div class="right-box">
			{block name='cart_summary'}
			  <div class="card cart-summary">

				{hook h='displayShoppingCart'}

				{block name='cart_totals'}
				  {include file='checkout/_partials/cart-detailed-totals.tpl' cart=$cart}
				{/block}

				{block name='cart_actions'}
				  {include file='checkout/_partials/cart-detailed-actions.tpl' cart=$cart}
				{/block}

			  </div>
			{/block}

			{block name='display_reassurance'}
			  {hook h='displayReassurance'}
			{/block}
		</div>
      </div>
	</div>
    </div>
  </section>
{/block}
