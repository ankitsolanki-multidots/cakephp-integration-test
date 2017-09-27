<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * login method
     *
     * @return \Cake\Http\Response|void
     */
    Public function login()
    {
        $this->autoRender = false;
        $this->response->type('json');
        $entity = $this->Users->newEntity($this->request->data, ['validate' => 'Login']);
        if ($entity->errors()) {
            $this->response->statusCode(400);
            $response['message'] = __('Validation failed.');
            foreach ($entity->errors() as $field => $validationMessage) {
                $response['error'][] = $validationMessage[key($validationMessage)];
            }
        } else {
            $user = $this->Users->find()
                    ->select(['id', 'name', 'email'])
                    ->where([
                        'email' => $entity->email,
                        'password' => $entity->password
                    ])
                    ->first();
            if (empty($user)) {
                $this->response->statusCode(401);
                $response['message'] = __('Invalid email or password.');
            } else {
                $response['message'] = __('Login Successful.');
            }
        }
        $this->response->body(json_encode($response));
    }
}
