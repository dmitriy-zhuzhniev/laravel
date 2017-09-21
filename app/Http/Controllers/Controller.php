<?php

namespace App\Http\Controllers;

use App\Domain\Core\Pagination;
use App\Domain\User;
use App\Utils\Bus\Command;
use App\Utils\Bus\CommandBus;
use Doctrine\ORM\Mapping\Entity;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var CommandBus
     */
    private $dispatcher;

    /**
     * @var Guard
     */
    private $auth;

    /**
     * Controller constructor.
     *
     * @param CommandBus $dispatcher
     * @param Guard $auth
     */
    public function __construct(CommandBus $dispatcher, Guard $auth)
    {
        $this->dispatcher = $dispatcher;
        $this->auth = $auth;
    }

    /**
     * @param Command $command
     * @return mixed
     */
    public function dispatch(Command $command)
    {
        return $this->dispatcher->execute($command);
    }

    /**
     * @param Request $request
     *
     * @return Pagination|null
     */
    protected function pagination(Request $request)
    {
        if ($request->input('page') && $request->input('perPage')) {
            return new Pagination($request->input('page'), $request->input('perPage'));
        }

        return null;
    }

    /**
     * @return User|Authenticatable|null
     */
    protected function me()
    {
        return $this->auth->user();
    }

    /**
     * @param $itemsArray Entity
     *
     * @return array
     */
    protected function listsAsIdName($itemsArray)
    {
        return collect($itemsArray)->keyBy(function ($item) {
            return $item->id()->getValue();
        })->map(function($item) {
            return $item->name();
        })->toArray();
    }
}
