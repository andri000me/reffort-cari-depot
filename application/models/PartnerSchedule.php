<?php 
class PartnerSchedule extends CI_Model
{

    function show_detail($id){

		$query = "SELECT
        partner_schedules.id,
        schedule_days.day,
        partner_schedules.open_time,
        partner_schedules.close_time
		FROM partners
		LEFT JOIN partner_schedules ON partner_schedules.id_partner = partners.id
		LEFT JOIN schedule_days ON schedule_days.id = partner_schedules.id_schedule_day
		WHERE partners.id = '{$id}'
		";

		return $this->db->query($query);
	}

    function show_detail_today($id){

		$days_name = strtolower(date('D'));

		if($days_name == "sun"){
			$days_name = "minggu";
		}else if($days_name == "mon"){
			$days_name = "senin";
		}else if($days_name == "tue"){
			$days_name = "selasa";
		}else if($days_name == "wed"){
			$days_name = "rabu";
		}else if($days_name == "thu"){
			$days_name = "kamis";
		}else if($days_name == "fri"){
			$days_name = "jumat";
		}else if($days_name == "sat"){
			$days_name = "sabtu";
		}

		$query = "SELECT
        partner_schedules.id,
        schedule_days.day,
        partner_schedules.open_time,
        partner_schedules.close_time
		FROM partners
		LEFT JOIN partner_schedules ON partner_schedules.id_partner = partners.id
		LEFT JOIN schedule_days ON schedule_days.id = partner_schedules.id_schedule_day
		WHERE partners.id = '{$id}' AND schedule_days.day = '{$days_name}'
		";

		return $this->db->query($query);
	}

}
