<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Order
 *
 * @method static Builder|Order newModelQuery()
 * @method static Builder|Order newQuery()
 * @method static Builder|Order query()
 * @method static Builder|Order whereAmount($value)
 * @method static Builder|Order whereCreatedAt($value)
 * @method static Builder|Order whereCustomerName($value)
 * @method static Builder|Order whereId($value)
 * @method static Builder|Order whereOrderNumber($value)
 * @method static Builder|Order whereShippingAddress($value)
 * @method static Builder|Order whereUpdatedAt($value)
 * @mixin Eloquent
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property float       $amount
 * @property int         $id
 * @property string      $customer_name
 * @property string      $order_number
 * @property string      $shipping_address
 */
class Order extends Model
{
    protected $fillable = [
        'order_number',
        'customer_name',
        'shipping_address',
        'amount',
    ];
}
