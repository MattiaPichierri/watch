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
  <div id="search_filters">
	<div class="filter-box">
		<div class="box-title title-block">
			<h3 class="hidden-sm-down">{l s='Filter By' d='Shop.Theme.Actions'}</h3>
		</div>
		<div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
		  <button data-search-url="{$clear_all_link}" class="btn-default btn-tertiary js-search-filters-clear-all button-small btn-effect btn-active">
				{l s='Clear all' d='Shop.Theme.Actions'}
		  </button>
		</div>
	</div>
    {foreach from=$facets item="facet"}
      {if $facet.displayed}
        <section class="facet {$facet.label|lower|replace:' ':''}">
          <h4 class="facet-title hidden-sm-down">{$facet.label}</h4>
          {assign var=_expand_id value=10|mt_rand:100000}
          {assign var=_collapse value=true}
          {foreach from=$facet.filters item="filter"}
            {if $filter.active}{assign var=_collapse value=false}{/if}
          {/foreach}
          {if $facet.widgetType !== 'dropdown'}
			<div class="flex-box">
				<ul id="facet_{$_expand_id}" class="{if !$_collapse} in{/if}">
              {foreach from=$facet.filters item="filter"}
                {if $filter.displayed}
                  <li {if isset($filter.properties.color)}class="color-style"{/if}>
                    <label class="facet-label{if $filter.active} active {/if}">
                      {if $facet.multipleSelectionAllowed}
                        <span class="custom-checkbox">
                          <input
                            data-search-url="{$filter.nextEncodedFacetsURL}"
                            type="checkbox"
                            {if $filter.active } checked {/if}
                          >
                              <span class="checkbox-color {$filter.label}" style="background-color: {$filter.label}"></span>

                          {if isset($filter.properties.color)}
                            <span class="color" style="background-color:{$filter.properties.color}"></span>
                            {elseif isset($filter.properties.texture)}
                              <span class="color texture" style="background-image:url({$filter.properties.texture})"></span>
                            {else}
                            <span {if !$js_enabled} class="ps-shown-by-js" {/if}></span>
                          {/if}
						  
                        </span>
                      {else}
                        <span class="custom-checkbox">
                          <input
                            data-search-url="{$filter.nextEncodedFacetsURL}"
                            type="radio"
                            name="filter {$facet.label}"
                            {if $filter.active } checked {/if}
                          >
                          <span {if !$js_enabled} class="ps-shown-by-js" {/if}></span>
                        </span>
                      {/if}
                          <a
                              href="{$filter.nextEncodedFacetsURL}"
                              class="_gray-darker search-link js-search-link {$filter.label}"
                              rel="nofollow"
                          >
                        {$filter.label}

						{if $filter.magnitude}
                          <span class="magnitude">({$filter.magnitude})</span>
                        {/if}

                      </a>
                    </label>
                  </li>
                {/if}
              {/foreach}
            </ul>
			</div>
          {else}
            <form>
              <input type="hidden" name="order" value="{$sort_order}">
              <select name="q">
                <option disabled selected hidden>{l s='(no filter)' d='Shop.Theme'}</option>
                {foreach from=$facet.filters item="filter"}
                  {if $filter.displayed}
                    <option
                      {if $filter.active}
                        selected
                        value="{$smarty.get.q}"
                      {else}
                        value="{$filter.nextEncodedFacets}"
                      {/if}
                    >
                      {$filter.label}
                      {if $filter.magnitude}
                        ({$filter.magnitude})
                      {/if}
                    </option>
                  {/if}
                {/foreach}
              </select>
              {if !$js_enabled}
                <button class="ps-hidden-by-js" type="submit">
                  {l s='Filter' d='Shop.Theme.Actions'}
                </button>
              {/if}
            </form>
          {/if}
        </section>
      {/if}
    {/foreach}
  </div>
