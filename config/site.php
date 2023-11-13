<?php
return [
    'admin' => 'admin',
    'panel' => 'panel',
    'permisions' => [

        'index' => [
            'title' => 'Dashboard',
        ],
        'category' => array(
            'title' => 'Category',
            'access' => array(

                'list' => 'مشاهده دسته  ها',
                'list.add' => 'افزودن دسته بندی',
                'list.edit' => 'ویرایش دسته بندی',
                'list.delete' => 'حذف دسته بندی',
            )
        ),

        'product' => array(
            'title' => ' محصولات',
            'access' => array(

                'list' => 'مشاهده  محصولات ',
                'list.add' => 'افزودن  محصولات',
                'list.edit' => 'ویرایش  محصولات',
                'list.delete' => 'حذف محصولات ',
            )
        ),
        'productimage' => array(
            'title' =>  'تصاویر بیشتر محصولات',
            'access' => array(

                'list' => 'مشاهده  تصاویر ',
                'list.add' => 'افزودن  تصویر',
                'list.delete' => 'حذف تصویر ',
            )
        ),


        'slider' => array(
            'title' => 'اسلایدر ',
            'access' => array(

                'list' => 'مشاهده  اسلایدر ',
                'list.add' => 'افزودن  اسلایدر',
                'list.edit' => 'ویرایش  اسلایدر',
                'list.delete' => 'حذف اسلایدر ',
            )
        ),

       
        'news' => array(
            'title' => 'اخبار ',
            'access' => array(

                'list' => 'مشاهده  اخبار ',
                'list.add' => 'افزودن  اخبار',
                'list.edit' => 'ویرایش  اخبار',
                'list.delete' => 'حذف اخبار ',
            )
        ),

        'user' => array(
            'title' => 'ادمین ',
            'access' => array(

                'list' => 'مشاهده  ادمین ',
                'list.add' => 'افزودن  ادمین',
                'list.edit' => 'ویرایش  ادمین',
                'list.delete' => 'حذف ادمین ',
            )
        ),

        'comment' => array(
            'title' => 'نظرات ',
            'access' => array(

                'list' => 'مشاهده  نظرات ',
                'list.update' => 'ویرایش  نظرات',
                'list.delete' => 'حذف نظرات ',
            )
        ),
        'order' => array(
            'title' => ' فاکتورها',
            'access' => array(

                'list' => 'مشاهده  فاکتور ',
                'list.update' => 'ویرایش فاکتور',
                'list.delete' => 'حذف فاکتور ',
            )
        ),

        'contact_us' => array(
            'title' => 'تماس با ما ',
            'access' => array(

                'list' => 'مشاهده  تنظیمات ',
                'list.delete' => 'حذف تنظیمات ',
            )
        ),
        'role' => array(
            'title' => ' سطح دسترسی ',
            'access' => array(

                'list' => 'مشاهده  سطح دسترسی ',
                'list.add' => 'افزودن  سطح دسترسی',
                'list.edit' => 'ویرایش  سطح دسترسی',
                'list.delete' => 'حذف سطح دسترسی ',
            )
        ),

        'setting' => array(
            'title' => 'تنظیمات ',
            'access' => array(

                'list.admin' => 'مشاهده  تنظیمات ',
                'list' => 'ویرایش تنظیمات',

            )
        ),
    ]
];
