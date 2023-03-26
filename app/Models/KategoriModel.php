<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table            = 'kategori_upaya';
    protected $primaryKey       = 'id_kategori';
    protected $allowedFields    = ['pelayanan', 'kode_upaya', 'upaya', 'pj', 'definisi', 'target_capai', 'sasaran', 'pencapaian'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getDatacakup($pelayanan = null)
    {
        $db = db_connect();

        if ($pelayanan != null) {
            $query = $db->query("SELECT id_kategori,pelayanan,kode_upaya,upaya,pj,definisi,target_capai,sasaran,pencapaian,updated_at,(pencapaian / sasaran)*100 AS cakupan FROM kategori_upaya WHERE pelayanan='$pelayanan'");
            return $query->getResultArray();
        }
        $query = $db->table('kategori_upaya')->get();
        return $query->getResultArray();
    }
}
