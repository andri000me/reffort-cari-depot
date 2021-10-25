<?php 
class ScheduleDay extends CI_Model
{

    function show(){

		$query = "SELECT
        schedule_days.id,
        schedule_days.day
		FROM schedule_days
		";

		return $this->db->query($query);
	}

}
