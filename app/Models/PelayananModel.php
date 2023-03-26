<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table            = 'pelayanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['upkes', 'kegiatan', 'target_capai', 'sasaran', 'pencapaian'];

    public function getDatacakup()
    {
        $db = db_connect();
        $query = $db->query('SELECT id,upkes,kegiatan,target_capai,sasaran,pencapaian,(pencapaian / sasaran)*100 AS cakupan FROM pelayanan');
        return $query;
    }

    public function tambahCapai($id, $before_jml, $new_jml)
    {
        $builder = db_connect()->table('pelayanan');
        $hasil = intval($before_jml + $new_jml);
        $query = $builder->set('pencapaian', $hasil)->where('id', $id)->update();
        return $query;
    }

    public function kurangiCapai($id, $before_jml, $new_jml)
    {
        $builder = db_connect()->table('pelayanan');
        $hasil = intval($before_jml - $new_jml);
        $query = $builder->set('pencapaian', $hasil)->where('id', $id)->update();
        return $query;
    }

    public function hapusUpy($id)
    {
        $builder = db_connect()->table('pelayanan');
        $query = $builder->where('id', $id)->delete();
        return $query;
    }
}
