<?php
class model_laporan extends ci_model
{
    function laporan_default()
    {
        $query = "SELECT * FROM invoice WHERE invoice.bayar = 1 
                  ORDER BY invoice.tanggal ASC";

        return $this->db->query($query);
    }
    
    function laporan_periode($tanggal1,$tanggal2)
    {
    $query = "SELECT * from invoice 
              WHERE invoice.bayar = 1 and invoice.tanggal  
              BETWEEN '$tanggal1' and '$tanggal2' ORDER BY id_invoice ASC";
        return $this->db->query($query);
    }
}