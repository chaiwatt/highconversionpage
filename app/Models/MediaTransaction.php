<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MediaTransaction extends Model
{
    use HasFactory;

    public $connection = 'mysql_fullstacktrainingclass';

    public function getPaidTimeAttribute()
    {
        return Carbon::parse($this->paid_at)->setTimezone('Asia/Bangkok')->format('Y-m-d H:i:s');
    }
}
