<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController {

    function __construct(){
    }
     
    /**
     * @Route(
     *     name="create_user",
     *     path="api/users/create",
     *     methods={"POST"},
     *     defaults={
     *         "_api_resource_class"=User::class,
     *         "_api_collection_operation_name"="create_user"
     *     }
     * )
     */
    public function __invoke(User $data,UserPasswordEncoderInterface $encoder): User
    {
        $user = $data;
        $password = $user->getPassword();
        //$password  = $encoder->encodePassword($user, $password);

        $user->setPassword($password)->setRoles(["ROLE_USER"]);
        //dump($data);
        return $user;
    }
}