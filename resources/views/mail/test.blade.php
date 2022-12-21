@component('mail::message')
#Introduction
{{$post['title']}}

The body of your message.
@component('mail::table')
| รายการ       | จำนวน         | ราคา  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

Thanks,
Admin
@endcomponent
