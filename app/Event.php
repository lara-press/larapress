<?php namespace App;

use LaraPress\Contracts\Posts\CustomPostType;

class Event extends Post implements CustomPostType
{

    /**
     * Return an array of arguments that define the custom post type, these
     * are the arguments that would normally be passed to register_post_type
     *
     * @see register_post_type
     * @return array
     */
    public function customPostTypeData()
    {
        return [];
    }

    public function tableColumns()
    {
        return [
            'phone' => [
                'label'    => 'Phone Number',
                'value'    => function () {
                },
                'sortable' => function () {
                }
            ],
            'Email' // $this->email
        ];
    }
}