<?php

namespace Acadea\Fixer\Tests;

use Acadea\Fixer\Facade\FixerFacade;
use Acadea\Fixer\Fixer;
use Illuminate\Support\Facades\Storage;

class FixerTest extends TestCase
{
    private function badCode()
    {
        return file_get_contents(__DIR__ . '/files/badcode.stub');
    }

    private function goodCode()
    {
        return file_get_contents(__DIR__ . '/files/styledcode.stub');
    }

    /** @test */
    public function test_fixer_can_fix_code()
    {
        $fixer = new Fixer();

        $fixed = $fixer->format($this->badCode());

        $this->assertEquals($this->goodCode(), $fixed);
    }

    public function test_can_use_facade()
    {
        $fixed = FixerFacade::format($this->badCode());

        $this->assertEquals($this->goodCode(), $fixed);
    }

    public function test_no_leftover_tmp_file_left_in_local_storage()
    {
        FixerFacade::format('abc');

        $this->assertFalse(Storage::disk('local')->exists('tmp/csfix.php'));
    }
}
