
<?php
class biodata {
    
    
    public function mybiodata($name,$address,$hobbies,$is_married,$school,$skills) {

        $arrayobject = new ArrayObject($skills);

        $config = array(
            'name' => $name,
            'addrres' => $address,
            'hobbies' => $hobbies,
            'is_married' => $is_married,
            'school' => $school,
            'skills' =>$arrayobject

        );
        return json_encode($config);
    }
}

$biodataku= new biodata();

echo $biodataku->mybiodata
(
    "eri",
    "sragen", 
    ['game','vollly'],
    false,
    [
        "highSchool"   => "MAN 1 Sragen",
        "university" => "Universitas Muhammadiyah Surakarta"
    ],
    [
        "bootstrap" => 8,
        "php" => 8,
        "android" => 6, 
    ]
);
