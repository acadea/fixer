<?php

namespace Acadea\Fixer\Tests;

use Acadea\Fixer\Facade\Fixer;
use Acadea\Fixer\Fixer as FixerBase;
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
        $fixer = new FixerBase();

        $fixed = $fixer->format($this->badCode());

        $this->assertEquals($this->goodCode(), $fixed);
    }

    public function test_can_use_facade()
    {
        $fixed = Fixer::format($this->badCode());

        $this->assertEquals($this->goodCode(), $fixed);
    }

    public function test_no_leftover_tmp_file_left_in_local_storage()
    {
        Fixer::format('abc');

        $this->assertFalse(Storage::disk('local')->exists('tmp/csfix.php'));
    }
}
