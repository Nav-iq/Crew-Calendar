<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

  // public function show_all()
  // {
  //   $query = $this->db->get('crewcalendar');   //get table from db
  //   if($query)
  //   {
  //     return $query->result();
  //   }
  //   else
  //   {
  //     echo 'error';
  //   }
  // }

  function all($dateOne,$dateTwo,$selectOne,$selectTwo,$selectThree) 
  {      
    $this->db->select('*');
    $this->db->from('crewcalendar');

    if($dateOne !=null){
      $this->db->where('date>=',$dateOne);
    }
    if($dateTwo !=null){
      $this->db->where('date<=',$dateTwo);
    }
    if($selectOne !=null){
      $this->db->where('base =', $selectOne);
    }
    if($selectTwo !=null){
      $this->db->where('aircraft =', $selectTwo);
    }
    if($selectThree !=null){
      $this->db->where('position =', $selectThree);
    }

    $query = $this->db->get();
    return $query->result();
  
  }
}

?>
 
 