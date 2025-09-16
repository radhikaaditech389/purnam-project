@component('mail::message')
    # New Appointment Request

    **Name:** {{ $data['first_name'] }} {{ $data['last_name'] }}
    **Email:** {{ $data['email'] }}
    **Phone:** {{ $data['phone'] }}
    **Service:** {{ $data['subject'] }}
    **Date:** {{ $data['date'] }}
    **Time:** {{ $data['time'] }}
@endcomponent
