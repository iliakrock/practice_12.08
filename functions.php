<?php

function showTableForm()
{
    $html = '
    <form action="" method="POST">
        <input type="text" name="user" placeholder="Your Name">
        <input type="text" name="phone" placeholder="+35796547889">
        <input type="submit" name="Submit">
    </form>    
    ';
    echo $html;
}

function showContactBook()
{
    $html ='
    <table border="2">
    <thead>
        <th>Name</th>
        <th>Phone</th>
        <th>Age</th>
    </thead>
    <tbody>';

    foreach (getContacts() as $contact) {
        $html .="<tr><td>{$contact['name']}</td><td>{$contact['phone']}</td><td>{$contact['age']}</td></tr>";
    }

    $html .= '</tbody></table>';

    echo $html;
}

function getContacts(): array {
    return [
        [
            'name' => 'Ilia',
            'phone' => '+35796547889',
            'age' => '31',
        ],
        [
            'name' => 'Maxim',
            'phone' => '+35796547749',
            'age' => '45',
        ],
        [
            'name' => 'Anea',
            'phone' => '+35796547749',
            'age' => '23',
        ],

    ];
}