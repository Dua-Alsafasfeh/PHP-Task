<?php
    class Human {
        protected function getFeatures($gender) {
            if($gender == "Male") {
                echo "Men";
            }
            else if($gender == "Female") {
                echo "Women ";
            }
        }

        public function getAge($num) {
            if($num <= 18) {
                $age= "child";
            } else if($num >= 18) {
              $age= "adult ";
            }
            echo "<br>" . $age;
        }  
    }
    
    class male extends Human {
        protected $gender = "Male";
        public $age;
        
        // public function to print Male features
         public function getMaleFeatures() {
            $this->getFeatures($this->gender);
        }    }

 
    $male = new male();


    $male->getMaleFeatures();
    $male->getAge(33); 
?>