<?php

namespace ContainerCv0gvh5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class SK_ITCBundle_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.attribute' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_AttributeService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.class' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_ClassService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.file' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_FileService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.operation' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_OperationService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.package' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_PackageService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.parameter' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_ParameterService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.rest.command' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_CommandService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.rest.controller' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_ControllerService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.rest.entity' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_EntityService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.rest.form' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_FormService',
            'console.command.public_alias.sk.itcbundle.command.code.generator.rest.service' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_ServiceService',
            'console.command.public_alias.sk.itcbundle.command.code.reflection.attribute' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_AttributeService',
            'console.command.public_alias.sk.itcbundle.command.code.reflection.class' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_ClassService',
            'console.command.public_alias.sk.itcbundle.command.code.reflection.file' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_FileService',
            'console.command.public_alias.sk.itcbundle.command.code.reflection.operation' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_OperationService',
            'console.command.public_alias.sk.itcbundle.command.code.reflection.package' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_PackageService',
            'console.command.public_alias.sk.itcbundle.command.code.reflection.parameter' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_ParameterService',
            'console.command.public_alias.sk.itcbundle.command.os.name' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Os_NameService',
            'console.command.public_alias.sk.itcbundle.command.os.release' => 'getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Os_ReleaseService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
        ];

        $this->aliases = [];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/psr/event-dispatcher/src/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Log/Logger.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 6).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(NULL);
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('ELFwklxJfz', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('isyoyCTIYe', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
        }, 1), true, ($this->targetDir.''.'/SK_ITCBundle_KernelDevDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.attribute' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\DocBlock\AttributeCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_AttributeService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/DocBlockCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/AttributeCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.docblock.attribute'] = new \SK\ITCBundle\Command\Code\Generator\DocBlock\AttributeCommand('doc:attribute', 'ITCloud Doc Block Class Attribute Generator', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.code.generator'] ?? $this->getSk_Itcbundle_Code_GeneratorService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.class' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\DocBlock\ClassCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_ClassService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/DocBlockCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/ClassCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.docblock.class'] = new \SK\ITCBundle\Command\Code\Generator\DocBlock\ClassCommand('doc:class', 'ITCloud Doc Block Class Generator', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.code.generator'] ?? $this->getSk_Itcbundle_Code_GeneratorService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.file' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\DocBlock\FileCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_FileService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/DocBlockCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/FileCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.docblock.file'] = new \SK\ITCBundle\Command\Code\Generator\DocBlock\FileCommand('doc:file', 'ITCloud Doc Block File Generator', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.code.generator'] ?? $this->getSk_Itcbundle_Code_GeneratorService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.operation' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\DocBlock\OperationCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_OperationService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/DocBlockCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/OperationCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.docblock.operation'] = new \SK\ITCBundle\Command\Code\Generator\DocBlock\OperationCommand('doc:operations', 'ITCloud Doc Block Class Operation Generator', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.code.generator'] ?? $this->getSk_Itcbundle_Code_GeneratorService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.package' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\DocBlock\PackageCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_PackageService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/DocBlockCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/PackageCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.docblock.package'] = new \SK\ITCBundle\Command\Code\Generator\DocBlock\PackageCommand('doc:package', 'ITCloud Doc Block Package Generator', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.code.generator'] ?? $this->getSk_Itcbundle_Code_GeneratorService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.parameter' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\DocBlock\ParameterCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Docblock_ParameterService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/DocBlockCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/DocBlock/ParameterCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.docblock.parameter'] = new \SK\ITCBundle\Command\Code\Generator\DocBlock\ParameterCommand('doc:parameter', 'ITCloud Doc Block Class Operation Parameter Generator', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.code.generator'] ?? $this->getSk_Itcbundle_Code_GeneratorService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.command' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\REST\CommandCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_CommandService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/RESTCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/CommandCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.rest.command'] = new \SK\ITCBundle\Command\Code\Generator\REST\CommandCommand('rest:command', 'ITCloud REST Generator Command', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.raml.schema.parser'] ?? ($this->privates['sk.itcbundle.raml.schema.parser'] = new \Raml\Parser())));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.controller' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\REST\ControllerCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_ControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/RESTCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/ControllerCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.rest.controller'] = new \SK\ITCBundle\Command\Code\Generator\REST\ControllerCommand('rest:controller', 'ITCloud REST Generator Controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.raml.schema.parser'] ?? ($this->privates['sk.itcbundle.raml.schema.parser'] = new \Raml\Parser())));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.entity' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\REST\EntityCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_EntityService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/RESTCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/EntityCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.rest.entity'] = new \SK\ITCBundle\Command\Code\Generator\REST\EntityCommand('rest:entity', 'ITCloud REST Generator Entity', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.raml.schema.parser'] ?? ($this->privates['sk.itcbundle.raml.schema.parser'] = new \Raml\Parser())));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.form' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\REST\FormCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_FormService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/RESTCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/FormCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.rest.form'] = new \SK\ITCBundle\Command\Code\Generator\REST\FormCommand('rest:form', 'ITCloud REST Generator Form', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.raml.schema.parser'] ?? ($this->privates['sk.itcbundle.raml.schema.parser'] = new \Raml\Parser())));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.service' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Generator\REST\ServiceCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Generator_Rest_ServiceService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/RESTCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Generator/REST/ServiceCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.generator.rest.service'] = new \SK\ITCBundle\Command\Code\Generator\REST\ServiceCommand('rest:service', 'ITCloud REST Generator Service', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()), ($this->privates['sk.itcbundle.raml.schema.parser'] ?? ($this->privates['sk.itcbundle.raml.schema.parser'] = new \Raml\Parser())));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.reflection.attribute' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Reflection\AttributeCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_AttributeService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/AttributeCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.reflection.attribute'] = new \SK\ITCBundle\Command\Code\Reflection\AttributeCommand('uml:attribute', 'ITCloud UML Classes Attributes', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.reflection.class' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Reflection\ClassCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_ClassService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ClassCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.reflection.class'] = new \SK\ITCBundle\Command\Code\Reflection\ClassCommand('uml:class', 'ITCloud UML Classes', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.reflection.file' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Reflection\FileCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_FileService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/FileCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.reflection.file'] = new \SK\ITCBundle\Command\Code\Reflection\FileCommand('uml:file', 'ITCloud UML Classes Files', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.reflection.operation' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Reflection\OperationCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_OperationService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/OperationCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.reflection.operation'] = new \SK\ITCBundle\Command\Code\Reflection\OperationCommand('uml:operation', 'ITCloud UML Classes Operations', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.reflection.package' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Reflection\PackageCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_PackageService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/PackageCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.reflection.package'] = new \SK\ITCBundle\Command\Code\Reflection\PackageCommand('uml:package', 'ITCloud UML Classes Namespaces', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.code.reflection.parameter' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\Code\Reflection\ParameterCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Code_Reflection_ParameterService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ReflectionCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/Code/Reflection/ParameterCommand.php';

        return $this->services['console.command.public_alias.sk.itcbundle.command.code.reflection.parameter'] = new \SK\ITCBundle\Command\Code\Reflection\ParameterCommand('uml:parameter', 'ITCloud UML Classes Parameters', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService()), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.os.name' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\OS\ShellCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Os_NameService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/OS/ShellCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/AbstractService.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/OS/Command.php';

        $a = ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));
        $b = ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService());

        return $this->services['console.command.public_alias.sk.itcbundle.command.os.name'] = new \SK\ITCBundle\Command\OS\ShellCommand('os:info', 'ITCloud OS Info', $a, $b, new \SK\ITCBundle\Service\OS\Command($a, $b, 'uname', [0 => '-a']));
    }

    /**
     * Gets the public 'console.command.public_alias.sk.itcbundle.command.os.release' shared autowired service.
     *
     * @return \SK\ITCBundle\Command\OS\ShellCommand
     */
    protected function getConsole_Command_PublicAlias_Sk_Itcbundle_Command_Os_ReleaseService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/TableCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Command/OS/ShellCommand.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/AbstractService.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/OS/Command.php';

        $a = ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));
        $b = ($this->privates['sk.itcbundle.table'] ?? $this->getSk_Itcbundle_TableService());

        return $this->services['console.command.public_alias.sk.itcbundle.command.os.release'] = new \SK\ITCBundle\Command\OS\ShellCommand('os:release', 'ITCloud OS Release', $a, $b, new \SK\ITCBundle\Service\OS\Command($a, $b, 'lsb_release', [0 => '-a']));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService', false],
            'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService', false],
            'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService', false],
            'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService', false],
            'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService', false],
            'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService', false],
            'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService', false],
            'maker.auto_command.make_functional_test' => ['privates', 'maker.auto_command.make_functional_test', 'getMaker_AutoCommand_MakeFunctionalTestService', false],
            'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService', false],
            'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService', false],
            'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService', false],
            'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService', false],
            'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService', false],
            'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService', false],
            'maker.auto_command.make_unit_test' => ['privates', 'maker.auto_command.make_unit_test', 'getMaker_AutoCommand_MakeUnitTestService', false],
            'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService', false],
            'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService', false],
            'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService', false],
        ], [
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_functional_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_unit_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ErrorController.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 4 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 5 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 6)));
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
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2)));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Config/FileLocator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/routing/Loader/ContainerLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'SK\\ITCBundle\\Kernel',
        ])));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, []);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (false) {
                yield 'cache.annotations' => null;
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (false) {
                yield 'cache.messenger.restart_workers_signal' => null;
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (false) + (int) (false) + (int) (false);
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Session.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/Session/Flash/FlashBag.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDir.''.'/sessions'))), new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0)), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
        }, 1));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsListCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/yaml/Command/LintCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/EventListener/ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), true);
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'maker.auto_command.make_auth' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeAuthService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeAuthenticator.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), $b, ($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL)))), $a, $b);

        $instance->setName('make:auth');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCommandService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeCommand.php';

        $this->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:command');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeControllerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeController.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:controller');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_crud' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCrudService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeCrud.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php';

        $this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL))), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:crud');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeEntityService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeEntity.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL))), \dirname(__DIR__, 4), $b), $a, $b);

        $instance->setName('make:entity');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_fixtures' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFixturesService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeFixtures.php';

        $this->privates['maker.auto_command.make_fixtures'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFixtures(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:fixtures');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFormService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeForm.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php';

        $this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL))), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_functional_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFunctionalTestService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php';

        $this->privates['maker.auto_command.make_functional_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFunctionalTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:functional-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_migration' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMigrationService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/ApplicationAwareMakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeMigration.php';

        $this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:migration');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeRegistrationFormService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_registration_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm($a, ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService()), ($this->services['router'] ?? $this->getRouterService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:registration-form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerEncoderService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php';

        $this->privates['maker.auto_command.make_serializer_encoder'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:encoder');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_normalizer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerNormalizerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeSerializerNormalizer.php';

        $this->privates['maker.auto_command.make_serializer_normalizer'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:normalizer');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSubscriberService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/EventRegistry.php';

        $this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:subscriber');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_twig_extension' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTwigExtensionService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeTwigExtension.php';

        $this->privates['maker.auto_command.make_twig_extension'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:twig-extension');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_unit_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUnitTestService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeUnitTest.php';

        $this->privates['maker.auto_command.make_unit_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUnitTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:unit-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUserService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeUser.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater()))), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:user');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_validator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeValidatorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeValidator.php';

        $this->privates['maker.auto_command.make_validator'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeValidator(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:validator');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeVoterService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Maker/MakeVoter.php';

        $this->privates['maker.auto_command.make_voter'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeVoter(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:voter');

        return $instance;
    }

    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    protected function getMaker_FileManagerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/FileManager.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), \dirname(__DIR__, 4), NULL);
    }

    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    protected function getMaker_GeneratorService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Generator.php';

        return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), 'App');
    }

    /**
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    protected function getMaker_Renderer_FormTypeRendererService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php';

        return $this->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'initialized_session' => '?',
            'session' => '?',
        ]));
    }

    /**
     * Gets the private 'sk.itcbundle.code.generator' shared autowired service.
     *
     * @return \SK\ITCBundle\Service\Code\Generator
     */
    protected function getSk_Itcbundle_Code_GeneratorService()
    {
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/AbstractService.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/Code/Generator.php';

        return $this->privates['sk.itcbundle.code.generator'] = new \SK\ITCBundle\Service\Code\Generator(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['sk.itcbundle.code.reflection'] ?? $this->getSk_Itcbundle_Code_ReflectionService()));
    }

    /**
     * Gets the private 'sk.itcbundle.code.reflection' shared autowired service.
     *
     * @return \SK\ITCBundle\Service\Code\Reflection
     */
    protected function getSk_Itcbundle_Code_ReflectionService()
    {
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/AbstractService.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/Code/Reflection.php';

        return $this->privates['sk.itcbundle.code.reflection'] = new \SK\ITCBundle\Service\Code\Reflection(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'sk.itcbundle.table' shared autowired service.
     *
     * @return \SK\ITCBundle\Service\Table\Table
     */
    protected function getSk_Itcbundle_TableService()
    {
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/AbstractService.php';
        include_once \dirname(__DIR__, 4).'/ITCBundle/Service/Table/Table.php';

        return $this->privates['sk.itcbundle.table'] = new \SK\ITCBundle\Service\Table\Table(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 120);
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'framework.annotations.file_cache_dir' => false,
        'framework.session.save_path' => false,
        'doctrine.orm.proxy_dir' => false,
        'twig.cache' => false,
        'session.save_path' => false,
        'debug.container.dump' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'framework.annotations.file_cache_dir': $value = ($this->targetDir.''.'/annotations'); break;
            case 'framework.session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/Proxies'); break;
            case 'twig.cache': $value = ($this->targetDir.''.'/twig'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/SK_ITCBundle_KernelDevDebugContainer.xml'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SKITCBundle' => 'SK\\ITCBundle\\SKITCBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 6).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SKITCBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/ITCBundle'),
                    'namespace' => 'SK\\ITCBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 6).'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'SK_ITCBundle_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'kernel.secret' => 'ITC IS REALLY SECURE Bundle!',
            'framework.http_method_override' => true,
            'framework.default_locale' => 'cs',
            'framework.secret' => 'ITC IS REALLY SECURE Bundle!',
            'framework.trusted_proxies' => '192.0.0.1, 10.0.0.0/8',
            'framework.trusted_host' => '^localhost$',
            'framework.test' => false,
            'framework.fragments.enabled' => true,
            'framework.fragments.path' => '_fragments',
            'framework.router.http_port' => 80,
            'framework.router.https_port' => 443,
            'framework.annotations.cache' => 'file',
            'framework.annotations.debug' => true,
            'framework.form.csfr_protection.enabled' => true,
            'framework.csfr_protection.enabled' => true,
            'framework.csfr_protection.field_name' => 'csfr-protection',
            'framework.profiler.enabled' => true,
            'framework.esi.enabled' => true,
            'framework.translator.fallback' => 'en',
            'framework.translator.locales' => 'cs_CZ|en_US|fr_FR|de_DE|sk_SK|pl_PL|hu_HU',
            'framework.translator.enabled' => true,
            'framework.templating.engines' => 'twig',
            'framework.validation.enable_annotations' => true,
            'framework.session.enabled' => true,
            'framework.session.handler_id' => NULL,
            'framework.session.cookie_secure' => 'auto',
            'framework.session.cookie_samesite' => 'lax',
            'framework.serializer.enabled' => true,
            'framework.serializer.enabled-annotations' => true,
            'framework.serializer.cache' => 'serializer.mapping.cache.apc',
            'monolog.logger.main.name' => 'main',
            'monolog.logger.main.type' => 'rotating_file',
            'monolog.logger.main.path' => (\dirname(__DIR__, 3).'/log/dev.log'),
            'monolog.logger.main.level' => 'ERROR',
            'monolog.logger.main.max_files' => 256,
            'monolog.logger.main.handler' => 'file',
            'monolog.logger.console.name' => 'console',
            'monolog.logger.console.type' => 'console',
            'monolog.logger.console.level' => 'ERROR',
            'jms_security_extra' => [
                'secure_all_services' => false,
                'expressions' => true,
            ],
            'framework.form.enabled' => true,
            'framework.form.csrf_protection.enabled' => true,
            'doctrine.dbal.default_connection' => 'default',
            'doctrine.dbal.connection.default.name' => 'default',
            'doctrine.dbal.connection.default.driver' => 'pdo_mysql',
            'doctrine.dbal.connection.default.dbname' => 'INFORMATION_SCHEMA',
            'doctrine.dbal.connection.default.host' => '127.0.0.1',
            'doctrine.dbal.connection.default.port' => 3306,
            'doctrine.dbal.connection.default.user' => 'root',
            'doctrine.dbal.connection.default.password' => '',
            'doctrine.dbal.connection.default.logging' => true,
            'doctrine.dbal.connection.default.profiling' => true,
            'doctrine.dbal.connection.default.charset' => 'UTF8',
            'doctrine.orm.auto_mapping' => true,
            'doctrine.orm.default_entity_manager' => 'default',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.orm.em.default.name' => 'default',
            'doctrine.orm.em.default.connection' => 'default',
            'assetic.debug' => true,
            'assetic.charset' => 'UTF-8',
            'assetic.use_controller' => true,
            'twig.auto_reload' => true,
            'twig.autoescape' => true,
            'twig.charset' => 'UTF-8',
            'twig.debug' => true,
            'twig.base_template_class' => 'Twig_Template',
            'twig.strict_variables' => true,
            'sk.itcbundle.api.type.default' => 'rest',
            'sk.itcbundle.api.version' => '',
            'sk.itcbundle.google.api.key' => '',
            'sk.itcbundle.raml.schema.parser.class' => 'Raml\\Parser',
            'sk.itcbundle.assetic.content_filter.class' => 'SK\\ITCBundle\\Assetic\\Filter\\ContentFilter',
            'sk.itcbundle.raml.schema.writer.class' => 'SK\\ITCBundle\\Service\\RAML\\Schema\\Writer',
            'sk.itcbundle.code.generator.class' => 'SK\\ITCBundle\\Service\\Code\\Generator',
            'sk.itcbundle.code.generator.rest.command.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\REST\\Command',
            'sk.itcbundle.code.generator.rest.controller.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\REST\\Controller',
            'sk.itcbundle.code.generator.rest.entity.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\REST\\Entity',
            'sk.itcbundle.code.generator.rest.form.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\REST\\Form',
            'sk.itcbundle.code.reflection.class' => 'SK\\ITCBundle\\Service\\Code\\Reflection',
            'sk.itcbundle.command.code.generator.phpunit.functional.name' => 'generator:phpunit:functional',
            'sk.itcbundle.command.code.generator.phpunit.functional.description' => 'ITCloud PHPUnit Functional Case',
            'sk.itcbundle.command.code.generator.phpunit.functional.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\PHPUnit\\Functional',
            'sk.itcbundle.command.code.generator.phpunit.performance.name' => 'generator:phpunit:performance',
            'sk.itcbundle.command.code.generator.phpunit.performance.description' => 'ITCloud PHPUnit Performance Case',
            'sk.itcbundle.command.code.generator.phpunit.performance.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\PHPUnit\\Performance',
            'sk.itcbundle.command.code.generator.phpunit.config.name' => 'generator:phpunit:config',
            'sk.itcbundle.command.code.generator.phpunit.config.description' => 'ITCloud PHPUnit Config Case',
            'sk.itcbundle.command.code.generator.phpunit.config.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\PHPUnit\\Config',
            'sk.itcbundle.command.code.generator.phpunit.equal.name' => 'generator:phpunit:equal',
            'sk.itcbundle.command.code.generator.phpunit.equal.description' => 'ITCloud PHPUnit Equal Case',
            'sk.itcbundle.command.code.generator.phpunit.equal.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\PHPUnit\\Equal',
            'sk.itcbundle.command.code.generator.phpunit.run.name' => 'generator:phpunit:run',
            'sk.itcbundle.command.code.generator.phpunit.run.description' => 'ITCloud PHPUnit Run Case',
            'sk.itcbundle.command.code.generator.phpunit.run.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\PHPUnit\\Run',
            'sk.itcbundle.command.code.generator.dtd.entity.name' => 'generator:dtd:entity',
            'sk.itcbundle.command.code.generator.dtd.entity.description' => 'ITCloud DTD Entity Generator',
            'sk.itcbundle.command.code.generator.dtd.entity.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DTD\\Entity',
            'sk.itcbundle.command.code.generator.dtd.attribute_list.name' => 'generator:dtd:attlist',
            'sk.itcbundle.command.code.generator.dtd.attribute_list.description' => 'ITCloud DTD Attribute List Generator',
            'sk.itcbundle.command.code.generator.dtd.attribute_list.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DTD\\AttributeList',
            'sk.itcbundle.command.code.generator.dtd.element.name' => 'generator:dtd:element',
            'sk.itcbundle.command.code.generator.dtd.element.description' => 'ITCloud DTD Element Generator',
            'sk.itcbundle.command.code.generator.dtd.element.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DTD\\Element',
            'sk.itcbundle.command.code.generator.dtd.document.name' => 'generator:dtd:document',
            'sk.itcbundle.command.code.generator.dtd.document.description' => 'ITCloud DTD Document Generator',
            'sk.itcbundle.command.code.generator.dtd.document.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DTD\\Document',
            'sk.itcbundle.command.code.generator.dtd.route.name' => 'generator:dtd:route',
            'sk.itcbundle.command.code.generator.dtd.route.description' => 'ITCloud DTD Route Generator',
            'sk.itcbundle.command.code.generator.dtd.route.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DTD\\Route'."\n".'		',
            'sk.itcbundle.command.code.generator.dtd.security.name' => 'generator:dtd:security',
            'sk.itcbundle.command.code.generator.dtd.security.description' => 'ITCloud DTD Security Generator',
            'sk.itcbundle.command.code.generator.dtd.security.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DTD\\Security',
            'sk.itcbundle.command.code.generator.xmlschema.orm.name' => 'generator:xsd:orm',
            'sk.itcbundle.command.code.generator.xmlschema.orm.description' => 'ITCloud XSD ORM Generator',
            'sk.itcbundle.command.code.generator.xmlschema.orm.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\XMLSchema\\ORM',
            'sk.itcbundle.command.code.generator.xmlschema.form.name' => 'generator:xsd:form',
            'sk.itcbundle.command.code.generator.xmlschema.form.description' => 'ITCloud XSD Form Generator',
            'sk.itcbundle.command.code.generator.xmlschema.form.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\XMLSchema\\Form',
            'sk.itcbundle.command.code.generator.xmlschema.view.name' => 'generator:xsd:view',
            'sk.itcbundle.command.code.generator.xmlschema.view.description' => 'ITCloud XSD View Generator',
            'sk.itcbundle.command.code.generator.xmlschema.view.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\XMLSchema\\View',
            'sk.itcbundle.command.code.generator.xmlschema.config.name' => 'generator:xsd:config',
            'sk.itcbundle.command.code.generator.xmlschema.config.description' => 'ITCloud XSD Config Generator',
            'sk.itcbundle.command.code.generator.xmlschema.config.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\XMLSchema\\Config',
            'sk.itcbundle.command.code.generator.xmlschema.route.name' => 'generator:xsd:route',
            'sk.itcbundle.command.code.generator.xmlschema.route.description' => 'ITCloud XSD Route Generator',
            'sk.itcbundle.command.code.generator.xmlschema.route.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\XMLSchema\\Route',
            'sk.itcbundle.command.code.generator.xmlschema.security.name' => 'generator:xsd:security',
            'sk.itcbundle.command.code.generator.xmlschema.security.description' => 'ITCloud XSD Security Generator',
            'sk.itcbundle.command.code.generator.xmlschema.security.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\XMLSchema\\Security',
            'sk.itcbundle.command.code.generator.xmi.export.name' => 'xmi:export',
            'sk.itcbundle.command.code.generator.xmi.export.description' => 'ITCloud XMI Export Generator',
            'sk.itcbundle.command.code.generator.xmi.export.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\XMI\\Export',
            'sk.itcbundle.command.code.generator.wsdl.bundle.name' => 'generator:wsdl:bundle',
            'sk.itcbundle.command.code.generator.wsdl.bundle.description' => 'ITCloud WSDL Bundle Generator',
            'sk.itcbundle.command.code.generator.wsdl.bundle.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Bundle',
            'sk.itcbundle.command.code.generator.wsdl.controller.name' => 'generator:wsdl:controller',
            'sk.itcbundle.command.code.generator.wsdl.controller.description' => 'ITCloud WSDL Controller Generator',
            'sk.itcbundle.command.code.generator.wsdl.controller.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Controller',
            'sk.itcbundle.command.code.generator.wsdl.orm.name' => 'generator:wsdl:orm',
            'sk.itcbundle.command.code.generator.wsdl.orm.description' => 'ITCloud WSDL ORM Generator',
            'sk.itcbundle.command.code.generator.wsdl.orm.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\ORM'."\n".'		',
            'sk.itcbundle.command.code.generator.wsdl.form.name' => 'generator:wsdl:form',
            'sk.itcbundle.command.code.generator.wsdl.form.description' => 'ITCloud WSDL Form Generator',
            'sk.itcbundle.command.code.generator.wsdl.form.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Form'."\n".'		',
            'sk.itcbundle.command.code.generator.wsdl.client.name' => 'generator:wsdl:client',
            'sk.itcbundle.command.code.generator.wsdl.client.description' => 'ITCloud WSDL Client Generator',
            'sk.itcbundle.command.code.generator.wsdl.client.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Client',
            'sk.itcbundle.command.code.generator.wsdl.server.name' => 'generator:wsdl:server',
            'sk.itcbundle.command.code.generator.wsdl.server.description' => 'ITCloud WSDL Server Generator',
            'sk.itcbundle.command.code.generator.wsdl.server.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Server',
            'sk.itcbundle.command.code.generator.wsdl.routing.name' => 'generator:wsdl:route',
            'sk.itcbundle.command.code.generator.wsdl.routing.description' => 'ITCloud WSDL Routes Generator',
            'sk.itcbundle.command.code.generator.wsdl.routing.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Route',
            'sk.itcbundle.command.code.generator.wsdl.config.name' => 'generator:wsdl:config',
            'sk.itcbundle.command.code.generator.wsdl.config.description' => 'ITCloud WSDL Conifg Generator',
            'sk.itcbundle.command.code.generator.wsdl.config.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Config',
            'sk.itcbundle.command.code.generator.wsdl.view.name' => 'generator:wsdl:view',
            'sk.itcbundle.command.code.generator.wsdl.view.description' => 'ITCloud WSDL Views Generator',
            'sk.itcbundle.command.code.generator.wsdl.view.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\View'."\n".'		',
            'sk.itcbundle.command.code.generator.wsdl.route.name' => 'generator:wsdl:route',
            'sk.itcbundle.command.code.generator.wsdl.route.description' => 'ITCloud WSDL Route Generator',
            'sk.itcbundle.command.code.generator.wsdl.route.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Route',
            'sk.itcbundle.command.code.generator.wsdl.security.name' => 'generator:wsdl:security',
            'sk.itcbundle.command.code.generator.wsdl.security.description' => 'ITCloud WSDL Security Generator',
            'sk.itcbundle.command.code.generator.wsdl.security.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Security',
            'sk.itcbundle.command.code.generator.wsdl.parameter.name' => 'generator:wsdl:parameter',
            'sk.itcbundle.command.code.generator.wsdl.parameter.description' => 'ITCloud WSDL Parameter Generator',
            'sk.itcbundle.command.code.generator.wsdl.parameter.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\WSDL\\Parameter',
            'sk.itcbundle.command.code.generator.docblock.file.name' => 'doc:file',
            'sk.itcbundle.command.code.generator.docblock.file.description' => 'ITCloud Doc Block File Generator',
            'sk.itcbundle.command.code.generator.docblock.file.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DocBlock\\FileCommand',
            'sk.itcbundle.command.code.generator.docblock.package.name' => 'doc:package',
            'sk.itcbundle.command.code.generator.docblock.package.description' => 'ITCloud Doc Block Package Generator',
            'sk.itcbundle.command.code.generator.docblock.package.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DocBlock\\PackageCommand',
            'sk.itcbundle.command.code.generator.docblock.class.name' => 'doc:class',
            'sk.itcbundle.command.code.generator.docblock.class.description' => 'ITCloud Doc Block Class Generator',
            'sk.itcbundle.command.code.generator.docblock.class.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DocBlock\\ClassCommand',
            'sk.itcbundle.command.code.generator.docblock.attribute.name' => 'doc:attribute',
            'sk.itcbundle.command.code.generator.docblock.attribute.description' => 'ITCloud Doc Block Class Attribute Generator',
            'sk.itcbundle.command.code.generator.docblock.attribute.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DocBlock\\AttributeCommand',
            'sk.itcbundle.command.code.generator.docblock.operation.name' => 'doc:operations',
            'sk.itcbundle.command.code.generator.docblock.operation.description' => 'ITCloud Doc Block Class Operation Generator',
            'sk.itcbundle.command.code.generator.docblock.operation.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DocBlock\\OperationCommand',
            'sk.itcbundle.command.code.generator.docblock.parameter.name' => 'doc:parameter',
            'sk.itcbundle.command.code.generator.docblock.parameter.description' => 'ITCloud Doc Block Class Operation Parameter Generator',
            'sk.itcbundle.command.code.generator.docblock.parameter.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\DocBlock\\ParameterCommand',
            'sk.itcbundle.command.code.reflection.file.name' => 'uml:file',
            'sk.itcbundle.command.code.reflection.file.description' => 'ITCloud UML Classes Files',
            'sk.itcbundle.command.code.reflection.file.class' => 'SK\\ITCBundle\\Command\\Code\\Reflection\\FileCommand',
            'sk.itcbundle.command.code.reflection.package.name' => 'uml:package',
            'sk.itcbundle.command.code.reflection.package.description' => 'ITCloud UML Classes Namespaces',
            'sk.itcbundle.command.code.reflection.package.class' => 'SK\\ITCBundle\\Command\\Code\\Reflection\\PackageCommand',
            'sk.itcbundle.command.code.reflection.class.name' => 'uml:class',
            'sk.itcbundle.command.code.reflection.class.description' => 'ITCloud UML Classes',
            'sk.itcbundle.command.code.reflection.class.class' => 'SK\\ITCBundle\\Command\\Code\\Reflection\\ClassCommand',
            'sk.itcbundle.command.code.reflection.attribute.name' => 'uml:attribute',
            'sk.itcbundle.command.code.reflection.attribute.description' => 'ITCloud UML Classes Attributes',
            'sk.itcbundle.command.code.reflection.attribute.class' => 'SK\\ITCBundle\\Command\\Code\\Reflection\\AttributeCommand',
            'sk.itcbundle.command.code.reflection.operation.name' => 'uml:operation',
            'sk.itcbundle.command.code.reflection.operation.description' => 'ITCloud UML Classes Operations',
            'sk.itcbundle.command.code.reflection.operation.class' => 'SK\\ITCBundle\\Command\\Code\\Reflection\\OperationCommand',
            'sk.itcbundle.command.code.reflection.parameter.name' => 'uml:parameter',
            'sk.itcbundle.command.code.reflection.parameter.description' => 'ITCloud UML Classes Parameters',
            'sk.itcbundle.command.code.reflection.parameter.class' => 'SK\\ITCBundle\\Command\\Code\\Reflection\\ParameterCommand',
            'sk.itcbundle.command.mylyn.report.name' => 'mylyn:report',
            'sk.itcbundle.command.mylyn.report.description' => 'ITCloud Mylyn Report Repository',
            'sk.itcbundle.command.mylyn.report.class' => 'SK\\ITCBundle\\Command\\Mylyn\\ReportCommand',
            'sk.itcbundle.command.code.generator.rest.command.name' => 'rest:command',
            'sk.itcbundle.command.code.generator.rest.command.description' => 'ITCloud REST Generator Command',
            'sk.itcbundle.command.code.generator.rest.command.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\REST\\CommandCommand',
            'sk.itcbundle.command.code.generator.rest.controller.name' => 'rest:controller',
            'sk.itcbundle.command.code.generator.rest.controller.description' => 'ITCloud REST Generator Controller',
            'sk.itcbundle.command.code.generator.rest.controller.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\REST\\ControllerCommand',
            'sk.itcbundle.command.code.generator.rest.entity.name' => 'rest:entity',
            'sk.itcbundle.command.code.generator.rest.entity.description' => 'ITCloud REST Generator Entity',
            'sk.itcbundle.command.code.generator.rest.entity.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\REST\\EntityCommand',
            'sk.itcbundle.command.code.generator.rest.form.name' => 'rest:form',
            'sk.itcbundle.command.code.generator.rest.form.description' => 'ITCloud REST Generator Form',
            'sk.itcbundle.command.code.generator.rest.form.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\REST\\FormCommand',
            'sk.itcbundle.command.code.generator.rest.service.name' => 'rest:service',
            'sk.itcbundle.command.code.generator.rest.service.description' => 'ITCloud REST Generator Service',
            'sk.itcbundle.command.code.generator.rest.service.class' => 'SK\\ITCBundle\\Command\\Code\\Generator\\REST\\ServiceCommand',
            'sk.itcbundle.google.translator.class' => 'SK\\ITCBundle\\Service\\Google\\Translator',
            'sk.itcbundle.google.spreadsheet.class' => 'SK\\ITCBundle\\Service\\Google\\Spreadsheet',
            'sk.itcbundle.excel.class' => 'SK\\ITCBundle\\Service\\Excel',
            'sk.itcbundle.menu.builder.class' => 'SK\\ITCBundle\\Menu\\Builder',
            'sk.itcbundle.code.generator.phpunit.functional.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\PHPUnit\\Functional',
            'sk.itcbundle.code.generator.phpunit.performance.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\PHPUnit\\Performance',
            'sk.itcbundle.code.generator.phpunit.config.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\PHPUnit\\Config',
            'sk.itcbundle.code.generator.phpunit.equal.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\PHPUnit\\Equal',
            'sk.itcbundle.code.generator.phpunit.run.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\PHPUnit\\Run',
            'sk.itcbundle.code.generator.xmlschema.orm.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\XMLSchema\\ORM'."\n".'		',
            'sk.itcbundle.code.generator.xmlschema.form.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\XMLSchema\\Form'."\n".'		',
            'sk.itcbundle.code.generator.xmlschema.view.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\XMLSchema\\View'."\n".'		',
            'sk.itcbundle.code.generator.xmlschema.config.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\XMLSchema\\Config'."\n".'		',
            'sk.itcbundle.code.generator.xmlschema.route.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\XMLSchema\\Route'."\n".'		',
            'sk.itcbundle.code.generator.xmlschema.security.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\XMLSchema\\Security',
            'sk.itcbundle.code.generator.dtd.entity.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\DTD\\Entity',
            'sk.itcbundle.code.generator.dtd.attribute_list.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\DTD\\AttributeList',
            'sk.itcbundle.code.generator.dtd.element.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\DTD\\Element',
            'sk.itcbundle.code.generator.dtd.document.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\DTD\\Document',
            'sk.itcbundle.code.generator.dtd.route.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\DTD\\Route',
            'sk.itcbundle.code.generator.dtd.security.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\DTD\\Security',
            'sk.itcbundle.code.generator.xmi.export.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\XMI\\Export',
            'sk.itcbundle.translation.translator.class' => 'SK\\ITCBundle\\Service\\Translation\\Translator',
            'sk.itcbundle.code.generator.wsdl.bundle.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Bundle',
            'sk.itcbundle.code.generator.wsdl.controller.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Controller',
            'sk.itcbundle.code.generator.wsdl.orm.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\ORM',
            'sk.itcbundle.code.generator.wsdl.form.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Form',
            'sk.itcbundle.code.generator.wsdl.client.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Client',
            'sk.itcbundle.code.generator.wsdl.server.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Server',
            'sk.itcbundle.code.generator.wsdl.routing.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Route',
            'sk.itcbundle.code.generator.wsdl.config.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Config',
            'sk.itcbundle.code.generator.wsdl.route.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Route',
            'sk.itcbundle.code.generator.wsdl.security.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Security',
            'sk.itcbundle.code.generator.wsdl.view.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\View',
            'sk.itcbundle.code.generator.wsdl.parameter.class' => 'SK\\ITCBundle\\Service\\Code\\Generator\\WSDL\\Parameter',
            'sk.itcbundle.os.command.class' => 'SK\\ITCBundle\\Service\\OS\\Command',
            'sk.itcbundle.command.os.shellcommand.class' => 'SK\\ITCBundle\\Command\\OS\\ShellCommand',
            'sk.itcbundle.command.os.name.name' => 'os:info',
            'sk.itcbundle.command.os.name.description' => 'ITCloud OS Info',
            'sk.itcbundle.command.os.name.class' => 'SK\\ITCBundle\\Command\\OS\\ShellCommand ',
            'sk.itcbundle.command.os.release.name' => 'os:release',
            'sk.itcbundle.command.os.release.description' => 'ITCloud OS Release',
            'sk.itcbundle.command.os.release.class' => 'SK\\ITCBundle\\Command\\OS\\ShellCommand ',
            'sk.itcbundle.google.drive.class' => 'SK\\ITCBundle\\Service\\Google\\Drive',
            'sk.itcbundle.google.spreadsheet.provider.class' => 'Google\\Spreadsheet\\DefaultServiceRequest',
            'sk.itcbundle.google.spreadsheet.factory.class' => 'Google\\Spreadsheet\\ServiceRequestFactory',
            'sk.itcbundle.google.api.client.class' => 'Google_Client',
            'sk.itcbundle.command.google.translator.name' => 'google:trans',
            'sk.itcbundle.command.google.translator.description' => 'ITCloud Google Trans',
            'sk.itcbundle.command.google.translator.class' => 'SK\\ITCBundle\\Command\\Google\\Translator',
            'sk.itcbundle.command.google.drive.name' => 'google:drive',
            'sk.itcbundle.command.google.drive.description' => 'ITCloud Google Drive',
            'sk.itcbundle.command.google.drive.class' => 'SK\\ITCBundle\\Command\\Google\\Drive',
            'sk.itcbundle.command.google.spreadsheet.name' => 'google:spreadsheet',
            'sk.itcbundle.command.google.spreadsheet.description' => 'ITCloud Google Spreadsheet',
            'sk.itcbundle.command.google.spreadsheet.class' => 'SK\\ITCBundle\\Command\\Google\\Spreadsheet',
            'google.application.name' => 'ITCloud',
            'google.application.configFile' => 'ITCloud',
            'google.application.offline' => 'offline',
            'sk.itcbundle.table.class' => 'SK\\ITCBundle\\Service\\Table\\Table',
            'sk.itcbundle.table.maxColWidth' => 120,
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'console.command.ids' => [
                0 => 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.file',
                1 => 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.package',
                2 => 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.class',
                3 => 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.attribute',
                4 => 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.operation',
                5 => 'console.command.public_alias.sk.itcbundle.command.code.generator.docblock.parameter',
                6 => 'console.command.public_alias.sk.itcbundle.command.code.reflection.file',
                7 => 'console.command.public_alias.sk.itcbundle.command.code.reflection.package',
                8 => 'console.command.public_alias.sk.itcbundle.command.code.reflection.class',
                9 => 'console.command.public_alias.sk.itcbundle.command.code.reflection.attribute',
                10 => 'console.command.public_alias.sk.itcbundle.command.code.reflection.operation',
                11 => 'console.command.public_alias.sk.itcbundle.command.code.reflection.parameter',
                12 => 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.command',
                13 => 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.form',
                14 => 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.entity',
                15 => 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.controller',
                16 => 'console.command.public_alias.sk.itcbundle.command.code.generator.rest.service',
                17 => 'console.command.public_alias.sk.itcbundle.command.os.release',
                18 => 'console.command.public_alias.sk.itcbundle.command.os.name',
            ],
        ];
    }
}
