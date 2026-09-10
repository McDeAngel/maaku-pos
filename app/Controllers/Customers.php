<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Iggy Aquino',
                'email' => 'iggy.aquino@example.com',
                'phone' => '0917 100 2001',
            ],
            [
                'full_name' => 'Julian Reyes',
                'email' => 'julian.reyes@example.com',
                'phone' => '0917 100 2002',
            ],
            [
                'full_name' => 'Virgilio Santos',
                'email' => 'virgilio.santos@example.com',
                'phone' => '0917 100 2003',
            ],
            [
                'full_name' => 'Joro Mendoza',
                'email' => 'joro.mendoza@example.com',
                'phone' => '0917 100 2004',
            ],
            [
                'full_name' => 'Harvy Cruz',
                'email' => 'harvy.cruz@example.com',
                'phone' => '0917 100 2005',
            ],
        ];

        $data = [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customers,
        ];

        return view('partials/header', $data)
            . view('pages/customers', $data)
            . view('partials/footer');
    }
}
