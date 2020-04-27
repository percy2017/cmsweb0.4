<?php

namespace App\Actions\Modules;

use TCG\Voyager\Actions\AbstractAction;
use App\Module;
class Install extends AbstractAction
{

    public function getTitle()
    {
        $mymodule = Module::where('id', $this->data->{$this->data->getKeyName()})->first();
        if ($mymodule->installed) {
            return 'Paquete Instaldo';
        } else {
            return 'Instalar Paquete';
        }
        
    }

    public function getIcon()
    {
        return 'voyager-double-down';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        $mymodule = Module::where('id', $this->data->{$this->data->getKeyName()})->first();
        if ( $mymodule->installed) {
            return [
                'class' => 'btn btn-default',
            ];
        } else {
            return [
                'class' => 'btn btn-dark',
            ];
        }

    }

    public function getDefaultRoute()
    {
        $mymodule = Module::where('id', $this->data->{$this->data->getKeyName()})->first();
        if ($mymodule->installed) {
        } else {
            return route('module_installer', $this->data->{$this->data->getKeyName()});
        }
        
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'modules';
    }

    // public function massAction($ids, $comingFrom)
    // {
    //     return redirect()->route('voyager.modules.index');
    // }
    
}