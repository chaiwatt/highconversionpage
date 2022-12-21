@component('mail::message')

<b>รายละเอียดการสั่งซื้อ</b><br>

ลูกค้า: คุณ{{$package['name']}} {{$package['lastname']}}<br>
อีเมล: {{$package['email']}}<br>
โทรศัพท์: {{$package['phone']}}

<b>ดาวโหลดไฟล์</b><br>
<a href="#" target="_blank" rel="noopener noreferrer">ดาวน์โหลด</a>

ขอขอบพระคุณ,<br>
IJSO WORKSHEET TEAM


@endcomponent

