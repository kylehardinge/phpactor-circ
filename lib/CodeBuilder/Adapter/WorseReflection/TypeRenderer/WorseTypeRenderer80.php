<?php

namespace Phpactor\CodeBuilder\Adapter\WorseReflection\TypeRenderer;

use Phpactor\WorseReflection\Core\Type;
use Phpactor\WorseReflection\Core\Type\MixedType;
use Phpactor\WorseReflection\Core\Type\UnionType;

class WorseTypeRenderer80 extends WorseTypeRenderer74
{
    public function render(Type $type): ?string
    {
        if ($type instanceof UnionType) {
            return $type->short();
        }
        if ($type instanceof MixedType) {
            return $type->toPhpString();
        }

        return parent::render($type);
    }
}