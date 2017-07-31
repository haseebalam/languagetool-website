
<?php include("banner.php"); ?>

<div id="stage" class="start">
  <div class="inner">
    <div id="text">
        <p>LanguageTool is a <strong>proof&shy;reading service</strong> for English, <a href="de/">German</a>,
            <a href="pl/">Polish</a>, <a href="ru/">Russian</a>, and more than <a href="languages/">20 other languages</a>.</p>
    </div>
    <div id="editor">
      <div class="inner">
        <?php
          if ($isProofreadingTest) {
            $checkSubmitButtonValue = "Basic Check";
          } else {
            $checkSubmitButtonValue = "Check Text";
          }
          $checkSubmitButtonTitle = "Check text - you can also use Ctrl+Return";
          include("../include/checkform.php");
        ?>
        <div id='languageInfo' class='languageHomepage'></div>
      </div>
      <div id="text2">
        <p class="small">LanguageTool finds many errors that a simple spell checker cannot detect and several grammar problems.</p>
      </div>
    </div>
  </div>
</div>
