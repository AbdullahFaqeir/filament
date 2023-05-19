<?php

return [

    'columns' => [

        'tags' => [
            'more' => '... :count илүү',
        ],

        'messages' => [
            'copied' => 'Хуулав',
        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'Олонг сонгох/болих.',
        ],

        'bulk_select_record' => [
            'label' => 'Олонг сонгох/болих :key.',
        ],

        'search_query' => [
            'label' => 'Хайх',
            'placeholder' => 'Хайх',
        ],

    ],

    'pagination' => [

        'label' => 'Хуудас',

        'overview' => '{1} Нийт 1 |[2,*] Нийт :total бичлэг :first - :last',

        'fields' => [

            'records_per_page' => [

                'label' => 'хуудас',

                'options' => [
                    'all' => 'Бүгд',
                ],

            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Хуудасруу очих :page',
            ],

            'next' => [
                'label' => 'Дараах',
            ],

            'previous' => [
                'label' => 'Өмнөх',
            ],

        ],

    ],

    'buttons' => [

        'disable_reordering' => [
            'label' => 'Эрэмбэлэлтийг дуусгах',
        ],

        'enable_reordering' => [
            'label' => 'Мөрүүдийг эрэмбэлэх',
        ],

        'filter' => [
            'label' => 'Шүүлтүүр',
        ],

        'open_actions' => [
            'label' => 'Үйлдэл',
        ],

        'toggle_columns' => [
            'label' => 'Баганыг нээх/хаах',
        ],

    ],

    'empty' => [

        'heading' => 'Илэрц хоосон',

    ],

    'filters' => [

        'buttons' => [

            'remove' => [
                'label' => 'Цэвэрлэх',
            ],

            'remove_all' => [
                'label' => 'Бүгдийг цэвэрлэх',
                'tooltip' => 'Бүгдийг цэвэрлэх',
            ],

            'reset' => [
                'label' => 'Филтерийг болиулах',
            ],

        ],

        'indicator' => 'Филтерийг идэвхижүүлэх',

        'multi_select' => [
            'placeholder' => 'Бүгд',
        ],

        'select' => [
            'placeholder' => 'Бүгд',
        ],

        'trashed' => [

            'label' => 'Бичлэгийг устгах',

            'only_trashed' => 'Зөвхөн устгасан бичлэг',

            'with_trashed' => 'Устгасан бичлэг',

            'without_trashed' => 'Устгаагүй бичлэг',

        ],

    ],

    'reorder_indicator' => 'Чирж эрэмбэлэх.',

    'selection_indicator' => [

        'selected_count' => '1 бичлэг сонгогдов.|:count -г сонгов.',

        'buttons' => [

            'select_all' => [
                'label' => 'Бүгдийг сонго :count',
            ],

            'deselect_all' => [
                'label' => 'Бүгдийг эс сонго',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Эрэмбэлэх',
            ],

            'direction' => [

                'label' => 'Эрэмбэлэх',

                'options' => [
                    'asc' => 'Өсөх',
                    'desc' => 'Буурах',
                ],

            ],

        ],

    ],

];
