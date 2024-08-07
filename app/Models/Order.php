<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Order extends Model
{
    use HasFactory;

    use Searchable;

    public function toSearchableArray()
    {
        return [
            'customer_name' => $this->customer_name,
            'status' => $this->status,
        ];
    }
}
