# PHP
# output.php  
HTML schreibweise für ä,ö,ü,ß - Automatischer Filter  
Nutzung

(Außerhalb auf anderen .php Scripten z.B.: index,php)

                  <?php    
                  include_once 'output.php';    
                  $output=new output();     
                  $output->put("äaü");  
                  ?>    

