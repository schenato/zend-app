<?php

namespace CodeEmailMKT\Application\Action\Customer\Factory;

use CodeEmailMKT\Application\Action\Customer\CustomerDeletePageAction;
use CodeEmailMKT\Application\Form\CustomerForm;
use CodeEmailMKT\Domain\Persistence\CustomerRepositoryInterface;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class CustomerDeletePageFactory {

    public function __invoke(ContainerInterface $container): CustomerDeletePageAction
    {
        $template = $container->get(TemplateRendererInterface::class);
        $repository = $container->get(CustomerRepositoryInterface::class);
        $router = $container->get(RouterInterface::class);
        $form = $container->get(CustomerForm::class);
        return new CustomerDeletePageAction($repository, $template, $router, $form);
    }

}
