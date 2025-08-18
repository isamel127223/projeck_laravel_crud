<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //อะไรที่ไม่ใช้ title และ content จะไม่ถูกบันทึกลงฐานข้อมูล
    //ใช้คำสั่ง $fillable เพื่อระบุว่า field ไหนบ้างที่สามารถบันทึกได้
    protected $fillable = ['title', 'content'];
}
