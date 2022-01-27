<?php

class User{
    private string $login;
    private string $password;
    private string $email;
    private string $name;
    private string $surname;
    private string $points;
    private string $points_overall;
    private string $role;
    private string $image_url;

    /**
     * @param string $login
     * @param string $password
     * @param string $email
     * @param string $name
     * @param string $surname
     * @param string $points
     * @param string $points_overall
     * @param string $role
     * @param string $image_url
     */
    public function __construct(string $login,
                                string $password,
                                string $email,
                                string $name,
                                string $surname,
                                string $points,
                                string $points_overall,
                                string $role,
                                string $image_url="public/uploads/default.jpg")
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->points = $points;
        $this->points_overall = $points_overall;
        $this->role = $role;
        $this->image_url = $image_url;
    }


    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
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
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getPoints(): string
    {
        return $this->points;
    }

    /**
     * @param string $points
     */
    public function setPoints(string $points): void
    {
        $this->points = $points;
    }

    /**
     * @return string
     */
    public function getPointsOverall(): string
    {
        return $this->points_overall;
    }

    /**
     * @param string $points_overall
     */
    public function setPointsOverall(string $points_overall): void
    {
        $this->points_overall = $points_overall;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->image_url;
    }

    /**
     * @param string $image_url
     */
    public function setImageUrl(string $image_url): void
    {
        $this->image_url = $image_url;
    }
}