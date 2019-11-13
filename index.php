<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                ///include 'AbstractFactory.php';

        /**
        
        
         *         
         */
        $course1=Course::getaCourse();
        $course1->setaDegree(new BscDegree());
        $course1.view("SW Engineering 2", "Introduces design patterns ...","Abdelkareem Alashqar");
        
        
        $course2=Course::getaCourse();
        $course2->setaDegree(new MscDegree());
        $course2.view("SW Engineering 2", "Introduces design patterns ...","Ahmad Maher");
        
        
       $course3=Course::getaCourse();
       $course3->setaDegree(new PhdDegree());
       $course3.view("Software Security", "Introduces main Concepts of ...","Huda Naser");

        ?>
    </body>
</html>
