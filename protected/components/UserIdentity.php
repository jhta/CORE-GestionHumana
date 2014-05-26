<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	
        private $_id;
        /**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user= Usuario::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id= $user->id;
                        $this->setState('nombre',$user->nombre);
			$this->_descripcion= $user->descripcion;
                        $this->setState('username',$user->username);
                        $this->setState('descripcion', $user->descripcion);
                        $this->setState('nombre_foto', $user->nombre_foto);
                        $this->setState('formato_foto', $user->formato_foto);
                        $this->setState('titulo', $user->titulo);
                        $this->username= $user->username;
			$this->errorCode= self::ERROR_NONE;
		}
		return $this->errorCode == self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}