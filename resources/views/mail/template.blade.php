@component('mail::message')

<b>รายละเอียดการสั่งซื้อ</b><br>

{{-- ลูกค้า: คุณ{{$transaction->name}} {{$transaction->lastname}}<br>
อีเมล: {{$transaction->email}}<br>
โทรศัพท์: {{$transaction->phone}}

@if ($transaction->status == 'pending')
<div style="font-size: 18px;font-weight:600;color:#FB7B09">สถานะ: {{$transaction->status}} </div>
@elseif($transaction->status == 'successful')
<div style="font-size: 18px;font-weight:600;color:#08D11D">สถานะ: {{$transaction->status}} </div>
@endif --}}

<b>ดาวโหลดไฟล์</b><br>
<a href="#" target="_blank" rel="noopener noreferrer">ดาวน์โหลด</a>

ขอขอบพระคุณ,<br>
Full-Stack Training Class


@endcomponent

