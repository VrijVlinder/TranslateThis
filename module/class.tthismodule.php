<?php if (!defined('APPLICATION')) exit();

class TThisModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Panel';
   }

   public function ToString() {  
     
      echo '
      <!-- Begin TranslateThis Button -->
      <div id="translate-this">
      <a style="width:98%!important;height:25px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/" title="Translate">Translate Company</a>
      </div><p></p>
      <!-- End TranslateThis Button -->';


    
    
   }
}
