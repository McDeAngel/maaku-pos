<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'arianne.cruz',
                'full_name' => 'Arianne Cruz',
                'role' => 'Store Manager',
            ],
            [
                'username' => 'tristna.carabacan',
                'full_name' => 'Tristna Carabacan',
                'role' => 'Cashier',
            ],
            [
                'username' => 'francis.pertudo',
                'full_name' => 'Francis Pertudo',
                'role' => 'Inventory Clerk',
            ],
            [
                'username' => 'arjay.mendoza',
                'full_name' => 'Arjay Mendoza',
                'role' => 'Sales Associate',
            ],
            [
                'username' => 'jin.matilac',
                'full_name' => 'Jin Matilac',
                'role' => 'System Administrator',
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ];

        return view('partials/header', $data)
            . view('pages/users', $data)
            . view('partials/footer');
    }
}
