<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Harry Porter',
            'description' => 'The only son of the wizard couple James Potter and Lily Potter. He is a descendant of enot pivrey '
            . ', while Voldemort, the villain in in the book, is a descendant of cadma pivrey, so they share a common ancestor.',
            'link' => 'http://www.discoverhongkong.com/eng/index.jsp',
            'birth'=> '1980 7 31',
            'gender'=> 'Male',
            'constellation'=> 'leo',
            'hair color'=> 'black',
            'image' => '1.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Hermione Granger',
            'description' => '

She is proficient in learning, diligent and studious, and is regarded as a genius. In the process of learning, 
she has become good friends with Harry Potter and Ron Weasley
',
            'link' => 'http://en.macaotourism.gov.mo/index.php',
             'birth'=> '1979 9 19',
            'gender'=> 'Female',
             'constellation'=> 'Aries',
            'hair color'=> 'brown',
            'image' => '2.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Ronald Bilius',
            'description' => 'For students at Hogwarts School of witchcraft and Wizardry. He is one of Harry Potter best friends.',
            'link' => 'https://baike.baidu.com/item/%E7%BD%97%E6%81%A9%C2%B7%E9%9F%A6%E6%96%AF%E8%8E%B1',
             'birth'=> '1980 3 1',
            'gender'=> 'male',
             'constellation'=> 'Pisces',
            'hair color'=> 'brown',
            'image' => '3.png',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Dumbledore',
            'description' => 'He is the principal of Hogwarts School of witchcraft and Wizardry. He was a teacher of transfiguration and defense against the dark arts.',
            'link' => 'https://baike.baidu.com/item/%E9%98%BF%E4%B8%8D%E6%80%9D%C2%B7%E9%82%93%E5%B8%83%E5%88%A9%E5%A4%9A',
             'birth'=> '1881 7 ',
            'gender'=> 'Male',
             'constellation'=> 'Gemini',
            'hair color'=> 'grey',
            'image' => '4.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Snape',
            'description' => 'The youngest ever president of Hogwarts School of witchcraft and Wizardry, the youngest ever Dean of Slytherin college, Professor of magic pharmacy, Professor of defense against the dark arts.',
            'link' => 'https://baike.baidu.com/item/%E8%A5%BF%E5%BC%97%E5%8B%92%E6%96%AF%C2%B7%E6%96%AF%E5%86%85%E6%99%AE',
             'birth'=> '1960 1 9',
            'gender'=> 'Male',
             'constellation'=> 'Virgo',
            'hair color'=> 'black',
            'image' => '5.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'McGonagall',
            'description' => 'Vice president, acting president and principal of Hogwarts School of witchcraft and Wizardry.',
            'link' => 'https://baike.baidu.com/item/%E7%B1%B3%E5%8B%92%E5%A8%83%C2%B7%E9%BA%A6%E6%A0%BC',
             'birth'=> '1934 12 28',
            'gender'=> 'Female',
             'constellation'=> 'scorpio',
            'hair color'=> 'black',
            'image' => '6.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
