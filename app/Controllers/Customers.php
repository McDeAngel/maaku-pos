<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Iggy Durana',
                'email' => 'iggy.durana@example.com',
                'phone' => '0917 100 2001',
            ],
            [
                'full_name' => 'Julian Gaspar',
                'email' => 'julian.gaspar@example.com',
                'phone' => '0917 100 2002',
            ],
            [
                'full_name' => 'Virgilio Marquez',
                'email' => 'virgilio.marquez@example.com',
                'phone' => '0917 100 2003',
            ],
            [
                'full_name' => 'Joro Soriano',
                'email' => 'joro.soriano@example.com',
                'phone' => '0917 100 2004',
            ],
            [
                'full_name' => 'Harvey Espenilla',
                'email' => 'harvey.espenilla@example.com',
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
