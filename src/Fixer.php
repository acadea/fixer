<?php

namespace Acadea\Fixer;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\FileNotFoundException;

class Fixer
{
    protected $rules;

    public function __construct()
    {
        $this->rules = \config('fixer.rules');
    }

    public function format(string $code)
    {
        $path = 'tmp/csfix.php';

        $rules = json_encode($this->rules);

        $csfixerBin = __DIR__ . '/..' . \config('fixer.binary');

        if (! file_exists($csfixerBin)) {
            $csfixerBin = App::basePath() . config('fixer.binary');
        }

        if (! file_exists($csfixerBin)) {
            throw new FileNotFoundException($csfixerBin);
        }

        Storage::disk('local')->put($path, $code);

        exec($csfixerBin . ' fix ' . storage_path('app/' . $path) . ' --rules=\'' . $rules . '\'');

        // read file content from path
        $fixedCode = Storage::disk('local')->get($path);

        // remove the temp file
        Storage::disk('local')->delete($path);

        // return the content as string
        return $fixedCode;
    }
}
