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
                       public.users.points_overall
                       public.users.image_url,
                       role.role_name
                FROM public.users
                     INNER JOIN user_roles ON user_roles.id_user = public.users.id
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
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['points'],
            $user['points_overall'],
            $user['role_name'],
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
                INSERT INTO public.users(password, firstname, lastname, email, imageurl)
                VALUES (:password, :firstname, :lastname, :email, :imageurl)
            '
            );
            $password = $user->getPassword();
            $firstname = $user->getFirstname();
            $lastname = $user->getLastname();
            $imageurl = $user->getImageUrl();

            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
            $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':imageurl', $imageurl, PDO::PARAM_STR);

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
                SET imageurl = :imageurl
                WHERE email = :email;
            '
        );
        $imageurl = $user->getImageUrl();
        $email = $user->getEmail();
        $stmt->bindParam(':imageurl', $imageurl, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return "Image changed successfully";
    }
}