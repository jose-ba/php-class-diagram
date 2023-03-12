<?php

declare(strict_types=1);

namespace Smeghead\PhpClassDiagram\Php;

use PhpParser\Comment\Doc;
use PhpParser\Node\Stmt\{
    EnumCase,
};
use Smeghead\PhpClassDiagram\Php\Doc\PhpDocComment;

class PhpEnumCase
{
    protected string $name;
    protected PhpDocComment $doc;

    public function __construct(EnumCase $e)
    {
        $this->name = $e->name->name;
        $this->doc = new PhpDocComment($e);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDocString(): string
    {
        return $this->doc->getDescription();
    }

}
