<?php

namespace App;

use Sober\Controller\Controller;

class Index extends Controller
{
    /**
     * Returns array of data for the content page
     *
     * @return array
     */
    public function pageData() {
        $data = [];

        if(get_post_type() === 'publication') {
            $pub_date = get_field('publication_date');
            $pub_link = get_field('publication_link');
            $pub_link_name = get_field('publication_link_name');
            $data['pub_date'] = $pub_date;
            $data['pub_link'] = $pub_link;
            $data['pub_link_name'] = $pub_link_name;
        }

        if(get_post_type() === 'project') {
            $start_date = get_field('start_date');
            $end_date = get_field('end_date');
            $start_time = get_field('start_time');
            $end_time = get_field('end_time');
            $place = get_field('place');
            $place_address = get_field('place_address');
            $data['start_date'] = $start_date;
            $data['end_date'] = $end_date;
            $data['start_time'] = $start_time;
            $data['end_time'] = $end_time;
            $data['place'] = $place;
            $data['place_address'] = $place_address;
        }
        return $data;
    }
}
