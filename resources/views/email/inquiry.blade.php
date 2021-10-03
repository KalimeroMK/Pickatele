Name: {{$data['name']}}<br>
Email: {{$data['email']}}<br>
@if (isset($data['interest']))
Interest: {{$data['interest']}}<br>
@endif
@if (isset($data['partnership-type']))
Partnership Type: {{$data['partnership-type']}}<br>
@endif
Subject: {{$data['subject']}}<br>
Message: {{$data['message']}}
