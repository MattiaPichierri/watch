{*
 * @package Jms Drop Megamenu
 * @version 1.0
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}

<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg hidden-md" href="#"></a>
    <span class="text_menu">{l s='Menu' mod='jmsmegamenu'}</span><span class="pe pe-7s-close"></span>
	{$menu_html|escape:'' nofilter}
</div>
<script type="text/javascript">
	var jmmm_event = '{$JMSMM_MOUSEEVENT}';
	var jmmm_duration = {$JMSMM_DURATION};	
</script>