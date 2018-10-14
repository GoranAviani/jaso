/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 10/14/2018
 * Time: 6:40 PM
 */
<!DOCTYPE html>
<html lang = "en">

   <head>
      <meta charset = "utf-8">
      <title>Aviani add</title>
   </head>
   <body>
         <?php
            echo form_open('Person_controller/add_person');
            echo form_label('Person id.');
            echo form_input(array('id'=>'person_id','name'=>'person_id'));
            echo "<br/>";

            echo form_label('Name');
            echo form_input(array('id'=>'name','name'=>'name'));
            echo "<br/>";

            echo form_submit(array('id'=>'submit','value'=>'Add'));
            echo form_close();
         ?>
   </body>
</html>
