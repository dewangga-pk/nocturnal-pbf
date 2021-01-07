<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $category_id
 * @property string $item_name
 * @property string $item_description
 * @property integer $price
 * @property integer $unit
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Category $category
 * @property ItemsSelected[] $itemsSelecteds
 */
class Item extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['category_id', 'item_name', 'item_description', 'price', 'unit', 'image', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itemsSelecteds()
    {
        return $this->hasMany('App\ItemsSelected');
    }
}
