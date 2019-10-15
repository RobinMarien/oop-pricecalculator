<?php
declare(strict_types=1);

class Customerloader
{
    public function render(int $customerId): Customer
    {
        $json = (array)json_decode(file_get_contents('../customers.json'), true);
        foreach ($json as $customerJson) {
            if ($customerJson['id'] === $customerId) {
                return new Customer($customerJson['id'], $customerJson['name'], new Group);
            }
        }

    }

    public function loadCustomers(): array{

    }
}