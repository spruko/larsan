<?php

namespace laravelLara\larsan\Http\Controllers;

use App\Http\Controllers\Controller;
use laravelLara\larsan\utils\PermissionChecker;

class PermissionsOperationController extends Controller
{
     /**
     * @var PermissionChecker
     */
    protected $permissions;

    /**
     * @param PermissionChecker $checker
     */
    public function __construct(PermissionChecker $checker)
    {
        $this->permissions = $checker;
    }

    public function index(){

        $permissions = $this->permissions->check(
            config('installer.requirements.permissions')
        );

        return view('Installation::installer.permissions', compact('permissions'));
    }
}
