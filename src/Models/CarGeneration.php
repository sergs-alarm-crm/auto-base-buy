<?php

namespace Bigperson\AutoBaseBuy\Models;

use Illuminate\Database\Eloquent\Model;

class CarGeneration extends Model
{
    /**
     * The primary column associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_car_generation';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'car_generation';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carModel()
    {
        return $this->belongsTo(CarModel::class, 'id_car_model');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carSeries()
    {
        return $this->hasMany(CarSerie::class, 'id_car_generation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carType()
    {
        return $this->belongsTo(CarType::class, 'id_car_type');
    }
}
