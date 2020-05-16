<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use App\FormFields\Tracking;
use App\FormFields\Slug;
use App\FormFields\Map;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addFormField(Tracking::class);
        Voyager::addFormField(Slug::class);
        Voyager::addFormField(Map::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Voyager::addAction(\App\Actions\Users\Roles::class);

        Voyager::addAction(\App\Actions\Pages\Blocks::class);
        Voyager::addAction(\App\Actions\Pages\Edit::class);
        Voyager::addAction(\App\Actions\Pages\Block::class);
        // Voyager::addAction(\App\Actions\Pages\Modules::class);

        Voyager::addAction(\App\Actions\Modules\Install::class);

        Voyager::addAction(\App\Actions\Blocks\Pages::class);
    }
}
