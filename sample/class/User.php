<?php
class User
{

    // ↓フィールド============================
    private $id;
    private $name;
    private $age;
    // ↑フィールド============================

    // コンストラクタ
    function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    // idを取得
    function getId()
    {
        return $this->id;
    }

    // 名前を変更
    function setName($name)
    {
        $this->name = $name;
    }

    // 名前を取得
    function getName()
    {
        return $this->name;
    }

    // 年齢を変更
    function setAge($age)
    {
        $this->age = $age;
    }

    // 年齢を取得
    function getAge()
    {
        return $this->age;
    }
}
