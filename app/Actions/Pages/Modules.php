<?php

namespace App\Actions\Pages;

use TCG\Voyager\Actions\AbstractAction;

class Modules extends AbstractAction
{
    public function getTitle()
    {
        return 'Modulos';
    }

    public function getIcon()
    {
        return 'voyager-paw';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-dark',
        ];
    }

    public function getDefaultRoute()
    {
        // return route('page_edit', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'pages';
    }

    public function massAction($ids, $comingFrom)
    {
        return redirect()->route('voyager.modules.index');
    }
}