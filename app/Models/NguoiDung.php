<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;
    protected $table = 'nguoi_dung';

    protected $fillable = [
        'ho_ten',
        'mat_khau',
        'phone',
        'email',
        'gioi_tinh',
        'anh_dai_dien',
        'trang_thai'

    ];
}
