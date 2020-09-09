<?php

namespace Acadea\Fixer;

use Illuminate\Support\Facades\Storage;

class Fixer
{

    public function __construct(array $rules)
    {


    }

    public function format(string $code)
    {
        $file = tempnam(sys_get_temp_dir(), 'csfix_');

        $path = 'tmp/csfix';

        Storage::disk('local')->put($path, $code);

        exec('php-cs-fixer fix ' . $path);


    }

    protected function generateRuleString()
    {
        $rules = config('fixer.rules');

        $result = '';

        foreach ($rules as $key => $rule){

        }
        return $result;
    }
}
