/* Add the following lines to the current Post model */
function isAuthorized($user, $controller, $action) { 
	if ($user['User']['role'] == 'admin') { 
		return true; 
	} else { 
		return false; 
	} 
}