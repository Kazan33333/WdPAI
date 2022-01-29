<?php

class User
{
    private string $password;
    private string $email;
    private string $name;
    private string $surname;
    private string $role;
    private int $points;
    private int $points_overall;
    private string $image_url;

    /**
     * @param string $password
     * @param string $email
     * @param string $name
     * @param string $surname
     * @param string $role
     * @param int $points
     * @param int $points_overall
     * @param string $image_url
     */
    public function __construct(string $password,
                                string $email,
                                string $name,
                                string $surname,
                                string $role="USER",
                                int $points=0,
                                int $points_overall=0,
                                string $image_url="public/uploads/default.jpg")
    {
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->points = $points;
        $this->points_overall = $points_overall;
        $this->image_url = $image_url;
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
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getPointsOverall(): int
    {
        return $this->points_overall;
    }

    /**
     * @param int $points_overall
     */
    public function setPointsOverall(int $points_overall): void
    {
        $this->points_overall = $points_overall;
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