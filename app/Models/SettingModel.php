<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table            = 'settings';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['key', 'value'];

    public function getSetting($key)
    {
        $setting = $this->where('key', $key)->first();
        return $setting ? $setting['value'] : null;
    }

    public function updateSetting($key, $value)
    {
        return $this->where('key', $key)->set(['value' => $value])->update();
    }
}
