@component('mail::message')
    # New Contact Message

    **Name:** {{ $data['name'] }}
    **Email:** {{ $data['email'] }}
    **Phone:** {{ $data['number'] }}
    **Service:** {{ $data['subject'] }}
    **Message:** {{ $data['message'] }}
@endcomponent
