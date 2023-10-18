<?php

namespace App\Nova;

use App\Models\Entidad;
use App\Models\Suscripcion;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Asignarentidadsuscripcion extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\EntidadSuscripcion::class;

    public static function label() {
        return 'Asignar suscripcion';
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
        $entidades = Entidad::pluck('nombre', 'id');
        $suscripciones = Suscripcion::pluck('nombre', 'id');

        return [
            ID::make(__('ID'), 'id')->sortable(),
            Select::make('Entidad','entidad_id')->options($entidades)->rules('required')->onlyOnForms(),
            Select::make('Suscripcion', 'suscripcion_id')->options($suscripciones)->rules('required')->onlyOnForms(),
            Hidden::make('Admin', 'admin_id')->default(function ($request) {
                return $request->user()->id;
            }),
            Text::make('Entidad',
                function () {
                    $entidad = Entidad::find($this->entidad_id);
                return "<b>$entidad->nombre</b>";
            })->asHtml()->onlyOnIndex(),
            Text::make('Suscripcion',
                function () {
                    $susc = Suscripcion::find($this->suscripcion_id);
                return "<b>$susc->nombre</b>";
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
