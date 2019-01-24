<?php


class model{

    private $dnsinfo;
    private $user;
    private $pass;
    private $pdo;


    public function getDnsinfo(){
        return $this->dnsinfo;
    }
    public function setDnsinfo($hst){
        $this->dnsinfo = $hst;
    }
    public function getUser(){
        return $this->user;
    }
    public function setUser($usr){
        $this->user = $usr;
    }
    public function getPass(){
        return $this->pass;
    }
    public function setPass($pss){
        $this->pass = $pss;
    }
    public function getPdo(){
        return $this ->pdo;
    }
    public function setPdo($po){
        $this->pdo = $po;
    }

    public function connect(){
        $this->setDnsinfo("mysql:dbname=ttmblog;host=localhost");
        $this->setUser("root");
        $this->setPass("");
        $dns = $this->getDnsinfo();
        $user = $this->getUser();
        $pass = $this->getPass();

        return self::connection($dns, $user, $pass);
    }


    public function connection($dns, $user, $pass){

        try{
            $this->setPdo("");
            $pdo = $this->getPdo();
            $pdo = new PDO($dns, $user, $pass);

        }catch (PDOException $e){
            echo "Couldn't connect please check your DB info and try again. Error: ".$e->getMessage();
        }
        return $pdo;
    }
}