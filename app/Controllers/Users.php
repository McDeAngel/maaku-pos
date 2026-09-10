<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'arianne.manager',
                'full_name' => 'Arianne Flores',
                'role' => 'Store Manager',
            ],
            [
                'username' => 'tristan.cashier',
                'full_name' => 'Tristan Garcia',
                'role' => 'Cashier',
            ],
            [
                'username' => 'francis.stock',
                'full_name' => 'Francis Lim',
                'role' => 'Inventory Clerk',
            ],
            [
                'username' => 'arjay.sales',
                'full_name' => 'Arjay Navarro',
                'role' => 'Sales Associate',
            ],
            [
                'username' => 'jin.admin',
                'full_name' => 'Jin Villanueva',
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
