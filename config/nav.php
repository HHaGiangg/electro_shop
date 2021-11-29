<?php
    return [
      'user' => [
          [
              'name' => 'Tổng quan',
              'route' => 'get_user.home',
              'icon'  => 'fa-th-large',
          ],
          [
              'name' => 'Thông tin',
              'route' => 'get_user.profile',
              'icon'  => 'fa-user',
              'param' => true,
          ],
          [
              'name' => 'Đơn hàng',
              'route' => 'get_user.transaction.index',
              'icon'  => 'fa-shopping-cart',
          ],
      ]
    ];
