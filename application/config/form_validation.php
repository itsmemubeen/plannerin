<?php
$config=[

       'add_user_rules'=>[
                         [
                          'field' => 'name',
                          'label' => 'Name Title',
                          'rules' => 'required|alpha|max_length[20]'
                          ],
                          [
                          'field' => 'email',
                          'label' => 'Email',
                          'rules' => 'required|valid_email'
                          ],
                          [
                          'field' => 'password',
                          'label' => 'Password',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'role',
                          'label' => 'Role',
                          'rules' => 'required'
                          ]
                     ],
          'add_event_rules'=>[
                         [
                          'field' => 'name',
                          'label' => 'Name',
                          'rules' => 'required|max_length[20]'
                          ],
                          [
                          'field' => 'event_avenue',
                          'label' => 'Avenue',
                          'rules' => 'required'
                          ],
                     ],
          'add_catering_rules'=>[
                          [
                          'field' => 'catering_name',
                          'label' => 'Name',
                          'rules' => 'required|max_length[20]'
                          ],
                          [
                          'field' => 'catering_desc',
                          'label' => 'Description',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'catering_address',
                          'label' => 'Address',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'catering_cnic',
                          'label' => 'CNIC',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'catering_phone',
                          'label' => 'Phone No',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'catering_price',
                          'label' => 'Price',
                          'rules' => 'required'
                          ],

                     ],
          'add_decorators_rules'=>[
                          [
                          'field' => 'decoration_name',
                          'label' => 'Name',
                          'rules' => 'required|max_length[20]'
                          ],
                          [
                          'field' => 'decoration_desc',
                          'label' => 'Description',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'decoration_address',
                          'label' => 'Address',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'decoration_cnic',
                          'label' => 'CNIC',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'decoration_phone',
                          'label' => 'Phone No',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'decoration_price',
                          'label' => 'Price',
                          'rules' => 'required'
                          ],

                     ],
      

                     

];


?>