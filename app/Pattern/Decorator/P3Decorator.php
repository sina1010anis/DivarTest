<?php


namespace App\Pattern\Decorator;


class P3Decorator implements DecoratorInterface
{
    /**
     * @var DecoratorInterface
     */
    public $decorator;

    public function __construct(DecoratorInterface $decorator
    )
    {
        $this->decorator = $decorator;
    }

    public function price()
    {
        return $this->decorator->price() +5;
    }
}
