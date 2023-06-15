<?php
namespace App\Models;

class OldListing {
    public static function all(){
        return  [
            ['id' => 1,
            'title' => 'List one',
            'description' => 'The is list one, this is list one 
            The is list one, this is list one The is list one, this is list one
            The is list one, this is list one The is list one, this is list one
            The is list one, this is list one'
        ],
        [
            'id' => 2,
            'title' => 'List two',
            'description' => 'The is list one, this is list one 
            The is list one, this is list one The is list one, this is list one
            The is list one, this is list one The is list one, this is list one
            The is list one, this is list one'
        ]
        ];
    }

    public static function single($id) {
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }

    public static function find($id) {
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}