{extends file='page.tpl'}

{block name='page_content_container' prepend}
    <section id="content-hook_order_confirmation" class="card">
		<div class="card-block">
			<div class="row">
				<div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
					<div class="title-block">
						<h3 class="h1 card-title">
						<i class="material-icons done fa fa-check-circle-o"></i>{l s='Your order is confirmed' d='Shop.Theme.Checkout'}
					</h3>
					<p>
						{l s='An email has been sent to your mail address %email%.' d='Shop.Theme.Checkout' sprintf=['%email%' => $customer.email]}
						{if $order.details.invoice_url}
							{* [1][/1] is for a HTML tag. *}
							{l s='You can also [1]download your invoice[/1]' d='Shop.Theme.Checkout'
								sprintf=[
								'[1]' => "<a href='{$order.details.invoice_url}'>",
								'[/1]' => "</a>"
							]
							}
					  {/if}
					</p>
				{$HOOK_ORDER_CONFIRMATION nofilter}
					</div>
				</div>
			</div>
		</div>
    </section>
{/block}

{block name='page_content_container'}
  <section id="content" class="page-content page-order-confirmation card">
    <div class="card-block">
      <div class="row">

        {block name='order_confirmation_table'}
          {include
            file='checkout/_partials/order-confirmation-table.tpl'
            products=$order.products
            subtotals=$order.subtotals
            totals=$order.totals
            labels=$order.labels
            add_product_link=false
          }
        {/block}

        <div id="order-details" class="col-md-4">
          <h3 class="h3 card-title">{l s='Order details' d='Shop.Theme.Checkout'}:</h3>
          <ul>
            <li>{l s='Order reference: %reference%' d='Shop.Theme.Checkout' sprintf=['%reference%' => $order.details.reference]}</li>
            <li>{l s='Payment method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.details.payment]}</li>
            {if !$order.details.is_virtual}
              <li>
                {l s='Shipping method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.carrier.name]}<br>
                <em>{$order.carrier.delay}</em>
              </li>
            {/if}
          </ul>
        </div>

      </div>
    </div>
  </section>

  {if ! empty($HOOK_PAYMENT_RETURN)}
  <section id="content-hook_payment_return" class="card definition-list">
    <div class="card-block">
      <div class="row">
        <div class="col-md-12 payment_return">
          {$HOOK_PAYMENT_RETURN nofilter}
        </div>
      </div>
    </div>
  </section>
  {/if}
  {block name='action_button'}
	<div class="action-buttons">
		<a class="btn-default btn-shopping btn-effect button-small" href="{$urls.pages.index}">
			{l s='Home' d='Shop.Theme.Actions'}
		</a>
		<a href="{$link->getPageLink('my-account', true)}" class="btn-default btn-effect button-small">
			{l s='Account Page' d='Shop.Theme.Actions'}
		</a>
	</div>
			{/block}
  {if $customer.is_guest}
    <div id="registration-form" class="card">
      <div class="card-block">
        <h4 class="h4">{l s='Save time on your next order, sign up now' d='Shop.Theme.Checkout'}</h4>
        {render file='customer/_partials/customer-form.tpl' ui=$register_form}
      </div>
    </div>
  {/if}

  {hook h='displayOrderConfirmation1'}

  <section id="content-hook-order-confirmation-footer">
    {hook h='displayOrderConfirmation2'}
  </section>
{/block}
