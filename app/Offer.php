<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Offer
 *
 * @property string $application_id
 * @property array $countries
 * @property integer $payout
 * @property string $platform
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Offer whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Offer whereCountries($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Offer wherePayout($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Offer wherePlatform($value)
 * @mixin \Eloquent
 */
class Offer extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'application_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'countries' => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'application_id',
        'countries',
        'payout',
        'platform',
    ];
}
