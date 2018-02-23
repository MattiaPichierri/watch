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
{function name="categories" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
      <ul class="category-sub-menu">
        {foreach from=$nodes item=node}
          <li data-depth="{$depth}" class="cat-item">
            {if $depth===0}
				<a href="{$node.link}">
					{$node.name}
					{if $node.children}
						<span class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar{$node.id}">
							<i class="material-icons add"></i>
						</span>
					{/if}
				</a>
				{if $node.children}
					<div class="sub-list collapse" id="exCollapsingNavbar{$node.id}">
						{categories nodes=$node.children depth=$depth+1}
					</div>
				{/if}
            {else}
              <a class="category-sub-link" href="{$node.link}">{$node.name}</a>	
              {if $node.children}
                <div class="collapse" id="exCollapsingNavbar{$node.id}">
                  {categories nodes=$node.children depth=$depth+1}
                </div>
              {/if}
            {/if}
          </li>
        {/foreach}
      </ul>
    {/if}
  {/strip}
{/function}

<div class="block-categories hidden-sm-down">
	{if $page.page_name != 'index'}
		<div class="title-block">
			<h3>{l s='Categories' d='Shop.Theme.CategoryTree'}</h3>
		</div>
	{/if}
		{categories nodes=$categories.children}
</div>
