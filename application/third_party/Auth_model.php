<?php 
class Auth_model extends CI_Model{
   public function schedule($date_from, $date_to, $base, $aircraft, $position) {
      $this->db->select('*');
      $this->db->from('	crewcalendar');
      $this->db->where('date >=', $date_from);
      $this->db->where('date <=', $date_to);
      $this->db->where('base', $base);
      $this->db->where('aircraft', $aircraft);
      $this->db->where('position', $position);
      $query = $this->db->get();
      return $query->result();
  }
}

?>
 
 