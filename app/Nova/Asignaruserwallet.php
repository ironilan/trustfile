<?php

namespace App\Nova;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Asignaruserwallet extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\UserWallet::class;

    public static function label() {
        return 'Asignar wallet';
    }
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $users = User::where('tipo_entidad', 'negocio')->pluck('name', 'id');
        $wallets = Wallet::pluck('titulo', 'id');


        return [
            ID::make(__('ID'), 'id')->sortable(),
            Select::make('User','user_id')->options($users)->rules('required')->onlyOnForms(),
            Select::make('Wallet', 'wallet_id')->options($wallets)->rules('required')->onlyOnForms(),
            Hidden::make('Admin', 'admin_id')->default(function ($request) {
                return $request->user()->id;
            }),
            Text::make('User',
                function () {
                    $user = User::find($this->user_id);
                return "<b>$user->name</b>";
            })->asHtml()->onlyOnIndex(),
            Text::make('Wallet',
                function () {
                    $entidad = Wallet::find($this->wallet_id);
                return "<b>$entidad->titulo</b>";
            })->asHtml()->onlyOnIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
