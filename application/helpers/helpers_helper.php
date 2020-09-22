<?php
function is_loggedin(){
	$ci=get_instance();
	if(!$ci->session->userdata('username')){
				redirect('Home');
	}
	else{
		$menu=$ci->uri->segment(1);
	}
	}

	function is_admin(){
		$ci=get_instance();
		if($ci->session->userdata('level') == "Admin"){
					$menu=$ci->uri->segment(1);
		}
		else{
				redirect('Home');
		}
		}

function getUserData()
{
	$ci=get_instance();
	$Userdata= $this->session->userdata();
	return $Userdata;
}
