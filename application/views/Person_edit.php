/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 10/14/2018
 * Time: 6:42 PM
 */
<!DOCTYPE html>
<html lang = "en">

   <head>
      <meta charset = "utf-8">
      <title>Aviani Edit</title>
   </head>

   <body>
      <form method = "" action = "">

         <?php
            echo form_open('Person_controller/update_person');
            echo form_hidden('old_person_id',$old_person_id);
            echo form_label('Person id.');
            echo form_input(array('id'=>'person_id',
               'name'=>'person_id','value'=>$records[0]->person_id));
            echo "
            ";

            echo form_label('Name');
            echo form_input(array('id'=>'name','name'=>'name',
               'value'=>$records[0]->name));
            echo "
            ";

            echo form_submit(array('id'=>'submit','value'=>'Edit'));
            echo form_close();
         ?>

      </form>
   </body>

</html>
