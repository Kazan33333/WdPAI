<?php

require_once 'src/repository/Repository.php';
require_once 'src/models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare(
            '
                SELECT public.users.email,
                       public.users.password,
                       public.users.name,
                       public.users.surname,
                       public.users.points,
                       public.users.points_overall,
                       public.users.image_url,
                       public.role.role_name
                FROM public.users
                     INNER JOIN user_roles ON user_roles.id_user = public.users.id_user
                     INNER JOIN public.role ON public.role.id_role = user_roles.id_role
                WHERE public.users.email = :email
            '
        );
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['password'],
            $user['email'],
            $user['name'],
            $user['surname'],
            $user['role_name'],
            $user['points'],
            $user['points_overall'],
            $user['image_url']
        );
    }

    public function saveUser(User $user): string
    {
        $email = $user->getEmail();
        if ($this->getUser($email) != null) {
            return "User already exist";
        }
        try {
            $stmt = $this->database->connect()->prepare(
                '
                INSERT INTO public.users(password, email, name, surname, points, points_overall, image_url)
                VALUES (:password, :email, :name, :surname, :points, :points_overall, :image_url)
            '
            );

            $password = $user->getPassword();
            $email = $user->getEmail();
            $name = $user->getName();
            $surname = $user->getSurname();
            $points = $user->getPoints();
            $points_overall = $user->getPointsOverall();
            $image_url = $user->getImageUrl();

            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
            $stmt->bindParam(':points', $points, PDO::PARAM_STR);
            $stmt->bindParam(':points_overall', $points_overall, PDO::PARAM_STR);
            $stmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);

            $stmt->execute();

            return "User created successfully";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function updateUserImage(User $user): string
    {
        $stmt = $this->database->connect()->prepare(
            '
                UPDATE public.users 
                SET image_url = :image_url
                WHERE email = :email;
            '
        );
        $image_url = $user->getImageUrl();
        $email = $user->getEmail();
        $stmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return "Image changed successfully";
    }
}