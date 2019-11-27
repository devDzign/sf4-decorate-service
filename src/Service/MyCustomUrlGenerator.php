<?php


namespace App\Service;


use Symfony\Component\Routing\Generator\CompiledUrlGenerator;

class MyCustomUrlGenerator extends CompiledUrlGenerator
{

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $parameters_merge = array_merge($parameters, ['params_walid' => 'decorate_url', "params_mourad" => "test_mourad"]);

        return parent::generate($name, $parameters_merge, $referenceType);
    }

}