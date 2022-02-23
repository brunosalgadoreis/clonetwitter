<?php

class relacionamentos extends Model {
    
    public function seguirQuery($id) {
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql = $this->db->query($sql);
        
        return $sql;
    }
    


    public function seguir($seguidor, $seguido) {
        $sql = "INSERT INTO relacionamentos SET id_seguidor = '$seguidor', id_seguido = '$seguido'";
        $this->db->query($sql);
    }

    public function deixardeseguir($seguidor, $seguido) {

        $sql = "DELETE FROM relacionamentos WHERE id_seguidor ='$seguidor' AND id_seguido = '$seguido'";

        $this->db->query($sql);
    }

}
