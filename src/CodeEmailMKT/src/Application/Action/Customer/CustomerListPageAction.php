<?php

namespace CodeEmailMKT\Application\Action\Customer;

use CodeEmailMKT\Domain\Persistence\CustomerRepositoryInterface;
use CodeEmailMKT\Domain\Service\FlashMessageInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;

class CustomerListPageAction {

    private $template;
    private $repository;

    public function __construct(CustomerRepositoryInterface $repository, Template\TemplateRendererInterface $template)
    {
        $this->template = $template;
        $this->repository = $repository;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $customers = $this->repository->findAll();
        $flash = $request->getAttribute('flash')->getMessage(FlashMessageInterface::MESSAGE_SUCCESS);
        return new HtmlResponse($this->template->render("app::customer/list", [
                    'customers' => $customers,
                    'message' => $flash
        ]));
    }

}
