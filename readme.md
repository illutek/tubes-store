#Webshop
##SASS
Alle opgedeeld in SMACSS manier


##Better login


##Webform More info
%get[product] = Default value voor de Product SKU

##Product node
Alle variables ingesteld op template.php

###Set name
´´´
[#items] => Array ( [0] => Array ( [tid] => 10 [taxonomy_term] => stdClass Object ( [tid] => 10 [vid] => 3 [name] => set001
´´´
Bovenstaande met volgend print opdracht 
´´´
<?php  print_r ($content['field_set']); ?>
´´´
Volgende om enkel de waarde te printen van dat taxonomie veld
´´´
<?php
$contentSet = $content['field_set']['#items'][0]['taxonomy_term']->name;
print $contentSet; 
?>
´´´

###Aanpassing login form
####Module email_registration aanpassing
Wil enkel het e-mail address zien.  
In de file email_registration.module op regel 147 t('E-mail or username') vervangen door t('E-mail')  
en op regel 150 t('Enter your e-mail address or username.') vervangen door t('Enter your e-mail address.')


###Not done
Maar toch gedaan in de module  
ubercart/uc_cart/uc_cart.module t('Checkout') vervangen door t('Order') (2x)  
ubercart/uc_cart/uc_cart.page.inc op regel 90 'Review order' vervangen door 'Checkout order before submit'


####Nog op te lossen
Krijg het base_path via template.php niet in orde???
