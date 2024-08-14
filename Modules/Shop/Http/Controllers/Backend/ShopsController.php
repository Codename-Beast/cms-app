<?php

namespace Modules\Shop\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Modules\Shop\Enums\ShopStatus;
use Modules\Shop\Console\Commands\Enums\ShopType;

class ShopsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Shops';

        // module name
        $this->module_name = 'shops';

        // directory path of the module
        $this->module_path = 'shop::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Shop\Models\Shop";
    }
    public function store(Request $request)
    {

    }
}
