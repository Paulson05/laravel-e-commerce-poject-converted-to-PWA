<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductReview
 *
 * @property int $id
 * @property int $user_id
 * @property int $products_id
 * @property int $rate
 * @property string|null $reason
 * @property string|null $review
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereUserId($value)
 * @mixin \Eloquent
 */
class ProductReview extends Model
{
    use HasFactory;
     protected $guarded = [];
     protected $table = 'product_reviews';
}
