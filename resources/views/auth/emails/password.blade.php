Click Here to Reset your Password:<br>
<a href="{{ $link = url('passwords/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">{{ $link }}</a>