<?php

namespace App\Application\Admin;

use App\Domain\Admin\AdminFilter;
use App\Domain\Core\Pagination;
use App\Utils\Bus\Command;

class GetAdminList implements Command
{
    /**
     * @var AdminFilter
     */
    private $filter;

    /**
     * @var Pagination|null
     */
    private $pagination;

    /**
     * GetAdminList constructor.
     *
     * @param AdminFilter $filter
     * @param Pagination|null $pagination
     */
    public function __construct(AdminFilter $filter, $pagination = null)
    {
        $this->filter = $filter;
        $this->pagination = $pagination;
    }

    /**
     * @return AdminFilter
     */
    public function filter()
    {
        return $this->filter;
    }

    /**
     * @return Pagination|null
     */
    public function pagination()
    {
        return $this->pagination;
    }
}