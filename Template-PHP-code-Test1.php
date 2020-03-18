<!-- PHP -->
function user_get_name($user_id)
{
	global $db;
	
	$sql = 'SELECT username
			FROM ' . USERS_TABLE . '
			WHERE user_id = ' . $db->sql_escape($user_id);
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	
	if($row) 
	{
		return $row['username'];
	}
	else 
	{
		return 'Not a valid user_id!';
	}
}

$user_id = 3;

echo (user_get_name($user_id));
<!-- ENDPHP -->
