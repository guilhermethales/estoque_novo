<?php


namespace App\Http\Controller;

class AuthControllerTest extends \TestCase {
    public function testeLogin(){
        $data = [
          'username' => 'guilherme',
            'password' => bcrypt('SACM1748'),
        ];

        $this->post('auth/login', $data);
        $this->seeStatusCode(200);
        $this->$this->seeJson([
            'username' => 'guilherme',
        ]);
    }
}