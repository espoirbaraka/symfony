<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class Symfony_DI_PhpDumper_Test_Inline_Adapter_Consumer extends Container
{
    protected $parameters = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->methodMap = [
            'Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\InlineAdapterConsumer' => 'getInlineAdapterConsumerService',
            'bar' => 'getBarService',
            'foo' => 'getFooService',
        ];

        $this->aliases = [];
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
        return [
            'factory' => true,
            'inlineService' => true,
        ];
    }

    /**
     * Gets the public 'Symfony\Component\DependencyInjection\Tests\Dumper\InlineAdapterConsumer' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Dumper\InlineAdapterConsumer
     */
    protected static function getInlineAdapterConsumerService($container)
    {
        $a = ($container->privates['factory'] ??= new \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory());
        $b = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $b->someMethod();
        $c = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $c->someMethod1();
        $c->someMethod2();
        $d = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $d->someMethod1('someArg');
        $d->someMethod2();
        $e = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $e->someMethod1($a);
        $e->someMethod2();
        $f = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $f->someMethod1(123);
        $f->someMethod2();

        return $container->services['Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\InlineAdapterConsumer'] = new \Symfony\Component\DependencyInjection\Tests\Dumper\InlineAdapterConsumer(new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService(), new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService('bar'), \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory::staticCreateFoo(), \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory::staticCreateFooWithParam('someParam'), $a->createFoo(), $a->createFooWithParam('someParam'), $a->__invoke(), $a->__invoke('someParam'), $b, $c, $d, $e, $f);
    }

    /**
     * Gets the public 'bar' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Dumper\InlineAdapterConsumer
     */
    protected static function getBarService($container)
    {
        $a = ($container->privates['factory'] ??= new \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory());
        $b = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $b->someMethod();
        $c = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $c->someMethod1();
        $c->someMethod2();
        $d = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $d->someMethod1('someArg');
        $d->someMethod2();
        $e = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $e->someMethod1($a);
        $e->someMethod2();
        $f = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $f->someMethod1(123);
        $f->someMethod2();

        return $container->services['bar'] = new \Symfony\Component\DependencyInjection\Tests\Dumper\InlineAdapterConsumer(new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService(), new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService('bar'), \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory::staticCreateFoo(), \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory::staticCreateFooWithParam('someParam'), $a->createFoo(), $a->createFooWithParam('someParam'), $a->__invoke(), $a->__invoke('someParam'), $b, $c, $d, $e, $f);
    }

    /**
     * Gets the public 'foo' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Dumper\InlineAdapterConsumer
     */
    protected static function getFooService($container)
    {
        $a = ($container->privates['factory'] ??= new \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory());
        $b = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $b->someMethod();
        $c = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $c->someMethod1();
        $c->someMethod2();
        $d = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $d->someMethod1('someArg');
        $d->someMethod2();
        $e = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $e->someMethod1($a);
        $e->someMethod2();
        $f = new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService();
        $f->someMethod1(123);
        $f->someMethod2();

        return $container->services['foo'] = new \Symfony\Component\DependencyInjection\Tests\Dumper\InlineAdapterConsumer(new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService(), new \Symfony\Component\DependencyInjection\Tests\Compiler\MyInlineService('bar'), \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory::staticCreateFoo(), \Symfony\Component\DependencyInjection\Tests\Compiler\MyFactory::staticCreateFooWithParam('someParam'), $a->createFoo(), $a->createFooWithParam('someParam'), $a->__invoke(), $a->__invoke('someParam'), $b, $c, $d, $e, $f);
    }

    public function getParameter(string $name): array|bool|string|int|float|\UnitEnum|null
    {
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters))) {
            throw new ParameterNotFoundException($name);
        }

        if (isset($this->loadedDynamicParameters[$name])) {
            $value = $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        } else {
            $value = $this->parameters[$name];
        }

        return $value;
    }

    public function hasParameter(string $name): bool
    {
        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (!isset($this->parameterBag)) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters, []);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new ParameterNotFoundException($name);
    }

    protected function getDefaultParameters(): array
    {
        return [
            'someParam' => 123,
        ];
    }
}
