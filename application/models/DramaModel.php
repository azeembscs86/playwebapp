<?php

class DramaModel extends CI_Model
{
    public function get_dramas()
        {
        //$query = $this->db->get('dramas'); // Get All dramas data
        //return $query->result();
            $query = $this->db->select("*")
            ->from('dramas')
            ->order_by('id','desc')
            ->get();
            return $query->result();
        //$query = $this->db->query("select * from dramas where id=1"); // using where condition
        
        //$this->db->where('id',$user_id); // Use Parameter
        
       /* $this->db->where([
            'id' => $user_id,
            'drama_title' => "Woh Rehne Wali Mehlon Ki"
                ]); */
        //$this->db->where([
       //     'id' => $user_id
       //         ]); 
       // $query = $this->db->get('dramas');
        //return $query->result();
        }

    public function get_latest_drama()
    {
        $query = $this->db->select("*")
            ->from('dramas')
            ->where('latest_drama_status','yes')
            ->order_by('id','desc')
            ->get();
            return $query->result();

    }
    public function get_premium_drama()
    {
        $query = $this->db->select("*")
            ->from('dramas')
            ->where('premium','yes')
            ->order_by('id','desc')
            ->get();
        return $query->result();
    }
    public function get_comingsoon_drama()
    {
        $query = $this->db->select("*")
            ->from('coming_soon')
            ->order_by('id','desc')
            ->get();
        return $query->result();
    }
        
    public function insert_Drama($data)
        {
            $this->db->insert('dramas',$data);
        }
    public function update_Drama($data,$id)
        {
            $this->db->where(['id' => $id]);
            $this->db->update('dramas',$data);
        }
    public function delete_Drama($drama_id)
        {
            $this->db->where(['id' => $drama_id]);
            $this->db->delete('dramas');
        }
    
}

?>
