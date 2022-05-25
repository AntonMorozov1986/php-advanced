<?php
namespace Models;

class User
{
    private int $id;
    private string $name;
    private string $email;

    public function __construct(array $user)
    {
        $this->id = $user['id'];
        $this->name = $user['name'];
        $this->email = $user['email'];
    }

    /**
     * @return int|mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function getInfo(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
