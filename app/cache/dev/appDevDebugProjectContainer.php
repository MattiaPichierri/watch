<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assets._version__default' => 'getAssets_VersionDefaultService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'csa_guzzle.cache.adapter.doctrine' => 'getCsaGuzzle_Cache_Adapter_DoctrineService',
            'csa_guzzle.client.addons_api' => 'getCsaGuzzle_Client_AddonsApiService',
            'csa_guzzle.client_factory' => 'getCsaGuzzle_ClientFactoryService',
            'csa_guzzle.data_collector.guzzle' => 'getCsaGuzzle_DataCollector_GuzzleService',
            'csa_guzzle.description_factory' => 'getCsaGuzzle_DescriptionFactoryService',
            'csa_guzzle.description_loader' => 'getCsaGuzzle_DescriptionLoaderService',
            'csa_guzzle.description_loader.resolver' => 'getCsaGuzzle_DescriptionLoader_ResolverService',
            'csa_guzzle.subscriber.cache' => 'getCsaGuzzle_Subscriber_CacheService',
            'csa_guzzle.subscriber.debug' => 'getCsaGuzzle_Subscriber_DebugService',
            'csa_guzzle.subscriber.stopwatch' => 'getCsaGuzzle_Subscriber_StopwatchService',
            'csa_guzzle.twig.extension' => 'getCsaGuzzle_Twig_ExtensionService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache.provider' => 'getDoctrine_Cache_ProviderService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.date_picker' => 'getForm_Type_DatePickerService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.extension.money' => 'getForm_Type_Extension_MoneyService',
            'form.type.extension.text' => 'getForm_Type_Extension_TextService',
            'form.type.extension.textarea' => 'getForm_Type_Extension_TextareaService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.product.attachment' => 'getForm_Type_Product_AttachmentService',
            'form.type.product.combination' => 'getForm_Type_Product_CombinationService',
            'form.type.product.combination_bulk' => 'getForm_Type_Product_CombinationBulkService',
            'form.type.product.custom_field' => 'getForm_Type_Product_CustomFieldService',
            'form.type.product.feature' => 'getForm_Type_Product_FeatureService',
            'form.type.product.information' => 'getForm_Type_Product_InformationService',
            'form.type.product.options' => 'getForm_Type_Product_OptionsService',
            'form.type.product.price' => 'getForm_Type_Product_PriceService',
            'form.type.product.quantity' => 'getForm_Type_Product_QuantityService',
            'form.type.product.seo' => 'getForm_Type_Product_SeoService',
            'form.type.product.shipping' => 'getForm_Type_Product_ShippingService',
            'form.type.product.simple_category' => 'getForm_Type_Product_SimpleCategoryService',
            'form.type.product.specific_price' => 'getForm_Type_Product_SpecificPriceService',
            'form.type.product.supplier_combination' => 'getForm_Type_Product_SupplierCombinationService',
            'form.type.product.virtual' => 'getForm_Type_Product_VirtualService',
            'form.type.product.warehouse_combination' => 'getForm_Type_Product_WarehouseCombinationService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.typeahead.customer' => 'getForm_Type_Typeahead_CustomerService',
            'form.type.typeahead.product' => 'getForm_Type_Typeahead_ProductService',
            'form.type.typeahead.product_pack' => 'getForm_Type_Typeahead_ProductPackService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'guzzle.cache' => 'getGuzzle_CacheService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'main.warmer.cache_warmer' => 'getMain_Warmer_CacheWarmerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.console_very_verbose' => 'getMonolog_Handler_ConsoleVeryVerboseService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'prestashop.adapter.admin.controller.attribute_generator' => 'getPrestashop_Adapter_Admin_Controller_AttributeGeneratorService',
            'prestashop.adapter.admin.controller.category' => 'getPrestashop_Adapter_Admin_Controller_CategoryService',
            'prestashop.adapter.admin.wrapper.product' => 'getPrestashop_Adapter_Admin_Wrapper_ProductService',
            'prestashop.adapter.data_provider.attachment' => 'getPrestashop_Adapter_DataProvider_AttachmentService',
            'prestashop.adapter.data_provider.attribute' => 'getPrestashop_Adapter_DataProvider_AttributeService',
            'prestashop.adapter.data_provider.carrier' => 'getPrestashop_Adapter_DataProvider_CarrierService',
            'prestashop.adapter.data_provider.category' => 'getPrestashop_Adapter_DataProvider_CategoryService',
            'prestashop.adapter.data_provider.combination' => 'getPrestashop_Adapter_DataProvider_CombinationService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.data_provider.customer' => 'getPrestashop_Adapter_DataProvider_CustomerService',
            'prestashop.adapter.data_provider.feature' => 'getPrestashop_Adapter_DataProvider_FeatureService',
            'prestashop.adapter.data_provider.group' => 'getPrestashop_Adapter_DataProvider_GroupService',
            'prestashop.adapter.data_provider.manufacturer' => 'getPrestashop_Adapter_DataProvider_ManufacturerService',
            'prestashop.adapter.data_provider.module' => 'getPrestashop_Adapter_DataProvider_ModuleService',
            'prestashop.adapter.data_provider.pack' => 'getPrestashop_Adapter_DataProvider_PackService',
            'prestashop.adapter.data_provider.product' => 'getPrestashop_Adapter_DataProvider_ProductService',
            'prestashop.adapter.data_provider.supplier' => 'getPrestashop_Adapter_DataProvider_SupplierService',
            'prestashop.adapter.data_provider.tax' => 'getPrestashop_Adapter_DataProvider_TaxService',
            'prestashop.adapter.data_provider.warehouse' => 'getPrestashop_Adapter_DataProvider_WarehouseService',
            'prestashop.adapter.formatter.price' => 'getPrestashop_Adapter_Formatter_PriceService',
            'prestashop.adapter.image_manager' => 'getPrestashop_Adapter_ImageManagerService',
            'prestashop.adapter.legacy.block.helper.subscriber' => 'getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.legacy.hook.subscriber' => 'getPrestashop_Adapter_Legacy_Hook_SubscriberService',
            'prestashop.adapter.legacy.logger' => 'getPrestashop_Adapter_Legacy_LoggerService',
            'prestashop.adapter.middleware.ssl' => 'getPrestashop_Adapter_Middleware_SslService',
            'prestashop.adapter.module.self_configurator' => 'getPrestashop_Adapter_Module_SelfConfiguratorService',
            'prestashop.adapter.module.tab.eventsubscriber' => 'getPrestashop_Adapter_Module_Tab_EventsubscriberService',
            'prestashop.adapter.module.tab.register' => 'getPrestashop_Adapter_Module_Tab_RegisterService',
            'prestashop.adapter.module.tab.unregister' => 'getPrestashop_Adapter_Module_Tab_UnregisterService',
            'prestashop.adapter.presenter.module' => 'getPrestashop_Adapter_Presenter_ModuleService',
            'prestashop.adapter.security.admin' => 'getPrestashop_Adapter_Security_AdminService',
            'prestashop.adapter.shop.context' => 'getPrestashop_Adapter_Shop_ContextService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.addons.client_api' => 'getPrestashop_Addons_ClientApiService',
            'prestashop.cache.refresh' => 'getPrestashop_Cache_RefreshService',
            'prestashop.categories_provider' => 'getPrestashop_CategoriesProviderService',
            'prestashop.compiler.smarty.template' => 'getPrestashop_Compiler_Smarty_TemplateService',
            'prestashop.core.addon.theme.exporter' => 'getPrestashop_Core_Addon_Theme_ExporterService',
            'prestashop.core.addon.theme.repository' => 'getPrestashop_Core_Addon_Theme_RepositoryService',
            'prestashop.core.admin.data_provider.addons_interface' => 'getPrestashop_Core_Admin_DataProvider_AddonsInterfaceService',
            'prestashop.core.admin.data_provider.module_interface' => 'getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService',
            'prestashop.core.admin.data_provider.product_interface' => 'getPrestashop_Core_Admin_DataProvider_ProductInterfaceService',
            'prestashop.core.admin.data_updater.product_interface' => 'getPrestashop_Core_Admin_DataUpdater_ProductInterfaceService',
            'prestashop.core.admin.lang.repository' => 'getPrestashop_Core_Admin_Lang_RepositoryService',
            'prestashop.core.admin.module.repository' => 'getPrestashop_Core_Admin_Module_RepositoryService',
            'prestashop.core.admin.page_preference_interface' => 'getPrestashop_Core_Admin_PagePreferenceInterfaceService',
            'prestashop.core.admin.tab.repository' => 'getPrestashop_Core_Admin_Tab_RepositoryService',
            'prestashop.core.admin.translation.repository' => 'getPrestashop_Core_Admin_Translation_RepositoryService',
            'prestashop.core.admin.url_generator' => 'getPrestashop_Core_Admin_UrlGeneratorService',
            'prestashop.core.admin.url_generator_factory' => 'getPrestashop_Core_Admin_UrlGeneratorFactoryService',
            'prestashop.core.admin.url_generator_legacy' => 'getPrestashop_Core_Admin_UrlGeneratorLegacyService',
            'prestashop.core.api.attribute.controller' => 'getPrestashop_Core_Api_Attribute_ControllerService',
            'prestashop.core.api.category.controller' => 'getPrestashop_Core_Api_Category_ControllerService',
            'prestashop.core.api.category.repository' => 'getPrestashop_Core_Api_Category_RepositoryService',
            'prestashop.core.api.feature.controller' => 'getPrestashop_Core_Api_Feature_ControllerService',
            'prestashop.core.api.feature_attribute.repository' => 'getPrestashop_Core_Api_FeatureAttribute_RepositoryService',
            'prestashop.core.api.i18n.controller' => 'getPrestashop_Core_Api_I18n_ControllerService',
            'prestashop.core.api.manufacturer.controller' => 'getPrestashop_Core_Api_Manufacturer_ControllerService',
            'prestashop.core.api.manufacturer.repository' => 'getPrestashop_Core_Api_Manufacturer_RepositoryService',
            'prestashop.core.api.query_stock_movement_params_collection' => 'getPrestashop_Core_Api_QueryStockMovementParamsCollectionService',
            'prestashop.core.api.query_stock_params_collection' => 'getPrestashop_Core_Api_QueryStockParamsCollectionService',
            'prestashop.core.api.query_translation_params_collection' => 'getPrestashop_Core_Api_QueryTranslationParamsCollectionService',
            'prestashop.core.api.stock.controller' => 'getPrestashop_Core_Api_Stock_ControllerService',
            'prestashop.core.api.stock.movements_collection' => 'getPrestashop_Core_Api_Stock_MovementsCollectionService',
            'prestashop.core.api.stock.repository' => 'getPrestashop_Core_Api_Stock_RepositoryService',
            'prestashop.core.api.stockmovement.controller' => 'getPrestashop_Core_Api_Stockmovement_ControllerService',
            'prestashop.core.api.stockmovement.repository' => 'getPrestashop_Core_Api_Stockmovement_RepositoryService',
            'prestashop.core.api.supplier.controller' => 'getPrestashop_Core_Api_Supplier_ControllerService',
            'prestashop.core.api.supplier.repository' => 'getPrestashop_Core_Api_Supplier_RepositoryService',
            'prestashop.core.api.translation.controller' => 'getPrestashop_Core_Api_Translation_ControllerService',
            'prestashop.core.data_provider.stock_interface' => 'getPrestashop_Core_DataProvider_StockInterfaceService',
            'prestashop.core.module.updater' => 'getPrestashop_Core_Module_UpdaterService',
            'prestashop.csv' => 'getPrestashop_CsvService',
            'prestashop.data_provider.modules.recommended' => 'getPrestashop_DataProvider_Modules_RecommendedService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.dumper.xliff' => 'getPrestashop_Dumper_XliffService',
            'prestashop.handler.log' => 'getPrestashop_Handler_LogService',
            'prestashop.hook.dispatcher' => 'getPrestashop_Hook_DispatcherService',
            'prestashop.hook.finder' => 'getPrestashop_Hook_FinderService',
            'prestashop.module.manager' => 'getPrestashop_Module_ManagerService',
            'prestashop.module.zip.manager' => 'getPrestashop_Module_Zip_ManagerService',
            'prestashop.multishop_command_listener' => 'getPrestashop_MultishopCommandListenerService',
            'prestashop.router' => 'getPrestashop_RouterService',
            'prestashop.security.admin.provider' => 'getPrestashop_Security_Admin_ProviderService',
            'prestashop.security.role.dynamic_role_hierarchy' => 'getPrestashop_Security_Role_DynamicRoleHierarchyService',
            'prestashop.service.product' => 'getPrestashop_Service_ProductService',
            'prestashop.service.translation' => 'getPrestashop_Service_TranslationService',
            'prestashop.smarty' => 'getPrestashop_SmartyService',
            'prestashop.tokenized_url_listener' => 'getPrestashop_TokenizedUrlListenerService',
            'prestashop.translation.api.international' => 'getPrestashop_Translation_Api_InternationalService',
            'prestashop.translation.api.stock' => 'getPrestashop_Translation_Api_StockService',
            'prestashop.translation.backoffice_provider' => 'getPrestashop_Translation_BackofficeProviderService',
            'prestashop.translation.chainextractor' => 'getPrestashop_Translation_ChainextractorService',
            'prestashop.translation.database_loader' => 'getPrestashop_Translation_DatabaseLoaderService',
            'prestashop.translation.dumper.xliff' => 'getPrestashop_Translation_Dumper_XliffService',
            'prestashop.translation.extractor.crowdin.php' => 'getPrestashop_Translation_Extractor_Crowdin_PhpService',
            'prestashop.translation.extractor.php' => 'getPrestashop_Translation_Extractor_PhpService',
            'prestashop.translation.extractor.smarty' => 'getPrestashop_Translation_Extractor_SmartyService',
            'prestashop.translation.extractor.twig' => 'getPrestashop_Translation_Extractor_TwigService',
            'prestashop.translation.frontoffice_provider' => 'getPrestashop_Translation_FrontofficeProviderService',
            'prestashop.translation.mails' => 'getPrestashop_Translation_MailsService',
            'prestashop.translation.manager.original_string_manager' => 'getPrestashop_Translation_Manager_OriginalStringManagerService',
            'prestashop.translation.manager.translation_manager' => 'getPrestashop_Translation_Manager_TranslationManagerService',
            'prestashop.translation.module_provider' => 'getPrestashop_Translation_ModuleProviderService',
            'prestashop.translation.modules_provider' => 'getPrestashop_Translation_ModulesProviderService',
            'prestashop.translation.others_provider' => 'getPrestashop_Translation_OthersProviderService',
            'prestashop.translation.parser.crowdin_php_parser' => 'getPrestashop_Translation_Parser_CrowdinPhpParserService',
            'prestashop.translation.search_provider' => 'getPrestashop_Translation_SearchProviderService',
            'prestashop.translation.theme.exporter' => 'getPrestashop_Translation_Theme_ExporterService',
            'prestashop.translation.theme_extractor' => 'getPrestashop_Translation_ThemeExtractorService',
            'prestashop.translation.theme_provider' => 'getPrestashop_Translation_ThemeProviderService',
            'prestashop.translation.theme_translations_factory' => 'getPrestashop_Translation_ThemeTranslationsFactoryService',
            'prestashop.translation.translations_factory' => 'getPrestashop_Translation_TranslationsFactoryService',
            'prestashop.twig.extension.admin' => 'getPrestashop_Twig_Extension_AdminService',
            'prestashop.twig.extension.dataformatter' => 'getPrestashop_Twig_Extension_DataformatterService',
            'prestashop.twig.extension.hook' => 'getPrestashop_Twig_Extension_HookService',
            'prestashop.twig.extension.layout' => 'getPrestashop_Twig_Extension_LayoutService',
            'prestashop.twig.extension.stringloader' => 'getPrestashop_Twig_Extension_StringloaderService',
            'prestashop.twig.extension.translation' => 'getPrestashop_Twig_Extension_TranslationService',
            'prestashop.user_locale.listener' => 'getPrestashop_UserLocale_ListenerService',
            'prestashop.user_provider' => 'getPrestashop_UserProviderService',
            'prestashop.utils.zip_manager' => 'getPrestashop_Utils_ZipManagerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.main' => 'getSecurity_UserChecker_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translation_tools.translation.node_visitor' => 'getTranslationTools_Translation_NodeVisitorService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'csa_guzzle.default_cache_adapter' => 'guzzle.cache',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'monolog.handler.legacy' => 'prestashop.handler.log',
            'ps.theme_translations_factory' => 'prestashop.translation.theme_translations_factory',
            'ps.translations_factory' => 'prestashop.translation.translations_factory',
            'router' => 'prestashop.router',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the public 'assets._version__default' shared service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy
     */
    protected function getAssets_VersionDefaultService()
    {
        return $this->services['assets._version__default'] = new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.7.0', '%s?%s');
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', $this->get('assets._version__default'), $this->get('assets.context')), array());
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('prestashop.router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array())), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 7 => $this->get('main.warmer.cache_warmer'), 8 => new \Csa\Bundle\GuzzleBundle\Description\CacheWarmer\DescriptionCacheWarmer($this->get('csa_guzzle.description_factory'))));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker(), 1 => new \Symfony\Component\Config\Resource\BCResourceInterfaceChecker()));
    }

    /**
     * Gets the public 'csa_guzzle.cache.adapter.doctrine' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter
     */
    protected function getCsaGuzzle_Cache_Adapter_DoctrineService()
    {
        return $this->services['csa_guzzle.cache.adapter.doctrine'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter();
    }

    /**
     * Gets the public 'csa_guzzle.client.addons_api' shared service.
     *
     * @return \GuzzleHttp\Client
     */
    protected function getCsaGuzzle_Client_AddonsApiService()
    {
        $this->services['csa_guzzle.client.addons_api'] = $instance = new \GuzzleHttp\Client(array('base_url' => 'https://api-addons.prestashop.com', 'defaults' => array('timeout' => '5.0'), 'headers' => array('Accept' => 'application/json')));

        call_user_func(array(new \Csa\Bundle\GuzzleBundle\DependencyInjection\Configurator\ClientConfigurator(array(0 => $this->get('csa_guzzle.subscriber.stopwatch'), 1 => $this->get('csa_guzzle.subscriber.debug'), 2 => $this->get('csa_guzzle.subscriber.cache')), NULL), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'csa_guzzle.client_factory' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\Factory\ClientFactory
     */
    protected function getCsaGuzzle_ClientFactoryService()
    {
        $this->services['csa_guzzle.client_factory'] = $instance = new \Csa\Bundle\GuzzleBundle\Factory\ClientFactory('GuzzleHttp\\Client', array());

        $instance->registerSubscriber('stopwatch', $this->get('csa_guzzle.subscriber.stopwatch'));
        $instance->registerSubscriber('debug', $this->get('csa_guzzle.subscriber.debug'));
        $instance->registerSubscriber('cache', $this->get('csa_guzzle.subscriber.cache'));

        return $instance;
    }

    /**
     * Gets the public 'csa_guzzle.data_collector.guzzle' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\DataCollector\GuzzleCollector
     */
    protected function getCsaGuzzle_DataCollector_GuzzleService()
    {
        return $this->services['csa_guzzle.data_collector.guzzle'] = new \Csa\Bundle\GuzzleBundle\DataCollector\GuzzleCollector($this->get('csa_guzzle.subscriber.debug'), 65536);
    }

    /**
     * Gets the public 'csa_guzzle.description_factory' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\Factory\DescriptionFactory
     */
    protected function getCsaGuzzle_DescriptionFactoryService()
    {
        return $this->services['csa_guzzle.description_factory'] = new \Csa\Bundle\GuzzleBundle\Factory\DescriptionFactory($this->get('csa_guzzle.description_loader'), __DIR__, true);
    }

    /**
     * Gets the public 'csa_guzzle.description_loader' shared service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader
     */
    protected function getCsaGuzzle_DescriptionLoaderService()
    {
        return $this->services['csa_guzzle.description_loader'] = new \Symfony\Component\Config\Loader\DelegatingLoader($this->get('csa_guzzle.description_loader.resolver'));
    }

    /**
     * Gets the public 'csa_guzzle.description_loader.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getCsaGuzzle_DescriptionLoader_ResolverService()
    {
        return $this->services['csa_guzzle.description_loader.resolver'] = new \Symfony\Component\Config\Loader\LoaderResolver(array(0 => new \Csa\Bundle\GuzzleBundle\Description\Loader\JsonLoader()));
    }

    /**
     * Gets the public 'csa_guzzle.subscriber.cache' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\CacheSubscriber
     */
    protected function getCsaGuzzle_Subscriber_CacheService()
    {
        return $this->services['csa_guzzle.subscriber.cache'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\CacheSubscriber(new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter($this->get('doctrine.cache.provider'), 300));
    }

    /**
     * Gets the public 'csa_guzzle.subscriber.debug' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\DebugSubscriber
     */
    protected function getCsaGuzzle_Subscriber_DebugService()
    {
        return $this->services['csa_guzzle.subscriber.debug'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\DebugSubscriber();
    }

    /**
     * Gets the public 'csa_guzzle.subscriber.stopwatch' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\StopwatchSubscriber
     */
    protected function getCsaGuzzle_Subscriber_StopwatchService()
    {
        return $this->services['csa_guzzle.subscriber.stopwatch'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\StopwatchSubscriber($this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'csa_guzzle.twig.extension' shared service.
     *
     * @return \Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension
     */
    protected function getCsaGuzzle_Twig_ExtensionService()
    {
        return $this->services['csa_guzzle.twig.extension'] = new \Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension();
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the public 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the public 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the public 'data_collector.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the public 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the public 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -4182, NULL, true, NULL);
    }

    /**
     * Gets the public 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('var_dumper.cli_dumper'));
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'prestashop.adapter.security.admin', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'prestashop.user_locale.listener', 1 => 'onKernelRequest'), 15);
        $instance->addListenerService('kernel.request', array(0 => 'prestashop.adapter.middleware.ssl', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'prestashop.tokenized_url_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('console.command', array(0 => 'prestashop.multishop_command_listener', 1 => 'onConsoleCommand'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('monolog.handler.console_very_verbose', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('prestashop.adapter.module.tab.eventsubscriber', 'PrestaShop\\PrestaShop\\Adapter\\Module\\Tab\\ModuleTabManagementSubscriber');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.cache.provider' shared service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache
     */
    protected function getDoctrine_Cache_ProviderService()
    {
        return $this->services['doctrine.cache.provider'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/doctrine'));
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => '', 'dbname' => 'prestashop', 'user' => 'root', 'password' => '', 'charset' => 'UTF8', 'driverOptions' => array(1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))'), 'serverVersion' => 5.0999999999999996), $b, $c, array('enum' => 'string'));
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[3].'\\src\\PrestaShopBundle\\Entity'))), 'PrestaShopBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('PrestaShopBundle' => 'PrestaShopBundle\\Entity'));
        $b->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $b->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $b->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy($this->get('prestashop.database.naming_strategy'));
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $b->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $b);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_977aa3bfd1fffc2e21037a1e32f8b14cb0252c70ac15ea2dbe0a435c408638ae');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_977aa3bfd1fffc2e21037a1e32f8b14cb0252c70ac15ea2dbe0a435c408638ae');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_977aa3bfd1fffc2e21037a1e32f8b14cb0252c70ac15ea2dbe0a435c408638ae');

        return $instance;
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.csrf_provider' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'form.type.date_picker' => 'form.type.date_picker', 'PrestaShopBundle\\Form\\Admin\\Type\\DatePickerType' => 'form.type.date_picker', 'form.type.product.simple_category' => 'form.type.product.simple_category', 'PrestaShopBundle\\Form\\Admin\\Category\\SimpleCategory' => 'form.type.product.simple_category', 'form.type.product.feature' => 'form.type.product.feature', 'PrestaShopBundle\\Form\\Admin\\Feature\\ProductFeature' => 'form.type.product.feature', 'form.type.product.attachment' => 'form.type.product.attachment', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductAttachement' => 'form.type.product.attachment', 'form.type.product.combination' => 'form.type.product.combination', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombination' => 'form.type.product.combination', 'form.type.product.custom_field' => 'form.type.product.custom_field', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCustomField' => 'form.type.product.custom_field', 'form.type.product.information' => 'form.type.product.information', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductInformation' => 'form.type.product.information', 'form.type.product.options' => 'form.type.product.options', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductOptions' => 'form.type.product.options', 'form.type.product.price' => 'form.type.product.price', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductPrice' => 'form.type.product.price', 'form.type.product.quantity' => 'form.type.product.quantity', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductQuantity' => 'form.type.product.quantity', 'form.type.product.seo' => 'form.type.product.seo', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSeo' => 'form.type.product.seo', 'form.type.product.shipping' => 'form.type.product.shipping', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductShipping' => 'form.type.product.shipping', 'form.type.product.specific_price' => 'form.type.product.specific_price', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSpecificPrice' => 'form.type.product.specific_price', 'form.type.product.supplier_combination' => 'form.type.product.supplier_combination', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSupplierCombination' => 'form.type.product.supplier_combination', 'form.type.product.virtual' => 'form.type.product.virtual', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductVirtual' => 'form.type.product.virtual', 'form.type.product.warehouse_combination' => 'form.type.product.warehouse_combination', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductWarehouseCombination' => 'form.type.product.warehouse_combination', 'form.type.typeahead.product' => 'form.type.typeahead.product', 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductCollectionType' => 'form.type.typeahead.product', 'form.type.typeahead.product_pack' => 'form.type.typeahead.product_pack', 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductPackCollectionType' => 'form.type.typeahead.product_pack', 'form.type.typeahead.customer' => 'form.type.typeahead.customer', 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadCustomerCollectionType' => 'form.type.typeahead.customer', 'form.type.product.combination_bulk' => 'form.type.product.combination_bulk', 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombinationBulk' => 'form.type.product.combination_bulk'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => array(0 => 'form.type.extension.textarea'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => array(0 => 'form.type.extension.text'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => array(0 => 'form.type.extension.money')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.date_picker' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\DatePickerType
     */
    protected function getForm_Type_DatePickerService()
    {
        return $this->services['form.type.date_picker'] = new \PrestaShopBundle\Form\Admin\Type\DatePickerType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type.extension.money' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\CustomMoneyType
     */
    protected function getForm_Type_Extension_MoneyService()
    {
        return $this->services['form.type.extension.money'] = new \PrestaShopBundle\Form\Admin\Type\CustomMoneyType();
    }

    /**
     * Gets the public 'form.type.extension.text' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TextEmptyType
     */
    protected function getForm_Type_Extension_TextService()
    {
        return $this->services['form.type.extension.text'] = new \PrestaShopBundle\Form\Admin\Type\TextEmptyType();
    }

    /**
     * Gets the public 'form.type.extension.textarea' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TextareaEmptyType
     */
    protected function getForm_Type_Extension_TextareaService()
    {
        return $this->services['form.type.extension.textarea'] = new \PrestaShopBundle\Form\Admin\Type\TextareaEmptyType();
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.product.attachment' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductAttachement
     */
    protected function getForm_Type_Product_AttachmentService()
    {
        return $this->services['form.type.product.attachment'] = new \PrestaShopBundle\Form\Admin\Product\ProductAttachement($this->get('translator'), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'form.type.product.combination' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductCombination
     */
    protected function getForm_Type_Product_CombinationService()
    {
        return $this->services['form.type.product.combination'] = new \PrestaShopBundle\Form\Admin\Product\ProductCombination($this->get('translator'), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'form.type.product.combination_bulk' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductCombinationBulk
     */
    protected function getForm_Type_Product_CombinationBulkService()
    {
        return $this->services['form.type.product.combination_bulk'] = new \PrestaShopBundle\Form\Admin\Product\ProductCombinationBulk($this->get('translator'), $this->get('prestashop.adapter.legacy.configuration'));
    }

    /**
     * Gets the public 'form.type.product.custom_field' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductCustomField
     */
    protected function getForm_Type_Product_CustomFieldService()
    {
        return $this->services['form.type.product.custom_field'] = new \PrestaShopBundle\Form\Admin\Product\ProductCustomField($this->get('translator'), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'form.type.product.feature' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Feature\ProductFeature
     */
    protected function getForm_Type_Product_FeatureService()
    {
        return $this->services['form.type.product.feature'] = new \PrestaShopBundle\Form\Admin\Feature\ProductFeature($this->get('translator'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.router'), $this->get('prestashop.adapter.data_provider.feature'));
    }

    /**
     * Gets the public 'form.type.product.information' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductInformation
     */
    protected function getForm_Type_Product_InformationService()
    {
        return $this->services['form.type.product.information'] = new \PrestaShopBundle\Form\Admin\Product\ProductInformation($this->get('translator'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.router'), $this->get('prestashop.adapter.data_provider.category'), $this->get('prestashop.adapter.data_provider.product'), $this->get('prestashop.adapter.data_provider.feature'), $this->get('prestashop.adapter.data_provider.manufacturer'));
    }

    /**
     * Gets the public 'form.type.product.options' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductOptions
     */
    protected function getForm_Type_Product_OptionsService()
    {
        return $this->services['form.type.product.options'] = new \PrestaShopBundle\Form\Admin\Product\ProductOptions($this->get('translator'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.product'), $this->get('prestashop.adapter.data_provider.supplier'), $this->get('prestashop.adapter.data_provider.currency'), $this->get('prestashop.adapter.data_provider.attachment'), $this->get('prestashop.router'));
    }

    /**
     * Gets the public 'form.type.product.price' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductPrice
     */
    protected function getForm_Type_Product_PriceService()
    {
        return $this->services['form.type.product.price'] = new \PrestaShopBundle\Form\Admin\Product\ProductPrice($this->get('translator'), $this->get('prestashop.adapter.data_provider.tax'), $this->get('prestashop.router'), $this->get('prestashop.adapter.shop.context'), $this->get('prestashop.adapter.data_provider.country'), $this->get('prestashop.adapter.data_provider.currency'), $this->get('prestashop.adapter.data_provider.group'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.customer'));
    }

    /**
     * Gets the public 'form.type.product.quantity' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductQuantity
     */
    protected function getForm_Type_Product_QuantityService()
    {
        return $this->services['form.type.product.quantity'] = new \PrestaShopBundle\Form\Admin\Product\ProductQuantity($this->get('translator'), $this->get('prestashop.router'), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'form.type.product.seo' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductSeo
     */
    protected function getForm_Type_Product_SeoService()
    {
        return $this->services['form.type.product.seo'] = new \PrestaShopBundle\Form\Admin\Product\ProductSeo($this->get('translator'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.router'));
    }

    /**
     * Gets the public 'form.type.product.shipping' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductShipping
     */
    protected function getForm_Type_Product_ShippingService()
    {
        return $this->services['form.type.product.shipping'] = new \PrestaShopBundle\Form\Admin\Product\ProductShipping($this->get('translator'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.warehouse'), $this->get('prestashop.adapter.data_provider.carrier'));
    }

    /**
     * Gets the public 'form.type.product.simple_category' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Category\SimpleCategory
     */
    protected function getForm_Type_Product_SimpleCategoryService()
    {
        return $this->services['form.type.product.simple_category'] = new \PrestaShopBundle\Form\Admin\Category\SimpleCategory($this->get('translator'), $this->get('prestashop.adapter.data_provider.category'));
    }

    /**
     * Gets the public 'form.type.product.specific_price' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductSpecificPrice
     */
    protected function getForm_Type_Product_SpecificPriceService()
    {
        return $this->services['form.type.product.specific_price'] = new \PrestaShopBundle\Form\Admin\Product\ProductSpecificPrice($this->get('prestashop.router'), $this->get('translator'), $this->get('prestashop.adapter.shop.context'), $this->get('prestashop.adapter.data_provider.country'), $this->get('prestashop.adapter.data_provider.currency'), $this->get('prestashop.adapter.data_provider.group'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.customer'));
    }

    /**
     * Gets the public 'form.type.product.supplier_combination' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductSupplierCombination
     */
    protected function getForm_Type_Product_SupplierCombinationService()
    {
        return $this->services['form.type.product.supplier_combination'] = new \PrestaShopBundle\Form\Admin\Product\ProductSupplierCombination($this->get('translator'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.data_provider.currency'));
    }

    /**
     * Gets the public 'form.type.product.virtual' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductVirtual
     */
    protected function getForm_Type_Product_VirtualService()
    {
        return $this->services['form.type.product.virtual'] = new \PrestaShopBundle\Form\Admin\Product\ProductVirtual($this->get('translator'), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'form.type.product.warehouse_combination' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Product\ProductWarehouseCombination
     */
    protected function getForm_Type_Product_WarehouseCombinationService()
    {
        return $this->services['form.type.product.warehouse_combination'] = new \PrestaShopBundle\Form\Admin\Product\ProductWarehouseCombination($this->get('translator'), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.typeahead.customer' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TypeaheadCustomerCollectionType
     */
    protected function getForm_Type_Typeahead_CustomerService()
    {
        return $this->services['form.type.typeahead.customer'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadCustomerCollectionType($this->get('prestashop.adapter.data_provider.customer'));
    }

    /**
     * Gets the public 'form.type.typeahead.product' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType
     */
    protected function getForm_Type_Typeahead_ProductService()
    {
        return $this->services['form.type.typeahead.product'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType($this->get('prestashop.adapter.data_provider.product'), $this->get('prestashop.adapter.data_provider.category'));
    }

    /**
     * Gets the public 'form.type.typeahead.product_pack' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TypeaheadProductPackCollectionType
     */
    protected function getForm_Type_Typeahead_ProductPackService()
    {
        return $this->services['form.type.typeahead.product_pack'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadProductPackCollectionType($this->get('prestashop.adapter.data_provider.product'));
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /**
     * Gets the public 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the public 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /**
     * Gets the public 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the public 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.ssi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'guzzle.cache' service.
     *
     * @return \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter
     */
    protected function getGuzzle_CacheService()
    {
        return new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter($this->get('doctrine.cache.provider'), 300);
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the public 'kernel' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en-US', $this->get('prestashop.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('prestashop.handler.log'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'main.warmer.cache_warmer' shared service.
     *
     * @return \PrestaShopBundle\Cache\CacheWarmer
     */
    protected function getMain_Warmer_CacheWarmerService()
    {
        return $this->services['main.warmer.cache_warmer'] = new \PrestaShopBundle\Cache\CacheWarmer($this->get('filesystem'));
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 200, 128 => 100, 32 => 300, 256 => 100));
    }

    /**
     * Gets the public 'monolog.handler.console_very_verbose' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        return $this->services['monolog.handler.console_very_verbose'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 250, 128 => 250, 256 => 100, 32 => 300));
    }

    /**
     * Gets the public 'monolog.handler.debug' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console_very_verbose'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.admin.controller.attribute_generator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Attribute\AdminAttributeGeneratorControllerWrapper
     */
    protected function getPrestashop_Adapter_Admin_Controller_AttributeGeneratorService()
    {
        return $this->services['prestashop.adapter.admin.controller.attribute_generator'] = new \PrestaShop\PrestaShop\Adapter\Attribute\AdminAttributeGeneratorControllerWrapper();
    }

    /**
     * Gets the public 'prestashop.adapter.admin.controller.category' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Category\AdminCategoryControllerWrapper
     */
    protected function getPrestashop_Adapter_Admin_Controller_CategoryService()
    {
        return $this->services['prestashop.adapter.admin.controller.category'] = new \PrestaShop\PrestaShop\Adapter\Category\AdminCategoryControllerWrapper();
    }

    /**
     * Gets the public 'prestashop.adapter.admin.wrapper.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AdminProductWrapper
     */
    protected function getPrestashop_Adapter_Admin_Wrapper_ProductService()
    {
        return $this->services['prestashop.adapter.admin.wrapper.product'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductWrapper($this->get('translator'), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.attachment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AttachmentDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_AttachmentService()
    {
        return $this->services['prestashop.adapter.data_provider.attachment'] = new \PrestaShop\PrestaShop\Adapter\Product\AttachmentDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.attribute' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Attribute\AttributeDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_AttributeService()
    {
        return $this->services['prestashop.adapter.data_provider.attribute'] = new \PrestaShop\PrestaShop\Adapter\Attribute\AttributeDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.carrier' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Carrier\CarrierDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CarrierService()
    {
        return $this->services['prestashop.adapter.data_provider.carrier'] = new \PrestaShop\PrestaShop\Adapter\Carrier\CarrierDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.category' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CategoryService()
    {
        return $this->services['prestashop.adapter.data_provider.category'] = new \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider($this->get("prestashop.adapter.legacy.context"));
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.combination' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CombinationDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CombinationService()
    {
        return $this->services['prestashop.adapter.data_provider.combination'] = new \PrestaShop\PrestaShop\Adapter\CombinationDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CustomerService()
    {
        return $this->services['prestashop.adapter.data_provider.customer'] = new \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.feature' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_FeatureService()
    {
        return $this->services['prestashop.adapter.data_provider.feature'] = new \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.group' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_GroupService()
    {
        return $this->services['prestashop.adapter.data_provider.group'] = new \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.manufacturer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_ManufacturerService()
    {
        return $this->services['prestashop.adapter.data_provider.manufacturer'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.module' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_ModuleService()
    {
        $this->services['prestashop.adapter.data_provider.module'] = $instance = new \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider($this->get('prestashop.adapter.legacy.logger'), $this->get('translator'), $this->get('doctrine.orm.default_entity_manager'));

        $instance->setEmployeeId((($this->get("prestashop.adapter.legacy.context")->getContext()->employee) ? ($this->get("prestashop.adapter.legacy.context")->getContext()->employee->id) : (0)));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.pack' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Pack\PackDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_PackService()
    {
        return $this->services['prestashop.adapter.data_provider.pack'] = new \PrestaShop\PrestaShop\Adapter\Pack\PackDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_ProductService()
    {
        return $this->services['prestashop.adapter.data_provider.product'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.supplier' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_SupplierService()
    {
        return $this->services['prestashop.adapter.data_provider.supplier'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.tax' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_TaxService()
    {
        return $this->services['prestashop.adapter.data_provider.tax'] = new \PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.warehouse' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_WarehouseService()
    {
        return $this->services['prestashop.adapter.data_provider.warehouse'] = new \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.formatter.price' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter
     */
    protected function getPrestashop_Adapter_Formatter_PriceService()
    {
        return $this->services['prestashop.adapter.formatter.price'] = new \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter();
    }

    /**
     * Gets the public 'prestashop.adapter.image_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ImageManager
     */
    protected function getPrestashop_Adapter_ImageManagerService()
    {
        return $this->services['prestashop.adapter.image_manager'] = new \PrestaShop\PrestaShop\Adapter\ImageManager($this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.block.helper.subscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber
     */
    protected function getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.block.helper.subscriber'] = new \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.hook.subscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber
     */
    protected function getPrestashop_Adapter_Legacy_Hook_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.hook.subscriber'] = new \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.logger' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyLogger
     */
    protected function getPrestashop_Adapter_Legacy_LoggerService()
    {
        return $this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger();
    }

    /**
     * Gets the public 'prestashop.adapter.middleware.ssl' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware
     */
    protected function getPrestashop_Adapter_Middleware_SslService()
    {
        return $this->services['prestashop.adapter.middleware.ssl'] = new \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware();
    }

    /**
     * Gets the public 'prestashop.adapter.module.self_configurator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleSelfConfigurator
     */
    protected function getPrestashop_Adapter_Module_SelfConfiguratorService()
    {
        return $this->services['prestashop.adapter.module.self_configurator'] = new \PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleSelfConfigurator($this->get('prestashop.core.admin.module.repository'), $this->get('prestashop.adapter.legacy.configuration'), $this->get('doctrine.dbal.default_connection'));
    }

    /**
     * Gets the public 'prestashop.adapter.module.tab.eventsubscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabManagementSubscriber
     */
    protected function getPrestashop_Adapter_Module_Tab_EventsubscriberService()
    {
        return $this->services['prestashop.adapter.module.tab.eventsubscriber'] = new \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabManagementSubscriber($this->get('prestashop.adapter.module.tab.register'), $this->get('prestashop.adapter.module.tab.unregister'));
    }

    /**
     * Gets the public 'prestashop.adapter.module.tab.register' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabRegister
     */
    protected function getPrestashop_Adapter_Module_Tab_RegisterService()
    {
        return $this->services['prestashop.adapter.module.tab.register'] = new \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabRegister($this->get('prestashop.core.admin.tab.repository'), $this->get('prestashop.core.admin.lang.repository'), $this->get('logger'), $this->get('translator'), $this->get('filesystem'), $this->get("prestashop.adapter.legacy.context")->getLanguages());
    }

    /**
     * Gets the public 'prestashop.adapter.module.tab.unregister' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister
     */
    protected function getPrestashop_Adapter_Module_Tab_UnregisterService()
    {
        return $this->services['prestashop.adapter.module.tab.unregister'] = new \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister($this->get('prestashop.core.admin.tab.repository'), $this->get('prestashop.core.admin.lang.repository'), $this->get('logger'), $this->get('translator'));
    }

    /**
     * Gets the public 'prestashop.adapter.presenter.module' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModulePresenter
     */
    protected function getPrestashop_Adapter_Presenter_ModuleService()
    {
        return $this->services['prestashop.adapter.presenter.module'] = new \PrestaShop\PrestaShop\Adapter\Module\ModulePresenter($this->get("prestashop.adapter.legacy.context")->getContext()->currency, $this->get('prestashop.adapter.formatter.price'));
    }

    /**
     * Gets the public 'prestashop.adapter.security.admin' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\Admin
     */
    protected function getPrestashop_Adapter_Security_AdminService()
    {
        return $this->services['prestashop.adapter.security.admin'] = new \PrestaShop\PrestaShop\Adapter\Security\Admin($this->get('prestashop.adapter.legacy.context'), $this->get('security.token_storage'), $this->get('prestashop.security.admin.provider'));
    }

    /**
     * Gets the public 'prestashop.adapter.shop.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Shop\Context
     */
    protected function getPrestashop_Adapter_Shop_ContextService()
    {
        return $this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context();
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.addons.client_api' shared service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Marketplace\ApiClient
     */
    protected function getPrestashop_Addons_ClientApiService()
    {
        $this->services['prestashop.addons.client_api'] = $instance = new \PrestaShopBundle\Service\DataProvider\Marketplace\ApiClient($this->get('csa_guzzle.client.addons_api'), $this->get("translator")->getLocale(), $this->get("prestashop.adapter.data_provider.country")->getIsoCodebyId(), $this->get('prestashop.adapter.tools'));

        $instance->setSslVerification(($this->targetDirs[3].'/app/cache/dev\\cacert.pem'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.cache.refresh' shared service.
     *
     * @return \PrestaShopBundle\Service\Cache\Refresh
     */
    protected function getPrestashop_Cache_RefreshService()
    {
        $this->services['prestashop.cache.refresh'] = $instance = new \PrestaShopBundle\Service\Cache\Refresh('dev');

        $instance->addCacheClear();

        return $instance;
    }

    /**
     * Gets the public 'prestashop.categories_provider' shared service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider
     */
    protected function getPrestashop_CategoriesProviderService()
    {
        return $this->services['prestashop.categories_provider'] = new \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider($this->get('prestashop.addons.client_api'));
    }

    /**
     * Gets the public 'prestashop.compiler.smarty.template' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Compiler\Smarty\TranslationTemplateCompiler
     */
    protected function getPrestashop_Compiler_Smarty_TemplateService()
    {
        return $this->services['prestashop.compiler.smarty.template'] = new \PrestaShop\TranslationToolsBundle\Translation\Compiler\Smarty\TranslationTemplateCompiler('Smarty_Internal_Templatelexer', 'Smarty_Internal_Templateparser', $this->get('prestashop.smarty'));
    }

    /**
     * Gets the public 'prestashop.core.addon.theme.exporter' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeExporter
     */
    protected function getPrestashop_Core_Addon_Theme_ExporterService()
    {
        return $this->services['prestashop.core.addon.theme.exporter'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeExporter($this->get('prestashop.adapter.legacy.configuration'), $this->get('filesystem'), $this->get('prestashop.core.admin.lang.repository'), $this->get('prestashop.translation.theme.exporter'));
    }

    /**
     * Gets the public 'prestashop.core.addon.theme.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository
     */
    protected function getPrestashop_Core_Addon_Theme_RepositoryService()
    {
        return $this->services['prestashop.core.addon.theme.repository'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository($this->get('prestashop.adapter.legacy.configuration'), $this->get('filesystem'), $this->get("prestashop.adapter.legacy.context")->getContext()->shop);
    }

    /**
     * Gets the public 'prestashop.core.admin.data_provider.addons_interface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Addons\AddonsDataProvider
     */
    protected function getPrestashop_Core_Admin_DataProvider_AddonsInterfaceService()
    {
        $this->services['prestashop.core.admin.data_provider.addons_interface'] = $instance = new \PrestaShop\PrestaShop\Adapter\Addons\AddonsDataProvider($this->get('prestashop.addons.client_api'), $this->get('prestashop.module.zip.manager'));

        $instance->cacheDir = __DIR__;

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.admin.data_provider.module_interface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider
     */
    protected function getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService()
    {
        $this->services['prestashop.core.admin.data_provider.module_interface'] = $instance = new \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider($this->get('translator'), $this->get('logger'), $this->get('prestashop.core.admin.data_provider.addons_interface'), $this->get('prestashop.categories_provider'), $this->get('doctrine.cache.provider'));

        $instance->setRouter($this->get('prestashop.router'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.admin.data_provider.product_interface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider
     */
    protected function getPrestashop_Core_Admin_DataProvider_ProductInterfaceService()
    {
        return $this->services['prestashop.core.admin.data_provider.product_interface'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider($this->get('doctrine.orm.default_entity_manager'), $this->get('prestashop.adapter.image_manager'));
    }

    /**
     * Gets the public 'prestashop.core.admin.data_updater.product_interface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataUpdater
     */
    protected function getPrestashop_Core_Admin_DataUpdater_ProductInterfaceService()
    {
        return $this->services['prestashop.core.admin.data_updater.product_interface'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataUpdater($this->get('prestashop.hook.dispatcher'));
    }

    /**
     * Gets the public 'prestashop.core.admin.lang.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\LangRepository
     */
    protected function getPrestashop_Core_Admin_Lang_RepositoryService()
    {
        return $this->services['prestashop.core.admin.lang.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('PrestaShopBundle\\Entity\\Lang');
    }

    /**
     * Gets the public 'prestashop.core.admin.module.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Module\ModuleRepository
     */
    protected function getPrestashop_Core_Admin_Module_RepositoryService()
    {
        return $this->services['prestashop.core.admin.module.repository'] = new \PrestaShop\PrestaShop\Core\Addon\Module\ModuleRepository($this->get('prestashop.core.admin.data_provider.module_interface'), $this->get('prestashop.adapter.data_provider.module'), $this->get('prestashop.core.module.updater'), $this->get('prestashop.adapter.legacy.logger'), $this->get('translator'), $this->get('doctrine.cache.provider'));
    }

    /**
     * Gets the public 'prestashop.core.admin.page_preference_interface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Admin\PagePreference
     */
    protected function getPrestashop_Core_Admin_PagePreferenceInterfaceService()
    {
        return $this->services['prestashop.core.admin.page_preference_interface'] = new \PrestaShop\PrestaShop\Adapter\Admin\PagePreference($this->get('session'));
    }

    /**
     * Gets the public 'prestashop.core.admin.tab.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\TabRepository
     */
    protected function getPrestashop_Core_Admin_Tab_RepositoryService()
    {
        return $this->services['prestashop.core.admin.tab.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('PrestaShopBundle\\Entity\\Tab');
    }

    /**
     * Gets the public 'prestashop.core.admin.translation.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\TranslationRepository
     */
    protected function getPrestashop_Core_Admin_Translation_RepositoryService()
    {
        return $this->services['prestashop.core.admin.translation.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('PrestaShopBundle\\Entity\\Translation');
    }

    /**
     * Gets the public 'prestashop.core.admin.url_generator' shared service.
     *
     * @return \Symfony\Component\Routing\Generator\UrlGeneratorInterface
     */
    protected function getPrestashop_Core_Admin_UrlGeneratorService()
    {
        return $this->services['prestashop.core.admin.url_generator'] = $this->get('prestashop.core.admin.url_generator_factory')->forSymfony();
    }

    /**
     * Gets the public 'prestashop.core.admin.url_generator_factory' shared service.
     *
     * @return \PrestaShopBundle\Service\TransitionalBehavior\AdminUrlGeneratorFactory
     */
    protected function getPrestashop_Core_Admin_UrlGeneratorFactoryService()
    {
        return $this->services['prestashop.core.admin.url_generator_factory'] = new \PrestaShopBundle\Service\TransitionalBehavior\AdminUrlGeneratorFactory($this->get('prestashop.router'));
    }

    /**
     * Gets the public 'prestashop.core.admin.url_generator_legacy' shared service.
     *
     * @return \Symfony\Component\Routing\Generator\UrlGeneratorInterface
     */
    protected function getPrestashop_Core_Admin_UrlGeneratorLegacyService()
    {
        return $this->services['prestashop.core.admin.url_generator_legacy'] = $this->get('prestashop.core.admin.url_generator_factory')->forLegacy($this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'prestashop.core.api.attribute.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\AttributeController
     */
    protected function getPrestashop_Core_Api_Attribute_ControllerService()
    {
        $this->services['prestashop.core.api.attribute.controller'] = $instance = new \PrestaShopBundle\Controller\Api\AttributeController();

        $instance->featureAttributeRepository = $this->get('prestashop.core.api.feature_attribute.repository');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.category.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\CategoryController
     */
    protected function getPrestashop_Core_Api_Category_ControllerService()
    {
        $this->services['prestashop.core.api.category.controller'] = $instance = new \PrestaShopBundle\Controller\Api\CategoryController();

        $instance->categoryRepository = $this->get('prestashop.core.api.category.repository');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.category.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\CategoryRepository
     */
    protected function getPrestashop_Core_Api_Category_RepositoryService()
    {
        return $this->services['prestashop.core.api.category.repository'] = new \PrestaShopBundle\Entity\Repository\CategoryRepository($this->get('doctrine.dbal.default_connection'), $this->get('prestashop.adapter.legacy.context'), 'jms_');
    }

    /**
     * Gets the public 'prestashop.core.api.feature.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\FeatureController
     */
    protected function getPrestashop_Core_Api_Feature_ControllerService()
    {
        $this->services['prestashop.core.api.feature.controller'] = $instance = new \PrestaShopBundle\Controller\Api\FeatureController();

        $instance->featureAttributeRepository = $this->get('prestashop.core.api.feature_attribute.repository');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.feature_attribute.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\FeatureAttributeRepository
     */
    protected function getPrestashop_Core_Api_FeatureAttribute_RepositoryService()
    {
        return $this->services['prestashop.core.api.feature_attribute.repository'] = new \PrestaShopBundle\Entity\Repository\FeatureAttributeRepository($this->get('doctrine.dbal.default_connection'), $this->get('prestashop.adapter.legacy.context'), 'jms_');
    }

    /**
     * Gets the public 'prestashop.core.api.i18n.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\I18nController
     */
    protected function getPrestashop_Core_Api_I18n_ControllerService()
    {
        $this->services['prestashop.core.api.i18n.controller'] = $instance = new \PrestaShopBundle\Controller\Api\I18nController();

        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.manufacturer.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\ManufacturerController
     */
    protected function getPrestashop_Core_Api_Manufacturer_ControllerService()
    {
        $this->services['prestashop.core.api.manufacturer.controller'] = $instance = new \PrestaShopBundle\Controller\Api\ManufacturerController();

        $instance->manufacturerRepository = $this->get('prestashop.core.api.manufacturer.repository');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.manufacturer.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\ManufacturerRepository
     */
    protected function getPrestashop_Core_Api_Manufacturer_RepositoryService()
    {
        return $this->services['prestashop.core.api.manufacturer.repository'] = new \PrestaShopBundle\Entity\Repository\ManufacturerRepository($this->get('doctrine.dbal.default_connection'), $this->get('prestashop.adapter.legacy.context'), 'jms_');
    }

    /**
     * Gets the public 'prestashop.core.api.query_stock_movement_params_collection' shared service.
     *
     * @return \PrestaShopBundle\Api\QueryStockMovementParamsCollection
     */
    protected function getPrestashop_Core_Api_QueryStockMovementParamsCollectionService()
    {
        return $this->services['prestashop.core.api.query_stock_movement_params_collection'] = new \PrestaShopBundle\Api\QueryStockMovementParamsCollection();
    }

    /**
     * Gets the public 'prestashop.core.api.query_stock_params_collection' shared service.
     *
     * @return \PrestaShopBundle\Api\QueryStockParamsCollection
     */
    protected function getPrestashop_Core_Api_QueryStockParamsCollectionService()
    {
        return $this->services['prestashop.core.api.query_stock_params_collection'] = new \PrestaShopBundle\Api\QueryStockParamsCollection();
    }

    /**
     * Gets the public 'prestashop.core.api.query_translation_params_collection' shared service.
     *
     * @return \PrestaShopBundle\Api\QueryTranslationParamsCollection
     */
    protected function getPrestashop_Core_Api_QueryTranslationParamsCollectionService()
    {
        return $this->services['prestashop.core.api.query_translation_params_collection'] = new \PrestaShopBundle\Api\QueryTranslationParamsCollection();
    }

    /**
     * Gets the public 'prestashop.core.api.stock.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\StockController
     */
    protected function getPrestashop_Core_Api_Stock_ControllerService()
    {
        $this->services['prestashop.core.api.stock.controller'] = $instance = new \PrestaShopBundle\Controller\Api\StockController();

        $instance->movements = $this->get('prestashop.core.api.stock.movements_collection');
        $instance->stockRepository = $this->get('prestashop.core.api.stock.repository');
        $instance->queryParams = $this->get('prestashop.core.api.query_stock_params_collection');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.stock.movements_collection' shared service.
     *
     * @return \PrestaShopBundle\Api\Stock\MovementsCollection
     */
    protected function getPrestashop_Core_Api_Stock_MovementsCollectionService()
    {
        return $this->services['prestashop.core.api.stock.movements_collection'] = new \PrestaShopBundle\Api\Stock\MovementsCollection();
    }

    /**
     * Gets the public 'prestashop.core.api.stock.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\StockRepository
     */
    protected function getPrestashop_Core_Api_Stock_RepositoryService()
    {
        return $this->services['prestashop.core.api.stock.repository'] = new \PrestaShopBundle\Entity\Repository\StockRepository($this, $this->get('doctrine.dbal.default_connection'), $this->get('doctrine.orm.default_entity_manager'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.image_manager'), $this->get('prestashop.core.data_provider.stock_interface'), 'jms_');
    }

    /**
     * Gets the public 'prestashop.core.api.stockmovement.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\StockMovementController
     */
    protected function getPrestashop_Core_Api_Stockmovement_ControllerService()
    {
        $this->services['prestashop.core.api.stockmovement.controller'] = $instance = new \PrestaShopBundle\Controller\Api\StockMovementController();

        $instance->stockMovementRepository = $this->get('prestashop.core.api.stockmovement.repository');
        $instance->queryParams = $this->get('prestashop.core.api.query_stock_movement_params_collection');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.stockmovement.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\StockMovementRepository
     */
    protected function getPrestashop_Core_Api_Stockmovement_RepositoryService()
    {
        return $this->services['prestashop.core.api.stockmovement.repository'] = new \PrestaShopBundle\Entity\Repository\StockMovementRepository($this, $this->get('doctrine.dbal.default_connection'), $this->get('doctrine.orm.default_entity_manager'), $this->get('prestashop.adapter.legacy.context'), $this->get('prestashop.adapter.image_manager'), 'jms_');
    }

    /**
     * Gets the public 'prestashop.core.api.supplier.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\SupplierController
     */
    protected function getPrestashop_Core_Api_Supplier_ControllerService()
    {
        $this->services['prestashop.core.api.supplier.controller'] = $instance = new \PrestaShopBundle\Controller\Api\SupplierController();

        $instance->supplierRepository = $this->get('prestashop.core.api.supplier.repository');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.api.supplier.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\SupplierRepository
     */
    protected function getPrestashop_Core_Api_Supplier_RepositoryService()
    {
        return $this->services['prestashop.core.api.supplier.repository'] = new \PrestaShopBundle\Entity\Repository\SupplierRepository($this->get('doctrine.dbal.default_connection'), $this->get('prestashop.adapter.legacy.context'), 'jms_');
    }

    /**
     * Gets the public 'prestashop.core.api.translation.controller' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\TranslationController
     */
    protected function getPrestashop_Core_Api_Translation_ControllerService()
    {
        $this->services['prestashop.core.api.translation.controller'] = $instance = new \PrestaShopBundle\Controller\Api\TranslationController();

        $instance->translationService = $this->get('prestashop.service.translation');
        $instance->queryParams = $this->get('prestashop.core.api.query_translation_params_collection');
        $instance->setLogger($this->get('logger'));
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.data_provider.stock_interface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\StockManager
     */
    protected function getPrestashop_Core_DataProvider_StockInterfaceService()
    {
        return $this->services['prestashop.core.data_provider.stock_interface'] = new \PrestaShop\PrestaShop\Adapter\StockManager();
    }

    /**
     * Gets the public 'prestashop.core.module.updater' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleDataUpdater
     */
    protected function getPrestashop_Core_Module_UpdaterService()
    {
        return $this->services['prestashop.core.module.updater'] = new \PrestaShop\PrestaShop\Adapter\Module\ModuleDataUpdater($this->get('prestashop.core.admin.data_provider.addons_interface'), $this->get('prestashop.core.admin.data_provider.module_interface'));
    }

    /**
     * Gets the public 'prestashop.csv' shared service.
     *
     * @return \PrestaShopBundle\Service\Csv
     */
    protected function getPrestashop_CsvService()
    {
        return $this->services['prestashop.csv'] = new \PrestaShopBundle\Service\Csv();
    }

    /**
     * Gets the public 'prestashop.data_provider.modules.recommended' shared service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Admin\RecommendedModules
     */
    protected function getPrestashop_DataProvider_Modules_RecommendedService()
    {
        return $this->services['prestashop.data_provider.modules.recommended'] = new \PrestaShopBundle\Service\DataProvider\Admin\RecommendedModules($this->get('prestashop.router'));
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('jms_');
    }

    /**
     * Gets the public 'prestashop.dumper.xliff' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper
     */
    protected function getPrestashop_Dumper_XliffService()
    {
        return $this->services['prestashop.dumper.xliff'] = new \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'prestashop.handler.log' shared service.
     *
     * @return \PrestaShopBundle\Service\Log\LogHandler
     */
    protected function getPrestashop_Handler_LogService()
    {
        return $this->services['prestashop.handler.log'] = new \PrestaShopBundle\Service\Log\LogHandler($this);
    }

    /**
     * Gets the public 'prestashop.hook.dispatcher' shared service.
     *
     * @return \PrestaShopBundle\Service\Hook\HookDispatcher
     */
    protected function getPrestashop_Hook_DispatcherService()
    {
        $this->services['prestashop.hook.dispatcher'] = $instance = new \PrestaShopBundle\Service\Hook\HookDispatcher();

        $instance->addSubscriber($this->get('prestashop.adapter.legacy.hook.subscriber'));
        $instance->addSubscriber($this->get('prestashop.adapter.legacy.block.helper.subscriber'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.hook.finder' shared service.
     *
     * @return \PrestaShopBundle\Service\Hook\HookFinder
     */
    protected function getPrestashop_Hook_FinderService()
    {
        return $this->services['prestashop.hook.finder'] = new \PrestaShopBundle\Service\Hook\HookFinder();
    }

    /**
     * Gets the public 'prestashop.module.manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager
     */
    protected function getPrestashop_Module_ManagerService()
    {
        return $this->services['prestashop.module.manager'] = new \PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager($this->get('prestashop.core.admin.data_provider.module_interface'), $this->get('prestashop.adapter.data_provider.module'), $this->get('prestashop.core.module.updater'), $this->get('prestashop.core.admin.module.repository'), $this->get('prestashop.module.zip.manager'), $this->get('translator'), $this->get('debug.event_dispatcher'), $this->get("prestashop.adapter.legacy.context")->getContext()->employee);
    }

    /**
     * Gets the public 'prestashop.module.zip.manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleZipManager
     */
    protected function getPrestashop_Module_Zip_ManagerService()
    {
        return $this->services['prestashop.module.zip.manager'] = new \PrestaShop\PrestaShop\Adapter\Module\ModuleZipManager($this->get('filesystem'), $this->get('translator'));
    }

    /**
     * Gets the public 'prestashop.multishop_command_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\MultishopCommandListener
     */
    protected function getPrestashop_MultishopCommandListenerService()
    {
        return $this->services['prestashop.multishop_command_listener'] = new \PrestaShopBundle\EventListener\MultishopCommandListener($this->get('prestashop.adapter.shop.context'), $this->get("kernel")->getRootDir());
    }

    /**
     * Gets the public 'prestashop.router' shared service.
     *
     * @return \PrestaShopBundle\Service\Routing\Router
     */
    protected function getPrestashop_RouterService()
    {
        $this->services['prestashop.router'] = $instance = new \PrestaShopBundle\Service\Routing\Router($this, ($this->targetDirs[2].'/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setTokenManager($this->get('security.csrf.token_manager'));
        $instance->setUserProvider($this->get("prestashop.user_provider"));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.security.admin.provider' shared service.
     *
     * @return \PrestaShopBundle\Security\Admin\EmployeeProvider
     */
    protected function getPrestashop_Security_Admin_ProviderService()
    {
        return $this->services['prestashop.security.admin.provider'] = new \PrestaShopBundle\Security\Admin\EmployeeProvider($this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'prestashop.security.role.dynamic_role_hierarchy' shared service.
     *
     * @return \PrestaShopBundle\Security\Role\DynamicRoleHierarchy
     */
    protected function getPrestashop_Security_Role_DynamicRoleHierarchyService()
    {
        return $this->services['prestashop.security.role.dynamic_role_hierarchy'] = new \PrestaShopBundle\Security\Role\DynamicRoleHierarchy();
    }

    /**
     * Gets the public 'prestashop.service.product' shared service.
     *
     * @return \PrestaShopBundle\Service\ProductService
     */
    protected function getPrestashop_Service_ProductService()
    {
        return $this->services['prestashop.service.product'] = new \PrestaShopBundle\Service\ProductService($this->get('prestashop.adapter.data_provider.product'));
    }

    /**
     * Gets the public 'prestashop.service.translation' shared service.
     *
     * @return \PrestaShopBundle\Service\TranslationService
     */
    protected function getPrestashop_Service_TranslationService()
    {
        $this->services['prestashop.service.translation'] = $instance = new \PrestaShopBundle\Service\TranslationService();

        $instance->container = $this;

        return $instance;
    }

    /**
     * Gets the public 'prestashop.smarty' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Smarty
     */
    protected function getPrestashop_SmartyService()
    {
        $this->services['prestashop.smarty'] = $instance = new \PrestaShop\TranslationToolsBundle\Smarty();

        $instance->setCompileDir((__DIR__.'/smarty'));
        $instance->forceCompile(true);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.tokenized_url_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\TokenizedUrlsListener
     */
    protected function getPrestashop_TokenizedUrlListenerService()
    {
        return $this->services['prestashop.tokenized_url_listener'] = new \PrestaShopBundle\EventListener\TokenizedUrlsListener($this->get('security.csrf.token_manager'), $this->get('prestashop.router'), $this->get("prestashop.user_provider")->getUsername(), $this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'prestashop.translation.api.international' shared service.
     *
     * @return \PrestaShopBundle\Translation\Api\InternationalApi
     */
    protected function getPrestashop_Translation_Api_InternationalService()
    {
        $this->services['prestashop.translation.api.international'] = $instance = new \PrestaShopBundle\Translation\Api\InternationalApi();

        $instance->setTranslator($this->get('translator'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.translation.api.stock' shared service.
     *
     * @return \PrestaShopBundle\Translation\Api\StockApi
     */
    protected function getPrestashop_Translation_Api_StockService()
    {
        $this->services['prestashop.translation.api.stock'] = $instance = new \PrestaShopBundle\Translation\Api\StockApi();

        $instance->setTranslator($this->get('translator'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.translation.backoffice_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\BackOfficeProvider
     */
    protected function getPrestashop_Translation_BackofficeProviderService()
    {
        return $this->services['prestashop.translation.backoffice_provider'] = new \PrestaShopBundle\Translation\Provider\BackOfficeProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /**
     * Gets the public 'prestashop.translation.chainextractor' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor
     */
    protected function getPrestashop_Translation_ChainextractorService()
    {
        $this->services['prestashop.translation.chainextractor'] = $instance = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('prestashop.translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('prestashop.translation.extractor.twig'));
        $instance->addExtractor('smarty', $this->get('prestashop.translation.extractor.smarty'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.translation.database_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\Loader\DatabaseTranslationLoader
     */
    protected function getPrestashop_Translation_DatabaseLoaderService()
    {
        return $this->services['prestashop.translation.database_loader'] = new \PrestaShopBundle\Translation\Loader\DatabaseTranslationLoader($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'prestashop.translation.dumper.xliff' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper
     */
    protected function getPrestashop_Translation_Dumper_XliffService()
    {
        return $this->services['prestashop.translation.dumper.xliff'] = new \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'prestashop.translation.extractor.crowdin.php' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\CrowdinPhpExtractor
     */
    protected function getPrestashop_Translation_Extractor_Crowdin_PhpService()
    {
        return $this->services['prestashop.translation.extractor.crowdin.php'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\CrowdinPhpExtractor($this->get('prestashop.translation.parser.crowdin_php_parser'), $this->get('prestashop.translation.manager.original_string_manager'));
    }

    /**
     * Gets the public 'prestashop.translation.extractor.php' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor
     */
    protected function getPrestashop_Translation_Extractor_PhpService()
    {
        return $this->services['prestashop.translation.extractor.php'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor();
    }

    /**
     * Gets the public 'prestashop.translation.extractor.smarty' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor
     */
    protected function getPrestashop_Translation_Extractor_SmartyService()
    {
        return $this->services['prestashop.translation.extractor.smarty'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor($this->get('prestashop.compiler.smarty.template'));
    }

    /**
     * Gets the public 'prestashop.translation.extractor.twig' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\TwigExtractor
     */
    protected function getPrestashop_Translation_Extractor_TwigService()
    {
        return $this->services['prestashop.translation.extractor.twig'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the public 'prestashop.translation.frontoffice_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\FrontOfficeProvider
     */
    protected function getPrestashop_Translation_FrontofficeProviderService()
    {
        return $this->services['prestashop.translation.frontoffice_provider'] = new \PrestaShopBundle\Translation\Provider\FrontOfficeProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /**
     * Gets the public 'prestashop.translation.mails' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\MailsProvider
     */
    protected function getPrestashop_Translation_MailsService()
    {
        return $this->services['prestashop.translation.mails'] = new \PrestaShopBundle\Translation\Provider\MailsProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /**
     * Gets the public 'prestashop.translation.manager.original_string_manager' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Manager\OriginalStringManager
     */
    protected function getPrestashop_Translation_Manager_OriginalStringManagerService()
    {
        return $this->services['prestashop.translation.manager.original_string_manager'] = new \PrestaShop\TranslationToolsBundle\Translation\Manager\OriginalStringManager($this->get('prestashop.translation.parser.crowdin_php_parser'));
    }

    /**
     * Gets the public 'prestashop.translation.manager.translation_manager' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Manager\TranslationManager
     */
    protected function getPrestashop_Translation_Manager_TranslationManagerService()
    {
        return $this->services['prestashop.translation.manager.translation_manager'] = new \PrestaShop\TranslationToolsBundle\Translation\Manager\TranslationManager($this->get('prestashop.translation.parser.crowdin_php_parser'));
    }

    /**
     * Gets the public 'prestashop.translation.module_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\ModuleProvider
     */
    protected function getPrestashop_Translation_ModuleProviderService()
    {
        return $this->services['prestashop.translation.module_provider'] = new \PrestaShopBundle\Translation\Provider\ModuleProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /**
     * Gets the public 'prestashop.translation.modules_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\ModulesProvider
     */
    protected function getPrestashop_Translation_ModulesProviderService()
    {
        return $this->services['prestashop.translation.modules_provider'] = new \PrestaShopBundle\Translation\Provider\ModulesProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /**
     * Gets the public 'prestashop.translation.others_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\OthersProvider
     */
    protected function getPrestashop_Translation_OthersProviderService()
    {
        return $this->services['prestashop.translation.others_provider'] = new \PrestaShopBundle\Translation\Provider\OthersProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /**
     * Gets the public 'prestashop.translation.parser.crowdin_php_parser' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Parser\CrowdinPhpParser
     */
    protected function getPrestashop_Translation_Parser_CrowdinPhpParserService()
    {
        return $this->services['prestashop.translation.parser.crowdin_php_parser'] = new \PrestaShop\TranslationToolsBundle\Translation\Parser\CrowdinPhpParser();
    }

    /**
     * Gets the public 'prestashop.translation.search_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\SearchProvider
     */
    protected function getPrestashop_Translation_SearchProviderService()
    {
        return $this->services['prestashop.translation.search_provider'] = new \PrestaShopBundle\Translation\Provider\SearchProvider($this->get('prestashop.translation.database_loader'), ($this->targetDirs[2].'/Resources/translations'));
    }

    /**
     * Gets the public 'prestashop.translation.theme.exporter' shared service.
     *
     * @return \PrestaShopBundle\Translation\Exporter\ThemeExporter
     */
    protected function getPrestashop_Translation_Theme_ExporterService()
    {
        $this->services['prestashop.translation.theme.exporter'] = $instance = new \PrestaShopBundle\Translation\Exporter\ThemeExporter($this->get('prestashop.translation.theme_extractor'), $this->get('prestashop.translation.theme_provider'), $this->get('prestashop.core.addon.theme.repository'), $this->get('prestashop.translation.dumper.xliff'), $this->get('prestashop.utils.zip_manager'), $this->get('filesystem'));

        $instance->cacheDir = __DIR__;
        $instance->setExportDir((__DIR__.'/export'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.translation.theme_extractor' shared service.
     *
     * @return \PrestaShopBundle\Translation\Extractor\ThemeExtractor
     */
    protected function getPrestashop_Translation_ThemeExtractorService()
    {
        return $this->services['prestashop.translation.theme_extractor'] = new \PrestaShopBundle\Translation\Extractor\ThemeExtractor($this->get('prestashop.translation.extractor.smarty'));
    }

    /**
     * Gets the public 'prestashop.translation.theme_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\ThemeProvider
     */
    protected function getPrestashop_Translation_ThemeProviderService()
    {
        $this->services['prestashop.translation.theme_provider'] = $instance = new \PrestaShopBundle\Translation\Provider\ThemeProvider($this->get('prestashop.translation.database_loader'), (__DIR__.'/themes'));

        $instance->themeResourcesDirectory = ($this->targetDirs[2].'/../themes');
        $instance->filesystem = $this->get('filesystem');
        $instance->themeRepository = $this->get('prestashop.core.addon.theme.repository');
        $instance->themeExtractor = $this->get('prestashop.translation.theme_extractor');
        $instance->defaultTranslationDir = ($this->targetDirs[2].'/Resources/translations');

        return $instance;
    }

    /**
     * Gets the public 'prestashop.translation.theme_translations_factory' shared service.
     *
     * @return \PrestaShopBundle\Translation\Factory\ThemeTranslationsFactory
     */
    protected function getPrestashop_Translation_ThemeTranslationsFactoryService()
    {
        $a = $this->get('prestashop.translation.theme_provider');

        $this->services['prestashop.translation.theme_translations_factory'] = $instance = new \PrestaShopBundle\Translation\Factory\ThemeTranslationsFactory($a);

        $instance->addProvider($a);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.translation.translations_factory' shared service.
     *
     * @return \PrestaShopBundle\Translation\Factory\TranslationsFactory
     */
    protected function getPrestashop_Translation_TranslationsFactoryService()
    {
        $this->services['prestashop.translation.translations_factory'] = $instance = new \PrestaShopBundle\Translation\Factory\TranslationsFactory();

        $instance->addProvider($this->get('prestashop.translation.backoffice_provider'));
        $instance->addProvider($this->get('prestashop.translation.frontoffice_provider'));
        $instance->addProvider($this->get('prestashop.translation.mails'));
        $instance->addProvider($this->get('prestashop.translation.others_provider'));
        $instance->addProvider($this->get('prestashop.translation.modules_provider'));
        $instance->addProvider($this->get('prestashop.translation.module_provider'));
        $instance->addProvider($this->get('prestashop.translation.search_provider'));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.twig.extension.admin' shared service.
     *
     * @return \PrestaShopBundle\Twig\AdminExtension
     */
    protected function getPrestashop_Twig_Extension_AdminService()
    {
        return $this->services['prestashop.twig.extension.admin'] = new \PrestaShopBundle\Twig\AdminExtension($this->get('request_stack'), $this);
    }

    /**
     * Gets the public 'prestashop.twig.extension.dataformatter' shared service.
     *
     * @return \PrestaShopBundle\Twig\DataFormatterExtension
     */
    protected function getPrestashop_Twig_Extension_DataformatterService()
    {
        return $this->services['prestashop.twig.extension.dataformatter'] = new \PrestaShopBundle\Twig\DataFormatterExtension();
    }

    /**
     * Gets the public 'prestashop.twig.extension.hook' shared service.
     *
     * @return \PrestaShopBundle\Twig\HookExtension
     */
    protected function getPrestashop_Twig_Extension_HookService()
    {
        return $this->services['prestashop.twig.extension.hook'] = new \PrestaShopBundle\Twig\HookExtension($this->get('prestashop.hook.dispatcher'), $this->get('prestashop.adapter.data_provider.module'), (($this->get("prestashop.adapter.legacy.context")->getContext()->employee) ? ($this->get("prestashop.core.admin.module.repository")) : (null)));
    }

    /**
     * Gets the public 'prestashop.twig.extension.layout' shared service.
     *
     * @return \PrestaShopBundle\Twig\LayoutExtension
     */
    protected function getPrestashop_Twig_Extension_LayoutService()
    {
        return $this->services['prestashop.twig.extension.layout'] = new \PrestaShopBundle\Twig\LayoutExtension($this->get('prestashop.adapter.legacy.context'), 'dev');
    }

    /**
     * Gets the public 'prestashop.twig.extension.stringloader' shared service.
     *
     * @return \Twig_Extension_StringLoader
     */
    protected function getPrestashop_Twig_Extension_StringloaderService()
    {
        return $this->services['prestashop.twig.extension.stringloader'] = new \Twig_Extension_StringLoader();
    }

    /**
     * Gets the public 'prestashop.twig.extension.translation' shared service.
     *
     * @return \PrestaShopBundle\Twig\TranslationsExtension
     */
    protected function getPrestashop_Twig_Extension_TranslationService()
    {
        $this->services['prestashop.twig.extension.translation'] = $instance = new \PrestaShopBundle\Twig\TranslationsExtension($this, $this->get('prestashop.router'));

        $instance->logger = $this->get('logger');
        $instance->translator = $this->get('translator');

        return $instance;
    }

    /**
     * Gets the public 'prestashop.user_locale.listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\UserLocaleListener
     */
    protected function getPrestashop_UserLocale_ListenerService()
    {
        return $this->services['prestashop.user_locale.listener'] = new \PrestaShopBundle\EventListener\UserLocaleListener($this->get('prestashop.adapter.legacy.context'));
    }

    /**
     * Gets the public 'prestashop.user_provider' shared service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\UserProvider
     */
    protected function getPrestashop_UserProviderService()
    {
        return $this->services['prestashop.user_provider'] = new \PrestaShopBundle\Service\DataProvider\UserProvider($this->get('security.token_storage'));
    }

    /**
     * Gets the public 'prestashop.utils.zip_manager' shared service.
     *
     * @return \PrestaShopBundle\Utils\ZipManager
     */
    protected function getPrestashop_Utils_ZipManagerService()
    {
        return $this->services['prestashop.utils.zip_manager'] = new \PrestaShopBundle\Utils\ZipManager();
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy'), $this->get('security.logout_url_generator')));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($this->get('data_collector.dump'));
        $instance->add($c);
        $instance->add($this->get('csa_guzzle.data_collector.guzzle'));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the public 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the public 'request' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('prestashop.router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the public 'security.context' shared service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext
     *
     * @deprecated The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.
     */
    protected function getSecurity_ContextService()
    {
        @trigger_error('The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);

        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array());
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => NULL)), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('security.authentication.manager');
        $d = $this->get('prestashop.router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $e = new \Symfony\Component\Security\Http\AccessMap();

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($e, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => new \Symfony\Component\Security\Core\User\InMemoryUserProvider(), 1 => $this->get('prestashop.security.admin.provider')), 'main', $a, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5a8e8c72396209.08713335', $a, $c), 3 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $e, $c)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), new \Symfony\Component\Security\Http\HttpUtils($d, $d), 'main', NULL, NULL, NULL, $a, false));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.secure_random' shared service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.user_checker.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserChecker_MainService()
    {
        return $this->services['security.user_checker.main'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'sensio_distribution.security_checker' shared service.
     *
     * @return \SensioLabs\Security\SecurityChecker
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the public 'sensio_distribution.security_checker.command' shared service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the public 'sensio_distribution.webconfigurator' shared service.
     *
     * @return \Sensio\Bundle\DistributionBundle\Configurator\Configurator
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        $this->services['sensio_distribution.webconfigurator'] = $instance = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator($this->targetDirs[2]);

        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\DoctrineStep(), 10);
        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\SecretStep(), 0);

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'service_container' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the public 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('prestashop.router'));
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        $instance->addLoader('db', $this->get('prestashop.translation.database_loader'));

        return $instance;
    }

    /**
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the public 'translation_tools.translation.node_visitor' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor
     */
    protected function getTranslationTools_Translation_NodeVisitorService()
    {
        return $this->services['translation_tools.translation.node_visitor'] = new \PrestaShop\TranslationToolsBundle\Twig\NodeVisitor\TranslationNodeVisitor();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \PrestaShopBundle\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \PrestaShopBundle\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the public 'translator.default' shared service.
     *
     * @return \PrestaShopBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \PrestaShopBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json'), 'prestashop.translation.database_loader' => array(0 => 'db')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf')), 'es' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf')), 'et' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ua.xlf')), 'ca-ES' => array(0 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminActions.ca-ES.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminAdvparametersFeature.ca-ES.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminAdvparametersHelp.ca-ES.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminAdvparametersNotification.ca-ES.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminCatalogFeature.ca-ES.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminCatalogHelp.ca-ES.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminCatalogNotification.ca-ES.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminDashboardFeature.ca-ES.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminDashboardHelp.ca-ES.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminDashboardNotification.ca-ES.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminDesignFeature.ca-ES.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminDesignHelp.ca-ES.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminDesignNotification.ca-ES.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminGlobal.ca-ES.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminInternationalFeature.ca-ES.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminInternationalHelp.ca-ES.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminInternationalNotification.ca-ES.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminLoginFeature.ca-ES.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminLoginNotification.ca-ES.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminModulesFeature.ca-ES.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminModulesHelp.ca-ES.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminModulesNotification.ca-ES.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNavigationFooter.ca-ES.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNavigationHeader.ca-ES.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNavigationMenu.ca-ES.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNavigationNotification.ca-ES.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNavigationSearch.ca-ES.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNotificationsError.ca-ES.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNotificationsInfo.ca-ES.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNotificationsSuccess.ca-ES.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminNotificationsWarning.ca-ES.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminOrderscustomersFeature.ca-ES.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminOrderscustomersHelp.ca-ES.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminOrderscustomersNotification.ca-ES.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminPaymentFeature.ca-ES.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminPaymentHelp.ca-ES.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminPaymentNotification.ca-ES.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminShippingFeature.ca-ES.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminShippingHelp.ca-ES.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminShippingNotification.ca-ES.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminShopparametersFeature.ca-ES.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminShopparametersHelp.ca-ES.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminShopparametersNotification.ca-ES.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminStatsFeature.ca-ES.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminStatsHelp.ca-ES.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\AdminStatsNotification.ca-ES.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\EmailsBody.ca-ES.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\EmailsSubject.ca-ES.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\Install.ca-ES.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\messages.ca-ES.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesAdvertisingAdmin.ca-ES.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesAutoupgradeAdmin.ca-ES.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBannerAdmin.ca-ES.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBannerShop.ca-ES.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBestsellersAdmin.ca-ES.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBestsellersShop.ca-ES.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBlockreassuranceAdmin.ca-ES.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBlockreassuranceShop.ca-ES.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBrandlistAdmin.ca-ES.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesBrandlistShop.ca-ES.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCarriercomparisonAdmin.ca-ES.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCarriercomparisonShop.ca-ES.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCashondeliveryAdmin.ca-ES.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCashondeliveryShop.ca-ES.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCategoryproductsAdmin.ca-ES.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCategoryproductsShop.ca-ES.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCategorytreeAdmin.ca-ES.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCheckpaymentAdmin.ca-ES.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCheckpaymentShop.ca-ES.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesContactformAdmin.ca-ES.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesContactformShop.ca-ES.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesContactinfoAdmin.ca-ES.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesContactinfoShop.ca-ES.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCrosssellingAdmin.ca-ES.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCrosssellingShop.ca-ES.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCurrencyselectorAdmin.ca-ES.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCustomeraccountlinksAdmin.ca-ES.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCustomersigninAdmin.ca-ES.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesCustomtextAdmin.ca-ES.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDashactivityAdmin.ca-ES.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDashgoalsAdmin.ca-ES.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDashproductsAdmin.ca-ES.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDashtrendsAdmin.ca-ES.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDataprivacyAdmin.ca-ES.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDataprivacyShop.ca-ES.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDateofdeliveryAdmin.ca-ES.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesDateofdeliveryShop.ca-ES.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesEmailsubscriptionAdmin.ca-ES.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesEmailsubscriptionShop.ca-ES.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesFacetedsearchAdmin.ca-ES.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesFacetedsearchShop.ca-ES.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesFeaturedproductsAdmin.ca-ES.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesFeaturedproductsShop.ca-ES.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesFeederAdmin.ca-ES.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesGAnalyticsAdmin.ca-ES.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesGraphnvd3Admin.ca-ES.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesGridhtmlAdmin.ca-ES.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesImagesliderAdmin.ca-ES.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesLanguageselectorAdmin.ca-ES.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesLegalcomplianceAdmin.ca-ES.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesLegalcomplianceShop.ca-ES.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesLinklistAdmin.ca-ES.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesLinklistShop.ca-ES.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesLivetranslationAdmin.ca-ES.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesLivetranslationShop.ca-ES.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesMailalertsAdmin.ca-ES.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesMailalertsShop.ca-ES.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesMainmenuAdmin.ca-ES.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesNewproductsAdmin.ca-ES.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesNewproductsShop.ca-ES.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesNewsletterAdmin.ca-ES.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesPagesnotfoundAdmin.ca-ES.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesProductinfoAdmin.ca-ES.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesPscleanerAdmin.ca-ES.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesReminderAdmin.ca-ES.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesRssfeedAdmin.ca-ES.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesRssfeedShop.ca-ES.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSearchbarAdmin.ca-ES.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSearchbarShop.ca-ES.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSekeywordsAdmin.ca-ES.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSharebuttonsAdmin.ca-ES.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSharebuttonsShop.ca-ES.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesShoppingcartAdmin.ca-ES.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSocialfollowAdmin.ca-ES.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSocialfollowShop.ca-ES.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSpecialsAdmin.ca-ES.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSpecialsShop.ca-ES.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsbestcategoriesAdmin.ca-ES.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsbestcustomersAdmin.ca-ES.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsbestmanufacturersAdmin.ca-ES.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsbestproductsAdmin.ca-ES.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsbestsuppliersAdmin.ca-ES.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsbestvouchersAdmin.ca-ES.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatscarrierAdmin.ca-ES.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatscatalogAdmin.ca-ES.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatscheckupAdmin.ca-ES.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsdataAdmin.ca-ES.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsequipmentAdmin.ca-ES.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsforecastAdmin.ca-ES.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsliveAdmin.ca-ES.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsnewsletterAdmin.ca-ES.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsoriginAdmin.ca-ES.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatspersonalinfosAdmin.ca-ES.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsproductAdmin.ca-ES.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsregistrationsAdmin.ca-ES.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatssalesAdmin.ca-ES.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatssearchAdmin.ca-ES.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsstockAdmin.ca-ES.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesStatsvisitsAdmin.ca-ES.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSupplierlistAdmin.ca-ES.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesSupplierlistShop.ca-ES.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesTrackingfrontAdmin.ca-ES.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesTrackingfrontShop.ca-ES.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesViewedproductAdmin.ca-ES.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesViewedproductShop.ca-ES.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesWelcomeAdmin.ca-ES.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesWirepaymentAdmin.ca-ES.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ModulesWirepaymentShop.ca-ES.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopDemoCatalog.ca-ES.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopFormsErrors.ca-ES.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopFormsHelp.ca-ES.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopFormsLabels.ca-ES.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopNavigation.ca-ES.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopNotificationsError.ca-ES.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopNotificationsInfo.ca-ES.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopNotificationsSuccess.ca-ES.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopNotificationsWarning.ca-ES.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopPdf.ca-ES.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopThemeActions.ca-ES.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopThemeCatalog.ca-ES.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopThemeCheckout.ca-ES.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopThemeCustomeraccount.ca-ES.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\ca-ES\\ShopThemeGlobal.ca-ES.xlf')), 'de-DE' => array(0 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminActions.de-DE.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminAdvparametersFeature.de-DE.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminAdvparametersHelp.de-DE.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminAdvparametersNotification.de-DE.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminCatalogFeature.de-DE.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminCatalogHelp.de-DE.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminCatalogNotification.de-DE.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminDashboardFeature.de-DE.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminDashboardHelp.de-DE.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminDashboardNotification.de-DE.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminDesignFeature.de-DE.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminDesignHelp.de-DE.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminDesignNotification.de-DE.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminGlobal.de-DE.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminInternationalFeature.de-DE.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminInternationalHelp.de-DE.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminInternationalNotification.de-DE.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminLoginFeature.de-DE.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminLoginNotification.de-DE.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminModulesFeature.de-DE.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminModulesHelp.de-DE.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminModulesNotification.de-DE.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNavigationFooter.de-DE.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNavigationHeader.de-DE.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNavigationMenu.de-DE.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNavigationNotification.de-DE.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNavigationSearch.de-DE.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNotificationsError.de-DE.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNotificationsInfo.de-DE.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNotificationsSuccess.de-DE.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminNotificationsWarning.de-DE.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminOrderscustomersFeature.de-DE.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminOrderscustomersHelp.de-DE.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminOrderscustomersNotification.de-DE.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminPaymentFeature.de-DE.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminPaymentHelp.de-DE.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminPaymentNotification.de-DE.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminShippingFeature.de-DE.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminShippingHelp.de-DE.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminShippingNotification.de-DE.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminShopparametersFeature.de-DE.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminShopparametersHelp.de-DE.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminShopparametersNotification.de-DE.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminStatsFeature.de-DE.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminStatsHelp.de-DE.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\AdminStatsNotification.de-DE.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\EmailsBody.de-DE.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\EmailsSubject.de-DE.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\Install.de-DE.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\messages.de-DE.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesAdvertisingAdmin.de-DE.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesAutoupgradeAdmin.de-DE.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBannerAdmin.de-DE.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBannerShop.de-DE.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBestsellersAdmin.de-DE.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBestsellersShop.de-DE.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBlockreassuranceAdmin.de-DE.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBlockreassuranceShop.de-DE.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBrandlistAdmin.de-DE.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesBrandlistShop.de-DE.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCarriercomparisonAdmin.de-DE.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCarriercomparisonShop.de-DE.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCashondeliveryAdmin.de-DE.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCashondeliveryShop.de-DE.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCategoryproductsAdmin.de-DE.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCategoryproductsShop.de-DE.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCategorytreeAdmin.de-DE.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCheckpaymentAdmin.de-DE.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCheckpaymentShop.de-DE.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesContactformAdmin.de-DE.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesContactformShop.de-DE.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesContactinfoAdmin.de-DE.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesContactinfoShop.de-DE.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCrosssellingAdmin.de-DE.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCrosssellingShop.de-DE.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCurrencyselectorAdmin.de-DE.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCustomeraccountlinksAdmin.de-DE.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCustomersigninAdmin.de-DE.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesCustomtextAdmin.de-DE.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDashactivityAdmin.de-DE.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDashgoalsAdmin.de-DE.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDashproductsAdmin.de-DE.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDashtrendsAdmin.de-DE.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDataprivacyAdmin.de-DE.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDataprivacyShop.de-DE.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDateofdeliveryAdmin.de-DE.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesDateofdeliveryShop.de-DE.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesEmailsubscriptionAdmin.de-DE.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesEmailsubscriptionShop.de-DE.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesFacetedsearchAdmin.de-DE.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesFacetedsearchShop.de-DE.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesFeaturedproductsAdmin.de-DE.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesFeaturedproductsShop.de-DE.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesFeederAdmin.de-DE.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesGAnalyticsAdmin.de-DE.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesGraphnvd3Admin.de-DE.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesGridhtmlAdmin.de-DE.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesImagesliderAdmin.de-DE.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesLanguageselectorAdmin.de-DE.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesLegalcomplianceAdmin.de-DE.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesLegalcomplianceShop.de-DE.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesLinklistAdmin.de-DE.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesLinklistShop.de-DE.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesLivetranslationAdmin.de-DE.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesLivetranslationShop.de-DE.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesMailalertsAdmin.de-DE.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesMailalertsShop.de-DE.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesMainmenuAdmin.de-DE.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesNewproductsAdmin.de-DE.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesNewproductsShop.de-DE.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesNewsletterAdmin.de-DE.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesPagesnotfoundAdmin.de-DE.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesProductinfoAdmin.de-DE.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesPscleanerAdmin.de-DE.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesReminderAdmin.de-DE.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesRssfeedAdmin.de-DE.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesRssfeedShop.de-DE.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSearchbarAdmin.de-DE.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSearchbarShop.de-DE.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSekeywordsAdmin.de-DE.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSharebuttonsAdmin.de-DE.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSharebuttonsShop.de-DE.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesShoppingcartAdmin.de-DE.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSocialfollowAdmin.de-DE.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSocialfollowShop.de-DE.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSpecialsAdmin.de-DE.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSpecialsShop.de-DE.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsbestcategoriesAdmin.de-DE.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsbestcustomersAdmin.de-DE.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsbestmanufacturersAdmin.de-DE.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsbestproductsAdmin.de-DE.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsbestsuppliersAdmin.de-DE.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsbestvouchersAdmin.de-DE.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatscarrierAdmin.de-DE.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatscatalogAdmin.de-DE.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatscheckupAdmin.de-DE.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsdataAdmin.de-DE.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsequipmentAdmin.de-DE.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsforecastAdmin.de-DE.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsliveAdmin.de-DE.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsnewsletterAdmin.de-DE.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsoriginAdmin.de-DE.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatspersonalinfosAdmin.de-DE.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsproductAdmin.de-DE.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsregistrationsAdmin.de-DE.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatssalesAdmin.de-DE.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatssearchAdmin.de-DE.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsstockAdmin.de-DE.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesStatsvisitsAdmin.de-DE.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSupplierlistAdmin.de-DE.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesSupplierlistShop.de-DE.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesTrackingfrontAdmin.de-DE.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesTrackingfrontShop.de-DE.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesViewedproductAdmin.de-DE.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesViewedproductShop.de-DE.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesWelcomeAdmin.de-DE.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesWirepaymentAdmin.de-DE.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ModulesWirepaymentShop.de-DE.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopDemoCatalog.de-DE.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopFormsErrors.de-DE.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopFormsHelp.de-DE.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopFormsLabels.de-DE.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopNavigation.de-DE.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopNotificationsError.de-DE.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopNotificationsInfo.de-DE.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopNotificationsSuccess.de-DE.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopNotificationsWarning.de-DE.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopPdf.de-DE.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopThemeActions.de-DE.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopThemeCatalog.de-DE.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopThemeCheckout.de-DE.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopThemeCustomeraccount.de-DE.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\de-DE\\ShopThemeGlobal.de-DE.xlf')), 'en-GB' => array(0 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminActions.en-GB.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminAdvparametersFeature.en-GB.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminAdvparametersHelp.en-GB.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminAdvparametersNotification.en-GB.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminCatalogFeature.en-GB.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminCatalogHelp.en-GB.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminCatalogNotification.en-GB.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminDashboardFeature.en-GB.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminDashboardHelp.en-GB.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminDashboardNotification.en-GB.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminDesignFeature.en-GB.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminDesignHelp.en-GB.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminDesignNotification.en-GB.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminGlobal.en-GB.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminInternationalFeature.en-GB.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminInternationalHelp.en-GB.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminInternationalNotification.en-GB.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminLoginFeature.en-GB.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminLoginNotification.en-GB.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminModulesFeature.en-GB.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminModulesHelp.en-GB.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminModulesNotification.en-GB.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNavigationFooter.en-GB.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNavigationHeader.en-GB.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNavigationMenu.en-GB.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNavigationNotification.en-GB.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNavigationSearch.en-GB.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNotificationsError.en-GB.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNotificationsInfo.en-GB.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNotificationsSuccess.en-GB.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminNotificationsWarning.en-GB.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminOrderscustomersFeature.en-GB.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminOrderscustomersHelp.en-GB.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminOrderscustomersNotification.en-GB.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminPaymentFeature.en-GB.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminPaymentHelp.en-GB.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminPaymentNotification.en-GB.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminShippingFeature.en-GB.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminShippingHelp.en-GB.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminShippingNotification.en-GB.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminShopparametersFeature.en-GB.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminShopparametersHelp.en-GB.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminShopparametersNotification.en-GB.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminStatsFeature.en-GB.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminStatsHelp.en-GB.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\AdminStatsNotification.en-GB.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\EmailsBody.en-GB.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\EmailsSubject.en-GB.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\Install.en-GB.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\messages.en-GB.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesAdvertisingAdmin.en-GB.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesAutoupgradeAdmin.en-GB.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBannerAdmin.en-GB.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBannerShop.en-GB.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBestsellersAdmin.en-GB.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBestsellersShop.en-GB.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBlockreassuranceAdmin.en-GB.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBlockreassuranceShop.en-GB.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBrandlistAdmin.en-GB.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesBrandlistShop.en-GB.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCarriercomparisonAdmin.en-GB.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCarriercomparisonShop.en-GB.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCashondeliveryAdmin.en-GB.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCashondeliveryShop.en-GB.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCategoryproductsAdmin.en-GB.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCategoryproductsShop.en-GB.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCategorytreeAdmin.en-GB.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCheckpaymentAdmin.en-GB.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCheckpaymentShop.en-GB.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesContactformAdmin.en-GB.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesContactformShop.en-GB.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesContactinfoAdmin.en-GB.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesContactinfoShop.en-GB.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCrosssellingAdmin.en-GB.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCrosssellingShop.en-GB.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCurrencyselectorAdmin.en-GB.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCustomeraccountlinksAdmin.en-GB.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCustomersigninAdmin.en-GB.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesCustomtextAdmin.en-GB.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDashactivityAdmin.en-GB.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDashgoalsAdmin.en-GB.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDashproductsAdmin.en-GB.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDashtrendsAdmin.en-GB.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDataprivacyAdmin.en-GB.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDataprivacyShop.en-GB.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDateofdeliveryAdmin.en-GB.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesDateofdeliveryShop.en-GB.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesEmailsubscriptionAdmin.en-GB.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesEmailsubscriptionShop.en-GB.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesFacetedsearchAdmin.en-GB.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesFacetedsearchShop.en-GB.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesFeaturedproductsAdmin.en-GB.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesFeaturedproductsShop.en-GB.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesFeederAdmin.en-GB.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesGAnalyticsAdmin.en-GB.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesGraphnvd3Admin.en-GB.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesGridhtmlAdmin.en-GB.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesImagesliderAdmin.en-GB.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesLanguageselectorAdmin.en-GB.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesLegalcomplianceAdmin.en-GB.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesLegalcomplianceShop.en-GB.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesLinklistAdmin.en-GB.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesLinklistShop.en-GB.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesLivetranslationAdmin.en-GB.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesLivetranslationShop.en-GB.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesMailalertsAdmin.en-GB.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesMailalertsShop.en-GB.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesMainmenuAdmin.en-GB.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesNewproductsAdmin.en-GB.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesNewproductsShop.en-GB.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesNewsletterAdmin.en-GB.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesPagesnotfoundAdmin.en-GB.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesProductinfoAdmin.en-GB.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesPscleanerAdmin.en-GB.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesReminderAdmin.en-GB.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesRssfeedAdmin.en-GB.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesRssfeedShop.en-GB.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSearchbarAdmin.en-GB.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSearchbarShop.en-GB.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSekeywordsAdmin.en-GB.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSharebuttonsAdmin.en-GB.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSharebuttonsShop.en-GB.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesShoppingcartAdmin.en-GB.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSocialfollowAdmin.en-GB.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSocialfollowShop.en-GB.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSpecialsAdmin.en-GB.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSpecialsShop.en-GB.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsbestcategoriesAdmin.en-GB.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsbestcustomersAdmin.en-GB.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsbestmanufacturersAdmin.en-GB.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsbestproductsAdmin.en-GB.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsbestsuppliersAdmin.en-GB.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsbestvouchersAdmin.en-GB.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatscarrierAdmin.en-GB.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatscatalogAdmin.en-GB.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatscheckupAdmin.en-GB.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsdataAdmin.en-GB.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsequipmentAdmin.en-GB.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsforecastAdmin.en-GB.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsliveAdmin.en-GB.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsnewsletterAdmin.en-GB.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsoriginAdmin.en-GB.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatspersonalinfosAdmin.en-GB.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsproductAdmin.en-GB.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsregistrationsAdmin.en-GB.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatssalesAdmin.en-GB.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatssearchAdmin.en-GB.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsstockAdmin.en-GB.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesStatsvisitsAdmin.en-GB.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSupplierlistAdmin.en-GB.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesSupplierlistShop.en-GB.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesTrackingfrontAdmin.en-GB.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesTrackingfrontShop.en-GB.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesViewedproductAdmin.en-GB.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesViewedproductShop.en-GB.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesWelcomeAdmin.en-GB.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesWirepaymentAdmin.en-GB.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ModulesWirepaymentShop.en-GB.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopDemoCatalog.en-GB.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopFormsErrors.en-GB.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopFormsHelp.en-GB.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopFormsLabels.en-GB.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopNavigation.en-GB.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopNotificationsError.en-GB.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopNotificationsInfo.en-GB.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopNotificationsSuccess.en-GB.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopNotificationsWarning.en-GB.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopPdf.en-GB.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopThemeActions.en-GB.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopThemeCatalog.en-GB.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopThemeCheckout.en-GB.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopThemeCustomeraccount.en-GB.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\en-GB\\ShopThemeGlobal.en-GB.xlf')), 'en-US' => array(0 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminActions.en-US.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminAdvparametersFeature.en-US.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminAdvparametersHelp.en-US.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminAdvparametersNotification.en-US.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminCatalogFeature.en-US.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminCatalogHelp.en-US.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminCatalogNotification.en-US.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminDashboardFeature.en-US.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminDashboardHelp.en-US.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminDashboardNotification.en-US.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminDesignFeature.en-US.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminDesignHelp.en-US.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminDesignNotification.en-US.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminGlobal.en-US.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminInternationalFeature.en-US.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminInternationalHelp.en-US.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminInternationalNotification.en-US.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminLoginFeature.en-US.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminLoginNotification.en-US.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminModulesFeature.en-US.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminModulesHelp.en-US.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminModulesNotification.en-US.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNavigationFooter.en-US.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNavigationHeader.en-US.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNavigationMenu.en-US.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNavigationNotification.en-US.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNavigationSearch.en-US.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNotificationsError.en-US.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNotificationsInfo.en-US.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNotificationsSuccess.en-US.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminNotificationsWarning.en-US.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminOrderscustomersFeature.en-US.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminOrderscustomersHelp.en-US.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminOrderscustomersNotification.en-US.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminPaymentFeature.en-US.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminPaymentHelp.en-US.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminPaymentNotification.en-US.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminShippingFeature.en-US.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminShippingHelp.en-US.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminShippingNotification.en-US.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminShopparametersFeature.en-US.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminShopparametersHelp.en-US.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminShopparametersNotification.en-US.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminStatsFeature.en-US.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminStatsHelp.en-US.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\en-US\\AdminStatsNotification.en-US.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\en-US\\EmailsBody.en-US.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\en-US\\EmailsSubject.en-US.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\en-US\\Install.en-US.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\en-US\\messages.en-US.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesAdvertisingAdmin.en-US.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesAutoupgradeAdmin.en-US.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBannerAdmin.en-US.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBannerShop.en-US.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBestsellersAdmin.en-US.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBestsellersShop.en-US.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBlockreassuranceAdmin.en-US.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBlockreassuranceShop.en-US.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBrandlistAdmin.en-US.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesBrandlistShop.en-US.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCarriercomparisonAdmin.en-US.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCarriercomparisonShop.en-US.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCashondeliveryAdmin.en-US.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCashondeliveryShop.en-US.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCategoryproductsAdmin.en-US.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCategoryproductsShop.en-US.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCategorytreeAdmin.en-US.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCheckpaymentAdmin.en-US.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCheckpaymentShop.en-US.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesContactformAdmin.en-US.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesContactformShop.en-US.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesContactinfoAdmin.en-US.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesContactinfoShop.en-US.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCrosssellingAdmin.en-US.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCrosssellingShop.en-US.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCurrencyselectorAdmin.en-US.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCustomeraccountlinksAdmin.en-US.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCustomersigninAdmin.en-US.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesCustomtextAdmin.en-US.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDashactivityAdmin.en-US.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDashgoalsAdmin.en-US.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDashproductsAdmin.en-US.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDashtrendsAdmin.en-US.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDataprivacyAdmin.en-US.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDataprivacyShop.en-US.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDateofdeliveryAdmin.en-US.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesDateofdeliveryShop.en-US.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesEmailsubscriptionAdmin.en-US.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesEmailsubscriptionShop.en-US.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesFacetedsearchAdmin.en-US.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesFacetedsearchShop.en-US.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesFeaturedproductsAdmin.en-US.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesFeaturedproductsShop.en-US.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesFeederAdmin.en-US.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesGAnalyticsAdmin.en-US.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesGraphnvd3Admin.en-US.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesGridhtmlAdmin.en-US.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesImagesliderAdmin.en-US.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesLanguageselectorAdmin.en-US.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesLegalcomplianceAdmin.en-US.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesLegalcomplianceShop.en-US.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesLinklistAdmin.en-US.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesLinklistShop.en-US.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesLivetranslationAdmin.en-US.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesLivetranslationShop.en-US.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesMailalertsAdmin.en-US.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesMailalertsShop.en-US.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesMainmenuAdmin.en-US.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesNewproductsAdmin.en-US.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesNewproductsShop.en-US.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesNewsletterAdmin.en-US.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesPagesnotfoundAdmin.en-US.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesProductinfoAdmin.en-US.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesPscleanerAdmin.en-US.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesReminderAdmin.en-US.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesRssfeedAdmin.en-US.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesRssfeedShop.en-US.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSearchbarAdmin.en-US.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSearchbarShop.en-US.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSekeywordsAdmin.en-US.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSharebuttonsAdmin.en-US.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSharebuttonsShop.en-US.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesShoppingcartAdmin.en-US.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSocialfollowAdmin.en-US.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSocialfollowShop.en-US.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSpecialsAdmin.en-US.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSpecialsShop.en-US.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsbestcategoriesAdmin.en-US.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsbestcustomersAdmin.en-US.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsbestmanufacturersAdmin.en-US.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsbestproductsAdmin.en-US.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsbestsuppliersAdmin.en-US.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsbestvouchersAdmin.en-US.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatscarrierAdmin.en-US.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatscatalogAdmin.en-US.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatscheckupAdmin.en-US.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsdataAdmin.en-US.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsequipmentAdmin.en-US.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsforecastAdmin.en-US.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsliveAdmin.en-US.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsnewsletterAdmin.en-US.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsoriginAdmin.en-US.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatspersonalinfosAdmin.en-US.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsproductAdmin.en-US.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsregistrationsAdmin.en-US.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatssalesAdmin.en-US.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatssearchAdmin.en-US.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsstockAdmin.en-US.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesStatsvisitsAdmin.en-US.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSupplierlistAdmin.en-US.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesSupplierlistShop.en-US.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesTrackingfrontAdmin.en-US.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesTrackingfrontShop.en-US.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesViewedproductAdmin.en-US.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesViewedproductShop.en-US.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesWelcomeAdmin.en-US.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesWirepaymentAdmin.en-US.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ModulesWirepaymentShop.en-US.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopDemoCatalog.en-US.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopFormsErrors.en-US.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopFormsHelp.en-US.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopFormsLabels.en-US.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopNavigation.en-US.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopNotificationsError.en-US.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopNotificationsInfo.en-US.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopNotificationsSuccess.en-US.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopNotificationsWarning.en-US.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopPdf.en-US.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopThemeActions.en-US.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopThemeCatalog.en-US.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopThemeCheckout.en-US.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopThemeCustomeraccount.en-US.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\en-US\\ShopThemeGlobal.en-US.xlf')), 'es-ES' => array(0 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminActions.es-ES.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminAdvparametersFeature.es-ES.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminAdvparametersHelp.es-ES.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminAdvparametersNotification.es-ES.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminCatalogFeature.es-ES.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminCatalogHelp.es-ES.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminCatalogNotification.es-ES.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminDashboardFeature.es-ES.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminDashboardHelp.es-ES.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminDashboardNotification.es-ES.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminDesignFeature.es-ES.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminDesignHelp.es-ES.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminDesignNotification.es-ES.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminGlobal.es-ES.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminInternationalFeature.es-ES.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminInternationalHelp.es-ES.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminInternationalNotification.es-ES.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminLoginFeature.es-ES.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminLoginNotification.es-ES.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminModulesFeature.es-ES.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminModulesHelp.es-ES.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminModulesNotification.es-ES.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNavigationFooter.es-ES.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNavigationHeader.es-ES.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNavigationMenu.es-ES.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNavigationNotification.es-ES.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNavigationSearch.es-ES.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNotificationsError.es-ES.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNotificationsInfo.es-ES.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNotificationsSuccess.es-ES.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminNotificationsWarning.es-ES.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminOrderscustomersFeature.es-ES.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminOrderscustomersHelp.es-ES.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminOrderscustomersNotification.es-ES.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminPaymentFeature.es-ES.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminPaymentHelp.es-ES.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminPaymentNotification.es-ES.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminShippingFeature.es-ES.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminShippingHelp.es-ES.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminShippingNotification.es-ES.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminShopparametersFeature.es-ES.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminShopparametersHelp.es-ES.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminShopparametersNotification.es-ES.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminStatsFeature.es-ES.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminStatsHelp.es-ES.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\AdminStatsNotification.es-ES.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\EmailsBody.es-ES.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\EmailsSubject.es-ES.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\Install.es-ES.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\messages.es-ES.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesAdvertisingAdmin.es-ES.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesAutoupgradeAdmin.es-ES.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBannerAdmin.es-ES.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBannerShop.es-ES.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBestsellersAdmin.es-ES.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBestsellersShop.es-ES.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBlockreassuranceAdmin.es-ES.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBlockreassuranceShop.es-ES.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBrandlistAdmin.es-ES.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesBrandlistShop.es-ES.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCarriercomparisonAdmin.es-ES.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCarriercomparisonShop.es-ES.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCashondeliveryAdmin.es-ES.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCashondeliveryShop.es-ES.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCategoryproductsAdmin.es-ES.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCategoryproductsShop.es-ES.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCategorytreeAdmin.es-ES.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCheckpaymentAdmin.es-ES.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCheckpaymentShop.es-ES.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesContactformAdmin.es-ES.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesContactformShop.es-ES.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesContactinfoAdmin.es-ES.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesContactinfoShop.es-ES.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCrosssellingAdmin.es-ES.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCrosssellingShop.es-ES.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCurrencyselectorAdmin.es-ES.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCustomeraccountlinksAdmin.es-ES.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCustomersigninAdmin.es-ES.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesCustomtextAdmin.es-ES.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDashactivityAdmin.es-ES.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDashgoalsAdmin.es-ES.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDashproductsAdmin.es-ES.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDashtrendsAdmin.es-ES.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDataprivacyAdmin.es-ES.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDataprivacyShop.es-ES.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDateofdeliveryAdmin.es-ES.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesDateofdeliveryShop.es-ES.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesEmailsubscriptionAdmin.es-ES.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesEmailsubscriptionShop.es-ES.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesFacetedsearchAdmin.es-ES.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesFacetedsearchShop.es-ES.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesFeaturedproductsAdmin.es-ES.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesFeaturedproductsShop.es-ES.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesFeederAdmin.es-ES.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesGAnalyticsAdmin.es-ES.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesGraphnvd3Admin.es-ES.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesGridhtmlAdmin.es-ES.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesImagesliderAdmin.es-ES.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesLanguageselectorAdmin.es-ES.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesLegalcomplianceAdmin.es-ES.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesLegalcomplianceShop.es-ES.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesLinklistAdmin.es-ES.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesLinklistShop.es-ES.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesLivetranslationAdmin.es-ES.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesLivetranslationShop.es-ES.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesMailalertsAdmin.es-ES.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesMailalertsShop.es-ES.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesMainmenuAdmin.es-ES.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesNewproductsAdmin.es-ES.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesNewproductsShop.es-ES.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesNewsletterAdmin.es-ES.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesPagesnotfoundAdmin.es-ES.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesProductinfoAdmin.es-ES.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesPscleanerAdmin.es-ES.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesReminderAdmin.es-ES.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesRssfeedAdmin.es-ES.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesRssfeedShop.es-ES.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSearchbarAdmin.es-ES.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSearchbarShop.es-ES.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSekeywordsAdmin.es-ES.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSharebuttonsAdmin.es-ES.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSharebuttonsShop.es-ES.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesShoppingcartAdmin.es-ES.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSocialfollowAdmin.es-ES.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSocialfollowShop.es-ES.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSpecialsAdmin.es-ES.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSpecialsShop.es-ES.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsbestcategoriesAdmin.es-ES.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsbestcustomersAdmin.es-ES.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsbestmanufacturersAdmin.es-ES.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsbestproductsAdmin.es-ES.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsbestsuppliersAdmin.es-ES.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsbestvouchersAdmin.es-ES.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatscarrierAdmin.es-ES.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatscatalogAdmin.es-ES.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatscheckupAdmin.es-ES.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsdataAdmin.es-ES.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsequipmentAdmin.es-ES.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsforecastAdmin.es-ES.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsliveAdmin.es-ES.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsnewsletterAdmin.es-ES.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsoriginAdmin.es-ES.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatspersonalinfosAdmin.es-ES.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsproductAdmin.es-ES.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsregistrationsAdmin.es-ES.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatssalesAdmin.es-ES.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatssearchAdmin.es-ES.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsstockAdmin.es-ES.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesStatsvisitsAdmin.es-ES.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSupplierlistAdmin.es-ES.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesSupplierlistShop.es-ES.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesTrackingfrontAdmin.es-ES.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesTrackingfrontShop.es-ES.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesViewedproductAdmin.es-ES.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesViewedproductShop.es-ES.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesWelcomeAdmin.es-ES.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesWirepaymentAdmin.es-ES.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ModulesWirepaymentShop.es-ES.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopDemoCatalog.es-ES.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopFormsErrors.es-ES.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopFormsHelp.es-ES.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopFormsLabels.es-ES.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopNavigation.es-ES.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopNotificationsError.es-ES.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopNotificationsInfo.es-ES.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopNotificationsSuccess.es-ES.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopNotificationsWarning.es-ES.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopPdf.es-ES.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopThemeActions.es-ES.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopThemeCatalog.es-ES.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopThemeCheckout.es-ES.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopThemeCustomeraccount.es-ES.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\es-ES\\ShopThemeGlobal.es-ES.xlf')), 'eu-ES' => array(0 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminActions.eu-ES.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminAdvparametersFeature.eu-ES.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminAdvparametersHelp.eu-ES.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminAdvparametersNotification.eu-ES.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminCatalogFeature.eu-ES.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminCatalogHelp.eu-ES.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminCatalogNotification.eu-ES.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminDashboardFeature.eu-ES.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminDashboardHelp.eu-ES.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminDashboardNotification.eu-ES.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminDesignFeature.eu-ES.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminDesignHelp.eu-ES.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminDesignNotification.eu-ES.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminGlobal.eu-ES.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminInternationalFeature.eu-ES.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminInternationalHelp.eu-ES.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminInternationalNotification.eu-ES.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminLoginFeature.eu-ES.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminLoginNotification.eu-ES.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminModulesFeature.eu-ES.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminModulesHelp.eu-ES.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminModulesNotification.eu-ES.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNavigationFooter.eu-ES.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNavigationHeader.eu-ES.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNavigationMenu.eu-ES.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNavigationNotification.eu-ES.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNavigationSearch.eu-ES.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNotificationsError.eu-ES.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNotificationsInfo.eu-ES.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNotificationsSuccess.eu-ES.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminNotificationsWarning.eu-ES.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminOrderscustomersFeature.eu-ES.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminOrderscustomersHelp.eu-ES.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminOrderscustomersNotification.eu-ES.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminPaymentFeature.eu-ES.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminPaymentHelp.eu-ES.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminPaymentNotification.eu-ES.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminShippingFeature.eu-ES.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminShippingHelp.eu-ES.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminShippingNotification.eu-ES.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminShopparametersFeature.eu-ES.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminShopparametersHelp.eu-ES.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminShopparametersNotification.eu-ES.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminStatsFeature.eu-ES.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminStatsHelp.eu-ES.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\AdminStatsNotification.eu-ES.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\EmailsBody.eu-ES.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\EmailsSubject.eu-ES.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\Install.eu-ES.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\messages.eu-ES.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesAdvertisingAdmin.eu-ES.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesAutoupgradeAdmin.eu-ES.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBannerAdmin.eu-ES.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBannerShop.eu-ES.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBestsellersAdmin.eu-ES.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBestsellersShop.eu-ES.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBlockreassuranceAdmin.eu-ES.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBlockreassuranceShop.eu-ES.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBrandlistAdmin.eu-ES.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesBrandlistShop.eu-ES.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCarriercomparisonAdmin.eu-ES.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCarriercomparisonShop.eu-ES.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCashondeliveryAdmin.eu-ES.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCashondeliveryShop.eu-ES.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCategoryproductsAdmin.eu-ES.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCategoryproductsShop.eu-ES.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCategorytreeAdmin.eu-ES.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCheckpaymentAdmin.eu-ES.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCheckpaymentShop.eu-ES.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesContactformAdmin.eu-ES.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesContactformShop.eu-ES.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesContactinfoAdmin.eu-ES.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesContactinfoShop.eu-ES.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCrosssellingAdmin.eu-ES.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCrosssellingShop.eu-ES.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCurrencyselectorAdmin.eu-ES.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCustomeraccountlinksAdmin.eu-ES.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCustomersigninAdmin.eu-ES.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesCustomtextAdmin.eu-ES.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDashactivityAdmin.eu-ES.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDashgoalsAdmin.eu-ES.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDashproductsAdmin.eu-ES.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDashtrendsAdmin.eu-ES.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDataprivacyAdmin.eu-ES.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDataprivacyShop.eu-ES.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDateofdeliveryAdmin.eu-ES.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesDateofdeliveryShop.eu-ES.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesEmailsubscriptionAdmin.eu-ES.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesEmailsubscriptionShop.eu-ES.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesFacetedsearchAdmin.eu-ES.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesFacetedsearchShop.eu-ES.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesFeaturedproductsAdmin.eu-ES.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesFeaturedproductsShop.eu-ES.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesFeederAdmin.eu-ES.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesGAnalyticsAdmin.eu-ES.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesGraphnvd3Admin.eu-ES.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesGridhtmlAdmin.eu-ES.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesImagesliderAdmin.eu-ES.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesLanguageselectorAdmin.eu-ES.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesLegalcomplianceAdmin.eu-ES.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesLegalcomplianceShop.eu-ES.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesLinklistAdmin.eu-ES.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesLinklistShop.eu-ES.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesLivetranslationAdmin.eu-ES.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesLivetranslationShop.eu-ES.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesMailalertsAdmin.eu-ES.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesMailalertsShop.eu-ES.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesMainmenuAdmin.eu-ES.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesNewproductsAdmin.eu-ES.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesNewproductsShop.eu-ES.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesNewsletterAdmin.eu-ES.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesPagesnotfoundAdmin.eu-ES.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesProductinfoAdmin.eu-ES.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesPscleanerAdmin.eu-ES.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesReminderAdmin.eu-ES.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesRssfeedAdmin.eu-ES.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesRssfeedShop.eu-ES.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSearchbarAdmin.eu-ES.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSearchbarShop.eu-ES.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSekeywordsAdmin.eu-ES.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSharebuttonsAdmin.eu-ES.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSharebuttonsShop.eu-ES.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesShoppingcartAdmin.eu-ES.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSocialfollowAdmin.eu-ES.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSocialfollowShop.eu-ES.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSpecialsAdmin.eu-ES.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSpecialsShop.eu-ES.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsbestcategoriesAdmin.eu-ES.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsbestcustomersAdmin.eu-ES.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsbestmanufacturersAdmin.eu-ES.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsbestproductsAdmin.eu-ES.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsbestsuppliersAdmin.eu-ES.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsbestvouchersAdmin.eu-ES.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatscarrierAdmin.eu-ES.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatscatalogAdmin.eu-ES.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatscheckupAdmin.eu-ES.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsdataAdmin.eu-ES.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsequipmentAdmin.eu-ES.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsforecastAdmin.eu-ES.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsliveAdmin.eu-ES.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsnewsletterAdmin.eu-ES.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsoriginAdmin.eu-ES.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatspersonalinfosAdmin.eu-ES.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsproductAdmin.eu-ES.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsregistrationsAdmin.eu-ES.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatssalesAdmin.eu-ES.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatssearchAdmin.eu-ES.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsstockAdmin.eu-ES.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesStatsvisitsAdmin.eu-ES.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSupplierlistAdmin.eu-ES.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesSupplierlistShop.eu-ES.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesTrackingfrontAdmin.eu-ES.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesTrackingfrontShop.eu-ES.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesViewedproductAdmin.eu-ES.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesViewedproductShop.eu-ES.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesWelcomeAdmin.eu-ES.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesWirepaymentAdmin.eu-ES.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ModulesWirepaymentShop.eu-ES.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopDemoCatalog.eu-ES.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopFormsErrors.eu-ES.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopFormsHelp.eu-ES.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopFormsLabels.eu-ES.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopNavigation.eu-ES.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopNotificationsError.eu-ES.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopNotificationsInfo.eu-ES.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopNotificationsSuccess.eu-ES.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopNotificationsWarning.eu-ES.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopPdf.eu-ES.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopThemeActions.eu-ES.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopThemeCatalog.eu-ES.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopThemeCheckout.eu-ES.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopThemeCustomeraccount.eu-ES.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\eu-ES\\ShopThemeGlobal.eu-ES.xlf')), 'fr-FR' => array(0 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminActions.fr-FR.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminAdvparametersFeature.fr-FR.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminAdvparametersHelp.fr-FR.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminAdvparametersNotification.fr-FR.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminCatalogFeature.fr-FR.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminCatalogHelp.fr-FR.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminCatalogNotification.fr-FR.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminDashboardFeature.fr-FR.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminDashboardHelp.fr-FR.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminDashboardNotification.fr-FR.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminDesignFeature.fr-FR.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminDesignHelp.fr-FR.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminDesignNotification.fr-FR.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminGlobal.fr-FR.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminInternationalFeature.fr-FR.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminInternationalHelp.fr-FR.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminInternationalNotification.fr-FR.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminLoginFeature.fr-FR.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminLoginNotification.fr-FR.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminModulesFeature.fr-FR.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminModulesHelp.fr-FR.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminModulesNotification.fr-FR.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNavigationFooter.fr-FR.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNavigationHeader.fr-FR.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNavigationMenu.fr-FR.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNavigationNotification.fr-FR.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNavigationSearch.fr-FR.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNotificationsError.fr-FR.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNotificationsInfo.fr-FR.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNotificationsSuccess.fr-FR.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminNotificationsWarning.fr-FR.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminOrderscustomersFeature.fr-FR.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminOrderscustomersHelp.fr-FR.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminOrderscustomersNotification.fr-FR.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminPaymentFeature.fr-FR.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminPaymentHelp.fr-FR.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminPaymentNotification.fr-FR.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminShippingFeature.fr-FR.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminShippingHelp.fr-FR.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminShippingNotification.fr-FR.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminShopparametersFeature.fr-FR.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminShopparametersHelp.fr-FR.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminShopparametersNotification.fr-FR.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminStatsFeature.fr-FR.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminStatsHelp.fr-FR.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\AdminStatsNotification.fr-FR.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\EmailsBody.fr-FR.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\EmailsSubject.fr-FR.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\Install.fr-FR.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\messages.fr-FR.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesAdvertisingAdmin.fr-FR.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesAutoupgradeAdmin.fr-FR.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBannerAdmin.fr-FR.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBannerShop.fr-FR.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBestsellersAdmin.fr-FR.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBestsellersShop.fr-FR.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBlockreassuranceAdmin.fr-FR.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBlockreassuranceShop.fr-FR.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBrandlistAdmin.fr-FR.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesBrandlistShop.fr-FR.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCarriercomparisonAdmin.fr-FR.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCarriercomparisonShop.fr-FR.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCashondeliveryAdmin.fr-FR.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCashondeliveryShop.fr-FR.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCategoryproductsAdmin.fr-FR.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCategoryproductsShop.fr-FR.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCategorytreeAdmin.fr-FR.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCheckpaymentAdmin.fr-FR.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCheckpaymentShop.fr-FR.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesContactformAdmin.fr-FR.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesContactformShop.fr-FR.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesContactinfoAdmin.fr-FR.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesContactinfoShop.fr-FR.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCrosssellingAdmin.fr-FR.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCrosssellingShop.fr-FR.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCurrencyselectorAdmin.fr-FR.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCustomeraccountlinksAdmin.fr-FR.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCustomersigninAdmin.fr-FR.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesCustomtextAdmin.fr-FR.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDashactivityAdmin.fr-FR.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDashgoalsAdmin.fr-FR.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDashproductsAdmin.fr-FR.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDashtrendsAdmin.fr-FR.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDataprivacyAdmin.fr-FR.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDataprivacyShop.fr-FR.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDateofdeliveryAdmin.fr-FR.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesDateofdeliveryShop.fr-FR.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesEmailsubscriptionAdmin.fr-FR.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesEmailsubscriptionShop.fr-FR.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesFacetedsearchAdmin.fr-FR.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesFacetedsearchShop.fr-FR.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesFeaturedproductsAdmin.fr-FR.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesFeaturedproductsShop.fr-FR.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesFeederAdmin.fr-FR.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesGAnalyticsAdmin.fr-FR.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesGraphnvd3Admin.fr-FR.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesGridhtmlAdmin.fr-FR.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesImagesliderAdmin.fr-FR.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesLanguageselectorAdmin.fr-FR.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesLegalcomplianceAdmin.fr-FR.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesLegalcomplianceShop.fr-FR.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesLinklistAdmin.fr-FR.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesLinklistShop.fr-FR.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesLivetranslationAdmin.fr-FR.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesLivetranslationShop.fr-FR.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesMailalertsAdmin.fr-FR.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesMailalertsShop.fr-FR.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesMainmenuAdmin.fr-FR.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesNewproductsAdmin.fr-FR.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesNewproductsShop.fr-FR.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesNewsletterAdmin.fr-FR.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesPagesnotfoundAdmin.fr-FR.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesProductinfoAdmin.fr-FR.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesPscleanerAdmin.fr-FR.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesReminderAdmin.fr-FR.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesRssfeedAdmin.fr-FR.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesRssfeedShop.fr-FR.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSearchbarAdmin.fr-FR.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSearchbarShop.fr-FR.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSekeywordsAdmin.fr-FR.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSharebuttonsAdmin.fr-FR.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSharebuttonsShop.fr-FR.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesShoppingcartAdmin.fr-FR.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSocialfollowAdmin.fr-FR.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSocialfollowShop.fr-FR.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSpecialsAdmin.fr-FR.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSpecialsShop.fr-FR.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsbestcategoriesAdmin.fr-FR.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsbestcustomersAdmin.fr-FR.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsbestmanufacturersAdmin.fr-FR.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsbestproductsAdmin.fr-FR.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsbestsuppliersAdmin.fr-FR.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsbestvouchersAdmin.fr-FR.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatscarrierAdmin.fr-FR.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatscatalogAdmin.fr-FR.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatscheckupAdmin.fr-FR.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsdataAdmin.fr-FR.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsequipmentAdmin.fr-FR.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsforecastAdmin.fr-FR.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsliveAdmin.fr-FR.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsnewsletterAdmin.fr-FR.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsoriginAdmin.fr-FR.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatspersonalinfosAdmin.fr-FR.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsproductAdmin.fr-FR.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsregistrationsAdmin.fr-FR.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatssalesAdmin.fr-FR.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatssearchAdmin.fr-FR.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsstockAdmin.fr-FR.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesStatsvisitsAdmin.fr-FR.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSupplierlistAdmin.fr-FR.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesSupplierlistShop.fr-FR.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesTrackingfrontAdmin.fr-FR.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesTrackingfrontShop.fr-FR.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesViewedproductAdmin.fr-FR.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesViewedproductShop.fr-FR.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesWelcomeAdmin.fr-FR.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesWirepaymentAdmin.fr-FR.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ModulesWirepaymentShop.fr-FR.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopDemoCatalog.fr-FR.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopFormsErrors.fr-FR.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopFormsHelp.fr-FR.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopFormsLabels.fr-FR.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopNavigation.fr-FR.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopNotificationsError.fr-FR.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopNotificationsInfo.fr-FR.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopNotificationsSuccess.fr-FR.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopNotificationsWarning.fr-FR.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopPdf.fr-FR.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopThemeActions.fr-FR.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopThemeCatalog.fr-FR.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopThemeCheckout.fr-FR.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopThemeCustomeraccount.fr-FR.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\fr-FR\\ShopThemeGlobal.fr-FR.xlf')), 'it-IT' => array(0 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminActions.it-IT.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminAdvparametersFeature.it-IT.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminAdvparametersHelp.it-IT.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminAdvparametersNotification.it-IT.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminCatalogFeature.it-IT.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminCatalogHelp.it-IT.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminCatalogNotification.it-IT.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminDashboardFeature.it-IT.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminDashboardHelp.it-IT.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminDashboardNotification.it-IT.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminDesignFeature.it-IT.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminDesignHelp.it-IT.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminDesignNotification.it-IT.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminGlobal.it-IT.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminInternationalFeature.it-IT.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminInternationalHelp.it-IT.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminInternationalNotification.it-IT.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminLoginFeature.it-IT.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminLoginNotification.it-IT.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminModulesFeature.it-IT.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminModulesHelp.it-IT.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminModulesNotification.it-IT.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNavigationFooter.it-IT.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNavigationHeader.it-IT.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNavigationMenu.it-IT.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNavigationNotification.it-IT.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNavigationSearch.it-IT.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNotificationsError.it-IT.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNotificationsInfo.it-IT.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNotificationsSuccess.it-IT.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminNotificationsWarning.it-IT.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminOrderscustomersFeature.it-IT.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminOrderscustomersHelp.it-IT.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminOrderscustomersNotification.it-IT.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminPaymentFeature.it-IT.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminPaymentHelp.it-IT.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminPaymentNotification.it-IT.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminShippingFeature.it-IT.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminShippingHelp.it-IT.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminShippingNotification.it-IT.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminShopparametersFeature.it-IT.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminShopparametersHelp.it-IT.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminShopparametersNotification.it-IT.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminStatsFeature.it-IT.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminStatsHelp.it-IT.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\AdminStatsNotification.it-IT.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\EmailsBody.it-IT.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\EmailsSubject.it-IT.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\Install.it-IT.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\messages.it-IT.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesAdvertisingAdmin.it-IT.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesAutoupgradeAdmin.it-IT.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBannerAdmin.it-IT.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBannerShop.it-IT.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBestsellersAdmin.it-IT.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBestsellersShop.it-IT.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBlockreassuranceAdmin.it-IT.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBlockreassuranceShop.it-IT.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBrandlistAdmin.it-IT.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesBrandlistShop.it-IT.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCarriercomparisonAdmin.it-IT.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCarriercomparisonShop.it-IT.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCashondeliveryAdmin.it-IT.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCashondeliveryShop.it-IT.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCategoryproductsAdmin.it-IT.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCategoryproductsShop.it-IT.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCategorytreeAdmin.it-IT.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCheckpaymentAdmin.it-IT.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCheckpaymentShop.it-IT.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesContactformAdmin.it-IT.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesContactformShop.it-IT.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesContactinfoAdmin.it-IT.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesContactinfoShop.it-IT.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCrosssellingAdmin.it-IT.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCrosssellingShop.it-IT.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCurrencyselectorAdmin.it-IT.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCustomeraccountlinksAdmin.it-IT.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCustomersigninAdmin.it-IT.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesCustomtextAdmin.it-IT.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDashactivityAdmin.it-IT.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDashgoalsAdmin.it-IT.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDashproductsAdmin.it-IT.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDashtrendsAdmin.it-IT.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDataprivacyAdmin.it-IT.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDataprivacyShop.it-IT.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDateofdeliveryAdmin.it-IT.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesDateofdeliveryShop.it-IT.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesEmailsubscriptionAdmin.it-IT.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesEmailsubscriptionShop.it-IT.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesFacetedsearchAdmin.it-IT.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesFacetedsearchShop.it-IT.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesFeaturedproductsAdmin.it-IT.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesFeaturedproductsShop.it-IT.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesFeederAdmin.it-IT.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesGAnalyticsAdmin.it-IT.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesGraphnvd3Admin.it-IT.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesGridhtmlAdmin.it-IT.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesImagesliderAdmin.it-IT.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesLanguageselectorAdmin.it-IT.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesLegalcomplianceAdmin.it-IT.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesLegalcomplianceShop.it-IT.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesLinklistAdmin.it-IT.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesLinklistShop.it-IT.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesLivetranslationAdmin.it-IT.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesLivetranslationShop.it-IT.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesMailalertsAdmin.it-IT.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesMailalertsShop.it-IT.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesMainmenuAdmin.it-IT.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesNewproductsAdmin.it-IT.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesNewproductsShop.it-IT.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesNewsletterAdmin.it-IT.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesPagesnotfoundAdmin.it-IT.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesProductinfoAdmin.it-IT.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesPscleanerAdmin.it-IT.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesReminderAdmin.it-IT.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesRssfeedAdmin.it-IT.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesRssfeedShop.it-IT.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSearchbarAdmin.it-IT.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSearchbarShop.it-IT.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSekeywordsAdmin.it-IT.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSharebuttonsAdmin.it-IT.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSharebuttonsShop.it-IT.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesShoppingcartAdmin.it-IT.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSocialfollowAdmin.it-IT.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSocialfollowShop.it-IT.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSpecialsAdmin.it-IT.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSpecialsShop.it-IT.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsbestcategoriesAdmin.it-IT.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsbestcustomersAdmin.it-IT.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsbestmanufacturersAdmin.it-IT.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsbestproductsAdmin.it-IT.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsbestsuppliersAdmin.it-IT.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsbestvouchersAdmin.it-IT.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatscarrierAdmin.it-IT.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatscatalogAdmin.it-IT.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatscheckupAdmin.it-IT.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsdataAdmin.it-IT.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsequipmentAdmin.it-IT.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsforecastAdmin.it-IT.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsliveAdmin.it-IT.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsnewsletterAdmin.it-IT.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsoriginAdmin.it-IT.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatspersonalinfosAdmin.it-IT.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsproductAdmin.it-IT.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsregistrationsAdmin.it-IT.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatssalesAdmin.it-IT.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatssearchAdmin.it-IT.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsstockAdmin.it-IT.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesStatsvisitsAdmin.it-IT.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSupplierlistAdmin.it-IT.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesSupplierlistShop.it-IT.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesTrackingfrontAdmin.it-IT.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesTrackingfrontShop.it-IT.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesViewedproductAdmin.it-IT.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesViewedproductShop.it-IT.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesWelcomeAdmin.it-IT.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesWirepaymentAdmin.it-IT.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ModulesWirepaymentShop.it-IT.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopDemoCatalog.it-IT.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopFormsErrors.it-IT.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopFormsHelp.it-IT.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopFormsLabels.it-IT.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopNavigation.it-IT.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopNotificationsError.it-IT.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopNotificationsInfo.it-IT.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopNotificationsSuccess.it-IT.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopNotificationsWarning.it-IT.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopPdf.it-IT.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopThemeActions.it-IT.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopThemeCatalog.it-IT.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopThemeCheckout.it-IT.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopThemeCustomeraccount.it-IT.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\it-IT\\ShopThemeGlobal.it-IT.xlf')), 'pt-PT' => array(0 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminActions.pt-PT.xlf'), 1 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminAdvparametersFeature.pt-PT.xlf'), 2 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminAdvparametersHelp.pt-PT.xlf'), 3 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminAdvparametersNotification.pt-PT.xlf'), 4 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminCatalogFeature.pt-PT.xlf'), 5 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminCatalogHelp.pt-PT.xlf'), 6 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminCatalogNotification.pt-PT.xlf'), 7 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminDashboardFeature.pt-PT.xlf'), 8 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminDashboardHelp.pt-PT.xlf'), 9 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminDashboardNotification.pt-PT.xlf'), 10 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminDesignFeature.pt-PT.xlf'), 11 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminDesignHelp.pt-PT.xlf'), 12 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminDesignNotification.pt-PT.xlf'), 13 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminGlobal.pt-PT.xlf'), 14 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminInternationalFeature.pt-PT.xlf'), 15 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminInternationalHelp.pt-PT.xlf'), 16 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminInternationalNotification.pt-PT.xlf'), 17 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminLoginFeature.pt-PT.xlf'), 18 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminLoginNotification.pt-PT.xlf'), 19 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminModulesFeature.pt-PT.xlf'), 20 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminModulesHelp.pt-PT.xlf'), 21 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminModulesNotification.pt-PT.xlf'), 22 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNavigationFooter.pt-PT.xlf'), 23 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNavigationHeader.pt-PT.xlf'), 24 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNavigationMenu.pt-PT.xlf'), 25 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNavigationNotification.pt-PT.xlf'), 26 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNavigationSearch.pt-PT.xlf'), 27 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNotificationsError.pt-PT.xlf'), 28 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNotificationsInfo.pt-PT.xlf'), 29 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNotificationsSuccess.pt-PT.xlf'), 30 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminNotificationsWarning.pt-PT.xlf'), 31 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminOrderscustomersFeature.pt-PT.xlf'), 32 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminOrderscustomersHelp.pt-PT.xlf'), 33 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminOrderscustomersNotification.pt-PT.xlf'), 34 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminPaymentFeature.pt-PT.xlf'), 35 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminPaymentHelp.pt-PT.xlf'), 36 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminPaymentNotification.pt-PT.xlf'), 37 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminShippingFeature.pt-PT.xlf'), 38 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminShippingHelp.pt-PT.xlf'), 39 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminShippingNotification.pt-PT.xlf'), 40 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminShopparametersFeature.pt-PT.xlf'), 41 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminShopparametersHelp.pt-PT.xlf'), 42 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminShopparametersNotification.pt-PT.xlf'), 43 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminStatsFeature.pt-PT.xlf'), 44 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminStatsHelp.pt-PT.xlf'), 45 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\AdminStatsNotification.pt-PT.xlf'), 46 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\EmailsBody.pt-PT.xlf'), 47 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\EmailsSubject.pt-PT.xlf'), 48 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\Install.pt-PT.xlf'), 49 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\messages.pt-PT.xlf'), 50 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesAdvertisingAdmin.pt-PT.xlf'), 51 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesAutoupgradeAdmin.pt-PT.xlf'), 52 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBannerAdmin.pt-PT.xlf'), 53 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBannerShop.pt-PT.xlf'), 54 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBestsellersAdmin.pt-PT.xlf'), 55 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBestsellersShop.pt-PT.xlf'), 56 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBlockreassuranceAdmin.pt-PT.xlf'), 57 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBlockreassuranceShop.pt-PT.xlf'), 58 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBrandlistAdmin.pt-PT.xlf'), 59 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesBrandlistShop.pt-PT.xlf'), 60 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCarriercomparisonAdmin.pt-PT.xlf'), 61 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCarriercomparisonShop.pt-PT.xlf'), 62 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCashondeliveryAdmin.pt-PT.xlf'), 63 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCashondeliveryShop.pt-PT.xlf'), 64 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCategoryproductsAdmin.pt-PT.xlf'), 65 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCategoryproductsShop.pt-PT.xlf'), 66 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCategorytreeAdmin.pt-PT.xlf'), 67 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCheckpaymentAdmin.pt-PT.xlf'), 68 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCheckpaymentShop.pt-PT.xlf'), 69 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesContactformAdmin.pt-PT.xlf'), 70 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesContactformShop.pt-PT.xlf'), 71 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesContactinfoAdmin.pt-PT.xlf'), 72 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesContactinfoShop.pt-PT.xlf'), 73 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCrosssellingAdmin.pt-PT.xlf'), 74 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCrosssellingShop.pt-PT.xlf'), 75 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCurrencyselectorAdmin.pt-PT.xlf'), 76 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCustomeraccountlinksAdmin.pt-PT.xlf'), 77 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCustomersigninAdmin.pt-PT.xlf'), 78 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesCustomtextAdmin.pt-PT.xlf'), 79 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDashactivityAdmin.pt-PT.xlf'), 80 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDashgoalsAdmin.pt-PT.xlf'), 81 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDashproductsAdmin.pt-PT.xlf'), 82 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDashtrendsAdmin.pt-PT.xlf'), 83 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDataprivacyAdmin.pt-PT.xlf'), 84 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDataprivacyShop.pt-PT.xlf'), 85 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDateofdeliveryAdmin.pt-PT.xlf'), 86 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesDateofdeliveryShop.pt-PT.xlf'), 87 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesEmailsubscriptionAdmin.pt-PT.xlf'), 88 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesEmailsubscriptionShop.pt-PT.xlf'), 89 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesFacetedsearchAdmin.pt-PT.xlf'), 90 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesFacetedsearchShop.pt-PT.xlf'), 91 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesFeaturedproductsAdmin.pt-PT.xlf'), 92 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesFeaturedproductsShop.pt-PT.xlf'), 93 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesFeederAdmin.pt-PT.xlf'), 94 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesGAnalyticsAdmin.pt-PT.xlf'), 95 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesGraphnvd3Admin.pt-PT.xlf'), 96 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesGridhtmlAdmin.pt-PT.xlf'), 97 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesImagesliderAdmin.pt-PT.xlf'), 98 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesLanguageselectorAdmin.pt-PT.xlf'), 99 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesLegalcomplianceAdmin.pt-PT.xlf'), 100 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesLegalcomplianceShop.pt-PT.xlf'), 101 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesLinklistAdmin.pt-PT.xlf'), 102 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesLinklistShop.pt-PT.xlf'), 103 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesLivetranslationAdmin.pt-PT.xlf'), 104 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesLivetranslationShop.pt-PT.xlf'), 105 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesMailalertsAdmin.pt-PT.xlf'), 106 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesMailalertsShop.pt-PT.xlf'), 107 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesMainmenuAdmin.pt-PT.xlf'), 108 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesNewproductsAdmin.pt-PT.xlf'), 109 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesNewproductsShop.pt-PT.xlf'), 110 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesNewsletterAdmin.pt-PT.xlf'), 111 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesPagesnotfoundAdmin.pt-PT.xlf'), 112 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesProductinfoAdmin.pt-PT.xlf'), 113 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesPscleanerAdmin.pt-PT.xlf'), 114 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesReminderAdmin.pt-PT.xlf'), 115 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesRssfeedAdmin.pt-PT.xlf'), 116 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesRssfeedShop.pt-PT.xlf'), 117 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSearchbarAdmin.pt-PT.xlf'), 118 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSearchbarShop.pt-PT.xlf'), 119 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSekeywordsAdmin.pt-PT.xlf'), 120 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSharebuttonsAdmin.pt-PT.xlf'), 121 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSharebuttonsShop.pt-PT.xlf'), 122 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesShoppingcartAdmin.pt-PT.xlf'), 123 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSocialfollowAdmin.pt-PT.xlf'), 124 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSocialfollowShop.pt-PT.xlf'), 125 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSpecialsAdmin.pt-PT.xlf'), 126 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSpecialsShop.pt-PT.xlf'), 127 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsbestcategoriesAdmin.pt-PT.xlf'), 128 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsbestcustomersAdmin.pt-PT.xlf'), 129 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsbestmanufacturersAdmin.pt-PT.xlf'), 130 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsbestproductsAdmin.pt-PT.xlf'), 131 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsbestsuppliersAdmin.pt-PT.xlf'), 132 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsbestvouchersAdmin.pt-PT.xlf'), 133 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatscarrierAdmin.pt-PT.xlf'), 134 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatscatalogAdmin.pt-PT.xlf'), 135 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatscheckupAdmin.pt-PT.xlf'), 136 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsdataAdmin.pt-PT.xlf'), 137 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsequipmentAdmin.pt-PT.xlf'), 138 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsforecastAdmin.pt-PT.xlf'), 139 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsliveAdmin.pt-PT.xlf'), 140 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsnewsletterAdmin.pt-PT.xlf'), 141 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsoriginAdmin.pt-PT.xlf'), 142 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatspersonalinfosAdmin.pt-PT.xlf'), 143 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsproductAdmin.pt-PT.xlf'), 144 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsregistrationsAdmin.pt-PT.xlf'), 145 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatssalesAdmin.pt-PT.xlf'), 146 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatssearchAdmin.pt-PT.xlf'), 147 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsstockAdmin.pt-PT.xlf'), 148 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesStatsvisitsAdmin.pt-PT.xlf'), 149 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSupplierlistAdmin.pt-PT.xlf'), 150 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesSupplierlistShop.pt-PT.xlf'), 151 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesTrackingfrontAdmin.pt-PT.xlf'), 152 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesTrackingfrontShop.pt-PT.xlf'), 153 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesViewedproductAdmin.pt-PT.xlf'), 154 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesViewedproductShop.pt-PT.xlf'), 155 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesWelcomeAdmin.pt-PT.xlf'), 156 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesWirepaymentAdmin.pt-PT.xlf'), 157 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ModulesWirepaymentShop.pt-PT.xlf'), 158 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopDemoCatalog.pt-PT.xlf'), 159 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopFormsErrors.pt-PT.xlf'), 160 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopFormsHelp.pt-PT.xlf'), 161 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopFormsLabels.pt-PT.xlf'), 162 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopNavigation.pt-PT.xlf'), 163 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopNotificationsError.pt-PT.xlf'), 164 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopNotificationsInfo.pt-PT.xlf'), 165 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopNotificationsSuccess.pt-PT.xlf'), 166 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopNotificationsWarning.pt-PT.xlf'), 167 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopPdf.pt-PT.xlf'), 168 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopThemeActions.pt-PT.xlf'), 169 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopThemeCatalog.pt-PT.xlf'), 170 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopThemeCheckout.pt-PT.xlf'), 171 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopThemeCustomeraccount.pt-PT.xlf'), 172 => ($this->targetDirs[2].'/Resources/translations\\pt-PT\\ShopThemeGlobal.pt-PT.xlf')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'default'));

        return $instance;
    }

    /**
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('fragment.handler');

        $e = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $c);

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($b);
        }
        $f->setContainer($this);

        $this->services['twig'] = $instance = new \Twig\Environment($this->get('twig.loader'), array('autoescape' => 'name', 'debug' => true, 'strict_variables' => true, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator'), $this->get('translation_tools.translation.node_visitor')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $e));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('prestashop.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($d));
        $instance->addExtension($e);
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('prestashop.twig.extension.stringloader'));
        $instance->addExtension($this->get('prestashop.twig.extension.layout'));
        $instance->addExtension($this->get('prestashop.twig.extension.translation'));
        $instance->addExtension($this->get('prestashop.twig.extension.dataformatter'));
        $instance->addExtension($this->get('prestashop.twig.extension.admin'));
        $instance->addExtension($this->get('prestashop.twig.extension.hook'));
        $instance->addExtension($this->get('csa_guzzle.twig.extension'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $f);
        $instance->addGlobal('webpack_server', false);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\src\\PrestaShopBundle/Resources/views'), 'PrestaShop');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\csa\\guzzle-bundle\\src/Resources/views'), 'CsaGuzzle');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views'), 'SensioDistribution');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('K37OG6NUrFnwfxWPurq8EHKYCJq4mzsFXoefK6Ozj2m6KRjuiTbRn8f4');
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the public 'var_dumper.cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('prestashop.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'csa_guzzle.data_collector.guzzle' => array(0 => 'guzzle', 1 => 'CsaGuzzleBundle:Collector:guzzle'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom');
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('prestashop.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('prestashop.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 3 => new \PrestaShopBundle\Security\Voter\PageVoter()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5a8e8c72396209.08713335')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('prestashop.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'PrestaShopBundle' => 'PrestaShopBundle\\PrestaShopBundle',
                'TranslationToolsBundle' => 'PrestaShop\\TranslationToolsBundle\\TranslationToolsBundle',
                'CsaGuzzleBundle' => 'Csa\\Bundle\\GuzzleBundle\\CsaGuzzleBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'PrestaShopBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PrestaShopBundle'),
                    'namespace' => 'PrestaShopBundle',
                ),
                'TranslationToolsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\prestashop\\translationtools-bundle'),
                    'namespace' => 'PrestaShop\\TranslationToolsBundle',
                ),
                'CsaGuzzleBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\csa\\guzzle-bundle\\src'),
                    'namespace' => 'Csa\\Bundle\\GuzzleBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'cache.driver' => 'array',
            'database_host' => '127.0.0.1',
            'database_port' => '',
            'database_name' => 'prestashop',
            'database_user' => 'root',
            'database_password' => '',
            'database_prefix' => 'jms_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'K37OG6NUrFnwfxWPurq8EHKYCJq4mzsFXoefK6Ozj2m6KRjuiTbRn8f4',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2018-01-16',
            'locale' => 'en-US',
            'cookie_key' => 'vBxheIBiQfH5yCaqwIJpzYT6mbeGHeMhh6drOqY2I9ny8b8Ssn3mvw8K',
            'cookie_iv' => 'pwJ15UV7',
            'new_cookie_key' => 'def00000758439621632b85251793443b187e4eb634cadd5d5c48f34791753a8111bf8d336cf357c793110318d5e1993344207d68e869977b17222b8d20bb693a20f3aab',
            'adaptersecurityadminclass' => 'PrestaShop\\PrestaShop\\Adapter\\Security\\Admin',
            'translator.class' => 'PrestaShopBundle\\Translation\\Translator',
            'translator.data_collector' => 'PrestaShopBundle\\Translation\\DataCollectorTranslator',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'K37OG6NUrFnwfxWPurq8EHKYCJq4mzsFXoefK6Ozj2m6KRjuiTbRn8f4',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en-US',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => true,
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(

            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.class' => 'Twig\\Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig\\Loader\\ChainLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console_very_verbose' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.legacy' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'app',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'translations_dir' => ($this->targetDirs[2].'/Resources/translations'),
            'themes_translations_dir' => (__DIR__.'/themes'),
            'themes_dir' => ($this->targetDirs[2].'/../themes'),
            'prestashop.security.voter.product.class' => 'PrestaShopBundle\\Security\\Voter\\PageVoter',
            'prestashop.addons.api_client.verify_ssl' => ($this->targetDirs[3].'/app/cache/dev\\cacert.pem'),
            'prestashop.addons.api_client.ttl' => 300,
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'sensio_distribution.webconfigurator.doctrine_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\DoctrineStep',
            'sensio_distribution.webconfigurator.secret_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\SecretStep',
            'sensio_distribution.security_checker.class' => 'SensioLabs\\Security\\SecurityChecker',
            'sensio_distribution.security_checker.command.class' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand',
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'csa_guzzle.data_collector.guzzle' => array(
                    0 => 'guzzle',
                    1 => 'CsaGuzzleBundle:Collector:guzzle',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
        );
    }
}
