<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    use HasFactory;
    protected $table = 'bai_dang';

    protected $fillable = [
        'ma_nguoi_daung',
        'ma_loai_bai_dang',
        'ma_danh_muc',
        'ma_lien_he',
        'thoi_gian',
        'noi_dung',
        'hinh_anh',
        'dia_chi',
        'trang_thai'

    ];
}
