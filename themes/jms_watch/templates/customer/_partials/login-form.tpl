{include file='_partials/form-errors.tpl' errors=$errors['']}

{* TODO StarterTheme: HOOKS!!! *}

<form id="login-form" action="{$action}" method="post">

  <section>
    {block name='form_fields'}
      {foreach from=$formFields item="field"}
        {block name='form_field'}
          {form_field field=$field}
        {/block}
      {/foreach}
    {/block}
    <div class="forgot-password">
      <a href="{$urls.pages.password}" rel="nofollow">
        {l s='Forgot your password?' d='Shop.Theme.CustomerAccount'}
      </a>
	  {if isset($fb_on) && $fb_on}
		<br /><div class="fb-login-button" data-max-rows="1" data-size="{$JMSFB_BUTTON_SIZE}" data-button-type="{$JMSFB_BUTTON_TEXT}" data-show-faces="{if $JMSFB_SHOW_FRIENDS}true{else}false{/if}" data-auto-logout-link="{if $JMSFB_LOGOUT_BUTTON}true{else}false{/if}" data-use-continue-as="{if $JMSFB_PROFILE_INCLUDED}true{else}false{/if}"></div>
	{/if}
    </div>	
  </section>

  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    {block name='form_buttons'}
      <button class="btn btn-default btn-effect" data-link-action="sign-in" type="submit" class="form-control-submit">
        {l s='Sign in' d='Shop.Theme.Actions'}
      </button>
    {/block}
  </footer>
</form>
