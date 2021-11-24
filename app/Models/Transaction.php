<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [''];

    //Hiển thị trạng thái đơn hàng
    const STATUS_DEFAULT    = 1;
    const STATUS_SUCCESS    = 2;
    const STATUS_CANCEL     = -1;

    public $status = [
      self::STATUS_DEFAULT => [
          'name'    => 'Đang xử lý',
          'class'   => 'default'
      ],
        self::STATUS_SUCCESS => [
            'name'    => 'Đã giao dịch',
            'class'   => 'success'
        ],
        self::STATUS_CANCEL => [
            'name'    => 'Hủy bỏ',
            'class'   => 'danger'
        ]
    ];

    public function getStatus()
    {
        return  Arr::get($this->status,$this->t_status,[]);
    }

}
