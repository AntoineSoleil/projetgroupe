{{ trans('backpack::base.click_here_to_reset') }}: <a href="{{ $link = url('intranet/password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
