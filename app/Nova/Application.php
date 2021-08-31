<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Application extends Resource
{
    /** @var string */
    public static $model = \App\Models\Application::class;

    /** @var string */
    public static $title = 'id';

    /** @var string[] */
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
        return [
            ID::make(__('ID'), 'id')->sortable(),
            BelongsToMany::make('Partner Schools', 'partnerSchools', PartnerSchool::class)
                ->fields(function () {
                    return [
                        Text::make('test'),
                    ];
                }),
            BelongsToMany::make('Selected destinations', 'selectedDestinations', PartnerSchool::class)
                ->fields(function () {
                    return [
                        Boolean::make('other'),
                    ];
                }),
        ];
    }
}
