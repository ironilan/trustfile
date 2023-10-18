<?php

namespace App\Nova;

use App\Models\Departamento;
use App\Models\Entidad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Asignaruserentidad extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\EntidadUser::class;

    public static function label() {
        return 'Asignar entidad';
    }

    public static function indexQuery(NovaRequest $request, $query)
    {


       // return $query->where('role', '=', 'cliente');
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
        $entidades = Entidad::pluck('razon_social', 'id');
        $departamentos = Departamento::join('entidads as e', 'e.id', 'departamentos.entidad_id')
                        ->select(DB::raw('CONCAT(e.nombre, CONCAT(" - ", departamentos.nombre)) AS texto'), 'departamentos.id')
                        ->pluck('texto', 'id');
        //dd($departamentos);
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Select::make('User','user_id')->options($users)->rules('required')->onlyOnForms(),
            Select::make('Entidad', 'entidad_id')->options($entidades)->rules('required')->onlyOnForms(),
            Select::make('Departamento', 'departamento_id')->options($departamentos)->rules('required')->onlyOnForms(),
            Hidden::make('Admin', 'admin_id')->default(function ($request) {
                return $request->user()->id;
            }),
            Text::make('User',
                function () {
                    $user = User::find($this->user_id);
                return "<b>$user->name</b>";
            })->asHtml()->onlyOnIndex(),
            Text::make('Entidad',
                function () {
                    $entidad = Entidad::find($this->entidad_id);
                return "<b>$entidad->nombre</b>";
            })->asHtml()->onlyOnIndex(),
            Text::make('Departamento',
                function () {
                    $departamento = Departamento::find($this->departamento_id);
                return "<b>$departamento->nombre</b>";
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
