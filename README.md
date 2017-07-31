# PHP
# output.php  
HTML Schreibweise für ä,ö,ü,ß - Automatischer Filter

###Nutzung:

(Außerhalb in anderen .php Scripten z.B.: index,php)

                  <?php    
                  include_once 'outprint.php';    
                  $outprint=new outprint();     
                  $outprint->printthis("äaü");  
                  ?>    

