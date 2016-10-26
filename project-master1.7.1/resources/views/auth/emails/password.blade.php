Klik hier om uw paswoord opnieuw in te stellen: {{ url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}
