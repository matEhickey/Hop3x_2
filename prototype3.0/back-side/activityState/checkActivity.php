<?php
include_once "activityUsers.php";
function checkUserState($timeNow)
{
	$user_id = 0;
	$activities = getActivityTime($user_id);
	$events = getEventTime($user_id);

	if (empty($activities))
	{
		if (empty($events))
		{
			print("Le user est deconnecté. \n");
			return 0;
		}
		if (!empty($events))
		{
			foreach ($events as $list)
				foreach($list as $eventT)
    				$eventTime = $eventT;

			if ((floatval($timeNow) - floatval($eventTime)) > 60000)
			{
				print("Le user est deconnecté. \n");
				return 0;
			}

			if ((floatval($timeNow) - floatval($eventTime)) <= 60000)
			{
				print("Le user est actif. \n");
				return 0;
			}
		}
	}

	if(!empty($activities))
	{
		
		foreach ($activities as $list)
			foreach($list as $activityT)
    			$activityTime = $activityT;

		if(empty($events))
		{
			if((floatval($timeNow) - floatval($activityTime)) > 60000)
			{
				print("Le user est deconnecté. \n");
				return 0;
			}
			if((floatval($timeNow) - floatval($activityTime)) <= 60000)
			{
				print("Le user est connecté. \n");
				return 0;
			}
		}
		
		if(!empty($events))
		{
			foreach ($events as $list)
				foreach($list as $eventT)
    				$eventTime = $eventT;

			if((floatval($timeNow) - floatval($activityTime)) > 60000)
			{
				print("Le user est deconnecté. \n");
				return 0;
			}

			if ((floatval($timeNow) - floatval($eventTime)) < 60000)
			{
				print("Le user est actif. \n");
				return 0;
			}
			if(((floatval($timeNow) - floatval($activityTime)) <= 60000) && ((floatval($timeNow) - floatval($eventTime)) > 60000))
			{
				print("Le user est connecté. \n");
				return 0;
			}

		}
	}
}

?>