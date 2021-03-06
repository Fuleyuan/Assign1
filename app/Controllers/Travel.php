<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

class Travel extends BaseController {

    public function index() {
        // connect to the model
        $places = new \App\Models\Places();
        // retrieve all the records 
        $records = $places->findAll();
        // get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions 
        $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $displayHeadings = array_slice($headings, 1, 2);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        foreach ($records as $record) {
       
        $nameLink = anchor("travel/showme/$record->id", $record->name); 
                $table->addRow($nameLink, $record->description);
        }

        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 2px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:grey">',
        ];
        $fields = [
            'title' => 'Harry Poter',
            'heading' => 'Harry Poter',
            'footer' => 'Copyright Xavier (Leyuan Fu)'
        ];   
        $table->setTemplate($template);
        return $parser->setData($fields)
                        ->render('templates\top') .
                $table->generate() .
                        $parser->setData($fields)
                        ->render('templates\bottom');
     

    }

    public function showme($id) {
        // connect to the model 
        $places = new \App\Models\Places();
        // retrieve all the records 
        $record = $places->find($id);
        // get a template parser 
        $parser = \Config\Services::parser();
        $table = new \CodeIgniter\View\Table(); 
        // tell it about the substitions 
        $headings = $places->fields;

                $table->addRow( $record['id']);
                $table->addRow( $record['name']);
                $table->addRow( $record['description']);
                $table->addRow( $record['link']);
                $table->addRow( $record['birth']);
                $table->addRow( $record['gender']);
                $table->addRow( $record['constellation']);
                $table->addRow( $record['hair color']);
                $table->addRow( "<img src=\"/image/".$record['image']."\"/>");
          $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 2px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:grey">',
        ];
                $fields = [
            'title' => 'Character',
            'heading' => 'Character',
            'footer' => '(Leyuan Fu)'
        ];   
                // and have it render the template with those 
                        $table->setTemplate($template);
                        return $parser->setData($fields)
                        ->render('templates\top') .
                $table->generate() .
                        $parser->setData($fields)
                        ->render('templates\bottom');
    }

}
