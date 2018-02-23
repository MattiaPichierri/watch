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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<form name="adminForm" action="{$link->getAdminLink('AdminJmspagebuilderMedia')|escape:'html':'UTF-8'}" method="post" enctype="multipart/form-data">
<div class="explorer-form">		
	<div class="col-sm-12 row">						
		<div class="media-form path-form">
			<i class="icon-folder-open"></i> {l s='Path' d='Modules.JmsPagebuilder'} : {if $root_folder}{$root_folder|escape:'htmlall':'UTF-8'}{/if}{$current_folder|escape:'htmlall':'UTF-8'}			
			<div class="pull-right">
				<a class="btn-insert" onclick="window.parent.document.getElementById('jms-image-' + {$fid|escape:'htmlall':'UTF-8'}).value = document.getElementById('i_url').value; window.parent.document.getElementById('media-preview-' + {$fid|escape:'htmlall':'UTF-8'}).src = document.getElementById('root-url').value + document.getElementById('i_url').value; window.parent.jQuery.fancybox.close();">Insert</a>
			</div>
		</div>
		<div class="media-list col-sm-12">
			{if $current_folder}
			<div class="media-box">				
				<div class="thumb-icon"><a href="{$link->getAdminLink('AdminJmspagebuilderMedia')|escape:'html':'UTF-8'}&current_folder={$previous_folder|escape:'htmlall':'UTF-8'}"><i class="icon-level-up"></i></a></div>
				<div class="name"><a href="{$link->getAdminLink('AdminJmspagebuilderMedia')|escape:'html':'UTF-8'}&current_folder={$previous_folder|escape:'htmlall':'UTF-8'}&fid={$fid|escape:'htmlall':'UTF-8'}">..</a></div>
			</div>	
			{/if}
		{if isset($folders)}
		{foreach $folders item=folder}			
			<div class="media-box">				
				<div class="thumb-icon"><a href="{$link->getAdminLink('AdminJmspagebuilderMedia')|escape:'html':'UTF-8'}&current_folder={if $current_folder}{$current_folder|escape:'htmlall':'UTF-8'}/{/if}{$folder.name|escape:'htmlall':'UTF-8'}"><i class="icon-folder-open"></i></a></div>
				<div class="name"><a href="{$link->getAdminLink('AdminJmspagebuilderMedia')|escape:'html':'UTF-8'}&current_folder={if  $current_folder}{$current_folder|escape:'htmlall':'UTF-8'}/{/if}{$folder.name|escape:'htmlall':'UTF-8'}&fid={$fid|escape:'htmlall':'UTF-8'}" title="{$folder.name|escape:'htmlall':'UTF-8'}">{$folder.name|escape:'htmlall':'UTF-8'|truncate:12}</a></div>				
			</div>	
		{/foreach}
		{/if}
		{if isset($files)}
		{foreach $files item=file}			
			<div class="media-box">				
				<div class="thumb-icon">
					{if $file.type == 'jpg' || $file.type == 'png' || $file.type == 'jpeg' || $file.type == 'gif'}
						<a class="img-thumb" onclick="document.getElementById('i_url').value = '{$root_folder|escape:'htmlall':'UTF-8'}' + '{if $current_folder}{$current_folder|escape:'htmlall':'UTF-8'}/{/if}' + '{$file.name|escape:'htmlall':'UTF-8'}';" title="{$file.name|escape:'htmlall':'UTF-8'}"><img src="{$file_url|escape:'htmlall':'UTF-8'}{$current_folder|escape:'htmlall':'UTF-8'}/{$file.name|escape:'htmlall':'UTF-8'}" /></a>					
					{/if}	
				</div>
				<div class="name"><a title="{$file.name|escape:'htmlall':'UTF-8'}">{$file.name|escape:'htmlall':'UTF-8'|truncate:12}</a></div>					
			</div>	
		{/foreach}
		{/if}
		</div>
		<div class="media-form url-form">
			<label>Image Url : <input type="text" id="i_url" />
		</div>
		<div class="media-form upload-form">			
			<input type="file" name="newfile" />
			<button name="submitImage" id="upload-file" class="btn btn-success">{l s='Upload File' d='Modules.JmsPagebuilder'}</button> <span>({l s='Maximum Size' d='Modules.JmsPagebuilder'}: {ini_get('upload_max_filesize')|escape:'htmlall':'UTF-8'}B)</span>
		</div>
	</div>
</div>
<input type="hidden" name="current_folder" id="current-folder" value="{$current_folder|escape:'htmlall':'UTF-8'}" />
<input type="hidden" name="root_url" id="root-url" value="{$root_url|escape:'htmlall':'UTF-8'}" />
<input type="hidden" name="fid" id="fid" value="{$fid|escape:'htmlall':'UTF-8'}" />
</form>
<style type="text/css">
.media-box {
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px #ccc;
    cursor: pointer;
    float: left;
    height: 70px;
    margin-bottom: 20px;
    margin-right: 20px;
    text-align: center;
    width: 90px;
	cursor: pointer;
    text-align: center;
	background:#efefef;
	padding:10px 0px;
}
.thumb-icon i {
    font-size: 30px;
}
.thumb-icon .img-thumb img {
    height: 50px;
    width: 60px;
}
.media-form {
	background: #fff none repeat scroll 0 0;
    border:1px solid #ccc;
    height: 30px;
    position: fixed;    
    width: 562px;
	padding:10px;
}

.path-form {
	top: 0;
}
.url-form {
	bottom: 60px;
}
.upload-form {
	bottom: 0px;
}
.media-list {
    height: 300px;
    margin-top: 70px;
    overflow-y: auto;
}
.pull-right {
	float:right;
}
#i_url {
	line-height:30px;
	width:300px;
}
.btn-insert {
    background: #428bca none repeat scroll 0 0;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-size: 13px;
    padding: 5px 10px;
    text-transform: uppercase;
}
</style>