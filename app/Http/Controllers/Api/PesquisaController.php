<?php

namespace App\Http\Controllers\Api;

use App\Models\Pesquisa;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class PesquisaController extends Controller
{

    use DisableAuthorization;

    protected $model = Pesquisa::class;

}