<?php
    $people=['steve', 'Ace', 'Yhomi', 'Taiwo', 'Tobi', 'Jummy','Bose', 'Fareedah', 'Faith', "Cara", "Karo", "Wumi", 'David','banji','Adeleke','Queen', 'Esther', 'Quadri', 'Waliu', 'Walia', 'Emmanuel','Temi','Kayode', 'Soji', 'Waheed', 'Wasiu', 'Biodun', 'chris', "Joseph",'john', 'Joe', 'Basira', 'Abdul', "Adeyemi", 'Mike', 'Fawaz', 'Fatimah', 'Zainab','Zee', 'Nike', 'Tyga','Mancy', 'Bumi','Timi', 'Ayo', 'Funke', 'Dami', 'hassan', 'Deola','Lateef', 'Kareem'];
    // get query string
    $q=$_REQUEST['q'];
    $suggestion="";
    // Get suggestions
    if($q !== ""){
        $q=strtolower($q);
        $len=strlen($q);
        foreach($people as $person){
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ""){
                    $suggestion=$person;
                }else{
                    $suggestion .= ", $person";
                }
            }
        }
    }
    echo $suggestion ===""? "No Suggestion" : $suggestion;
?>