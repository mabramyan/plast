<?php

namespace App\Http\View\Composers;

use App\Repositories\UserRepository;
use App\Models\Gallery;
use Illuminate\View\View;

class MainComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
       return true;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

       $mainSliderId =  config('settings.main_slider');
       $gallery = Gallery::where('id', $mainSliderId)->first();
       

        $view->with('mainSlider', $gallery);
    }
}