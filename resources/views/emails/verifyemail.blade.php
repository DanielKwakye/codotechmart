@component('mail::message')
<img src="{{asset('shopwithvim.png')}}" alt="Logo">
# Email Confirmation

<p>Verify your Email by either copying or clicking on the button below</p>


@component('mail::button', ['url' => url('courier/emailverification/'.$email)])
Confirm Email
@endcomponent

Regards,<br>
SHOP WITH VIM
@endcomponent