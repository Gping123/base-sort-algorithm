<?php

namespace Src\Sort;

/**
 * 抽象排序
 */
abstract class Sort
{

    private $data;

    /**
     * 构造方法
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setData($data);
    }

    /**
     * 设置数据
     *
     * @param array $data
     * @return void
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * 添加元素
     *
     * @param mixed $item
     * @return void
     */
    public function add($item)
    {
        $this->data[] = $item;
    }

    /**
     * 获取数据
     *
     * @return array
     */
    public function getData() : array
    {
        return $this->data;
    }

    /**
     * 删除元素
     *
     * @param mixed $key
     * @return void
     */
    public function remove($key)
    {
        unset($this->data[$key]);
    }
    
    /**
     * 排序算法
     *
     * @param $type
     * @return mixed
     */
    public function sort($type = true)
    {

        $type = $this->formType($type);

        return $this->algorithm($this->data,$type);

    }
    
    /**
     * 格式化排序类型
     *
     * @param mixed $type
     * @return bool
     */
    private function formType($type) : bool
    {
        switch (true) {
            case $type instanceof \Closure:
                return call_user_func($type) ? true : false;
            case is_string($type):
                $type = strtolower($type);
                switch ($type) {
                    case 'asc':
                        return false;
                    case 'desc':
                    default:
                        return true;
                }

        }
        return $type;
    }

    /**
     * 算法函数
     *
     * @param array $data
     * @param bool $type
     * @return void
     */
    public abstract function algorithm($data,bool $type);
}
