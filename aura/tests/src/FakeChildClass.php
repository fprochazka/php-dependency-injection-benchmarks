<?php
namespace Aura\Di;
class FakeChildClass extends FakeParentClass
{
    protected $zim;

    protected $fake;

    public function __construct($foo, FakeOtherClass $zim)
    {
        parent::__construct($foo);
        $this->zim = $zim;
    }

    public function setFake($fake)
    {
        $this->fake = $fake;
    }

    public function getFake()
    {
        return $this->fake;
    }

    public function getZim()
    {
        return $this->zim;
    }
}
