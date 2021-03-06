<?php

namespace App\Http\Controllers;

use App\services\NormalDependency;
use App\services\SingletonDependency;
use Illuminate\Http\Request;

class ResolveDependenciesController extends Controller
{
    private $normalDependency;
    private $manualDependency;

    public function __construct(NormalDependency $normalDependency)
    {
        $this->normalDependency = $normalDependency;
    }


    public function resolveDependencyManually()
    {
        $this->manualDependency = resolve(SingleTonDependency::class);
    }
}
