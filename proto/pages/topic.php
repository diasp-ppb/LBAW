<?php
include_once("../templates/header.php");
include_once("../lib/Parsedown/Parsedown.php");
include_once("../database/topics.php");
include_once("../database/account.php");
$userTopicId=getUserTopic($_GET["id"]);
?>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 main">
        <div class="row attach-container" id="<?php echo $_GET["id"]?>">
          <div class="col-md-1">
            <div class="row">
              <div class="thumbnail hidden-xs hidden-sm">
                <img class="img-responsive user-photo" src="<?php echo getUserImage($userTopicId)?>">
              </div>
            </div>
          </div>
          <div class="col-md-10 topic-main panel panel-default">
            <div class="row topic-header panel-heading">
              <div>
                <strong><?php echo getNameById($userTopicId)?></strong> <span class="text-muted">posted <?php echo calculateTimeDiff($_GET["id"])?> days ago</span>
                <span class="pull-right">
                    <button type="button" class="upvote btn"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>
                    <button type="button" class="downvote btn"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>
                    <button type="button" class="rating btn" disabled="disabled"><?php echo getRatingTopic($_GET["id"])?></button>
                </span>
              </div>

              <a class="title" href="#"><?php echo getTitleTopic($_GET["id"])?></a>

              <div class="tags">
                <span class="tag">web-service</span>
              </div>
            </div>
            <div class="row topic-body panel-body">

              <?php
              $content=getTopicContent($_GET["id"]);
              $Parsedown=new Parsedown();
              echo $Parsedown->text($content);
              ?>
            </div>
          </div>
        </div>
        <div class="row replies">
          <div class="col-md-10 col-md-offset-1 panel-body reply">
            <span class="text-muted"><strong>Fábio Caramelo</strong>  commented 5 days ago:</span> <span class="reply-text">Tenho a mesma duvida!</span>
          </div>
        </div>

          <?php
          $answers=getTopicAnswers($_GET["id"]);
          foreach ($answers as $answer){
            echo '<div class="row attach-container" id="'.$answer["id"]. '">';
            echo '<div class="col-md-1">';
            echo  '<div class="thumbnail hidden-xs hidden-sm">';
            echo    '<img class="img-responsive user-photo" src="'.getUserImage($answer["userid"]).'">';
            echo  '</div>';
            echo '</div>';
            echo '<div class="col-md-10 panel panel-default">';
            echo   '<div class="comment-header panel-heading">';
            echo    '<strong>'. getNameById($answer["userid"]).'</strong> <span class="text-muted">commented '.calculateTimeDiff($answer["id"]).' days ago</span>';
            echo    '<span class="pull-right">';
            echo     '<button type="button" class="upvote btn"><i class="glyphicon glyphicon-circle-arrow-up"></i></button>';
            echo     '<button type="button" class="downvote btn"><i class="glyphicon glyphicon-circle-arrow-down"></i></button>';
            echo     '<button type="button" class="correct btn"><i class="glyphicon glyphicon-ok"></i></button>';
            echo     '<button type="button" class="rating btn" disabled="disabled">'.$answer["rating"].'</button>';
            echo    '</span>';
            echo   '</div>';

            echo '<div class="row comment-body">';
            $answerContent=getTopicContent($answer["id"]);
            $Parsedown=new Parsedown();
            echo $Parsedown->text($answerContent);
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '<br>';
          }
          ?>

        <div id="wmd-button-bar"></div>
        <textarea id="wmd-input" class="wmd-input"></textarea>
        <div id="wmd-preview" class="wmd-preview text-left well"></div>
        <script>
            var converter = Markdown.getSanitizingConverter();
            var editor = new Markdown.Editor(converter);
            editor.run();
        </script>


        <div id="buttondiv" class="text-center">
          <input type="submit" class="btn btn-info" value="Comentar"/>
        </div>
      </div>
    </div>
  </div>

  <?php
include "../templates/footer.php"
?>