<?php

namespace App\Providers;

use App\Models\Address;
use App\Models\filter;
use App\Models\ItemFilter;
use App\Models\Menu_Item;
use App\Models\Menu_Parent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $ItemParentsMenuIndexPage=Menu_Parent::orderBy('id' , 'ASC')->get();
        View::share('ItemParentsMenuIndexPage' , $ItemParentsMenuIndexPage);

        $ItemItemMenuIndexPage=Menu_Item::orderBy('id' , 'DESC')->get();
        View::share('ItemItemMenuIndexPage' , $ItemItemMenuIndexPage);

        $AddressViewAll=Address::orderBy('id' , 'DESC')->get();
        View::share('AddressViewAll' , $AddressViewAll);

        $FilterAll=filter::orderBy('id' , 'DESC')->get();
        View::share('FilterAll' , $FilterAll);

        $FilterItemAll=ItemFilter::orderBy('id' , 'DESC')->get();
        View::share('FilterItemAll' , $FilterItemAll);
    }
}
