Name: {{$data['name']}}<br>
@if (isset($data['interest']))
Interest: {{$data['interest']}}<br>
@endif
@if (isset($data['partnership-type']))
Partnership Type: {{$data['partnership-type']}}<br>
@endif
Subject: {{$data['subject']}}<br>
Message: {{$data['message']}}