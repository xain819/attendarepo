<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        if(!empty($id)){
           // $data = $this->db->get_where("class_list", ['student_local_id' => $id])->row_array();
           $today=date("Y-m-d");
    
            $sql="SELECT DISTINCT  `p`.`PeriodStartTime` AS `PeriodStartTime`, `p`.`PeriodEndTime` AS `PeriodEndTime`, `p`.`GracePeriod` AS `GracePeriod`,  `p`.`TransitionTime` AS `TransitionTime`,
        `p`.`PeriodID` AS `PeriodID`,
        `a`.`DateCreated` AS `DateCreated`,
        `s`.`first_name` AS `first_name`,
        `s`.`last_name` AS `last_name`,
        `cl`.`grade_level` AS `grade_level`,
        `cl`.`class_id` AS `class_id`,
        `cl`.`schedule_type` AS `schedule_type`,
        `cl`.`period_number` AS `period_number`,
        `sc`.`ScheduleDateID` AS `ScheduleDateID`,
        `sc`.`start` AS `start`,
        `cl`.`teacher_id_number` AS `teacher_id_number`,
        `cl`.`student_local_id` AS `student_local_id`,
        `a`.`AttendanceID` AS `AttendanceID`,
        `a`.`attendance_time_mot` AS `attendance_time_mot`,
        `a`.`AttendanceDate` AS `AttendanceDate`,
        `a`.`AttendanceTime` AS `AttendanceTime`,
        `a`.`appointment` AS `appointment`,
        `a`.`emergency` AS `emergency`,
        `a`.`teacher_overide` AS `teacher_overide`,
        `a`.`other` AS `other`,
        `a`.`swipe_type` AS `swipe_type`,
        `cl`.`term` AS `term`,
        `cl`.`location` AS `location`,
        `cl`.`section` AS `section`
        
        
    FROM
    
    scheduledate sc join class_list cl on sc.title=cl.schedule_type 
    join student_table s on s.student_local_id=cl.student_local_id
    left join attendance a on `a`.`class_id` = `cl`.`class_id` AND `a`.`AttendanceDate` = `sc`.`start` AND `cl`.`period_number` = `a`.`PeriodID`
    join period p on `p`.`Period` = `cl`.`period_number` AND `p`.`schedule_type` = `cl`.`schedule_type`
        WHERE
            `cl`.`student_local_id` = '{$id}' AND `cl`.`term` = 'S1' and`sc`.`start`='{$today}' ";

     $data=$this->db->query($sql)->result_array();
            
        }else{
            $data = $this->db->get("class_list")->result_array();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('items',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}