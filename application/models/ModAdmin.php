<?php

    class ModAdmin extends CI_Model
    {
        public function fetchallPlace()
        {
            $array = array('status' =>'0');
            $query = $this->db->get_where('tbl_place',$array);

            if($query->num_rows()>0)
            {
                foreach ($query ->result() as $row)
                {
                    $data[] = $row;
                }

                return $data;
            }

            return false;
        }

        public function fetchallPackage()

        {
            $query=$this->db->get('tbl_package');

            if ($query->num_rows()>0)
            {
                foreach ($query ->result() as $row)
                {
                    $data[]=$row;
                }

                return $data;
            }

            return false;
        }

        public function fetchallPlaceType()
        {
            $query = $this->db->get('tbl_placetype');
            if($query->num_rows() > 0)
            {
                foreach($query->result() as $row)
                {
                    $data[]=$row;
                }

                return $data;
            }

            return false;

        }

        public function fetchallGuide()
        {
            $query = $this->db->get('tbl_guide');
            if($query->num_rows() >0)
            {
                foreach($query->result() as $row)
                {
                    $data[] = $row;

                }

                return $data;
            }

            return false;

        }

    }


?>