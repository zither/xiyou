<?php
class iniFile
{
    public $iniFilePath;
    public $iniFileHandle = [];

    /**
     * @var bool fake 为真时不进行任何文件操作
     */
    public $fake;

    function __construct($iniFilePath, bool $fake = false)
    {
        $this->iniFilePath = $iniFilePath;
        $this->fake = $fake;
        if ($this->fake) {
            return;
        }

        if (file_exists($this->iniFilePath)) {
            $this->iniFileHandle = parse_ini_file($this->iniFilePath, true);

            if (empty($this->iniFileHandle)) {
               unlink($this->iniFilePath);
            }
        } else {
            die($this->iniFilePath . ' file cannot be opened');
        }
    }

    public function addCategory($category_name, array $item = [])
    {
        if (!isset($this->iniFileHandle[$category_name])) {
            $this->iniFileHandle[$category_name] = [];
        }
        if (!empty($item)) {
            foreach ($item as $key => $value) {
                $this->iniFileHandle[$category_name][$key] = $value;
            }
        }
        $this->save();
    }

    public function addItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    public function getAll()
    {
        return $this->iniFileHandle;
    }

    public function getCategory($category_name)
    {
        return $this->iniFileHandle[$category_name];
    }

    public function getItem($category_name, $item_name)
    {
        if (is_array($item_name)) {
            $arr = array();
            foreach ($item_name as $value) {
                $arr[$value] = $this->iniFileHandle[$category_name][$value];
            }
            return $arr;
        } else {
            return $this->iniFileHandle[$category_name][$item_name] ?? null;
        }
    }

    public function updItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    public function delCategory($category_name)
    {
        unset($this->iniFileHandle[$category_name]);
        $this->save();
    }

    public function delItem($category_name, $item_name)
    {
        unset($this->iniFileHandle[$category_name][$item_name]);
        $this->save();
    }

    public function save()
    {
        // 不做任何保存操作
        if ($this->fake) {
            return true;
        }
        $string = '';
        foreach ($this->iniFileHandle as $key => $value) {
            $string .= '[' . $key . ']' . "\r\n";
            foreach ($value as $k => $v) {
                $string .= "$k = $v\r\n";
            }
        }
        $iniFileHandle = fopen($this->iniFilePath, 'w+');
        $isfwrite = fwrite($iniFileHandle, $string);
        if ($isfwrite) {
            fclose($iniFileHandle);
            return true;
        } else {
            fclose($iniFileHandle);
            return false;
        }
    }
}