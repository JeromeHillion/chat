<?php


class User
{
private string $email;
private string $nickname;
private string $password;

    /**
     * User constructor.
     * @param string $email
     * @param string $nickname
     * @param string $password
     */
    public function __construct(string $email, string $nickname, string $password)
    {
        $this->email = $email;
        $this->nickname = $nickname;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}