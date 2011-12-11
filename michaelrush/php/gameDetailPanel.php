<?php
include "api.php";

function gameDetailPanelInit($id) {
  $gameObj = getGameObj($id);
  
  /*
  function generateList($arr) {
    if(is_assoc($arr)) {
      foreach ($arr as $key=>$value) {
        //return ul { recursion }
      }
    } else if(is_array($arr)) {
      foreach ($arr as $value) {
        //return ul { list li's }
      }
    } else {
      //return li
    }
  }*/
  
  
  foreach ($gameObj as $key=>$value) {
    if(is_assoc($value)) {
    }
    else if(is_array($value)) {
      //recurse li
      echo $key . ":" . "[" . implode($value, ",") . "]";;
    } else {
      echo $key . ":" . $value . "\n\r";
    }
    ?><br /><?php
  }
  

?>
    <ul>
      <li>
       <section>Title:</section>
       <section>Sketch Alley</section>
      </li>
      <li>
       <section>Releases:</section>
       <section>
        <ul>
          <li>
            <section>
              Newgrounds: 
            </section>
          </li>
          <li>
            <section>
              Kongregate: 
            </section>
          </li>
          <li>
            <section>
              Facebook:
            </section> 
          </li>
         </ul>
       </section>
      </li>
      <li>
       <section>
         Availability:
       </section>
       <section>
         Unavailable
       </section>
      </li>
      <li>
        <section>
         Credits:
        </section>
      <section>
        <ul>
          <li>
            <section>
              Programmers: 
            </section>
            <section>
              Michael Rush, Robert Schwenz, Daniel Shafer, Gordon Liu
            </section>
          </li>
          <li>
            <section>
              Art: 
            </section>
            <section>
              Center for Game Science at UW
            </section>
          </li>
        </ul>
      </section>
      </li>
      <li>
       <section>
         Languages:
       </section>
       <section> 
         Actionscript 3, HMTL, PHP, SQL
       </section>
      </li>
      <li>
       <section>
         Frameworks:
       </section>
       <section>
        Flex 4
       </section>
      </li>
      <li>
       <section>
         Tools: 
       </section>
       <section>
        Adobe Flash Builder, Assembla
       </section>
      </li>
    </ul>

<?php
} 
?>

