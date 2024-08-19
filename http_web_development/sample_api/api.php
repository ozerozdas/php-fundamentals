<?php

class API
{
    private $dataFile = 'sample_api/users.json';

    public function processRequest($method, $uri)
    {
        switch ($method) {
            case 'GET':
                return $this->getUsers($uri);
            case 'POST':
                return $this->createUser();
            case 'PUT':
                return $this->updateUser($uri);
            case 'DELETE':
                return $this->deleteUser($uri);
            default:
                return ["message" => "Method not supported"];
        }
    }

    private function getUsers($uri)
    {
        $users = json_decode(file_get_contents($this->dataFile), true);
        if (isset($uri[2])) {
            $userId = $uri[2];
            foreach ($users as $user) {
                if ($user['id'] == $userId) {
                    return $user;
                }
            }
            return ["message" => "User not found"];
        }
        return $users;
    }

    private function createUser()
    {
        $users = json_decode(file_get_contents($this->dataFile), true);
        $newUser = [
            "id" => count($users) + 1,
            "name" => $_POST['name'],
            "email" => $_POST['email']
        ];
        $users[] = $newUser;
        file_put_contents($this->dataFile, json_encode($users, JSON_PRETTY_PRINT));
        return $newUser;
    }

    private function updateUser($uri)
    {
        parse_str(file_get_contents("php://input"), $_PUT);
        $users = json_decode(file_get_contents($this->dataFile), true);
        if (isset($uri[2])) {
            $userId = $uri[2];
            foreach ($users as &$user) {
                if ($user['id'] == $userId) {
                    $user['name'] = $_PUT['name'];
                    $user['email'] = $_PUT['email'];
                    file_put_contents($this->dataFile, json_encode($users, JSON_PRETTY_PRINT));
                    return $user;
                }
            }
            return ["message" => "User not found"];
        }
        return ["message" => "No user ID provided"];
    }

    private function deleteUser($uri)
    {
        $users = json_decode(file_get_contents($this->dataFile), true);
        if (isset($uri[2])) {
            $userId = $uri[2];
            foreach ($users as $key => $user) {
                if ($user['id'] == $userId) {
                    unset($users[$key]);
                    file_put_contents($this->dataFile, json_encode(array_values($users), JSON_PRETTY_PRINT));
                    return ["message" => "User deleted"];
                }
            }
            return ["message" => "User not found"];
        }
        return ["message" => "No user ID provided"];
    }
}
