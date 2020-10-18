<?php namespace Izt\Helpers\Http\Presenters;


use Izt\Helpers\Http\Presenters\Exceptions\PresenterException;

trait PresentableTrait
{
    protected $presenterInstance;


    public function present()
    {
        if (!$this->presenter || !class_exists($this->presenter)) {
            throw new PresenterException('Please set $protected property to your presenter path');
        }

        if (!$this->presenterInstance) {
            $this->presenterInstance = new $this->presenter($this);
        }

        return $this->presenterInstance;
    }

}
