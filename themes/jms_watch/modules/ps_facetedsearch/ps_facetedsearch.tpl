{if isset($listing.rendered_facets)}
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
  </div>
  {$listing.rendered_facets nofilter}
</div>
{/if}
