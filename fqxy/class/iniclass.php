<?php
/**
 * PHP����ini�ļ���
 * @author Wigiesen - ��������
 * @version v1.0
 * @link https://xinyu19.com
 * ע��ini�ļ��ɽڡ�����ֵ��ɣ�Ϊ�˷���
 * ���е�[��]���ǽ���[����]��[��=>ֵ]��Ϊ[����]
 */

class iniFile
{
    public $iniFilePath;
    public $iniFileHandle;

    function __construct($iniFilePath)
    {
        $this->iniFilePath = $iniFilePath;
        # ���� .ini �ļ��������
        if (file_exists($this->iniFilePath)) {
            $this->iniFileHandle = parse_ini_file($this->iniFilePath, true);

            if (empty($this->iniFileHandle)) {
                unlink($this->iniFilePath); //ɾ���ļ�
            }
        } else {
            die($this->iniFilePath . ' file cannot be opened');
        }
    }

    //���ӷ���
    public function addCategory($category_name, array $item = [])
    {
        if (!isset($this->iniFileHandle[$category_name])) {
            $this->iniFileHandle[$category_name] = [];
        } else {
            if (!empty($item)) {
                foreach ($item as $key => $value) {
                    $this->iniFileHandle[$category_name][$key] = $value;
                }
            }
        }
        $this->save();
    }

    //��������[������ӷ����ͬʱ�������]
    public function addItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    //��ȡ����
    public function getAll()
    {
        return $this->iniFileHandle;
    }

    //��ȡ��������
    public function getCategory($category_name)
    {
        return $this->iniFileHandle[$category_name];
    }

    //��ȡ����ֵ
    public function getItem($category_name, $item_name)
    {
        # ����ǻ�ȡ�������,��ѭ����ȡ�����±���
        if (is_array($item_name)) {
            $arr = array();
            foreach ($item_name as $value) {
                $arr[$value] = $this->iniFileHandle[$category_name][$value];
            }
            return $arr;
        } else {
            return $this->iniFileHandle[$category_name][$item_name];
        }
    }

    //����ini
    public function updItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    //ɾ������
    public function delCategory($category_name)
    {
        unset($this->iniFileHandle[$category_name]);
        $this->save();
    }

    //ɾ������
    public function delItem($category_name, $item_name)
    {
        unset($this->iniFileHandle[$category_name][$item_name]);
        $this->save();
    }

    //����.ini�ļ�
    public function save()
    {
        $string = '';
        # ѭ�������ƴ�ӳ�ini��ʽ���ַ���
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