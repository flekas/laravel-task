<?php

function gravatar_tag($email)
{
	return '<img src="http://www.gravatar.com/avatar/' . md5($email) . '?s=40" alt="' . $email . '">';
}
