<?php

/**
 * 
 * @title : Cookie.php
 * 
 * @brief : Cookie class 
 * 
 */

final class Cookie {

    protected $name;
    protected $value;
    protected $expires;
    protected $path;


    function __construct() {} // constructor

    public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getValue(){
		return $this->value;
	}

	public function setValue($value){
		$this->value = $value;
	}

	public function getExpires(){
		return $this->expires;
	}

    /**
     *  @name : setExpires
     *  @param : $time : time in SECONDS
     *  @brief :  set expiresTime
     *  @Informations : expires is UNIX Timestamp
     */
	public function setExpires($time){
		$this->expires = time() + $time;
	}

	public function getPath(){
		return $this->path;
	}

	public function setPath($path){
		$this->path = $path;
	}
    
    public function create() {
        setcookie($this->getName(), 
                  $this->getValue(), 
                  time() + $this->getExpire(), 
                  null, 
                  null, 
                  false, 
                  true);
    } // public function create()


} // class Cookie


?>